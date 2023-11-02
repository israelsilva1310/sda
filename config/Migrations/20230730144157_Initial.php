<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Initial extends AbstractMigration
{
    public $autoId = false;

    /**
     * Up Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-up-method
     * @return void
     */
    public function up(): void
    {
        $this->table('address')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('user_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('street', 'string', [
                'default' => '',
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('number', 'string', [
                'default' => '',
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('complement', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('created_at', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('updated_at', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'user_id',
                ],
                [
                    'name' => 'user',
                ]
            )
            ->create();

        $this->table('addresses')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('user_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('cep', 'integer', [
                'default' => '8',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('street', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('number', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('complement', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('district', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addIndex(
                [
                    'user_id',
                ],
                [
                    'name' => 'user_id',
                ]
            )
            ->create();

        $this->table('alunos')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('cpf', 'char', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('nome', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('email', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('fone', 'char', [
                'default' => null,
                'limit' => 14,
                'null' => false,
            ])
            ->addColumn('data_nascimento', 'date', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('app_categories')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('sub_of', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('name', 'string', [
                'default' => '',
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('type', 'string', [
                'default' => '',
                'limit' => 15,
                'null' => false,
            ])
            ->addColumn('order_by', 'integer', [
                'default' => '0',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_at', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('updated_at', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'sub_of',
                ],
                [
                    'name' => 'sub_of',
                ]
            )
            ->create();

        $this->table('app_credit_cards')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('user_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('brand', 'string', [
                'default' => '',
                'limit' => 20,
                'null' => false,
            ])
            ->addColumn('last_digits', 'string', [
                'default' => '',
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('cvv', 'string', [
                'default' => '',
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('hash', 'string', [
                'default' => '',
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('status', 'string', [
                'default' => 'active',
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('created_at', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('updated_at', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'user_id',
                ],
                [
                    'name' => 'credit_cards_user',
                ]
            )
            ->create();

        $this->table('app_invoices')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('user_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('wallet_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('category_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('invoice_of', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('description', 'string', [
                'default' => '',
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('type', 'string', [
                'default' => '',
                'limit' => 15,
                'null' => false,
            ])
            ->addColumn('value', 'decimal', [
                'default' => null,
                'null' => false,
                'precision' => 10,
                'scale' => 2,
            ])
            ->addColumn('currency', 'string', [
                'default' => 'BRL',
                'limit' => 5,
                'null' => false,
            ])
            ->addColumn('due_at', 'date', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('repeat_when', 'string', [
                'default' => '',
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('period', 'string', [
                'default' => 'month',
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('enrollments', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('enrollment_of', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('status', 'string', [
                'default' => 'unpaid',
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('created_at', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('updated_at', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'category_id',
                ],
                [
                    'name' => 'app_category',
                ]
            )
            ->addIndex(
                [
                    'invoice_of',
                ],
                [
                    'name' => 'app_invoice',
                ]
            )
            ->addIndex(
                [
                    'user_id',
                ],
                [
                    'name' => 'app_user',
                ]
            )
            ->addIndex(
                [
                    'wallet_id',
                ],
                [
                    'name' => 'app_wallet',
                ]
            )
            ->create();

        $this->table('app_orders')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('user_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('card_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('subscription_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('transaction', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('amount', 'decimal', [
                'default' => null,
                'null' => false,
                'precision' => 10,
                'scale' => 2,
            ])
            ->addColumn('status', 'string', [
                'default' => '',
                'limit' => 20,
                'null' => false,
            ])
            ->addColumn('created_at', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('updated_at', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'card_id',
                ],
                [
                    'name' => 'orders_credit_card',
                ]
            )
            ->addIndex(
                [
                    'subscription_id',
                ],
                [
                    'name' => 'orders_subscription',
                ]
            )
            ->addIndex(
                [
                    'user_id',
                ],
                [
                    'name' => 'orders_user',
                ]
            )
            ->create();

        $this->table('app_plans')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('name', 'string', [
                'default' => '',
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('period', 'string', [
                'default' => '',
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('period_str', 'string', [
                'default' => '',
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('price', 'decimal', [
                'default' => null,
                'null' => false,
                'precision' => 10,
                'scale' => 2,
            ])
            ->addColumn('status', 'string', [
                'default' => '',
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('created_at', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('updated_at', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $this->table('app_subscriptions')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('user_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('plan_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('card_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('status', 'string', [
                'comment' => 'active,inactive,past_due,canceled',
                'default' => 'active',
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('pay_status', 'string', [
                'comment' => 'active,inactive,past_due,canceled',
                'default' => 'active',
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('started', 'date', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('due_day', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('next_due', 'date', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('last_charge', 'date', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_at', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('updated_at', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'card_id',
                ],
                [
                    'name' => 'subscription_card',
                ]
            )
            ->addIndex(
                [
                    'plan_id',
                ],
                [
                    'name' => 'subscription_plan',
                ]
            )
            ->addIndex(
                [
                    'user_id',
                ],
                [
                    'name' => 'subscription_user',
                ]
            )
            ->create();

        $this->table('app_wallets')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('user_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('wallet', 'string', [
                'default' => '',
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('free', 'integer', [
                'default' => '0',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_at', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('updated_at', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'user_id',
                ],
                [
                    'name' => 'wallet_user',
                ]
            )
            ->create();

        $this->table('categories')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('title', 'string', [
                'default' => '',
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('uri', 'string', [
                'default' => '',
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('description', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('cover', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('type', 'string', [
                'comment' => 'post, page, etc',
                'default' => 'post',
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('created_at', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('updated_at', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $this->table('courses')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('teacher_coordinator', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('acronym', 'string', [
                'comment' => 'Sigla',
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('requisito', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('carga_horaria', 'smallinteger', [
                'default' => null,
                'limit' => null,
                'null' => true,
                'signed' => false,
            ])
            ->create();

        $this->table('disciplines')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('teacher_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('course_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('disponibilities')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('active', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('teacher_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('shift_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('hour_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('updated_at', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created_at', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'hour_id',
                ],
                [
                    'name' => 'fk_hour_id',
                ]
            )
            ->addIndex(
                [
                    'teacher_id',
                ],
                [
                    'name' => 'fk_teache',
                ]
            )
            ->create();

        $this->table('faq_channels')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('channel', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('description', 'text', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created_at', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('updated_at', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $this->table('faq_questions')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('channel_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('question', 'string', [
                'default' => '',
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('response', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('order_by', 'integer', [
                'default' => '1',
                'limit' => null,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('created_at', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('updated_at', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'channel_id',
                ],
                [
                    'name' => 'channel_id',
                ]
            )
            ->create();

        $this->table('group')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('description', 'text', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('rule', 'text', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('hours')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('description', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('shift_id', 'string', [
                'comment' => 'periodo ou turno das aulas',
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('hour_initial', 'time', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('hour_final', 'time', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('day_week', 'string', [
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addColumn('active', 'boolean', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created_at', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('updated_at', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('instructors')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('nome', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('email', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('valor_hora', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('certificados', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->create();

        $this->table('mail_queue')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('subject', 'string', [
                'default' => '',
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('body', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('from_email', 'string', [
                'default' => '',
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('from_name', 'string', [
                'default' => '',
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('recipient_email', 'string', [
                'default' => '',
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('recipient_name', 'string', [
                'default' => '',
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('sent_at', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created_at', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('updated_at', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $this->table('notifications')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('user_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('icon', 'string', [
                'default' => '',
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('title', 'string', [
                'default' => '',
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('link', 'string', [
                'default' => '',
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('view', 'integer', [
                'default' => '0',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('click', 'integer', [
                'default' => '0',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_at', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('updated_at', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('periods')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('period', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('bimester', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('semester', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('year', 'string', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('registrations')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('turmas_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('alunos_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('data_matricula', 'date', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('teacher_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('sector_id', 'integer', [
                'comment' => 'setor de alocacao',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'alunos_id',
                ],
                [
                    'name' => 'registrations_ibfk_1',
                ]
            )
            ->addIndex(
                [
                    'turmas_id',
                ],
                [
                    'name' => 'registrations_ibfk_2',
                ]
            )
            ->create();

        $this->table('report_access')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('users', 'integer', [
                'default' => '1',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('views', 'integer', [
                'default' => '1',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('pages', 'integer', [
                'default' => '1',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_at', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('updated_at', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $this->table('report_online')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('user', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('ip', 'string', [
                'default' => '',
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('url', 'string', [
                'default' => '',
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('agent', 'string', [
                'default' => '',
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('pages', 'integer', [
                'default' => '1',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_at', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('updated_at', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $this->table('rooms')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('location', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('created', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('active', 'tinyinteger', [
                'default' => '1',
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('sectors')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('active', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('shifts')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('name', 'string', [
                'comment' => 'nome do turno',
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('sunday', 'boolean', [
                'comment' => 'domingo',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('monday', 'boolean', [
                'comment' => 'segunda',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('tuesday', 'boolean', [
                'comment' => 'Terça',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('wednesday', 'boolean', [
                'comment' => 'quarta',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('thursday', 'boolean', [
                'comment' => 'quinta',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('friday', 'boolean', [
                'comment' => 'sexta',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('saturday', 'boolean', [
                'comment' => 'sabado',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('amount_lessions', 'integer', [
                'comment' => 'Quantidade de aulas',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('teacher_disciplines')
            ->addColumn('id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('teacher_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('discipline_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('teacher_disponibilities')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('teacher_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('disponibilitie_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('teachers')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('qrcode', 'text', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('hash', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('discipline_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('first_name', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('last_name', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('email', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('title', 'string', [
                'comment' => 'titulo da graduação',
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('phone', 'string', [
                'default' => null,
                'limit' => 14,
                'null' => true,
            ])
            ->addColumn('active', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created_at', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('updated_at', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('turmas')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('teacher_id', 'integer', [
                'comment' => 'professor cordenador',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('cursos_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('sector_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('period_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('data_inicio', 'date', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('data_final', 'date', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('carga_horaria', 'smallinteger', [
                'default' => null,
                'limit' => null,
                'null' => true,
                'signed' => false,
            ])
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('acronym', 'string', [
                'comment' => 'sigla da turma',
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('collor', 'string', [
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'cursos_id',
                ],
                [
                    'name' => 'turmas_ibfk_1',
                ]
            )
            ->addIndex(
                [
                    'teacher_id',
                ],
                [
                    'name' => 'turmas_FKIndex2',
                ]
            )
            ->create();

        $this->table('users')
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
                'signed' => false,
            ])
            ->addPrimaryKey(['id'])
            ->addColumn('first_name', 'string', [
                'default' => '',
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('last_name', 'string', [
                'default' => '',
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('email', 'string', [
                'default' => '',
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('status', 'string', [
                'comment' => 'registered, confirmed',
                'default' => 'registered',
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('password', 'string', [
                'default' => '',
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('forget', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('document', 'string', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('photo', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('created_at', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('updated_at', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('level', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'email',
                ],
                [
                    'name' => 'email',
                    'unique' => true,
                ]
            )
            ->create();

        $this->table('address')
            ->addForeignKey(
                'user_id',
                'users',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'CASCADE',
                    'constraint' => 'user'
                ]
            )
            ->update();

        $this->table('addresses')
            ->addForeignKey(
                'user_id',
                'users',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'CASCADE',
                    'constraint' => 'user_id'
                ]
            )
            ->update();

        $this->table('app_categories')
            ->addForeignKey(
                'sub_of',
                'app_categories',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'CASCADE',
                    'constraint' => 'sub_of'
                ]
            )
            ->update();

        $this->table('app_credit_cards')
            ->addForeignKey(
                'user_id',
                'users',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'CASCADE',
                    'constraint' => 'credit_cards_user'
                ]
            )
            ->update();

        $this->table('app_invoices')
            ->addForeignKey(
                'category_id',
                'app_categories',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'CASCADE',
                    'constraint' => 'app_category'
                ]
            )
            ->addForeignKey(
                'invoice_of',
                'app_invoices',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'CASCADE',
                    'constraint' => 'app_invoice'
                ]
            )
            ->addForeignKey(
                'user_id',
                'users',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'CASCADE',
                    'constraint' => 'app_user'
                ]
            )
            ->addForeignKey(
                'wallet_id',
                'app_wallets',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'CASCADE',
                    'constraint' => 'app_wallet'
                ]
            )
            ->update();

        $this->table('app_orders')
            ->addForeignKey(
                'card_id',
                'app_credit_cards',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'CASCADE',
                    'constraint' => 'orders_credit_card'
                ]
            )
            ->addForeignKey(
                'subscription_id',
                'app_subscriptions',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'CASCADE',
                    'constraint' => 'orders_subscription'
                ]
            )
            ->addForeignKey(
                'user_id',
                'users',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'CASCADE',
                    'constraint' => 'orders_user'
                ]
            )
            ->update();

        $this->table('app_subscriptions')
            ->addForeignKey(
                'card_id',
                'app_credit_cards',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'CASCADE',
                    'constraint' => 'subscription_card'
                ]
            )
            ->addForeignKey(
                'plan_id',
                'app_plans',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'CASCADE',
                    'constraint' => 'subscription_plan'
                ]
            )
            ->addForeignKey(
                'user_id',
                'users',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'CASCADE',
                    'constraint' => 'subscription_user'
                ]
            )
            ->update();

        $this->table('app_wallets')
            ->addForeignKey(
                'user_id',
                'users',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'CASCADE',
                    'constraint' => 'wallet_user'
                ]
            )
            ->update();

        $this->table('disponibilities')
            ->addForeignKey(
                'hour_id',
                'hours',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                    'constraint' => 'fk_hour_id'
                ]
            )
            ->addForeignKey(
                'teacher_id',
                'teachers',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                    'constraint' => 'fk_teache'
                ]
            )
            ->update();

        $this->table('faq_questions')
            ->addForeignKey(
                'channel_id',
                'faq_channels',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'CASCADE',
                    'constraint' => 'channel_id'
                ]
            )
            ->update();

        $this->table('registrations')
            ->addForeignKey(
                'alunos_id',
                'alunos',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                    'constraint' => 'registrations_ibfk_1'
                ]
            )
            ->addForeignKey(
                'turmas_id',
                'turmas',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                    'constraint' => 'registrations_ibfk_2'
                ]
            )
            ->update();

        $this->table('turmas')
            ->addForeignKey(
                'cursos_id',
                'courses',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                    'constraint' => 'turmas_ibfk_1'
                ]
            )
            ->update();
    }

    /**
     * Down Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-down-method
     * @return void
     */
    public function down(): void
    {
        $this->table('address')
            ->dropForeignKey(
                'user_id'
            )->save();

        $this->table('addresses')
            ->dropForeignKey(
                'user_id'
            )->save();

        $this->table('app_categories')
            ->dropForeignKey(
                'sub_of'
            )->save();

        $this->table('app_credit_cards')
            ->dropForeignKey(
                'user_id'
            )->save();

        $this->table('app_invoices')
            ->dropForeignKey(
                'category_id'
            )
            ->dropForeignKey(
                'invoice_of'
            )
            ->dropForeignKey(
                'user_id'
            )
            ->dropForeignKey(
                'wallet_id'
            )->save();

        $this->table('app_orders')
            ->dropForeignKey(
                'card_id'
            )
            ->dropForeignKey(
                'subscription_id'
            )
            ->dropForeignKey(
                'user_id'
            )->save();

        $this->table('app_subscriptions')
            ->dropForeignKey(
                'card_id'
            )
            ->dropForeignKey(
                'plan_id'
            )
            ->dropForeignKey(
                'user_id'
            )->save();

        $this->table('app_wallets')
            ->dropForeignKey(
                'user_id'
            )->save();

        $this->table('disponibilities')
            ->dropForeignKey(
                'hour_id'
            )
            ->dropForeignKey(
                'teacher_id'
            )->save();

        $this->table('faq_questions')
            ->dropForeignKey(
                'channel_id'
            )->save();

        $this->table('registrations')
            ->dropForeignKey(
                'alunos_id'
            )
            ->dropForeignKey(
                'turmas_id'
            )->save();

        $this->table('turmas')
            ->dropForeignKey(
                'cursos_id'
            )->save();

        $this->table('address')->drop()->save();
        $this->table('addresses')->drop()->save();
        $this->table('alunos')->drop()->save();
        $this->table('app_categories')->drop()->save();
        $this->table('app_credit_cards')->drop()->save();
        $this->table('app_invoices')->drop()->save();
        $this->table('app_orders')->drop()->save();
        $this->table('app_plans')->drop()->save();
        $this->table('app_subscriptions')->drop()->save();
        $this->table('app_wallets')->drop()->save();
        $this->table('categories')->drop()->save();
        $this->table('courses')->drop()->save();
        $this->table('disciplines')->drop()->save();
        $this->table('disponibilities')->drop()->save();
        $this->table('faq_channels')->drop()->save();
        $this->table('faq_questions')->drop()->save();
        $this->table('group')->drop()->save();
        $this->table('hours')->drop()->save();
        $this->table('instructors')->drop()->save();
        $this->table('mail_queue')->drop()->save();
        $this->table('notifications')->drop()->save();
        $this->table('periods')->drop()->save();
        $this->table('registrations')->drop()->save();
        $this->table('report_access')->drop()->save();
        $this->table('report_online')->drop()->save();
        $this->table('rooms')->drop()->save();
        $this->table('sectors')->drop()->save();
        $this->table('shifts')->drop()->save();
        $this->table('teacher_disciplines')->drop()->save();
        $this->table('teacher_disponibilities')->drop()->save();
        $this->table('teachers')->drop()->save();
        $this->table('turmas')->drop()->save();
        $this->table('users')->drop()->save();
    }
}
