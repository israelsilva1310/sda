<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?= h($user->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('First Name') ?></th>
                    <td><?= h($user->first_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Name') ?></th>
                    <td><?= h($user->last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($user->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($user->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Forget') ?></th>
                    <td><?= h($user->forget) ?></td>
                </tr>
                <tr>
                    <th><?= __('Document') ?></th>
                    <td><?= h($user->document) ?></td>
                </tr>
                <tr>
                    <th><?= __('Photo') ?></th>
                    <td><?= h($user->photo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Level') ?></th>
                    <td><?= $user->level === null ? '' : $this->Number->format($user->level) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($user->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated At') ?></th>
                    <td><?= h($user->updated_at) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Address') ?></h4>
                <?php if (!empty($user->address)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Street') ?></th>
                            <th><?= __('Number') ?></th>
                            <th><?= __('Complement') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Updated At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->address as $address) : ?>
                        <tr>
                            <td><?= h($address->id) ?></td>
                            <td><?= h($address->user_id) ?></td>
                            <td><?= h($address->street) ?></td>
                            <td><?= h($address->number) ?></td>
                            <td><?= h($address->complement) ?></td>
                            <td><?= h($address->created_at) ?></td>
                            <td><?= h($address->updated_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Address', 'action' => 'view', $address->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Address', 'action' => 'edit', $address->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Address', 'action' => 'delete', $address->id], ['confirm' => __('Are you sure you want to delete # {0}?', $address->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Addresses') ?></h4>
                <?php if (!empty($user->addresses)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Cep') ?></th>
                            <th><?= __('Street') ?></th>
                            <th><?= __('Number') ?></th>
                            <th><?= __('Complement') ?></th>
                            <th><?= __('District') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->addresses as $addresses) : ?>
                        <tr>
                            <td><?= h($addresses->user_id) ?></td>
                            <td><?= h($addresses->id) ?></td>
                            <td><?= h($addresses->cep) ?></td>
                            <td><?= h($addresses->street) ?></td>
                            <td><?= h($addresses->number) ?></td>
                            <td><?= h($addresses->complement) ?></td>
                            <td><?= h($addresses->district) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Addresses', 'action' => 'view', $addresses->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Addresses', 'action' => 'edit', $addresses->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Addresses', 'action' => 'delete', $addresses->id], ['confirm' => __('Are you sure you want to delete # {0}?', $addresses->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related App Credit Cards') ?></h4>
                <?php if (!empty($user->app_credit_cards)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Brand') ?></th>
                            <th><?= __('Last Digits') ?></th>
                            <th><?= __('Cvv') ?></th>
                            <th><?= __('Hash') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Updated At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->app_credit_cards as $appCreditCards) : ?>
                        <tr>
                            <td><?= h($appCreditCards->id) ?></td>
                            <td><?= h($appCreditCards->user_id) ?></td>
                            <td><?= h($appCreditCards->brand) ?></td>
                            <td><?= h($appCreditCards->last_digits) ?></td>
                            <td><?= h($appCreditCards->cvv) ?></td>
                            <td><?= h($appCreditCards->hash) ?></td>
                            <td><?= h($appCreditCards->status) ?></td>
                            <td><?= h($appCreditCards->created_at) ?></td>
                            <td><?= h($appCreditCards->updated_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'AppCreditCards', 'action' => 'view', $appCreditCards->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'AppCreditCards', 'action' => 'edit', $appCreditCards->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'AppCreditCards', 'action' => 'delete', $appCreditCards->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appCreditCards->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related App Invoices') ?></h4>
                <?php if (!empty($user->app_invoices)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Wallet Id') ?></th>
                            <th><?= __('Category Id') ?></th>
                            <th><?= __('Invoice Of') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Type') ?></th>
                            <th><?= __('Value') ?></th>
                            <th><?= __('Currency') ?></th>
                            <th><?= __('Due At') ?></th>
                            <th><?= __('Repeat When') ?></th>
                            <th><?= __('Period') ?></th>
                            <th><?= __('Enrollments') ?></th>
                            <th><?= __('Enrollment Of') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Updated At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->app_invoices as $appInvoices) : ?>
                        <tr>
                            <td><?= h($appInvoices->id) ?></td>
                            <td><?= h($appInvoices->user_id) ?></td>
                            <td><?= h($appInvoices->wallet_id) ?></td>
                            <td><?= h($appInvoices->category_id) ?></td>
                            <td><?= h($appInvoices->invoice_of) ?></td>
                            <td><?= h($appInvoices->description) ?></td>
                            <td><?= h($appInvoices->type) ?></td>
                            <td><?= h($appInvoices->value) ?></td>
                            <td><?= h($appInvoices->currency) ?></td>
                            <td><?= h($appInvoices->due_at) ?></td>
                            <td><?= h($appInvoices->repeat_when) ?></td>
                            <td><?= h($appInvoices->period) ?></td>
                            <td><?= h($appInvoices->enrollments) ?></td>
                            <td><?= h($appInvoices->enrollment_of) ?></td>
                            <td><?= h($appInvoices->status) ?></td>
                            <td><?= h($appInvoices->created_at) ?></td>
                            <td><?= h($appInvoices->updated_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'AppInvoices', 'action' => 'view', $appInvoices->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'AppInvoices', 'action' => 'edit', $appInvoices->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'AppInvoices', 'action' => 'delete', $appInvoices->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appInvoices->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related App Orders') ?></h4>
                <?php if (!empty($user->app_orders)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Card Id') ?></th>
                            <th><?= __('Subscription Id') ?></th>
                            <th><?= __('Transaction') ?></th>
                            <th><?= __('Amount') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Updated At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->app_orders as $appOrders) : ?>
                        <tr>
                            <td><?= h($appOrders->id) ?></td>
                            <td><?= h($appOrders->user_id) ?></td>
                            <td><?= h($appOrders->card_id) ?></td>
                            <td><?= h($appOrders->subscription_id) ?></td>
                            <td><?= h($appOrders->transaction) ?></td>
                            <td><?= h($appOrders->amount) ?></td>
                            <td><?= h($appOrders->status) ?></td>
                            <td><?= h($appOrders->created_at) ?></td>
                            <td><?= h($appOrders->updated_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'AppOrders', 'action' => 'view', $appOrders->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'AppOrders', 'action' => 'edit', $appOrders->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'AppOrders', 'action' => 'delete', $appOrders->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appOrders->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related App Subscriptions') ?></h4>
                <?php if (!empty($user->app_subscriptions)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Plan Id') ?></th>
                            <th><?= __('Card Id') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Pay Status') ?></th>
                            <th><?= __('Started') ?></th>
                            <th><?= __('Due Day') ?></th>
                            <th><?= __('Next Due') ?></th>
                            <th><?= __('Last Charge') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Updated At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->app_subscriptions as $appSubscriptions) : ?>
                        <tr>
                            <td><?= h($appSubscriptions->id) ?></td>
                            <td><?= h($appSubscriptions->user_id) ?></td>
                            <td><?= h($appSubscriptions->plan_id) ?></td>
                            <td><?= h($appSubscriptions->card_id) ?></td>
                            <td><?= h($appSubscriptions->status) ?></td>
                            <td><?= h($appSubscriptions->pay_status) ?></td>
                            <td><?= h($appSubscriptions->started) ?></td>
                            <td><?= h($appSubscriptions->due_day) ?></td>
                            <td><?= h($appSubscriptions->next_due) ?></td>
                            <td><?= h($appSubscriptions->last_charge) ?></td>
                            <td><?= h($appSubscriptions->created_at) ?></td>
                            <td><?= h($appSubscriptions->updated_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'AppSubscriptions', 'action' => 'view', $appSubscriptions->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'AppSubscriptions', 'action' => 'edit', $appSubscriptions->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'AppSubscriptions', 'action' => 'delete', $appSubscriptions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appSubscriptions->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related App Wallets') ?></h4>
                <?php if (!empty($user->app_wallets)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Wallet') ?></th>
                            <th><?= __('Free') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Updated At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->app_wallets as $appWallets) : ?>
                        <tr>
                            <td><?= h($appWallets->id) ?></td>
                            <td><?= h($appWallets->user_id) ?></td>
                            <td><?= h($appWallets->wallet) ?></td>
                            <td><?= h($appWallets->free) ?></td>
                            <td><?= h($appWallets->created_at) ?></td>
                            <td><?= h($appWallets->updated_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'AppWallets', 'action' => 'view', $appWallets->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'AppWallets', 'action' => 'edit', $appWallets->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'AppWallets', 'action' => 'delete', $appWallets->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appWallets->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Notifications') ?></h4>
                <?php if (!empty($user->notifications)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Icon') ?></th>
                            <th><?= __('Title') ?></th>
                            <th><?= __('Link') ?></th>
                            <th><?= __('View') ?></th>
                            <th><?= __('Click') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Updated At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->notifications as $notifications) : ?>
                        <tr>
                            <td><?= h($notifications->id) ?></td>
                            <td><?= h($notifications->user_id) ?></td>
                            <td><?= h($notifications->icon) ?></td>
                            <td><?= h($notifications->title) ?></td>
                            <td><?= h($notifications->link) ?></td>
                            <td><?= h($notifications->view) ?></td>
                            <td><?= h($notifications->click) ?></td>
                            <td><?= h($notifications->created_at) ?></td>
                            <td><?= h($notifications->updated_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Notifications', 'action' => 'view', $notifications->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Notifications', 'action' => 'edit', $notifications->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Notifications', 'action' => 'delete', $notifications->id], ['confirm' => __('Are you sure you want to delete # {0}?', $notifications->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
