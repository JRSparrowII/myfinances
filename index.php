<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyFinances</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
</head> 
<body>
    <div class="conteudo-cabecalho">
        <div class="cabecalho-centro"           >
            <img src="./assets/logo.svg" alt="">

           
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                Nova transação
            </button>
        </div>   
    </div>
    <div class="principal" >
        <div class="secundaria" >
            <div class="item-card">
                <div>
                    <p>Entradas</p>
                    <img src="./assets/income.svg" alt="">
                </div>
                <strong>R$ 1000,00</strong>
            </div>
            <div class="item-card">
                <div>
                    <p>Saída</p>
                    <img src="./assets/outcome.svg" alt="">
                </div>
                <strong>R$ 1000,00</strong>
            </div>
            <div class="item-card colortotal">
                <div>
                    <p>Total</p>
                    <img src="./assets/total.svg" alt="">
                </div>
                <strong>R$ 1000,00</strong>
            </div>
        </div>
        <div class="conteudo-tabela">
            <table>
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Valor</th>
                        <th>Tipo de movimentação</th>
                        <th>Categoria</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Pizza</td>
                        <td class="cor-saida">-50</td>
                        <td>Saidas</td>
                        <td>Lanhes</td>
                        <td>Excluir</td>
                    </tr>
                    <tr>
                        <td>Projetos</td>
                        <td class="cor-entrada">1000</td>
                        <td>Entradas</td>
                        <td>Dinheiro Extra</td>
                        <td>Excluir</td>
                    </tr>
                    <tr>
                        <td>Peças do PC</td>
                        <td class="cor-saida">-500</td>
                        <td>Saidas</td>
                        <td>Equipamentos</td>
                        <td>Excluir</td>
                    </tr>
                    <tr>
                        <td>Queijo e Presunto</td>
                        <td class="cor-saida">-200</td>
                        <td>Saidas</td>
                        <td>Supermercado</td>
                        <td>Excluir</td>
                    </tr>
                </tbody>
              </table>
        </div>
    </div>
    

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Cadastrar transação</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-body-input">
                        <div class="input">
                            <input type="text" placeholder="Descrição da transação">
                        </div>
                        <div class="input">
                            <input type="number" placeholder="Valor">
                        </div>

                        <div class="radio">
                                <input type="radio" id="entrada" name="tipo_movimentacao" value="entrada">                                
                                <label for="entrada">
                                    <img src="./assets/income.svg" alt="">
                                    <span>Entrada</span>                                
                                </label>                        
                        

                                <input type="radio" id="saida" name="tipo_movimentacao" value="saida"> 
                                <label for="saida">                                
                                    <img src="./assets/outcome.svg" alt="">
                                    <span>Saída</span>
                                </label>
                                                       
                        
                            
                        </div>
                        
                        <div class="input">
                            <input type="text" placeholder="Categoria">
                        </div>
                        <div >
                            <button class="btn-cadastrar">Cadastrar</button>
                        </div>
                    </div>
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div> -->
            </div>
        </div>
    </div>


   
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

