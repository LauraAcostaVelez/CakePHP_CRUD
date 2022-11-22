<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Movimientos Model
 *
 * @property \App\Model\Table\ArticulosTable&\Cake\ORM\Association\BelongsTo $Articulos
 *
 * @method \App\Model\Entity\Movimiento newEmptyEntity()
 * @method \App\Model\Entity\Movimiento newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Movimiento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Movimiento get($primaryKey, $options = [])
 * @method \App\Model\Entity\Movimiento findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Movimiento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Movimiento[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Movimiento|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Movimiento saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Movimiento[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Movimiento[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Movimiento[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Movimiento[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MovimientosTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('movimientos');
        $this->setDisplayField('nombre');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Articulos', [
            'foreignKey' => 'articulo_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->date('fecha')
            ->requirePresence('fecha', 'create')
            ->notEmptyDate('fecha');

        $validator
            ->integer('articulo_id')
            ->notEmptyString('articulo_id');

        $validator
            ->integer('cantidad_vendidos')
            ->requirePresence('cantidad_vendidos', 'create')
            ->notEmptyString('cantidad_vendidos');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('articulo_id', 'Articulos'), ['errorField' => 'articulo_id']);

        return $rules;
    }
}
