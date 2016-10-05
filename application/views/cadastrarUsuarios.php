
<div id="page-wrapper">

    <div class="col-lg-10">
        <h1 class="page-header">Novo usuário</h1>
    </div>
    <div class="col-lg-12">
        <form action=" <?= base_url() ?>usuario/cadastrar" method="post">
           

                <div class="col-md-10">     
                    <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" id="nomeUsuario" name="nomeUsuario" required>
                    </div>
                </div>

                <div class="col-md-5">     
                    <div class="form-group">
                        <label for="userName">Nome de usuário:</label>
                        <input type="text" class="form-control" id="userName" name="userName" required>
                    </div>
                </div>
                <div class="col-md-5">     
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" id="email" name="email" required>
                    </div>
                </div>

                <div class="col-md-6">     
                    <div class="form-group">
                        <label for="empresa">Empresa:</label>
                        <input type="text" class="form-control" id="empresa" name="empresa" required>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="status">Status:</label>
                        <select id="status" class="form-control" name="statusUsuarios" required>
                            <option value="0">----</option>
                            <option value="1">Ativo</option>
                            <option value="2">Inativo</option>              
                        </select>
                    </div>
                </div>
                <div class="row">                    
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="perfilUsuario">Perfil de Usuário:</label>
                            <select id="status" class="form-control" name="perfilUsuarios" required>
                                <option value="0">----</option>
                                <option value="1">Administrador</option>
                                <option value="2">SuperAdmin</option> 
                            </select>
                        </div>
                    </div>
                </div>    


                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="senha">Senha:</label>
                            <input type="password" class="form-control" id="senha" name="senhaUsuarios">
                        </div>
                    </div>
                    <div class="row">  
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="confirmaSenha">Confirma Senha:</label>
                                <input type="password" class="form-control" name="confirmarSenha">
                            </div>
                        </div>
                    </div>
            </br>
            <div style="text-align: left" class="col-lg-6">
                    <button type="submit" class="btn btn-primary">Enviar</button>

                </div> 
            <div style="text-align: right" class="col-lg-6">
                <button type="reset" class="btn btn-danger">Apagar</button>

                </div>

        </form>         
        <!-- FECHANDO AS DIVS PRINCIPAIS-->
    </div>

</div>  

