<div class="container clearfix">


    <div class="panel col-md-3 col-sm-4 col-xs-12">
        <div style="text-align:center;">
            <img src="/imagenes/usuario.png">
        </div></br></br>

        <div class="micuenta">MI CUENTA</div>

        <div class="apanel"><a href="/micuenta">Panel de la Cuenta</a></div>

        <div class="apanel"><a href="misd">Editar mi información</a></div>

        <div class="apanel"><a href="misd">Dirección de envío</a></div>

        <div class="panelselec">Mis Pedidos</div>

        <div class="apanel"><a href="misd">Consultas</a></div>
    </div>

    <div class="panel2 col-md-8 col-sm-7 col-xs-12  col-md-offset-1 col-sm-offset-1">
        
        <p class="tpanel"> PANEL DE CONTROL DE LA CUENTA <span class="line"></span></p>
        <p> Hola <strong> <?php echo $usuario->appaterno.' '.$usuario->apmaterno.' '.$usuario->nombres ;?> </strong>, desde el tablero de su cuenta, tienes la posibilidad de conocer las actividad recientes 
        y actualizar la información de tu cuenta. Selecciona entre los siguiente enlace para ver o editar la información.</p></BR></BR></BR>
        
        <p class="tpanel2">Tu información personal</p>

        <table class="">

            <thead>

                <tr>
                  <th>Codigo</th>
                  <th>Fecha de Compra</th>
                  <th>Detalles del Pedido</th>
                  <th> Costo</th>
                  <th> Estado</th>
                  <th> </th>

                </tr>
            </thead>

            <tbody>
                <?php
                foreach($pedidos as $pedido)
                { ?>
                    <tr>

                        <td><?php echo $pedido->codigo; ?></td>
                    
                        <td> <?php echo $pedido->created_at; ?></td>

                        <td> <?php echo $pedido->producto ?> </td>

                        <td> S/. <?php echo $pedido->precio?> </td>

                        <td> <?php echo $pedido->estado?> </td>

                        <td> <img src="/imagenes/lupa.png"> </td>

                    </tr>

                <?php 
                } ?>
            </tbody>
        </table>
    </div>


</div>

