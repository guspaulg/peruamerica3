div class="container clearfix">


    <div class="panel col-md-12 col-sm-12 col-xs-12">
        
    </div>

    <div class="panel2 col-md-12 col-sm-12 col-xs-12  ">
        
       

        <table class="">

            <thead>

                <tr>
                  <th>Codigo de compra</th>
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

                        <td> <?php echo $pedido->estado ?> </td>

                        <td> <img src="/imagenes/lupa.png"> </td>

                    </tr>

                <?php 
                } ?>
            </tbody>
        </table>
    </div>


</div>

