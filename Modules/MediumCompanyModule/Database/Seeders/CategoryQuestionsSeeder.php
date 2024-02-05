<?php

namespace Modules\MediumCompanyModule\Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Modules\MediumCompanyModule\App\Models\Category_medcom;
use Modules\MediumCompanyModule\App\Models\Questions_medcom;

class CategoryQuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'categories' => [
                ['title' => 'استراتژی و چشم انداز', 'description' => '...', 'is_active' => true, 'order' => 1 , 'created_at' => Carbon::now() , 'updated_at' => Carbon::now()],
                ['title' => 'فرآیند ها', 'description' => '...', 'is_active' => true, 'order' => 2, 'created_at' => Carbon::now() , 'updated_at' => Carbon::now()],
                ['title' => 'سیستم های تجاری', 'description' => '...', 'is_active' => true, 'order' => 3, 'created_at' => Carbon::now() , 'updated_at' => Carbon::now()],
                ['title' => 'کارکنان', 'description' => '...', 'is_active' => true, 'order' => 4, 'created_at' => Carbon::now() , 'updated_at' => Carbon::now()],
                ['title' => 'مشتریان ، تامین کنندگان و مردم', 'description' => '...', 'is_active' => true, 'order' => 5, 'created_at' => Carbon::now() , 'updated_at' => Carbon::now()],
                ['title' => 'محیط', 'description' => '...', 'is_active' => true, 'order' => 6, 'created_at' => Carbon::now() , 'updated_at' => Carbon::now()],
                ['title' => 'ارزش ها و فرهنگ', 'description' => '...', 'is_active' => true, 'order' => 7, 'created_at' => Carbon::now() , 'updated_at' => Carbon::now()],
            ],
            'questions' => [
                'استراتژی و چشم انداز' => [
                    'کسب و کار ما دارای برنامه ریزی استراتژیک و برنامه ریزی علمیاتی می‌باشد .',
                    'از همسویی استراتژی‌ها(مسیر تحقق اهداف) و چشم انداز کسب و کار اطمینان حاصل شده است.',
                    ' به طور منظم میزان تحقق اهداف استراتژیک در کسب و کار ما پایش می گردد. ',
                    'همواره اطمینان حاصل می شود که منابع مورد نیاز برای تحقق اهداف استراتژیک فراهم شده است. ',
                    ' کسب و کار ما از سلامت و پایداری منابع خویش (کارکنان و منابع مالی و ... ) اطمینان حاصل نموده است. ',
                    'ارزش های سازمانی برای تحقق چشم انداز شناسایی و در کسب و کار ما نهادینه شده است.',
                    ' استراتژی و چشم انداز کسب و کار ما به ذینفعان اطلاع رسانی شده و از همسویی آن ها با چشم انداز و استراتژی‌ها اطمینان حاصل گردیده است. ',
                ],
                'فرآیند ها' => [
                    'مفهوم کار و محصول با کیفیت در سازمان ما انجام پذیرفته شده است و همه ارکان سازمان در جهت بهبود آن گام بر می‌‌دارند.',
                    'فرآیندهای کسب و کار در سازمان ما شناسایی، طراحی، پیاده سازی و مدیریت گردیده است.',
                    'فرآیندهای کسب و کار متناسب با نیازهای حال و آینده سازمان طراحی شده است.',
                    'فرآیند ها درسراسر سازمان ما یکپارچه شده اند.',
                    ' فرآیندهای کسب و کار به صورت مداوم بهبود می یابند. ',
                    'محصولات یا خدمات در کسب و کار ما با توجه به نیازها و انتظارات مشتریان بهبود می یابد.',
                    'ارتباطات فرآیندهای کسب و کار به درستی احصا و مدیریت می گردد. ',
                ],
                'سیستم های تجاری' => [
                    'برنامه ریزی بخش‌های مختلف سازمان همتراز و طبق مبانی اصولی انجام می‌پذیرد. ',
                    'سیستم مالی کسب و کار قوی و اثربخش می باشد. ',
                    ' کلیه نرم افزارها و سامانه‌های کسب و کار به صورت مداوم نظارت می‌شود. ',
                    ' کسب و کار ما از سیستم اطلاعاتی با کیفیت بالا برخوردار است که اطلاعات و دنش مورد نیاز برای تصمیم گیری را در اختیار ما قرار می دهد. ',
                    'ما سیستم های مدیریت ریسک موثر ی داریم.',
                    'کسب و کار ما نظام مدیریت عملکرد اثربخشی را دارد.',
                    ' نظام مدیریت دانش در کسب و کار ما به خوبی استقرار یافته و از آن بهره برداری لازم انجام می‌پذیرد.',
                ],
                'کارکنان' => [
                    'کسب و کار ما سیستم جذب و استخدام مناسبی دارد.',
                    ' ما به طور مداوم شایستگی افراد خود را توسعه می دهیم. ',
                    ' کسب و کار ما یک سیستم ارزیابی عملکرد کارکنان کارا و اثربخش دارد. ',
                    ' کارکنان ما در سراسر سازمان ارتباط مؤثری جهت ارائه نظرات و پیشنهادات با مدیران ارشد دارند. ',
                    'ما تیم ها ی خود را از نظر مهارت ها، دانش و نگرش توسعه می دهیم.',
                    'رویه‌ها، دستورالعمل ها و آیین نامه های حوزه منابع انسانی برای پوشش کلیه نیازهای این بخش تدوین شده است. ',
                    'کارکنان ما به طور مؤثر در سراسر سازمان با یکدیگر ارتباط برقرار می کنند.',
                ],
                'مشتریان ، تامین کنندگان و مردم' => [
                    'کسب و کار ما برای تجارب مشتری ارزش قایل هست و مستمر آن را رصد و پایش می نماید.',
                    'کسب و کار ما به صورت مستمر گزارشات مورد نیاز سهامداران را در اختیار ایشان قرار می دهد و نظرات ایشان را در امور جاری پیاده سازی می کند. ',
                    'شکایات ، نظرات و انتقادهای مشتریان به صورت مستمر دریافت، تحلیل و پاسخ داده می‌شوند.',
                    'کسب و کار ما به صورت مستمر با ذی نفعان خویش نظیر مشتریان، تأمین کنندگان و ... ارتباط مؤثر دارد. ',
                    'ما فرهنگ سازمانی حاکم بر سازمان را می‌شناسیم و در جهت توسعه آن گام برمی‌داریم. ',
                    ' ما در حفظ مشتریان فعلی موفق عمل می کنیم. ',
                    'ما در جذ ب مشتریان جدید موفق عمل می کنیم.',
                ],
                'محیط' => [
                    ' تأثیرات عوامل و متغیرهای سیاسی بیرونی بر کسب و کار به طور مستمر رصد و تحلیل می شود. ',
                    'تأثیرات عوامل و متغیرهای اقتصادی بیرونی بر کسب و کار به طور مستمر رصد و تحلیل می شود.',
                    ' تأثیرات سایر عوامل و متغیرهای بیرونی بر کسب و کار به طور مستمر رصد و تحلیل می شود. ',
                    ' تحلیل های بازار به صورت منظم در کسب و کار ما انجام می‌پذیرد. ',
                    'وضعیت جمعیت شناسی بازار به صورت مستمر رصد و تحلیل می شود. ',
                    'پیشرفت های فناوری در بازار به صورت مستمر رصد و تحلیل می شود.',
                    'ما شناخت بسیار خوبی از رقبا خود در بازار داریم. ',
                ],
                'ارزش ها و فرهنگ' => [
                    ' ما ارز ش های سازمان مشترک با سایر ذی نفعان را تعریف و منتشر کرده ایم. ',
                    'ما انرژی خود را برآنچه برای سازمانمان مهم است متمرکز می کنیم. ',
                    'فر هنگ سازمان ما به طور کامل از ارزش های منتشرشده ما حمایت می کند.',
                    'نقشه راه توسعه کسب و کار ما به طور شفاف تدوین و اجرا می گردد. ',
                    ' ما به طور منظم ارزش های سازمان خود را ارزیابی و اصلاح می نماییم. ',
                    'ما کارکنان و سایر ذینفعان را تشویق می کنیم تا ما را در مورد ارزش های سازمانی به چالش بکشند. ',
                    'ما تحقق ارزش‌های سازمانی خویش را در داخل و خارج از سازمان رصد می نماییم. '
                ],
            ],
        ];

        Category_medcom::insert($data['categories']);


        $questionsData = [];
        foreach ($data['questions'] as $categoryTitle => $questions) {
            $category = Category_medcom::where('title', $categoryTitle)->first();

            foreach ($questions as $question) {
                $questionsData[] = ['category_medcom_id' => $category->id, 'question' => $question , 'created_at' => Carbon::now() , 'updated_at' => Carbon::now()];
            }
        }

        Questions_medcom::insert($questionsData);
    }
}
