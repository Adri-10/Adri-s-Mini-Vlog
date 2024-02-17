<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    private static $data = [];

    public static function getAllProduct()
    {
        return [
            0 => [
                'id' => 1,
                'category_id' => 1,
                'title' => 'THAYLOU MoriPods ANC Earbuds with DSP Call Noise Cancellation',
                'price' => '৳ 2,645',
                'description1'=>'Product name HAYLOU MoriPods ANC
                Bluetooth 5.2 wireless connection
                Charging interface Type C
                Communication range 10m (open environment without obstacles)
                Single play time 10.5 hours (ANC off)',
                'description2'=>'
                Headphone battery capacity 43 mAh
                310mAh Battery Charging Case
                Headphone charging time Approximately 1.5 hours
                Charging case Approximately 2 hours
                Audio codec SBC/AAC
                Supported Protocol A2DP/AVRCP/HFP',
                'image' => '1.jpg',
            ],
            1 => [
                'id' => 2,
                'category_id' => 2,
                'title'=>'fashion ladies Cotton short sleeve casual girl print new t-shirt',
                'price'=>'৳ 500',
                'description1'=>'Product Type: Ladies T-shirt & Tops
                Color:black
                Stylish: fashionable & Casual
                Gender: Women
                Sleeve Style:Short Sleeve
                Size :M L XL...',
                'description2'=>'Product Type: Ladies T-shirt & Tops Color:black Stylish: fashionable & Casual Gender: Women Sleeve Style:Short Sleeve Size :M L XL... . Size: M,L,XL M- Chest 36” length 27” L-Chest 38” length 28” XL-Chest 40” length 29”',
                'image' => '2.jpg',
            ],
            2 => [
                'id' => 3,
                'category_id' => 4,
                'title' => 'Womens Mini Backpack Luxury PU Leather Kawaii Backpack Cute Graceful Bagpack Small School Bags for Girls Bow-knot Leaf Hollow',
                'price' => '৳ 650',
                'description1'=>'Gender: Women/GirlMaterial: puStyle type: Shoulder bag,backpackClosed way: zipperStyle: Fashion trend, collegePattern design:patchworkApplicable scenes: leisure, banquet, travel, business',
                'description2'=>'Size: 18cm(L)x8cm(W)x19cm(H)/7.1(L)x3.14(W)x7.5(H)"Package Content: 1PC BagThere is a little smell from the new bag normally, it\'ll be dispersed through air.Note:1.All dimensions are measured by hand, there may be 2-3 cm deviations; 2.Due to the difference between different monitors, the picture may not reflect the actual color of the item. Thank you',
                'image' => '3.jpg',
            ],
            3 => [
                'id' => 4,
                'category_id' => 3,
                'title' => 'Black Stylish Casual Long Sleeve hoodi For Men',
                'price' => '৳ 560',
                'description1'=>'Band Name : A K P Fashion
Type : Full Sleeve Hoodie
Fabric : 100 % Cotton',
                'description2'=>'Type : Hoodie
GSM: 250+
Main Material: Cotton',
                'image' => '4.jpg',
            ],
            4 => [
                'id' => 5,
                'category_id' => 2,
                'title' => 'Technic Invite Only Pressed Pigment Palette',
                'price' => '৳ 399.00',
                'description1'=>'The latest design in our X15 Pressed Pigment Palettes! With a mixture of pressed glitters, foiled shimmers and buttery matte shades.
A mixture of pinks, berries and neutral tones',
                'description2'=>'Suitable for Vegans
Suitable for Vegetarians ',
                'image' => '6.jpg',
                ],
            5 => [
                'id' => 6,
                'category_id' => 4,
                'title' => 'Gown designed 1piece long kurti, China Lilen clothes Fashionable stitched long kurti For Stylish Women / Girls',
                'price' => '৳ 399',
                'description1'=>'Product type: Kurti
Main material: Lily Cotton and Digital printed.
Size : 38 40 42 44 inch
Length : 52 inch
Gender: Women',
                'description2'=>'Easy to wash
Perfect fitting
Comfortable & soft
High quality fabric, stylish design, and comfortable.',
                'image' => '5.jpg',
                ],
            6 => [
                'id' => 7,
                'category_id' => 2,
                'title' => 'Victoria Secret Bombshell Intense Eau de Parfum Rollerball - 7ml',
                'price' => '৳ 1,520',
                'description1'=>'Brand	Victoria\'s Secret
Item Form	Liquid
Item Volume	1.7 Fluid Ounces
Scent	Bombshell Intense
Fragrance Concentration	eau_de_parfum',
                'description2'=>'Scent notes of lush cherry, red peony, and sultry vanilla.
Eau de Parfum is our most concentrated, pure version of the fragrance.
Layer on top of matching Victoria’s Secret Bombshell Fine Fragrance Lotion for a long-lasting fragrance experience.
TSA-friendly size, perfect for travel.
Fragrance type: Chypre Fruity Floral
7 ml/.23 oz.
',
                'image' => '8.jpg',
            ],
            7 => [
                'id' => 8,
                'category_id' => 3,
                'title' => 'Winter Premium Sweatshirt For Men',
                'price' => '৳ 269, Color Family Black',
                'description1'=>'Product Type: Sweat Shirt
Material: Cotton
Gender: Men
Fit Type: Regular Fit
Stylish Design
100% QC Pass.
Export Quality Swing
GSM: 300 (+-10)',
                'description2'=>'Occasion: Casual Winter Wear and sports.
7 days Return Easy Return
Made in: Bangladesh
Print QC Passed
Size Chart:
M - Chest – 37/38", Length – 28”
L - Chest – 39/40" ,Length - 29"',
                'image' => '7.jpg',
            ],
            8 => [
                'id' => 9,
                'category_id' => 4,
                'title' => 'POWER ENGAGE-FLEX +100 Running Sneaker for Women',
                'price' => '৳ 2,699',
                'description1'=>'',
                'description2'=>'',
                'image' => '9.jpg',
            ],
            9 => [
                'id' => 10,
                'category_id' => 1,
                'title' => 'Infinix Hot 12 Play 4GB RAM/128GB Storage',
                'price' => '৳ 14,499',
                'description1'=>'PRODUCT DETAILS: EngageFlex is Power’s new lightweight running shoe. Its outsole is made of EVA and features Power’s FXS technology, molded grooves that deliver the ultimate flexible experience.Made',
                'description2'=>'EngageFlex is Power’s new lightweight running shoe. Its outsole is made of EVA and features Power’s FXS technology, molded grooves that deliver the ultimate flexible experience.',
                'image' => '10.jpg',
            ],
            10 => [
                'id' => 11,
                'category_id' => 5,
                'title' => '6Pair/Set Bohemian Earring Set Ethnic Style Carved Earrings',
                'price' => '৳ 159',
                'description1'=>'6Pair/Set Bohemian Earring Set Ethnic Style Carved Earrings
*Welcome to the Enacolor Jewelry Store .Happy shopping!
*shopping tips:
1.shopping problems,please contact our coustomer service.
2.products from china,Estimated Ship time is approximately 2-5 days from Order Date,normally it will arrive in about 12-20 working days;
3.all products in this shop are wholesale prices;',
                'description2'=>'4.full store activity,5-60% off discount;
5.before ordering,receive coupons,enjoy more benefits (enter the shop home page toreceive);',
                'image' => '11.jpg',
            ],
            11 => [
                'id' => 12,
                'category_id' => 5,
                'title' => 'Emporio Armani - Ar2513 - Leather Brown Chronograph Watch For Men',
                'price' => '৳ 35,000.',
                'description1'=> 'Upto 50% Off on mens watch price in bangladesh at Daraz bd. Buy wrist watch, brand watch and hand watch at best price in dhaka and countrywide.',
                'description2' => 'Movement: chronograph
                Strap circumference: 200+/- 5mm
                Quartz Movement
                Case Diameter: 43mm
                Water resistant to 50m (165ft: in general, suitable for short periods of recreational swimming, but not diving or snorkeling',
                'image' => '12.jpg',
            ],
            ];
    }
    public static function getProductCategoryId($id)
    {
        foreach (self::getAllProduct() as $product)
        {
            if ($product['category_id'] == $id)
            {
                array_push(self::$data,$product);
            }
        }
        return self::$data;
    }
    public static function getProductById($id)
    {
        foreach (self::getAllProduct() as $product)
        {
            if ($product['id']== $id)
            {
                return $product;
            }
        }
    }
}
