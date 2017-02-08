<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Skswitches Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Emplacements
 * @property \Cake\ORM\Association\BelongsTo $Skswitches
 * @property \Cake\ORM\Association\BelongsTo $Irlskswitches
 * @property \Cake\ORM\Association\BelongsTo $Qfabrics
 * @property \Cake\ORM\Association\HasMany $Deltas
 * @property \Cake\ORM\Association\HasMany $Membres
 * @property \Cake\ORM\Association\HasMany $Portchannels
 * @property \Cake\ORM\Association\HasMany $Ports
 * @property \Cake\ORM\Association\HasMany $Sanaliases
 * @property \Cake\ORM\Association\HasMany $Sanzas
 * @property \Cake\ORM\Association\HasMany $Sanzones
 * @property \Cake\ORM\Association\HasMany $Skswitches
 * @property \Cake\ORM\Association\BelongsToMany $Vlans
 *
 * @method \App\Model\Entity\Skswitch get($primaryKey, $options = [])
 * @method \App\Model\Entity\Skswitch newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Skswitch[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Skswitch|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Skswitch patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Skswitch[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Skswitch findOrCreate($search, callable $callback = null, $options = [])
 */
class SkswitchesTable extends Table
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

        $this->table('skswitches');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Emplacements', [
            'foreignKey' => 'emplacement_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Skswitches', [
            'foreignKey' => 'skswitch_id'
        ]);
        $this->belongsTo('Irlskswitches', [
            'foreignKey' => 'irlskswitch_id'
        ]);
        $this->belongsTo('Qfabrics', [
            'foreignKey' => 'qfabric_id'
        ]);
        $this->hasMany('Deltas', [
            'foreignKey' => 'skswitch_id'
        ]);
        $this->hasMany('Membres', [
            'foreignKey' => 'skswitch_id'
        ]);
        $this->hasMany('Portchannels', [
            'foreignKey' => 'skswitch_id'
        ]);
        $this->hasMany('Ports', [
            'foreignKey' => 'skswitch_id'
        ]);
        $this->hasMany('Sanaliases', [
            'foreignKey' => 'skswitch_id'
        ]);
        $this->hasMany('Sanzas', [
            'foreignKey' => 'skswitch_id'
        ]);
        $this->hasMany('Sanzones', [
            'foreignKey' => 'skswitch_id'
        ]);
        $this->hasMany('Skswitches', [
            'foreignKey' => 'skswitch_id'
        ]);
        $this->belongsToMany('Vlans', [
            'foreignKey' => 'skswitch_id',
            'targetForeignKey' => 'vlan_id',
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
            ->requirePresence('Nom_Skswitch', 'create')
            ->notEmpty('Nom_Skswitch');

        $validator
            ->requirePresence('IP_Skswitch', 'create')
            ->notEmpty('IP_Skswitch');

        $validator
            ->date('LastIRLImport_Skswitch')
            ->allowEmpty('LastIRLImport_Skswitch');

        $validator
            ->allowEmpty('Salle_Skswitch');

        $validator
            ->allowEmpty('Baie_Skswitch');

        $validator
            ->requirePresence('Constructeur_Skswitch', 'create')
            ->notEmpty('Constructeur_Skswitch');

        $validator
            ->integer('Compatibilite_Skswitch')
            ->requirePresence('Compatibilite_Skswitch', 'create')
            ->notEmpty('Compatibilite_Skswitch');

        $validator
            ->integer('Mgmtvlan_Skswitch')
            ->allowEmpty('Mgmtvlan_Skswitch');

        $validator
            ->allowEmpty('Netmask_Skswitch');

        $validator
            ->allowEmpty('Gateway_Skswitch');

        $validator
            ->allowEmpty('Snmpip_Skswitch');

        $validator
            ->allowEmpty('Syslogip_Skswitch');

        $validator
            ->allowEmpty('Radiusip_Skswitch');

        $validator
            ->allowEmpty('Snmpread_Skswitch');

        $validator
            ->allowEmpty('Snmpwrite_Skswitch');

        $validator
            ->allowEmpty('Ntpip_Skswitch');

        $validator
            ->boolean('Capacityalert_Skswitch')
            ->allowEmpty('Capacityalert_Skswitch');

        $validator
            ->allowEmpty('Info_Skswitch');

        $validator
            ->allowEmpty('Otherinfo_Skswitch');

        $validator
            ->allowEmpty('RsngGroup_Skswitch');

        $validator
            ->allowEmpty('Alias_Skswitch');

        $validator
            ->requirePresence('Exploitant_Skswitch', 'create')
            ->notEmpty('Exploitant_Skswitch');

        $validator
            ->allowEmpty('BladeName_Skswitch');

        $validator
            ->allowEmpty('BladeNameIRL_Skswitch');

        $validator
            ->dateTime('LastCfgChange_Skswitch')
            ->allowEmpty('LastCfgChange_Skswitch');

        $validator
            ->integer('LastSvgStatus_Skswitch')
            ->allowEmpty('LastSvgStatus_Skswitch');

        $validator
            ->boolean('AutoReservation_Skswitch')
            ->requirePresence('AutoReservation_Skswitch', 'create')
            ->notEmpty('AutoReservation_Skswitch');

        $validator
            ->requirePresence('POD_Skswitch', 'create')
            ->notEmpty('POD_Skswitch');

        $validator
            ->requirePresence('Projet_Skswitch', 'create')
            ->notEmpty('Projet_Skswitch');

        $validator
            ->requirePresence('Statut26e_Skswitch', 'create')
            ->notEmpty('Statut26e_Skswitch');

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
        $rules->add($rules->existsIn(['skswitch_id'], 'Skswitches'));
        $rules->add($rules->existsIn(['irlskswitch_id'], 'Irlskswitches'));
        $rules->add($rules->existsIn(['qfabric_id'], 'Qfabrics'));

        return $rules;
    }
}
