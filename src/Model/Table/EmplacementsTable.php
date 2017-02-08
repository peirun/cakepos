<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Emplacements Model
 *
 * @property \Cake\ORM\Association\HasMany $Aaps
 * @property \Cake\ORM\Association\HasMany $Deltas
 * @property \Cake\ORM\Association\HasMany $Mailcapacitaires
 * @property \Cake\ORM\Association\HasMany $Qfabrics
 * @property \Cake\ORM\Association\HasMany $Skswitches
 * @property \Cake\ORM\Association\HasMany $Vlans
 *
 * @method \App\Model\Entity\Emplacement get($primaryKey, $options = [])
 * @method \App\Model\Entity\Emplacement newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Emplacement[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Emplacement|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Emplacement patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Emplacement[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Emplacement findOrCreate($search, callable $callback = null, $options = [])
 */
class EmplacementsTable extends Table
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

        $this->table('emplacements');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('Aaps', [
            'foreignKey' => 'emplacement_id'
        ]);
        $this->hasMany('Deltas', [
            'foreignKey' => 'emplacement_id'
        ]);
        $this->hasMany('Mailcapacitaires', [
            'foreignKey' => 'emplacement_id'
        ]);
        $this->hasMany('Qfabrics', [
            'foreignKey' => 'emplacement_id'
        ]);
        $this->hasMany('Skswitches', [
            'foreignKey' => 'emplacement_id'
        ]);
        $this->hasMany('Vlans', [
            'foreignKey' => 'emplacement_id'
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
            ->requirePresence('DC_Emplacement', 'create')
            ->notEmpty('DC_Emplacement');

        return $validator;
    }
}
