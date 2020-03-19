<?php

namespace database\seeds;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
            'name' => 'Xiaomi Redmi Note 8 Pro Smartphone,6GB RAM 64GB ROM Mobilephone,Pantalla Completa de 6.53", MTK Helio G90T Octa Core,Quad Cámara(64MP + 8MP + 2MP + 2MP) Versión Global (Azul)',
                'price' => '224.0',
            'description' => 'Carga al 100% en 2 horas* Gran batería de 4500 mAh (típ), compatible con carga rápida de 18 W Cargador rápido de 18 W incluído A partir de 6 G de RAM
El primer smartphone en España con cuádruple cámara de 64 MP 64 MP y 4 cámaras.Cámara flagship. Ultra alta resolución, Cámara selfie de 20 MP Modo retrato con IA y ajuste del difuminado de fondo Selfies perfectos en cualquier momento Modo belleza optimizado para hacer fotos y grabar vídeo. El modo retrato te permite ajustar el difuminado del fondo y tomar selfies profesionales.
NFC multifunción, compatible con Google Play Convierte tu teléfono en una cartera
Pantalla FHD+ de 6,53”Protección contra las salpicaduras Corning Gorilla Glass 5 Protege el teléfono contra las salpicaduras y los derrames accidentales Reduce los posibles daños en la pantalla por caída Conector sellado Esquinas reforzadas Resistente al polvo y a las salpicaduras Resistencia del teléfono mejorad Ratio de pantalla del 91,4% Luz azul Certifiación de pantalla TÜV Rheinla
Procesador gaming Helio G90T Arquitectura Cortex-A76 Mejor rendimiento que el Snapdragon 710 Teléfono y procesador certificados con red de conexión TÜV Rheinland de alta velocidad Sistema de refrigeración líquida Disipación de calor para SoC y carga IC GPU de alto rendimiento.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'ANKENGS Protector de Pantalla para Xiaomi Redmi Note 8 Pro [3 Unidades], Xiaomi Redmi Note 8 Pro Cristal Templado [dureza 9H][Anti-Arañazos]Xiaomi Redmi Note 8 Pro Vidrio Templado película Protectora',
                'price' => '5.9',
                'description' => '[Perfectamente Adaptado]: Diseñado especialmente para proporcionar una gran protección a Xiaomi Redmi Note 8 Pro . Le aconsejamos que lea cuidadosamente nuestras instrucciones de instalación y el vídeo de instalación antes de instalarlo.
[Alta Definición y Sensibilidad]: El protector es ultra transparente y tiene alta definición para ofrecerle la máxima claridad. El material es TPU, que es muy ligero y tiene alta sensibilidad táctil. Ofrecemos al cliente la garantía de calidad y el servicio de posventa.
[Sin Burbujas ni Bordes Elevados]: Si lo prefiere, le recomendamos que lo instale en el baño, ya que reducirá el polvo flotante que queda en el teléfono. No se preocupe si hay burbujas pequeñas después de la aplicación, las burbujas desaparecerán en 24 horas. Limpie el líquido restante del borde y después de 2 minutos, presione el borde de vez en cuando.
[Ópticamente transparente]: 99% HD Protector de pantalla transparente con superficie lisa de vidrio y sensación "True Touch" y mantiene la calidad de imagen brillante y colorida.
[Funda Compatible]: Nuestros productos son compatibles con la mayoría de las fundas de teléfonos móviles, algunas fundas pesadas y espesas de teléfonos móviles afectarían el uso.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
            'name' => 'Moviles Libres 4G, Smartphone Libre Dual SIM 5 Pulgadas 1 GB RAM y 16 GB ROM (Escalable 32 GB) Android 7.0 Quad Core Smartphones 2800mAh Cámara 5MP + 2MP Moviles Buenos (Negro)',
                'price' => '49.9',
                'description' => '❤【PANTALLA GRANDE HD DE 5.0 PULGADAS】 DUODUOGO Smartphone Libre J3 le ofrece una pantalla grande de 5.0 pulgadas que es fácil de manejar con una mano, y el teléfono inteligente compacto tiene 5.0 pulgadas, que se ajusta al tamaño del bolsillo. Para que mencione 16: 9 para una gran proporción de la vista de alta definición, el color es claro y claro, deje que su visión disfrute de la sensación de apertura. Puede ajustar el brillo de la pantalla según sea necesario para crear un video y ver videos
❤【SOPORTA TRES RANURAS PARA TARJETAS Y 1 GB RAM+16 GB ROM】 DUODUOGO J3 Moviles Libres Baratos Es compatible con dos tarjetas SIM. Puede usar dos números de teléfono móvil al mismo tiempo. DUODUOGO J3 admite hasta 32 GB de micro SD, puede insertar una tarjeta SD, escuchar música con radio FM o reproductor de MP3 y disfrutar de excelente música. 1 GB de RAM, 16 GB de ROM: admite 32 GB de memoria SD, espacio suficiente para guardar más fotos y videos.
❤【2800MAH BATERÍA DE GRAN CAPACIDAD】 El moviles libres baratos con desbloqueo inteligente J3 ofrece una batería inteligente desmontable de gran capacidad de 2800 mAh, ahorro de energía y protección ambiental, prolongando la vida útil de la batería, en modo de espera de hasta 7 días, la eficiencia de uso diario es de aproximadamente 1 día, para satisfacer sus necesidades, fácil de llevar.
❤【ANDROID 7.0 Y PROCESADOR DE CALIDAD QUAD-CORE】 Smartphone libre equipado con el último sistema Android 7.0 y el procesador de cuatro núcleos, el teléfono será más avanzado y avanzado. Sin publicidad, este es un inteligente moviles libres baratos 4g para todos.
❤【CÁMARA HD: 5MP + 2MP】 Moviles libres baratos DUODUOGO J3-Cámara trasera de 5MP. Para los autorretratos, puede confiar en una cámara frontal de 2 megapíxeles para obtener una lente de alta calidad y una autofoto móvil para capturar sus mejores momentos y mantener las mejores fotos de su vida. Presentando tu lado más atractivo y hermoso, haciendo de los hermosos recuerdos un recuerdo eterno.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
            'name' => 'Apple iPhone 8 64GB Gris Espacial (Reacondicionado)',
                'price' => '289.0',
            'description' => 'Aunque no están certificados por Apple, los productos Renewed han sido inspeccionados y testados por proveedores cualificados p or Amazon para funcionar y parecer como nuevos. La caja y los accesorios pertinentes incluidos (auriculares no incluidos) pueden ser genéricos. Las baterías tienen al menos el 80% de capacidad en relación a una nueva. Todos los dispositivos de Amazon Renewed vienen con una garantía de un mínimo de 1 año respalada por Amazon.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}