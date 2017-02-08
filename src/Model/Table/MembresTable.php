<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Membres Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Typemembres
 * @property \Cake\ORM\Association\BelongsTo $Skswitches
 * @property \Cake\ORM\Association\BelongsToMany $Extensions
 *
 * @method \App\Model\Entity\Membre get($primaryKey, $options = [])
 * @method \App\Model\Entity\Membre newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Membre[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Membre|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Membre patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Membre[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Membre findOrCreate($search, callable $callback = null, $options = [])
 */
class MembresTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('membres');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Typemembres', [
            'foreignKey' => 'typemembre_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Skswitches', [
            'foreignKey' => 'skswitch_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsToMany('Extensions', [
            'foreignKey' => 'membre_id',
            'targetForeignKey' => 'extension_id',
            'joinTable' => 'extensions_membres'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->integer('Slot_Membre')
            ->requirePresence('Slot_Membre', 'create')
            ->notEmpty('Slot_Membre');

        $validator
            ->requirePresence('Nom_Membre', 'create')
            ->notEmpty('Nom_Membre');

        $validator
            ->requirePresence('Salle_Membre', 'create')
            ->notEmpty('Salle_Membre');

        $validator
            ->requirePresence('Baie_Membre', 'create')
            ->notEmpty('Baie_Membre');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['typemembre_id'], 'Typemembres'));
        $rules->add($rules->existsIn(['skswitch_id'], 'Skswitches'));

        return $rules;
    }
}
