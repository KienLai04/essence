<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $men_img = [
            'https://static.zara.net/assets/public/ee09/3894/430f46ce996d/a98c746dcbbb/04825702403-ult/04825702403-ult.jpg?ts=1715600738056&w=364',
            'https://static.zara.net/assets/public/86f5/923a/7cfc4233b833/2431ec5775fb/06861303250-p/06861303250-p.jpg?ts=1715326808459&w=364',
            'https://static.zara.net/assets/public/3e6f/b1c7/975b416d9bd2/dbb88c4861ac/04851730403-p/04851730403-p.jpg?ts=1715178555568&w=364',
            'https://static.zara.net/assets/public/ca05/1ee2/e20c46d4911d/8da0f96aceb9/04854703044-ult/04854703044-ult.jpg?ts=1715600737915&w=364',
            'https://static.zara.net/assets/public/2d3f/3872/bb5e4526b145/e381265aa021/04582636403-p/04582636403-p.jpg?ts=1715611738668&w=364',
            'https://static.zara.net/assets/public/86c7/161d/f73b498d9731/b289a13bffd7/03666131250-ult/03666131250-ult.jpg?ts=1715615611215&w=364',
            'https://static.zara.net/assets/public/bfa7/1c5f/a9944f809f8d/3dea625733ce/04856708250-ult/04856708250-ult.jpg?ts=1715600737841&w=364',
            'https://static.zara.net/assets/public/c132/7ead/c9bf43fa93de/b81cb3378395/04855699403-p/04855699403-p.jpg?ts=1715326806480&w=364',
            'https://static.zara.net/assets/public/781a/dea5/5b004349b168/f7185ceabc40/04864715405-ult/04864715405-ult.jpg?ts=1715600737348&w=364',
            'https://static.zara.net/assets/public/ae18/466a/3a61478f92be/402f1535bdb9/03666133250-p/03666133250-p.jpg?ts=1715612392862&w=364',
            'https://static.zara.net/assets/public/b278/bfbd/f9274643b31a/00e737c8dea7/04581636403-p/04581636403-p.jpg?ts=1715097187250&w=364',
            'https://static.zara.net/assets/public/0b8f/66eb/da0146199937/07f2211feb63/02795432300-p/02795432300-p.jpg?ts=1715868791813&w=364',
        ];
        $men_name = [
            'Áo sơ mi', 'Áo polo', 'Áo thun', 'Quần đùi', 'Quần bò', 'Bộ Com Lê', 'Áo khoác', 'Áo len', 'Áo Vest', 'Quần tây', 'Quần Jogger', 'Áo Blazer'
        ];
        $women_img = [
            'https://static.zara.net/assets/public/e6db/7f22/895a45deb83d/014658742768/04043060711-p/04043060711-p.jpg?ts=1715257388437&w=158',
            'https://static.zara.net/assets/public/2110/8d40/67f64d5eb05d/f24ff0b99a47/04786051800-510-p/04786051800-510-p.jpg?ts=1714383481816&w=158',
            'https://static.zara.net/assets/public/9f38/fc8d/717943858bf2/3bbc373a43be/02183060051-15-p/02183060051-15-p.jpg?ts=1712160350225&w=158',
            'https://static.zara.net/assets/public/da6d/9716/2310418da682/0197b57f286f/03357183044-p/03357183044-p.jpg?ts=1715170809748&w=158',
            'https://static.zara.net/assets/public/29a8/3f3e/738847999461/6a5dc59f4d85/03137482520-p/03137482520-p.jpg?ts=1714664998929&w=158',
            'https://static.zara.net/assets/public/f7ac/edff/132d4e1b9e21/bb17a72cdba3/03324505712-p/03324505712-p.jpg?ts=1715257375793&w=158',
            'https://static.zara.net/assets/public/1879/a641/a3504af8b462/c618af7223eb/03653012321-p/03653012321-p.jpg?ts=1715093545194&w=158',
            'https://static.zara.net/assets/public/c88d/1a2d/066549a386da/9035bf178e93/06895073942-1-p/06895073942-1-p.jpg?ts=1715784661406&w=158',
            'https://static.zara.net/assets/public/a090/9011/644447bbb9bb/d0f833f3a062/07938527113-p/07938527113-p.jpg?ts=1715877069992&w=158',
            'https://static.zara.net/assets/public/0475/72ae/b9e6466aaa47/45e5be305d0f/02996708505-p/02996708505-p.jpg?ts=1715171880363&w=158',
            'https://static.zara.net/assets/public/ea96/02b5/647e4d6abf8f/5c7f6de2f82b/03097177707-001-p/03097177707-001-p.jpg?ts=1713284124421&w=158',
            'https://static.zara.net/assets/public/2ab1/bf79/8e5b43518aa3/ae877a601ecf/03083151250-p/03083151250-p.jpg?ts=1715257384323&w=158',
            'https://static.zara.net/assets/public/bcc6/c9ee/a8394a8cb711/7a463166feb7/09878091251-p/09878091251-p.jpg?ts=1706259806480&w=158',
        ];
        $women_name = [
            'Áo Gi Lê', 'Chân Váy', 'Quần Short', 'Áo Sơ Mi', 'Áo Phông', 'Áo Khoác', 'Áo Len', 'Áo Blazer'
        ];
        $color = ['Đen', 'Trắng', 'Xanh', 'Đỏ', 'Vàng', 'Hồng', 'Tím', 'Nâu', 'Xám'];
        $material = ['Cotton', 'Lanh', 'Len', 'Da', 'Jeans', 'Polyester', 'Silk', 'Wool', 'Cashmere', 'Linen'];

        $categoryId = mt_rand(1, 2); 
        $prices = range(200000, 1500000, 100000);
        $salePrices = range(0, 100000, 10000);

        if ($categoryId === 1) {
            $name = fake()->randomElement($men_name);
            $img = fake()->randomElement($men_img);
        } else {
            $name = fake()->randomElement($women_name);
            $img = fake()->randomElement($women_img);
        }

        return [
            'name' => $name .' '. fake() -> randomElement($material) . ' ' . fake() -> randomElement($color),
            'img' => $img,
            'price' => fake()->randomElement($prices),
            'sale_price' => fake()->randomElement($salePrices),
            'status' => mt_rand(0,2),
            'description' => fake()->sentence(),
            'category_id' => $categoryId,
        ];
    }
}
