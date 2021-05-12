<?php
$sweets = array(
    'puff'=>'Sesame Seed Puff',
    'square'=>'Coconut Milk Gelatin Square',
    'cake'=>'Brown Sugar Cake',
    'ricemeat'=>'Sweet Rice and Meat',
);

print'<select name="sweet">';

foreach ($sweets as $option => $label){
    print '<option value="'.$option.'"';
    if($option == $defaults['sweet']){
        print 'selected';
    }
    print "> $label</option><br>";
}
print '</select>';