<?php
/* Tpl variables

locations

 * */
//var_dump($location);
//exit();
?>


<div class="wrap-location-select">
    <select id="first-disabled" data-done-button="true" class="selectpicker" data-hide-disabled="true" data-live-search="true" data-header="Выберите регион">
        <optgroup disabled="disabled" label="disabled">
            <option>Hidden</option>
        </optgroup>
        <optgroup>
            <option><?php echo $location; ?></option>
            <option>Івано-Франківська обл.</option>
            <option>Одеса</option>
            <option>Київ</option>
            <option>Миколаївська обл.</option>
            <option>Вінницька обл.</option>
            <option>Одеська обл.</option>
            <option>Волинська обл.</option>
            <option>Полтавська обл.</option>
            <option>Дніпропетровська обл.</option>
            <option>Рівненська обл.</option>
            <option>Донецька обл.</option>
            <option>Сумська обл.</option>
            <option>Житомирська обл.</option>
            <option>Тернопільська обл.</option>
            <option>Закарпатська обл.</option>
            <option>Харківська обл.</option>
            <option>Запорізька обл.</option>
            <option>Херсонська обл.</option>
            <option>Кіровоградська обл.</option>
            <option>Хмельницька обл.</option>
            <option>Київська обл.</option>
            <option>Черкаська обл.</option>
            <option>Чернівецька обл.</option>
            <option>Луганська обл.</option>
            <option>Чернігівська обл.</option>
            <option>Львівська обл.</option>
        </optgroup>
    </select>
</div>
