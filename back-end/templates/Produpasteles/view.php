<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produpastele $produpastele
 */
?>
<div class="row mb-5">
    <aside class="container">
        <div class="side-nav text-center">
            <?= $this->Html->link(__('Editar Producto'), ['action' => 'edit', $produpastele->id_producto], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Lista de Productos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive d-flex justify-content-center align-items-center">
        <div class="produpasteles view content">
            <h3 class="text-center"><?= h($produpastele->id_producto) ?></h3>
            <table>
                <tr>
                    <th class="text-center"><?= __('Identificador') ?></th>
                </tr>
                <tr>
                    <td class="text-center"><?= $this->Number->format($produpastele->id_producto) ?></td>
                </tr>
                <tr>
                    <th class="text-center"><?= __('Nombre del Producto') ?></th>
                </tr>
                <tr>
                    <td class="text-center"><?= h($produpastele->nombre_p) ?></td>
                </tr>
                <tr>
                    <th class="text-center"><?= __('Tipode de Producto') ?></th>
                </tr>
                <tr>
                    <td class="text-center"><?= h($produpastele->tipo_prod) ?></td>
                </tr>
                <tr>
                    <th class="text-center"><?= __('Descripcion') ?></th>
                </tr>
                <tr>
                    <td class="text-center"><?= h($produpastele->descripcion) ?></td>
                </tr>
                <tr>
                    <th class="text-center"><?= __('Precio') ?></th>
                </tr>
                <tr>
                    <td class="text-center"><?= $this->Number->format($produpastele->precio) ?></td>
                </tr>
                <tr>
                    <th class="text-center"><?= __('Cantidad Disponible') ?></th>
                </tr>
                <tr>
                    <td class="text-center"><?= $this->Number->format($produpastele->cantidad_disponible) ?></td>
                </tr>
                <tr>
                    <th class="text-center"><?= __('Peso Gramos') ?></th>
                </tr>
                <tr>
                    <td class="text-center"><?= $this->Number->format($produpastele->peso) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
