 <table>
    <tr>
    <th>id</th>
    <th>titulo</th>
    <th>texto</th>
    <th>autor</th>
    <th>texto Autor</th>
    <th>ação</th>
    </tr>
    <?php foreach($receitas as $receita){ ?>
    <tr>
    <td><?php echo $receita['Receita']['id'] ?></td>
    <td><?php echo $receita['Receita']['title'] ?></td>
    <td><?php echo $receita['Receita']['texto'] ?></td>
    <td><?php echo $receita['Autor']['name'] ?></td>
     <td><?php echo $receita['Autor']['texto'] ?></td>
<td><?php
        /*
         Html:link($string,$url,$options), similar a uma tag <a></a>
            A url pode ser passada como um array com o controlador, a action e as
            variáveis que ficaram acessíveis como parametro ou uma string da
            seguinte forma /controller/action/variavel  
            Vamos usar o array no exemplo

            //riopardo rt2012>
         */
         echo
            $this->Html->link('delelar',
            array('controller'=>"receitas","action"=>"delete",$receita['Receita']['id'])) ?>
        </td>
        </tr>
        <?php } ?> 
</table>

