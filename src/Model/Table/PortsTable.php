<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ports Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Skswitches
 * @property \Cake\ORM\Association\HasMany $Portvlans
 * @property \Cake\ORM\Association\BelongsToMany $Portchannels
 *
 * @method \App\Model\Entity\Port get($primaryKey, $options = [])
 * @method \App\Model\Entity\Port newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Port[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Port|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Port patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Port[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Port findOrCreate($search, callable $callback = null, $options = [])
 */
class PortsTable extends Table
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

        $this->table('ports');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Skswitches', [
            'foreignKey' => 'skswitch_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Portvlans', [
            'foreignKey' => 'port_id'
        ]);
        $this->belongsToMany('Portchannels', [
            'foreignKey' => 'port_id',
            'targetForeignKey' => 'portchannel_id',
            'joinTable' => 'portchannels_ports'
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
            ->integer('Num_Port')
            ->requirePresence('Num_Port', 'create')
            ->notEmpty('Num_Port');

        $validator
            ->requirePresence('Speed_Port', 'create')
            ->notEmpty('Speed_Port');

        $validator
            ->boolean('Tag_Port')
            ->requirePresence('Tag_Port', 'create')
            ->notEmpty('Tag_Port');

        $validator
            ->integer('Pvid_Port')
            ->requirePresence('Pvid_Port', 'create')
            ->notEmpty('Pvid_Port');

        $validator
            ->requirePresence('Status_Port', 'create')
            ->notEmpty('Status_Port');

        $validator
            ->allowEmpty('Connectedto_Port');

        $validator
            ->allowEmpty('GDOassos_Port');

        $validator
            ->allowEmpty('IPassos_Port');

        $validator
            ->allowEmpty('Portassos_Port');

        $validator
            ->requirePresence('State_Port', 'create')
            ->notEmpty('State_Port');

        $validator
            ->integer('NumSlot_Port')
            ->requirePresence('NumSlot_Port', 'create')
            ->notEmpty('NumSlot_Port');

        $validator
            ->requirePresence('Type_Port', 'create')
            ->notEmpty('Type_Port');

        $validator
            ->allowEmpty('Infogbic_Port');

        $validator
            ->requirePresence('Maxspeed_Port', 'create')
            ->notEmpty('Maxspeed_Port');

        $validator
            ->allowEmpty('Prefixe_Port');

        $validator
            ->integer('Extension_Port')
            ->allowEmpty('Extension_Port');

        $validator
            ->allowEmpty('Commentaire_Port');

        $validator
            ->allowEmpty('Salleassos_Port');

        $validator
            ->allowEmpty('Baieassos_Port');

        $validator
            ->allowEmpty('Affectation_Port');

        $validator
            ->allowEmpty('UserLastModif_Port');

        $validator
            ->dateTime('DateTimeLastModif_Port')
            ->allowEmpty('DateTimeLastModif_Port');

        $validator
            ->allowEmpty('DescriptionIRL_Port');

        $validator
            ->allowEmpty('LLDP_Port');

        $validator
            ->integer('Fabricid_Port')
            ->requirePresence('Fabricid_Port', 'create')
            ->notEmpty('Fabricid_Port');

        $validator
            ->requirePresence('Fabricname_Port', 'create')
            ->notEmpty('Fabricname_Port');

        $validator
            ->requirePresence('Index_Port', 'create')
            ->notEmpty('Index_Port');

        $validator
            ->requirePresence('OpticalState_Port', 'create')
            ->notEmpty('OpticalState_Port');

        $validator
            ->requirePresence('Mode_Port', 'create')
            ->notEmpty('Mode_Port');

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
        $rules->add($rules->existsIn(['skswitch_id'], 'Skswitches'));

        return $rules;
    }
}
