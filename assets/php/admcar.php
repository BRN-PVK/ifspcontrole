<?php
    session_start();
    include 'connect.php';
    include 'header.php';

    /* Main */
    echo '<div id="main" class="alt">';
        echo '<section id="one">';
            echo '<div class="inner">';
                echo '<header class="major">';
                    echo '<h1>Gerenciar carros do estacionamento</h1>' ;
                echo '</header>';
                echo "<table class = 'table table-striped'>";
                    $resultado = mysqli_query($conn, "select * from carros");
                    while($carros = mysqli_fetch_assoc($resultado)) {
                    echo "<form action='admcar1.php' method='post'>";
                        echo '<tr>';
                            echo '<td>';
                                echo "<input type='text' name='id' value=".$carros['placa']." readonly>";
                            echo '</td>';
                            echo '<td>';
                                echo '<ul class="actions"><li><input type="submit" value="REGISTRAR PAGAMENTO" class="primary"/></li></ul>';
                            echo '</td>';
                        echo '</tr>';
                    echo '</form>';
                    }
                echo '</table>';
            echo '</div>';
        echo '</section>';
    echo '</div>';
    include 'footer.php';
?>