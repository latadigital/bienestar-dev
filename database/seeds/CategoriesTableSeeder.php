<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        DB::table('categories')->delete();

        $categories = [
            [
                'id' => 1,
                'name' => 'Infantil',
                'slug' => 'infantil',
                'body' => 'Porque lo que les suceda a nuestros niños puede afectarles en el futuro, es importante saber cómo cuidarlos, cuáles son las enfermedades más comunes que pueden afectarlos y qué hacer para que crezcan sanos y felices. Ingrese aquí.',
                'icohome' => '/assets_web/img/iconos/icon-infantil.svg ',
                'iconav' => '/assets_web/img/iconos/icon-infantil-white.svg'
            ],

            [
                'id' => 2,
                'name' => 'Corazón',
                'slug' => 'corazon',
                'body' => 'La vista es uno de los sentidos más importantes ya que a través de ella captamos el 80% de la información del entorno. Sin embargo, nuestros ojos pueden enfermarse y dañarse. Infórmese acerca de las afecciones más comunes de la vista y sepa cómo prevenirlas o tratarlas. Ingrese aquí.',
                'icohome' => '/assets_web/img/iconos/icon-corazon.svg',
                'iconav' => '/assets_web/img/iconos/icon-corazon-white.svg'
            ],

            [
                'id' => 3,
                'name' => 'Sistema Respiratorio',
                'slug' => 'sistema-respiratorio',
                'body' => 'Un adulto lleva aire a sus pulmones y lo expulsa entre 12 y 20 veces por minuto, de manera automática. Pero las personas que aprenden a respirar de manera consciente pueden mejorar su salud física e incluso mental. Encuentre información relacionada con enfermedades respiratorias y algunos importantes consejos para mejorar la respiración. Ingrese aquí.',
                'icohome' => '/assets_web/img/iconos/icon-respiratorio.svg',
                'iconav' => '/assets_web/img/iconos/icon-respiratorio-white.svg'
            ],

            [
                'id' => 4,
                'name' => 'Nutrición',
                'slug' => 'nutricion',
                'body' => 'La nutrición aporta al organismo las sustancias para desarrollarse y sobrevivir. Una nutrición inadecuada puede conducir tanto a un sobrepeso como a un bajo peso, y ambos estados se relacionan con diferentes enfermedades. Opte por una vida sana e infórmese acerca de las ventajas de tener una buena nutrición, Ingrese aquí.',
                'icohome' => '/assets_web/img/iconos/icon-nutri.svg',
                'iconav' => '/assets_web/img/iconos/icon-nutricion-white.svg'
            ],

            [
                'id' => 5,
                'name' => 'Sistema Digestivo',
                'slug' => 'sistema-digestivo',
                'body' => 'Los hábitos de alimentación, el cigarrillo, el alcohol, la genética y otros factores pueden afectar el sistema digestivo. Encuentre información relacionada con enfermedades del estómago, del intestino y conozca algunos consejos prácticos para tratarlas. Ingrese aquí.',
                'icohome' => '/assets_web/img/iconos/icon-gastrico.svg',
                'iconav' => '/assets_web/img/iconos/icon-gastrico-white.svg'
            ],
            [
                'id' => 6,
                'name' => 'Dolor e Inflamación',
                'slug' => 'dolor-e-inflamación',
                'body' => 'El dolor y la inflamación surgen como una respuesta natural de nuestro organismo ante una lesión, y aunque muchas veces resultan desagradables e incómodos, suelen ser parte de un proceso de recuperación o de una alerta frente a una enfermedad. Ingrese aquí.',
                'icohome' => '/assets_web/img/iconos/icon-dolor.svg ',
                'iconav' => '/assets_web/img/iconos/icon-dolor-white.svg'
            ],
            [
                'id' => 7,
                'name' => 'Mental',
                'slug' => 'mental',
                'body' => 'El ritmo de vida acelerado, la competitividad del mundo laboral, dificultades familiares, el tipo de personalidad e incluso factores biológicos pueden ocasionar estrés, insomnio, ansiedad y otros trastornos. Ingresa aquí.',
                'icohome' => '/assets_web/img/iconos/icon-mental.svg',
                'iconav' => '/assets_web/img/iconos/icon-mental-white.svg'
            ],
            [
                'id' => 8,
                'name' => 'Visión',
                'slug' => 'vision',
                'body' => 'La vista es uno de los sentidos más importantes ya que a través de ella captamos el 80% de la información del entorno. Sin embargo, nuestros ojos pueden enfermarse y dañarse. Infórmese acerca de las afecciones más comunes de la vista y sepa cómo prevenirlas o tratarlas. Ingrese aquí.',
                'icohome' => '/assets_web/img/iconos/icon-vision.svg',
                'iconav' => '/assets_web/img/iconos/icon-vision-white.svg'
            ],
            [
                'id' => 9,
                'name' => 'Otros',
                'slug' => 'otros',
                'body' => 'La salud y el bienestar dependen en gran medida de lo que cada persona elija como estilo de vida. El conocmiento en esta materia puede hacer la diferencia entre preservar o ver afectada la salud. Para profundizar en este tema ingrese aquí.',
                'icohome' => '/assets_web/img/iconos/icon-nutricion.svg',
                'iconav' => '/assets_web/img/iconos/icon-otros-white.svg'
            ],
        ];

        DB::table('categories')->insert( $categories );
    }
  
}




