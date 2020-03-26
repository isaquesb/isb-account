<?php
namespace Isb\Account\Console\Commands;

use Illuminate\Console\Command;
use Isb\Account\Type;
use Isb\Account\Status\Status;

class InstallCommand extends Command
{
    /**
     * @var string
     */
    protected $signature = 'isb-account:install';

    /**
     * @var string
     */
    protected $description = 'Account Install';

    /**
     * @return mixed
     */
    public function handle()
    {
        $this->call('isb-account:add-type', [
            'id' => Type::ACCOUNT_SYSTEM,
            'name' => 'System',
        ]);
        $this->call('isb-account:add-type', [
            'id' => Type::ACCOUNT_ADMIN,
            'name' => 'Admin',
        ]);
        $this->call('isb-account:add-type', [
            'id' => Type::ACCOUNT_USER,
            'name' => 'User',
        ]);
        $this->call('isb-account:add-type', [
            'id' => Type::ACCOUNT_MANAGER,
            'name' => 'Manager',
        ]);
        $this->call('isb-account:add-type', [
            'id' => Type::ACCOUNT_COMPANY,
            'name' => 'Company',
        ]);
        $this->call('isb-account:add-type', [
            'id' => Type::ACCOUNT_COMPANY_SUB,
            'name' => 'CompanySub',
        ]);
        $this->call('isb-account:add-type', [
            'id' => Type::PERSONAL,
            'name' => 'Personal',
        ]);
        $this->call('isb-account:add-type', [
            'id' => Type::CELLPHONE,
            'name' => 'Cellphone',
        ]);
        $this->call('isb-account:add-type', [
            'id' => Type::COMMERCIAL,
            'name' => 'Commercial',
        ]);
        $this->call('isb-account:add-type', [
            'id' => Type::TECHNOLOGICAL,
            'name' => 'Technological',
        ]);
        $this->call('isb-account:add-type', [
            'id' => Type::BILLING,
            'name' => 'Billing',
        ]);
        $this->call('isb-account:add-type', [
            'id' => Type::DELIVERY,
            'name' => 'Delivery',
        ]);
        $this->call('isb-account:add-type', [
            'id' => Type::DOC_STATE,
            'name' => 'RG',
        ]);
        $this->call('isb-account:add-type', [
            'id' => Type::DOC_UNIQUE,
            'name' => 'CPF',
        ]);
        $this->call('isb-account:add-type', [
            'id' => Type::DOC_COMPANY,
            'name' => 'CNPJ',
        ]);

        $this->call('isb-account:add-status', [
            'id' => Status::REGISTERED,
            'name' => 'REGISTERED',
        ]);
        $this->call('isb-account:add-status-lang', [
            'status_id' => Status::REGISTERED,
            'language_id' => 'pt_BR',
            'name' => 'Registrado',
            'description' => 'Entrada recente na base',
        ]);
        $this->call('isb-account:add-status-lang', [
            'status_id' => Status::REGISTERED,
            'language_id' => 'en',
            'name' => 'Registered',
            'description' => 'Recent base input',
        ]);
        $this->call('isb-account:add-status-detail', [
            'status_id' => Status::REGISTERED,
            'id' => 0,
            'name' => 'FROM_SITE_FORM',
        ]);
        $this->call('isb-account:add-status', [
            'id' => Status::REJECTED,
            'name' => 'REJECTED',
        ]);
        $this->call('isb-account:add-status-lang', [
            'status_id' => Status::REJECTED,
            'language_id' => 'pt_BR',
            'name' => 'Reprovado',
            'description' => 'Reprovado',
        ]);
        $this->call('isb-account:add-status-lang', [
            'status_id' => Status::REJECTED,
            'language_id' => 'en',
            'name' => 'Rejected',
            'description' => 'Rejected',
        ]);
        $this->call('isb-account:add-status-detail', [
            'status_id' => Status::REJECTED,
            'id' => 0,
            'name' => 'BY_SYSTEM',
        ]);
        $this->call('isb-account:add-status-detail', [
            'status_id' => Status::REJECTED,
            'id' => 1,
            'name' => 'BY_ADMIN',
        ]);
        $this->call('isb-account:add-status', [
            'id' => Status::APPROVED,
            'name' => 'APPROVED',
        ]);
        $this->call('isb-account:add-status-lang', [
            'status_id' => Status::APPROVED,
            'language_id' => 'pt_BR',
            'name' => 'Aprovado',
            'description' => 'Aprovado',
        ]);
        $this->call('isb-account:add-status-lang', [
            'status_id' => Status::APPROVED,
            'language_id' => 'en',
            'name' => 'Approved',
            'description' => 'Approved',
        ]);
        $this->call('isb-account:add-status-detail', [
            'status_id' => Status::APPROVED,
            'id' => 0,
            'name' => 'BY_SYSTEM',
        ]);
        $this->call('isb-account:add-status-detail', [
            'status_id' => Status::APPROVED,
            'id' => 1,
            'name' => 'BY_ADMIN',
        ]);
        $this->call('isb-account:add-status', [
            'id' => Status::INACTIVE,
            'name' => 'INACTIVE',
        ]);
        $this->call('isb-account:add-status-lang', [
            'status_id' => Status::INACTIVE,
            'language_id' => 'pt_BR',
            'name' => 'Inativo',
            'description' => 'Inativo',
        ]);
        $this->call('isb-account:add-status-lang', [
            'status_id' => Status::INACTIVE,
            'language_id' => 'en',
            'name' => 'Inactive',
            'description' => 'Inactive',
        ]);
        $this->call('isb-account:add-status-detail', [
            'status_id' => Status::INACTIVE,
            'id' => 0,
            'name' => 'BY_SYSTEM',
        ]);
        $this->call('isb-account:add-status-detail', [
            'status_id' => Status::INACTIVE,
            'id' => 1,
            'name' => 'BY_ADMIN',
        ]);
        $this->call('isb-account:add-status-detail', [
            'status_id' => Status::INACTIVE,
            'id' => 2,
            'name' => 'BY_USER',
        ]);
        $this->call('isb-account:add-status', [
            'id' => Status::CANCELED,
            'name' => 'CANCELED',
        ]);
        $this->call('isb-account:add-status-lang', [
            'status_id' => Status::CANCELED,
            'language_id' => 'pt_BR',
            'name' => 'Cancelado',
            'description' => 'Cancelado',
        ]);
        $this->call('isb-account:add-status-lang', [
            'status_id' => Status::CANCELED,
            'language_id' => 'en',
            'name' => 'Canceled',
            'description' => 'Canceled',
        ]);
        $this->call('isb-account:add-status-detail', [
            'status_id' => Status::CANCELED,
            'id' => 0,
            'name' => 'BY_SYSTEM',
        ]);
        $this->call('isb-account:add-status-detail', [
            'status_id' => Status::CANCELED,
            'id' => 1,
            'name' => 'BY_ADMIN',
        ]);
        $this->call('isb-account:add-status-detail', [
            'status_id' => Status::CANCELED,
            'id' => 2,
            'name' => 'BY_USER',
        ]);
    }
}
