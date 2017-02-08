<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Vlans Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Emplacements
 * @property \Cake\ORM\Association\HasMany $Aapsifs
 * @property \Cake\ORM\Association\HasMany $Portvlans
 * @property \Cake\ORM\Association\HasMany $Snatpools
 * @property \Cake\ORM\Association\HasMany $Virtualvlans
 * @property \Cake\ORM\Association\BelongsToMany $Aapsinterfaces
 * @property \Cake\ORM\Association\BelongsToMany $Skswitches
 *
 * @method \App\Model\Entity\Vlan get($primaryKey, $options = [])
 * @method \App\Model\Entity\Vlan newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Vlan[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Vlan|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vlan patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Vlan[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Vlan findOrCreate($search, callable $callback = null, $options = [])
 */
class VlansTable extends Table
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

        $this->table('vlans');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Emplacements', [
            'foreignKey' => 'emplacement_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Aapsifs', [
            'foreignKey' => 'vlan_id'
        ]);
        $this->hasMany('Portvlans', [
            'foreignKey' => 'vlan_id'
        ]);
        $this->hasMany('Snatpools', [
            'foreignKey' => 'vlan_id'
        ]);
        $this->hasMany('Virtualvlans', [
            'foreignKey' => 'vlan_id'
        ]);
        $this->belongsToMany('Aapsinterfaces', [
            'foreignKey' => 'vlan_id',
            'targetForeignKey' => 'aapsinterface_id',
            'joinTable' => 'aapsinterfaces_vlans'
        ]);
        $this->belongsToMany('Skswitches', [
            'foreignKey' => 'vlan_id',
            'targetForeignKey' => 'skswitch_id',
            'joinTable' => 'skswitches_vlans'
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
            ->integer('id_Vlan')
            ->requirePresence('id_Vlan', 'create')
            ->notEmpty('id_Vlan');

        $validator
            ->requirePresence('Nom_Vlan', 'create')
            ->notEmpty('Nom_Vlan');

        $validator
            ->dateTime('Created_Vlan')
            ->allowEmpty('Created_Vlan');

        $validator
            ->allowEmpty('NomIRL_Vlan');

        $validator
            ->allowEmpty('Presence_Vlan');

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
        $rules->add($rules->existsIn(['emplacement_id'], 'Emplacements'));

        return $rules;
    }
}
