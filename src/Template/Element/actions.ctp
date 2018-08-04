<ul class="side-nav">
    <li class="heading"><?=__('Actions');?></li>
    <li><?= $this->Html->link(__('New '.$type),['action'=>'add']);?></li>
    <li><?= $this->Html->link(__('List '.$type.'s'),['action'=>'index']);?></li>
</ul>