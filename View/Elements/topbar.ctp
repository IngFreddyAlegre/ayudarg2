<?php if (AuthComponent::user()) : ?>
    <div class="topbar">
        <div class="institutions-switcher">
            <?php
                foreach($this->Session->read('Institutions') as $i) {
                    $options[$i['id']] = $i['name'];
                }
                echo __('Institutions').': '.$this->Form->select('institutions-switcher',$options,array('empty' => false));
            ?>
        </div>
        <div class="user">
            <label><?php echo __('User')?>:</label>
            <span><?php echo AuthComponent::user('username') ?></span>
            <?php echo $this->Html->link(__('Logout'),array('controller'=>'users', 'action'=>'logout')) ?>
        </div>
    </div>
<?php endif; ?>
