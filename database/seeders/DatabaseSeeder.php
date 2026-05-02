<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\System\Status;
use App\Models\System\User;
use App\Models\System\Role;
use App\Models\System\Permission;
use App\Models\System\RolePermission;
use App\Models\System\UsersRoles;

use App\Models\Pessoa\PessoaTipo;
use App\Models\Pessoa\PessoaContatoTipo;

use App\Models\Comercial\Marca;
use App\Models\Comercial\ProdutoTipo;
use App\Models\Comercial\Produto;

class DatabaseSeeder extends Seeder
{
  public function run(): void {
    Status::create([ 'name' => 'active' ]);
    Status::create([ 'name' => 'inactive' ]);
    Status::create([ 'name' => 'canceled' ]);
    Status::create([ 'name' => 'approved' ]);
    Status::create([ 'name' => 'closed' ]);

    User::create([ 'name' => 'admin', 'email' => 'admin@api', 'password' => '123456', 'admin' => true, 'picture' => 'users/pictures/rafael.png' ]);
    User::create([ 'name' => 'Rafael de Lima Ramon', 'email' => 'rafael@api', 'password' => '123456', 'admin' => false, 'picture' => 'users/pictures/rafael.png' ]);

    Role::create([ 'name' => 'Full Access', 'description' => '' ]);

    Permission::create([ 'name' => 'user:create', 'description' => '' ]);
    Permission::create([ 'name' => 'user:update', 'description' => '' ]);
    Permission::create([ 'name' => 'user:show', 'description' => '' ]);
    Permission::create([ 'name' => 'user:cancel', 'description' => '' ]);
    Permission::create([ 'name' => 'user:delete', 'description' => '' ]);

    /* PESSOA */
    Permission::create([ 'name' => 'empresa:create', 'description' => '' ]);
    Permission::create([ 'name' => 'empresa:update', 'description' => '' ]);
    Permission::create([ 'name' => 'empresa:show', 'description' => '' ]);
    Permission::create([ 'name' => 'empresa:cancel', 'description' => '' ]);
    Permission::create([ 'name' => 'empresa:delete', 'description' => '' ]);

    Permission::create([ 'name' => 'empresa_ie:create', 'description' => '' ]);
    Permission::create([ 'name' => 'empresa_ie:update', 'description' => '' ]);
    Permission::create([ 'name' => 'empresa_ie:show', 'description' => '' ]);
    Permission::create([ 'name' => 'empresa_ie:cancel', 'description' => '' ]);
    Permission::create([ 'name' => 'empresa_ie:delete', 'description' => '' ]);

    Permission::create([ 'name' => 'empresa_endereco:create', 'description' => '' ]);
    Permission::create([ 'name' => 'empresa_endereco:update', 'description' => '' ]);
    Permission::create([ 'name' => 'empresa_endereco:show', 'description' => '' ]);
    Permission::create([ 'name' => 'empresa_endereco:cancel', 'description' => '' ]);
    Permission::create([ 'name' => 'empresa_endereco:delete', 'description' => '' ]);

    Permission::create([ 'name' => 'empresa_contato:create', 'description' => '' ]);
    Permission::create([ 'name' => 'empresa_contato:update', 'description' => '' ]);
    Permission::create([ 'name' => 'empresa_contato:show', 'description' => '' ]);
    Permission::create([ 'name' => 'empresa_contato:cancel', 'description' => '' ]);
    Permission::create([ 'name' => 'empresa_contato:delete', 'description' => '' ]);

    Permission::create([ 'name' => 'empresa_certificado:create', 'description' => '' ]);
    Permission::create([ 'name' => 'empresa_certificado:update', 'description' => '' ]);
    Permission::create([ 'name' => 'empresa_certificado:show', 'description' => '' ]);
    Permission::create([ 'name' => 'empresa_certificado:cancel', 'description' => '' ]);
    Permission::create([ 'name' => 'empresa_certificado:delete', 'description' => '' ]);

    Permission::create([ 'name' => 'fornecedor:create', 'description' => '' ]);
    Permission::create([ 'name' => 'fornecedor:update', 'description' => '' ]);
    Permission::create([ 'name' => 'fornecedor:show', 'description' => '' ]);
    Permission::create([ 'name' => 'fornecedor:cancel', 'description' => '' ]);
    Permission::create([ 'name' => 'fornecedor:delete', 'description' => '' ]);

    Permission::create([ 'name' => 'fornecedor_ie:create', 'description' => '' ]);
    Permission::create([ 'name' => 'fornecedor_ie:update', 'description' => '' ]);
    Permission::create([ 'name' => 'fornecedor_ie:show', 'description' => '' ]);
    Permission::create([ 'name' => 'fornecedor_ie:cancel', 'description' => '' ]);
    Permission::create([ 'name' => 'fornecedor_ie:delete', 'description' => '' ]);

    Permission::create([ 'name' => 'fornecedor_endereco:create', 'description' => '' ]);
    Permission::create([ 'name' => 'fornecedor_endereco:update', 'description' => '' ]);
    Permission::create([ 'name' => 'fornecedor_endereco:show', 'description' => '' ]);
    Permission::create([ 'name' => 'fornecedor_endereco:cancel', 'description' => '' ]);
    Permission::create([ 'name' => 'fornecedor_endereco:delete', 'description' => '' ]);

    Permission::create([ 'name' => 'fornecedor_contato:create', 'description' => '' ]);
    Permission::create([ 'name' => 'fornecedor_contato:update', 'description' => '' ]);
    Permission::create([ 'name' => 'fornecedor_contato:show', 'description' => '' ]);
    Permission::create([ 'name' => 'fornecedor_contato:cancel', 'description' => '' ]);
    Permission::create([ 'name' => 'fornecedor_contato:delete', 'description' => '' ]);

    Permission::create([ 'name' => 'cliente:create', 'description' => '' ]);
    Permission::create([ 'name' => 'cliente:update', 'description' => '' ]);
    Permission::create([ 'name' => 'cliente:show', 'description' => '' ]);
    Permission::create([ 'name' => 'cliente:cancel', 'description' => '' ]);
    Permission::create([ 'name' => 'cliente:delete', 'description' => '' ]);

    Permission::create([ 'name' => 'cliente_ie:create', 'description' => '' ]);
    Permission::create([ 'name' => 'cliente_ie:update', 'description' => '' ]);
    Permission::create([ 'name' => 'cliente_ie:show', 'description' => '' ]);
    Permission::create([ 'name' => 'cliente_ie:cancel', 'description' => '' ]);
    Permission::create([ 'name' => 'cliente_ie:delete', 'description' => '' ]);

    Permission::create([ 'name' => 'cliente_endereco:create', 'description' => '' ]);
    Permission::create([ 'name' => 'cliente_endereco:update', 'description' => '' ]);
    Permission::create([ 'name' => 'cliente_endereco:show', 'description' => '' ]);
    Permission::create([ 'name' => 'cliente_endereco:cancel', 'description' => '' ]);
    Permission::create([ 'name' => 'cliente_endereco:delete', 'description' => '' ]);

    Permission::create([ 'name' => 'cliente_contato:create', 'description' => '' ]);
    Permission::create([ 'name' => 'cliente_contato:update', 'description' => '' ]);
    Permission::create([ 'name' => 'cliente_contato:show', 'description' => '' ]);
    Permission::create([ 'name' => 'cliente_contato:cancel', 'description' => '' ]);
    Permission::create([ 'name' => 'cliente_contato:delete', 'description' => '' ]);

    Permission::create([ 'name' => 'funcionario:create', 'description' => '' ]);
    Permission::create([ 'name' => 'funcionario:update', 'description' => '' ]);
    Permission::create([ 'name' => 'funcionario:show', 'description' => '' ]);
    Permission::create([ 'name' => 'funcionario:cancel', 'description' => '' ]);
    Permission::create([ 'name' => 'funcionario:delete', 'description' => '' ]);

    Permission::create([ 'name' => 'funcionario_ie:create', 'description' => '' ]);
    Permission::create([ 'name' => 'funcionario_ie:update', 'description' => '' ]);
    Permission::create([ 'name' => 'funcionario_ie:show', 'description' => '' ]);
    Permission::create([ 'name' => 'funcionario_ie:cancel', 'description' => '' ]);
    Permission::create([ 'name' => 'funcionario_ie:delete', 'description' => '' ]);

    Permission::create([ 'name' => 'funcionario_endereco:create', 'description' => '' ]);
    Permission::create([ 'name' => 'funcionario_endereco:update', 'description' => '' ]);
    Permission::create([ 'name' => 'funcionario_endereco:show', 'description' => '' ]);
    Permission::create([ 'name' => 'funcionario_endereco:cancel', 'description' => '' ]);
    Permission::create([ 'name' => 'funcionario_endereco:delete', 'description' => '' ]);

    Permission::create([ 'name' => 'funcionario_contato:create', 'description' => '' ]);
    Permission::create([ 'name' => 'funcionario_contato:update', 'description' => '' ]);
    Permission::create([ 'name' => 'funcionario_contato:show', 'description' => '' ]);
    Permission::create([ 'name' => 'funcionario_contato:cancel', 'description' => '' ]);
    Permission::create([ 'name' => 'funcionario_contato:delete', 'description' => '' ]);

    Permission::create([ 'name' => 'tercerizado:create', 'description' => '' ]);
    Permission::create([ 'name' => 'tercerizado:update', 'description' => '' ]);
    Permission::create([ 'name' => 'tercerizado:show', 'description' => '' ]);
    Permission::create([ 'name' => 'tercerizado:cancel', 'description' => '' ]);
    Permission::create([ 'name' => 'tercerizado:delete', 'description' => '' ]);

    Permission::create([ 'name' => 'tercerizado_ie:create', 'description' => '' ]);
    Permission::create([ 'name' => 'tercerizado_ie:update', 'description' => '' ]);
    Permission::create([ 'name' => 'tercerizado_ie:show', 'description' => '' ]);
    Permission::create([ 'name' => 'tercerizado_ie:cancel', 'description' => '' ]);
    Permission::create([ 'name' => 'tercerizado_ie:delete', 'description' => '' ]);

    Permission::create([ 'name' => 'tercerizado_endereco:create', 'description' => '' ]);
    Permission::create([ 'name' => 'tercerizado_endereco:update', 'description' => '' ]);
    Permission::create([ 'name' => 'tercerizado_endereco:show', 'description' => '' ]);
    Permission::create([ 'name' => 'tercerizado_endereco:cancel', 'description' => '' ]);
    Permission::create([ 'name' => 'tercerizado_endereco:delete', 'description' => '' ]);

    Permission::create([ 'name' => 'tercerizado_contato:create', 'description' => '' ]);
    Permission::create([ 'name' => 'tercerizado_contato:update', 'description' => '' ]);
    Permission::create([ 'name' => 'tercerizado_contato:show', 'description' => '' ]);
    Permission::create([ 'name' => 'tercerizado_contato:cancel', 'description' => '' ]);
    Permission::create([ 'name' => 'tercerizado_contato:delete', 'description' => '' ]);

    Permission::create([ 'name' => 'candidato:create', 'description' => '' ]);
    Permission::create([ 'name' => 'candidato:update', 'description' => '' ]);
    Permission::create([ 'name' => 'candidato:show', 'description' => '' ]);
    Permission::create([ 'name' => 'candidato:cancel', 'description' => '' ]);
    Permission::create([ 'name' => 'candidato:delete', 'description' => '' ]);

    Permission::create([ 'name' => 'candidato_ie:create', 'description' => '' ]);
    Permission::create([ 'name' => 'candidato_ie:update', 'description' => '' ]);
    Permission::create([ 'name' => 'candidato_ie:show', 'description' => '' ]);
    Permission::create([ 'name' => 'candidato_ie:cancel', 'description' => '' ]);
    Permission::create([ 'name' => 'candidato_ie:delete', 'description' => '' ]);

    Permission::create([ 'name' => 'candidato_endereco:create', 'description' => '' ]);
    Permission::create([ 'name' => 'candidato_endereco:update', 'description' => '' ]);
    Permission::create([ 'name' => 'candidato_endereco:show', 'description' => '' ]);
    Permission::create([ 'name' => 'candidato_endereco:cancel', 'description' => '' ]);
    Permission::create([ 'name' => 'candidato_endereco:delete', 'description' => '' ]);

    Permission::create([ 'name' => 'candidato_contato:create', 'description' => '' ]);
    Permission::create([ 'name' => 'candidato_contato:update', 'description' => '' ]);
    Permission::create([ 'name' => 'candidato_contato:show', 'description' => '' ]);
    Permission::create([ 'name' => 'candidato_contato:cancel', 'description' => '' ]);
    Permission::create([ 'name' => 'candidato_contato:delete', 'description' => '' ]);

    Permission::create([ 'name' => 'visitante:create', 'description' => '' ]);
    Permission::create([ 'name' => 'visitante:update', 'description' => '' ]);
    Permission::create([ 'name' => 'visitante:show', 'description' => '' ]);
    Permission::create([ 'name' => 'visitante:cancel', 'description' => '' ]);
    Permission::create([ 'name' => 'visitante:delete', 'description' => '' ]);

    Permission::create([ 'name' => 'visitante_ie:create', 'description' => '' ]);
    Permission::create([ 'name' => 'visitante_ie:update', 'description' => '' ]);
    Permission::create([ 'name' => 'visitante_ie:show', 'description' => '' ]);
    Permission::create([ 'name' => 'visitante_ie:cancel', 'description' => '' ]);
    Permission::create([ 'name' => 'visitante_ie:delete', 'description' => '' ]);

    Permission::create([ 'name' => 'visitante_endereco:create', 'description' => '' ]);
    Permission::create([ 'name' => 'visitante_endereco:update', 'description' => '' ]);
    Permission::create([ 'name' => 'visitante_endereco:show', 'description' => '' ]);
    Permission::create([ 'name' => 'visitante_endereco:cancel', 'description' => '' ]);
    Permission::create([ 'name' => 'visitante_endereco:delete', 'description' => '' ]);

    Permission::create([ 'name' => 'visitante_contato:create', 'description' => '' ]);
    Permission::create([ 'name' => 'visitante_contato:update', 'description' => '' ]);
    Permission::create([ 'name' => 'visitante_contato:show', 'description' => '' ]);
    Permission::create([ 'name' => 'visitante_contato:cancel', 'description' => '' ]);
    Permission::create([ 'name' => 'visitante_contato:delete', 'description' => '' ]);

    Permission::create([ 'name' => 'governo_federal:create', 'description' => '' ]);
    Permission::create([ 'name' => 'governo_federal:update', 'description' => '' ]);
    Permission::create([ 'name' => 'governo_federal:show', 'description' => '' ]);
    Permission::create([ 'name' => 'governo_federal:cancel', 'description' => '' ]);
    Permission::create([ 'name' => 'governo_federal:delete', 'description' => '' ]);

    Permission::create([ 'name' => 'governo_federal_ie:create', 'description' => '' ]);
    Permission::create([ 'name' => 'governo_federal_ie:update', 'description' => '' ]);
    Permission::create([ 'name' => 'governo_federal_ie:show', 'description' => '' ]);
    Permission::create([ 'name' => 'governo_federal_ie:cancel', 'description' => '' ]);
    Permission::create([ 'name' => 'governo_federal_ie:delete', 'description' => '' ]);

    Permission::create([ 'name' => 'governo_federal_endereco:create', 'description' => '' ]);
    Permission::create([ 'name' => 'governo_federal_endereco:update', 'description' => '' ]);
    Permission::create([ 'name' => 'governo_federal_endereco:show', 'description' => '' ]);
    Permission::create([ 'name' => 'governo_federal_endereco:cancel', 'description' => '' ]);
    Permission::create([ 'name' => 'governo_federal_endereco:delete', 'description' => '' ]);

    Permission::create([ 'name' => 'governo_federal_contato:create', 'description' => '' ]);
    Permission::create([ 'name' => 'governo_federal_contato:update', 'description' => '' ]);
    Permission::create([ 'name' => 'governo_federal_contato:show', 'description' => '' ]);
    Permission::create([ 'name' => 'governo_federal_contato:cancel', 'description' => '' ]);
    Permission::create([ 'name' => 'governo_federal_contato:delete', 'description' => '' ]);

    Permission::create([ 'name' => 'governo_estadual:create', 'description' => '' ]);
    Permission::create([ 'name' => 'governo_estadual:update', 'description' => '' ]);
    Permission::create([ 'name' => 'governo_estadual:show', 'description' => '' ]);
    Permission::create([ 'name' => 'governo_estadual:cancel', 'description' => '' ]);
    Permission::create([ 'name' => 'governo_estadual:delete', 'description' => '' ]);

    Permission::create([ 'name' => 'governo_estadual_ie:create', 'description' => '' ]);
    Permission::create([ 'name' => 'governo_estadual_ie:update', 'description' => '' ]);
    Permission::create([ 'name' => 'governo_estadual_ie:show', 'description' => '' ]);
    Permission::create([ 'name' => 'governo_estadual_ie:cancel', 'description' => '' ]);
    Permission::create([ 'name' => 'governo_estadual_ie:delete', 'description' => '' ]);

    Permission::create([ 'name' => 'governo_estadual_endereco:create', 'description' => '' ]);
    Permission::create([ 'name' => 'governo_estadual_endereco:update', 'description' => '' ]);
    Permission::create([ 'name' => 'governo_estadual_endereco:show', 'description' => '' ]);
    Permission::create([ 'name' => 'governo_estadual_endereco:cancel', 'description' => '' ]);
    Permission::create([ 'name' => 'governo_estadual_endereco:delete', 'description' => '' ]);

    Permission::create([ 'name' => 'governo_estadual_contato:create', 'description' => '' ]);
    Permission::create([ 'name' => 'governo_estadual_contato:update', 'description' => '' ]);
    Permission::create([ 'name' => 'governo_estadual_contato:show', 'description' => '' ]);
    Permission::create([ 'name' => 'governo_estadual_contato:cancel', 'description' => '' ]);
    Permission::create([ 'name' => 'governo_estadual_contato:delete', 'description' => '' ]);

    Permission::create([ 'name' => 'governo_municipal:create', 'description' => '' ]);
    Permission::create([ 'name' => 'governo_municipal:update', 'description' => '' ]);
    Permission::create([ 'name' => 'governo_municipal:show', 'description' => '' ]);
    Permission::create([ 'name' => 'governo_municipal:cancel', 'description' => '' ]);
    Permission::create([ 'name' => 'governo_municipal:delete', 'description' => '' ]);

    Permission::create([ 'name' => 'governo_municipal_ie:create', 'description' => '' ]);
    Permission::create([ 'name' => 'governo_municipal_ie:update', 'description' => '' ]);
    Permission::create([ 'name' => 'governo_municipal_ie:show', 'description' => '' ]);
    Permission::create([ 'name' => 'governo_municipal_ie:cancel', 'description' => '' ]);
    Permission::create([ 'name' => 'governo_municipal_ie:delete', 'description' => '' ]);

    Permission::create([ 'name' => 'governo_municipal_endereco:create', 'description' => '' ]);
    Permission::create([ 'name' => 'governo_municipal_endereco:update', 'description' => '' ]);
    Permission::create([ 'name' => 'governo_municipal_endereco:show', 'description' => '' ]);
    Permission::create([ 'name' => 'governo_municipal_endereco:cancel', 'description' => '' ]);
    Permission::create([ 'name' => 'governo_municipal_endereco:delete', 'description' => '' ]);

    Permission::create([ 'name' => 'governo_municipal_contato:create', 'description' => '' ]);
    Permission::create([ 'name' => 'governo_municipal_contato:update', 'description' => '' ]);
    Permission::create([ 'name' => 'governo_municipal_contato:show', 'description' => '' ]);
    Permission::create([ 'name' => 'governo_municipal_contato:cancel', 'description' => '' ]);
    Permission::create([ 'name' => 'governo_municipal_contato:delete', 'description' => '' ]);

    $permissions = Permission::get();
    foreach($permissions as $permission)
      RolePermission::create([ 'role_id' => 1, 'permission_id' => $permission->id ]);

    UsersRoles::create([ 'user_id' => 2, 'role_id' => 1, 'start_datetime' => date('Y-m-d H:i:00') ]);

    PessoaTipo::create([ 'id' => 1, 'descricao' => 'Empresa' ]);
    PessoaTipo::create([ 'id' => 2, 'descricao' => 'Fornecedor' ]);
    PessoaTipo::create([ 'id' => 3, 'descricao' => 'Cliente' ]);
    PessoaTipo::create([ 'id' => 4, 'descricao' => 'Funcionário' ]);
    PessoaTipo::create([ 'id' => 5, 'descricao' => 'Tercerizado ' ]);
    PessoaTipo::create([ 'id' => 6, 'descricao' => 'Candidato' ]);
    PessoaTipo::create([ 'id' => 7, 'descricao' => 'Visitante' ]);
    PessoaTipo::create([ 'id' => 8, 'descricao' => 'Governo Federal' ]);
    PessoaTipo::create([ 'id' => 9, 'descricao' => 'Governo Estadual' ]);
    PessoaTipo::create([ 'id' => 10, 'descricao' => 'Governo Municipal' ]);

    Marca::create([ 'descricao' => 'Scânia' ]);
    Marca::create([ 'descricao' => 'Volvo' ]);
    Marca::create([ 'descricao' => 'Mercedes' ]);
    Marca::create([ 'descricao' => 'Cummins' ]);
    Marca::create([ 'descricao' => 'Ford' ]);
    Marca::create([ 'descricao' => 'Volkswagen' ]);

    ProdutoTipo::create([ 'descricao' => 'Scanners de Diag.' ]);
    ProdutoTipo::create([ 'descricao' => 'Software de Terceiros' ]);
    ProdutoTipo::create([ 'descricao' => 'Serviços de Instalações' ]);

    Produto::create([ 'produto_tipo_id' => 1, 'descricao' => 'Inst. Scânia SDP3', 'servico' => true ]);
    Produto::create([ 'produto_tipo_id' => 1, 'descricao' => 'Inst. Scânia Completo', 'servico' => true ]);
    Produto::create([ 'produto_tipo_id' => 1, 'descricao' => 'Inst. Volvo Tech Tool', 'servico' => true ]);
    Produto::create([ 'produto_tipo_id' => 1, 'descricao' => 'Inst. Volvo Tech Tool + Prog. Files', 'servico' => true ]);
  }
}