<?php 
    
    use Senun\Widget\Form;

?>
<div class="wg12">
    <h1 class="ct_tx_primary tx_right">Update</h1>
</div>
<div class="wg12"><?php echo $error; ?></div>
<div class="wg12">
<form action="" method="post" enctype="multipart/form-data">

<input type="hidden" name="imageHidden" value="<?php echo $row->getImage(); ?>" />    
<input type="hidden" name="id" value="<?php echo $row->getId(); ?>" />    
        <div class="row">
            <div class="wg4 wg_tablet6 wg_phone12 fill_mobile_outside_bottom">
            <label for="firstName" class="expand">First Name:</label>
                <input type="text" name="firstName" id="firstName" class="expand" value="<?php echo $input->post('firstName', $row->getFisrtName()); ?>" required />
            </div>
            <div class="wg4 wg_tablet6 wg_phone12 fill_mobile_outside_bottom">
            <label for="lastName" class="expand">Last Name:</label>
                <input type="text" name="lastName" id="lastName" class="expand" value="<?php echo $input->post('lastName', $row->getLastName()); ?>" required />
            </div>
            <div class="wg4 wg_tablet12 fill_mobile_outside_bottom">
            <label for="age" class="expand">Age:</label>
            <select name="age" id="age" class="expand">
                <?php 

                    for ($i=18; $i<=60; $i++)
                    {
                       $ageArr[$i] = $i;
                    }    

                    $option = new Form\Option($ageArr, $input->post('age', $row->getAge()));
                    echo $option->getElement();
                
                ?>
            </select>
            </div>
        </div>
        <div class="row">
            <div class="wg6 wg_tablet12 fill_mobile_outside_bottom">
            <label for="email" class="expand">Email:</label>
                <input type="email" name="email" id="email" class="expand" value="<?php echo $input->post('email', $row->getEmail()); ?>" required />
            </div>
            <div class="wg6 wg_tablet12 fill_mobile_outside_bottom">
            <label for="password" class="expand">Password:</label>
                <input type="password" name="password" id="password" class="expand" value="<?php echo $input->post('password', $row->getPassword()); ?>" required />
            </div>
        </div>
        <div class="wg12 fill_outside_bottom">
            <label for="image" class="expand">Image:</label>
            <input type="file" name="image" id="image" class="expand" />
        </div>
        <div class="wg12 fill_outside_bottom">
            <fieldset>
                <legend>I'm:'</legend>
            <ul class="lt_horizontal">
                <li class="fill_inside_right">
                    <?php 

                        $radio = new Form\Radio('gender', 'male');
                        $radio->setAttr(new Senun\Widget\Create\Attr('id', 'gender_male'));
                        $radio->setChecked($input->post('gender', $row->getGender()));

                        echo $radio->getElement();
                    ?>
                    <label for="gender_male">a man</label>
                </li>
                <li class="fill_inside_left">
                    <?php 

                        $radio = new Form\Radio('gender', 'female');
                        $radio->setAttr(new Senun\Widget\Create\Attr('id', 'gender_female'));
                        $radio->setChecked($input->post('gender', $row->getGender()));

                        echo $radio->getElement();
                    ?>
                        <label for="gender_female">a woman</label>
                    </li>
            </ul>    
            </fieldset>
        </div>

        <div class="wg12 fill_outside_bottom">
            <fieldset>
                <legend>Show profile of:</legend>
            <ul class="lt_horizontal">
                <li class="fill_inside_right">
                    <?php 

                        $radio = new Form\Radio('showProfileOf', 'male');
                        $radio->setAttr(new Senun\Widget\Create\Attr('id', 'show_male'));
                        $radio->setChecked($input->post('showProfileOf', $row->getShowProfileOf()));

                        echo $radio->getElement();
                    ?>
                    <label for="show_male">Men</label>
                </li>
                <li class="fill_inside_left">
                    <?php 

                        $radio = new Form\Radio('showProfileOf', 'female');
                        $radio->setAttr(new Senun\Widget\Create\Attr('id', 'show_female'));
                        $radio->setChecked($input->post('showProfileOf', $row->getShowProfileOf()));

                        echo $radio->getElement();
                    ?>
                    <label for="show_female">women</label>
                </li>
            </ul>    
            </fieldset>
        </div>
        <div class="row">
        <div class="wg4 wg_tablet12 fill_mobile_outside_bottom">
            <label for="showPeopleOnRadius" class="expand">Show people on radius:</label>
            <select name="showPeopleOnRadius" id="showPeopleOnRadius" class="expand">
                <?php 

                    for ($i=1; $i<=10; $i++)
                    {
                       $raio = $i * 10;
                       $onRadiusArr[$raio] = $raio . 'km';
                    }    

                    $option = new Form\Option($onRadiusArr, $input->post('showPeopleOnRadius', $row->getShowPeopleOnRadius()));
                    echo $option->getElement();
                
                ?>
            </select>
        </div>
        <div class="wg4 wg_tablet6 fill_mobile_outside_bottom">
            <label for="show_min_age" class="expand">Show min. age:</label>
            <select name="showMinAge" id="show_min_age" class="expand">
                <?php 

                    for ($i=18; $i<=50; $i++)
                    {
                       $minArr[$i] = $i;
                    }    

                    $option = new Form\Option($minArr, $input->post('showMinAge', $row->getShowMinAge()));
                    echo $option->getElement();
                
                ?>
            </select>
        </div>
        <div class="wg4 wg_tablet6 fill_mobile_outside_bottom">
            <label for="showMaxAge" class="expand">Show max. age:</label>
            <select name="showMaxAge" id="showMaxAge" class="expand">
                <?php 

                    for ($i=19; $i<=60; $i++)
                    {
                       $maxArr[$i] = $i;
                    }    

                    $option = new Form\Option($maxArr, $input->post('showMaxAge', $row->getShowMaxAge()));
                    echo $option->getElement();
                
                ?>
            </select>
        </div>
        </div>

        <div class="wg12 fill_mobile_outside_bottom tx_right">
            <button type="submit" class="bt ct_bt_primary" name="submit">Sign Up</button>

        </div>    
</form>

<div class="expand fill_outside_top">
    <img src="<?php echo BASE_URL_UPLOAD . $row->getImage() . '?' . microtime(); ?>" alt="image id:<?php echo $row->getId(); ?>">
</div>

