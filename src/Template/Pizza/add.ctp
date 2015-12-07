<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Pizza'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="pizza form large-9 medium-8 columns content">
    <?= $this->Form->create($pizza) ?>
    <fieldset>
        <legend><?= __('Add Pizza') ?></legend>
        <?php
            echo $this->Form->input('PizzaSize');
            echo $this->Form->input('CrustType');
            echo $this->Form->input('Toppings');
            echo $this->Form->input('Quantity');
            echo $this->Form->input('Address');
            echo $this->Form->input('City');
            echo $this->Form->input('Province');
            echo $this->Form->input('PostalCode');
            echo $this->Form->input('Contact');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
