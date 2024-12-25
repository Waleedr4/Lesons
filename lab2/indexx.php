//  إ نشاء مصفوفة
$colors = array("Red", "Green", "Blue");
    

//الوصول إلى عنصر في المصفوفة
echo $colors[0]; // سيطبع: Red
   


//إضافة عنصر جديد إلى المصفوفة
$colors[] = "Yellow";



//حساب عدد العناصر في المصفوفة
$count = count($colors);



// إنشاء سلسلة نصية
$text = "Hello, World!";
    

      
// الوصول إلى طول السلسلة
$length = strlen($text);
   


// تحويل السلسلة إلى أحرف كبيرة
$uppercase_text = strtoupper($text);
   


// تقسيم السلسلة إلى أجزاء بناءً على فاصل محدد
$parts = explode(", ", $text);
    






