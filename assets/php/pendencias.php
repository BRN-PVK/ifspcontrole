<?php
    session_start();
    include 'connect.php';
    include 'header.php';

    /* Main */
    echo '<div id="main" class="alt">';
        echo '<section id="one">';
            echo '<div class="inner">';
                echo '<header class="major">';
                    echo '<h1>Listagem de lojas conveniadas com pendências</h1>' ;
                echo '</header>';
                echo "<table class = 'table table-striped'>";
                    $resultado = mysqli_query($conn, "select * from lojas where pendencias > 0");
                    while($pendencias = mysqli_fetch_assoc($resultado)) {
                    echo "<form action='pendencias1.php' method='post'>";
                        echo '<tr>';
                            echo '<td>';
                                echo "<input type='text' name='nome' value=".$pendencias['nome']." readonly>";
                            echo '</td>';
                            echo '<td>';
                                echo "<input type='text' name='pendencia' value=".$pendencias['pendencias']." readonly>";
                            echo '</td>';
                            echo '<td>';
                                echo '<ul class="actions"><li><input type="submit" value="REMOVER PENDÊNCIA" class="primary"/></li></ul>';
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