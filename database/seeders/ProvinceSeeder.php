<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinces = [
            // AMAZONAS
            ['codigo' => '0101', 'provincia' => 'Chachapoyas', 'departamento_codigo' => '01'],
            ['codigo' => '0102', 'provincia' => 'Bagua', 'departamento_codigo' => '01'],
            ['codigo' => '0103', 'provincia' => 'Bongará', 'departamento_codigo' => '01'],
            ['codigo' => '0104', 'provincia' => 'Condorcanqui', 'departamento_codigo' => '01'],
            ['codigo' => '0105', 'provincia' => 'Luya', 'departamento_codigo' => '01'],
            ['codigo' => '0106', 'provincia' => 'Rodríguez de Mendoza', 'departamento_codigo' => '01'],
            ['codigo' => '0107', 'provincia' => 'Utcubamba', 'departamento_codigo' => '01'],

            // ÁNCASH
            ['codigo' => '0201', 'provincia' => 'Huaraz', 'departamento_codigo' => '02'],
            ['codigo' => '0202', 'provincia' => 'Aija', 'departamento_codigo' => '02'],
            ['codigo' => '0203', 'provincia' => 'Antonio Raymondi', 'departamento_codigo' => '02'],
            ['codigo' => '0204', 'provincia' => 'Asunción', 'departamento_codigo' => '02'],
            ['codigo' => '0205', 'provincia' => 'Bolognesi', 'departamento_codigo' => '02'],
            ['codigo' => '0206', 'provincia' => 'Carhuaz', 'departamento_codigo' => '02'],
            ['codigo' => '0207', 'provincia' => 'Carlos Fermín Fitzcarrald', 'departamento_codigo' => '02'],
            ['codigo' => '0208', 'provincia' => 'Casma', 'departamento_codigo' => '02'],
            ['codigo' => '0209', 'provincia' => 'Corongo', 'departamento_codigo' => '02'],
            ['codigo' => '0210', 'provincia' => 'Huari', 'departamento_codigo' => '02'],
            ['codigo' => '0211', 'provincia' => 'Huarmey', 'departamento_codigo' => '02'],
            ['codigo' => '0212', 'provincia' => 'Huaylas', 'departamento_codigo' => '02'],
            ['codigo' => '0213', 'provincia' => 'Mariscal Luzuriaga', 'departamento_codigo' => '02'],
            ['codigo' => '0214', 'provincia' => 'Ocros', 'departamento_codigo' => '02'],
            ['codigo' => '0215', 'provincia' => 'Pallasca', 'departamento_codigo' => '02'],
            ['codigo' => '0216', 'provincia' => 'Pomabamba', 'departamento_codigo' => '02'],
            ['codigo' => '0217', 'provincia' => 'Recuay', 'departamento_codigo' => '02'],
            ['codigo' => '0218', 'provincia' => 'Santa', 'departamento_codigo' => '02'],
            ['codigo' => '0219', 'provincia' => 'Sihuas', 'departamento_codigo' => '02'],
            ['codigo' => '0220', 'provincia' => 'Yungay', 'departamento_codigo' => '02'],

            // APURÍMAC
            ['codigo' => '0301', 'provincia' => 'Abancay', 'departamento_codigo' => '03'],
            ['codigo' => '0302', 'provincia' => 'Andahuaylas', 'departamento_codigo' => '03'],
            ['codigo' => '0303', 'provincia' => 'Antabamba', 'departamento_codigo' => '03'],
            ['codigo' => '0304', 'provincia' => 'Aymaraes', 'departamento_codigo' => '03'],
            ['codigo' => '0305', 'provincia' => 'Cotabambas', 'departamento_codigo' => '03'],
            ['codigo' => '0306', 'provincia' => 'Chincheros', 'departamento_codigo' => '03'],
            ['codigo' => '0307', 'provincia' => 'Grau', 'departamento_codigo' => '03'],

            // AREQUIPA
            ['codigo' => '0401', 'provincia' => 'Arequipa', 'departamento_codigo' => '04'],
            ['codigo' => '0402', 'provincia' => 'Camaná', 'departamento_codigo' => '04'],
            ['codigo' => '0403', 'provincia' => 'Caravelí', 'departamento_codigo' => '04'],
            ['codigo' => '0404', 'provincia' => 'Castilla', 'departamento_codigo' => '04'],
            ['codigo' => '0405', 'provincia' => 'Caylloma', 'departamento_codigo' => '04'],
            ['codigo' => '0406', 'provincia' => 'Condesuyos', 'departamento_codigo' => '04'],
            ['codigo' => '0407', 'provincia' => 'Islay', 'departamento_codigo' => '04'],
            ['codigo' => '0408', 'provincia' => 'La Unión', 'departamento_codigo' => '04'],

            // AYACUCHO
            ['codigo' => '0501', 'provincia' => 'Huamanga', 'departamento_codigo' => '05'],
            ['codigo' => '0502', 'provincia' => 'Cangallo', 'departamento_codigo' => '05'],
            ['codigo' => '0503', 'provincia' => 'Huanca Sancos', 'departamento_codigo' => '05'],
            ['codigo' => '0504', 'provincia' => 'Huanta', 'departamento_codigo' => '05'],
            ['codigo' => '0505', 'provincia' => 'La Mar', 'departamento_codigo' => '05'],
            ['codigo' => '0506', 'provincia' => 'Lucanas', 'departamento_codigo' => '05'],
            ['codigo' => '0507', 'provincia' => 'Parinacochas', 'departamento_codigo' => '05'],
            ['codigo' => '0508', 'provincia' => 'Páucar del Sara Sara', 'departamento_codigo' => '05'],
            ['codigo' => '0509', 'provincia' => 'Sucre', 'departamento_codigo' => '05'],
            ['codigo' => '0510', 'provincia' => 'Víctor Fajardo', 'departamento_codigo' => '05'],
            ['codigo' => '0511', 'provincia' => 'Vilcas Huamán', 'departamento_codigo' => '05'],

            // CAJAMARCA
            ['codigo' => '0601', 'provincia' => 'Cajamarca', 'departamento_codigo' => '06'],
            ['codigo' => '0602', 'provincia' => 'Cajabamba', 'departamento_codigo' => '06'],
            ['codigo' => '0603', 'provincia' => 'Celendín', 'departamento_codigo' => '06'],
            ['codigo' => '0604', 'provincia' => 'Chota', 'departamento_codigo' => '06'],
            ['codigo' => '0605', 'provincia' => 'Contumazá', 'departamento_codigo' => '06'],
            ['codigo' => '0606', 'provincia' => 'Cutervo', 'departamento_codigo' => '06'],
            ['codigo' => '0607', 'provincia' => 'Hualgayoc', 'departamento_codigo' => '06'],
            ['codigo' => '0608', 'provincia' => 'Jaén', 'departamento_codigo' => '06'],
            ['codigo' => '0609', 'provincia' => 'San Ignacio', 'departamento_codigo' => '06'],
            ['codigo' => '0610', 'provincia' => 'San Marcos', 'departamento_codigo' => '06'],
            ['codigo' => '0611', 'provincia' => 'San Miguel', 'departamento_codigo' => '06'],
            ['codigo' => '0612', 'provincia' => 'San Pablo', 'departamento_codigo' => '06'],
            ['codigo' => '0613', 'provincia' => 'Santa Cruz', 'departamento_codigo' => '06'],

            // CALLAO
            ['codigo' => '0701', 'provincia' => 'Prov. Const. del Callao', 'departamento_codigo' => '07'],

            // CUSCO
            ['codigo' => '0801', 'provincia' => 'Cusco', 'departamento_codigo' => '08'],
            ['codigo' => '0802', 'provincia' => 'Acomayo', 'departamento_codigo' => '08'],
            ['codigo' => '0803', 'provincia' => 'Anta', 'departamento_codigo' => '08'],
            ['codigo' => '0804', 'provincia' => 'Calca', 'departamento_codigo' => '08'],
            ['codigo' => '0805', 'provincia' => 'Canas', 'departamento_codigo' => '08'],
            ['codigo' => '0806', 'provincia' => 'Canchis', 'departamento_codigo' => '08'],
            ['codigo' => '0807', 'provincia' => 'Chumbivilcas', 'departamento_codigo' => '08'],
            ['codigo' => '0808', 'provincia' => 'Espinar', 'departamento_codigo' => '08'],
            ['codigo' => '0809', 'provincia' => 'La Convención', 'departamento_codigo' => '08'],
            ['codigo' => '0810', 'provincia' => 'Paruro', 'departamento_codigo' => '08'],
            ['codigo' => '0811', 'provincia' => 'Paucartambo', 'departamento_codigo' => '08'],
            ['codigo' => '0812', 'provincia' => 'Quispicanchi', 'departamento_codigo' => '08'],
            ['codigo' => '0813', 'provincia' => 'Urubamba', 'departamento_codigo' => '08'],

            // HUANCAVELICA
            ['codigo' => '0901', 'provincia' => 'Huancavelica', 'departamento_codigo' => '09'],
            ['codigo' => '0902', 'provincia' => 'Acobamba', 'departamento_codigo' => '09'],
            ['codigo' => '0903', 'provincia' => 'Angaraes', 'departamento_codigo' => '09'],
            ['codigo' => '0904', 'provincia' => 'Castrovirreyna', 'departamento_codigo' => '09'],
            ['codigo' => '0905', 'provincia' => 'Churcampa', 'departamento_codigo' => '09'],
            ['codigo' => '0906', 'provincia' => 'Huaytará', 'departamento_codigo' => '09'],
            ['codigo' => '0907', 'provincia' => 'Tayacaja', 'departamento_codigo' => '09'],

            // HUÁNUCO
            ['codigo' => '1001', 'provincia' => 'Huánuco', 'departamento_codigo' => '10'],
            ['codigo' => '1002', 'provincia' => 'Ambo', 'departamento_codigo' => '10'],
            ['codigo' => '1003', 'provincia' => 'Dos de Mayo', 'departamento_codigo' => '10'],
            ['codigo' => '1004', 'provincia' => 'Huacaybamba', 'departamento_codigo' => '10'],
            ['codigo' => '1005', 'provincia' => 'Huamalíes', 'departamento_codigo' => '10'],
            ['codigo' => '1006', 'provincia' => 'Leoncio Prado', 'departamento_codigo' => '10'],
            ['codigo' => '1007', 'provincia' => 'Marañón', 'departamento_codigo' => '10'],
            ['codigo' => '1008', 'provincia' => 'Pachitea', 'departamento_codigo' => '10'],
            ['codigo' => '1009', 'provincia' => 'Puerto Inca', 'departamento_codigo' => '10'],
            ['codigo' => '1010', 'provincia' => 'Lauricocha', 'departamento_codigo' => '10'],
            ['codigo' => '1011', 'provincia' => 'Yarowilca', 'departamento_codigo' => '10'],

            // ICA
            ['codigo' => '1101', 'provincia' => 'Ica', 'departamento_codigo' => '11'],
            ['codigo' => '1102', 'provincia' => 'Chincha', 'departamento_codigo' => '11'],
            ['codigo' => '1103', 'provincia' => 'Nasca', 'departamento_codigo' => '11'],
            ['codigo' => '1104', 'provincia' => 'Palpa', 'departamento_codigo' => '11'],
            ['codigo' => '1105', 'provincia' => 'Pisco', 'departamento_codigo' => '11'],

            // JUNÍN
            ['codigo' => '1201', 'provincia' => 'Huancayo', 'departamento_codigo' => '12'],
            ['codigo' => '1202', 'provincia' => 'Concepción', 'departamento_codigo' => '12'],
            ['codigo' => '1203', 'provincia' => 'Chanchamayo', 'departamento_codigo' => '12'],
            ['codigo' => '1204', 'provincia' => 'Jauja', 'departamento_codigo' => '12'],
            ['codigo' => '1205', 'provincia' => 'Junín', 'departamento_codigo' => '12'],
            ['codigo' => '1206', 'provincia' => 'Satipo', 'departamento_codigo' => '12'],
            ['codigo' => '1207', 'provincia' => 'Tarma', 'departamento_codigo' => '12'],
            ['codigo' => '1208', 'provincia' => 'Yauli', 'departamento_codigo' => '12'],
            ['codigo' => '1209', 'provincia' => 'Chupaca', 'departamento_codigo' => '12'],

            // LA LIBERTAD
            ['codigo' => '1301', 'provincia' => 'Trujillo', 'departamento_codigo' => '13'],
            ['codigo' => '1302', 'provincia' => 'Ascope', 'departamento_codigo' => '13'],
            ['codigo' => '1303', 'provincia' => 'Bolívar', 'departamento_codigo' => '13'],
            ['codigo' => '1304', 'provincia' => 'Chepén', 'departamento_codigo' => '13'],
            ['codigo' => '1305', 'provincia' => 'Julcán', 'departamento_codigo' => '13'],
            ['codigo' => '1306', 'provincia' => 'Otuzco', 'departamento_codigo' => '13'],
            ['codigo' => '1307', 'provincia' => 'Pacasmayo', 'departamento_codigo' => '13'],
            ['codigo' => '1308', 'provincia' => 'Pataz', 'departamento_codigo' => '13'],
            ['codigo' => '1309', 'provincia' => 'Sánchez Carrión', 'departamento_codigo' => '13'],
            ['codigo' => '1310', 'provincia' => 'Santiago de Chuco', 'departamento_codigo' => '13'],
            ['codigo' => '1311', 'provincia' => 'Gran Chimú', 'departamento_codigo' => '13'],
            ['codigo' => '1312', 'provincia' => 'Virú', 'departamento_codigo' => '13'],

            // LAMBAYEQUE
            ['codigo' => '1401', 'provincia' => 'Chiclayo', 'departamento_codigo' => '14'],
            ['codigo' => '1402', 'provincia' => 'Ferreñafe', 'departamento_codigo' => '14'],
            ['codigo' => '1403', 'provincia' => 'Lambayeque', 'departamento_codigo' => '14'],

            // LIMA
            ['codigo' => '1501', 'provincia' => 'Lima', 'departamento_codigo' => '15'],
            ['codigo' => '1502', 'provincia' => 'Barranca', 'departamento_codigo' => '15'],
            ['codigo' => '1503', 'provincia' => 'Cajatambo', 'departamento_codigo' => '15'],
            ['codigo' => '1504', 'provincia' => 'Canta', 'departamento_codigo' => '15'],
            ['codigo' => '1505', 'provincia' => 'Cañete', 'departamento_codigo' => '15'],
            ['codigo' => '1506', 'provincia' => 'Huaral', 'departamento_codigo' => '15'],
            ['codigo' => '1507', 'provincia' => 'Huarochirí', 'departamento_codigo' => '15'],
            ['codigo' => '1508', 'provincia' => 'Huaura', 'departamento_codigo' => '15'],
            ['codigo' => '1509', 'provincia' => 'Oyón', 'departamento_codigo' => '15'],
            ['codigo' => '1510', 'provincia' => 'Yauyos', 'departamento_codigo' => '15'],

            // LORETO
            ['codigo' => '1601', 'provincia' => 'Maynas', 'departamento_codigo' => '16'],
            ['codigo' => '1602', 'provincia' => 'Alto Amazonas', 'departamento_codigo' => '16'],
            ['codigo' => '1603', 'provincia' => 'Loreto', 'departamento_codigo' => '16'],
            ['codigo' => '1604', 'provincia' => 'Mariscal Ramón Castilla', 'departamento_codigo' => '16'],
            ['codigo' => '1605', 'provincia' => 'Requena', 'departamento_codigo' => '16'],
            ['codigo' => '1606', 'provincia' => 'Ucayali', 'departamento_codigo' => '16'],
            ['codigo' => '1607', 'provincia' => 'Datem del Marañón', 'departamento_codigo' => '16'],
            ['codigo' => '1608', 'provincia' => 'Putumayo', 'departamento_codigo' => '16'],

            // MADRE DE DIOS
            ['codigo' => '1701', 'provincia' => 'Tambopata', 'departamento_codigo' => '17'],
            ['codigo' => '1702', 'provincia' => 'Manu', 'departamento_codigo' => '17'],
            ['codigo' => '1703', 'provincia' => 'Tahuamanu', 'departamento_codigo' => '17'],

            // MOQUEGUA
            ['codigo' => '1801', 'provincia' => 'Mariscal Nieto', 'departamento_codigo' => '18'],
            ['codigo' => '1802', 'provincia' => 'General Sánchez Cerro', 'departamento_codigo' => '18'],
            ['codigo' => '1803', 'provincia' => 'Ilo', 'departamento_codigo' => '18'],

            // PASCO
            ['codigo' => '1901', 'provincia' => 'Pasco', 'departamento_codigo' => '19'],
            ['codigo' => '1902', 'provincia' => 'Daniel Alcides Carrión', 'departamento_codigo' => '19'],
            ['codigo' => '1903', 'provincia' => 'Oxapampa', 'departamento_codigo' => '19'],

            // PIURA
            ['codigo' => '2001', 'provincia' => 'Piura', 'departamento_codigo' => '20'],
            ['codigo' => '2002', 'provincia' => 'Ayabaca', 'departamento_codigo' => '20'],
            ['codigo' => '2003', 'provincia' => 'Huancabamba', 'departamento_codigo' => '20'],
            ['codigo' => '2004', 'provincia' => 'Morropón', 'departamento_codigo' => '20'],
            ['codigo' => '2005', 'provincia' => 'Paita', 'departamento_codigo' => '20'],
            ['codigo' => '2006', 'provincia' => 'Sullana', 'departamento_codigo' => '20'],
            ['codigo' => '2007', 'provincia' => 'Talara', 'departamento_codigo' => '20'],
            ['codigo' => '2008', 'provincia' => 'Sechura', 'departamento_codigo' => '20'],

            // PUNO
            ['codigo' => '2101', 'provincia' => 'Puno', 'departamento_codigo' => '21'],
            ['codigo' => '2102', 'provincia' => 'Azángaro', 'departamento_codigo' => '21'],
            ['codigo' => '2103', 'provincia' => 'Carabaya', 'departamento_codigo' => '21'],
            ['codigo' => '2104', 'provincia' => 'Chucuito', 'departamento_codigo' => '21'],
            ['codigo' => '2105', 'provincia' => 'El Collao', 'departamento_codigo' => '21'],
            ['codigo' => '2106', 'provincia' => 'Huancané', 'departamento_codigo' => '21'],
            ['codigo' => '2107', 'provincia' => 'Lampa', 'departamento_codigo' => '21'],
            ['codigo' => '2108', 'provincia' => 'Melgar', 'departamento_codigo' => '21'],
            ['codigo' => '2109', 'provincia' => 'Moho', 'departamento_codigo' => '21'],
            ['codigo' => '2110', 'provincia' => 'San Antonio de Putina', 'departamento_codigo' => '21'],
            ['codigo' => '2111', 'provincia' => 'San Román', 'departamento_codigo' => '21'],
            ['codigo' => '2112', 'provincia' => 'Sandia', 'departamento_codigo' => '21'],
            ['codigo' => '2113', 'provincia' => 'Yunguyo', 'departamento_codigo' => '21'],

            // SAN MARTÍN
            ['codigo' => '2201', 'provincia' => 'Moyobamba', 'departamento_codigo' => '22'],
            ['codigo' => '2202', 'provincia' => 'Bellavista', 'departamento_codigo' => '22'],
            ['codigo' => '2203', 'provincia' => 'El Dorado', 'departamento_codigo' => '22'],
            ['codigo' => '2204', 'provincia' => 'Huallaga', 'departamento_codigo' => '22'],
            ['codigo' => '2205', 'provincia' => 'Lamas', 'departamento_codigo' => '22'],
            ['codigo' => '2206', 'provincia' => 'Mariscal Cáceres', 'departamento_codigo' => '22'],
            ['codigo' => '2207', 'provincia' => 'Picota', 'departamento_codigo' => '22'],
            ['codigo' => '2208', 'provincia' => 'Rioja', 'departamento_codigo' => '22'],
            ['codigo' => '2209', 'provincia' => 'San Martín', 'departamento_codigo' => '22'],
            ['codigo' => '2210', 'provincia' => 'Tocache', 'departamento_codigo' => '22'],

            // TACNA
            ['codigo' => '2301', 'provincia' => 'Tacna', 'departamento_codigo' => '23'],
            ['codigo' => '2302', 'provincia' => 'Candarave', 'departamento_codigo' => '23'],
            ['codigo' => '2303', 'provincia' => 'Jorge Basadre', 'departamento_codigo' => '23'],
            ['codigo' => '2304', 'provincia' => 'Tarata', 'departamento_codigo' => '23'],

            // TUMBES
            ['codigo' => '2401', 'provincia' => 'Tumbes', 'departamento_codigo' => '24'],
            ['codigo' => '2402', 'provincia' => 'Contralmirante Villar', 'departamento_codigo' => '24'],
            ['codigo' => '2403', 'provincia' => 'Zarumilla', 'departamento_codigo' => '24'],

            // UCAYALI
            ['codigo' => '2501', 'provincia' => 'Coronel Portillo', 'departamento_codigo' => '25'],
            ['codigo' => '2502', 'provincia' => 'Atalaya', 'departamento_codigo' => '25'],
            ['codigo' => '2503', 'provincia' => 'Padre Abad', 'departamento_codigo' => '25'],
            ['codigo' => '2504', 'provincia' => 'Purús', 'departamento_codigo' => '25'],
        ];

        foreach($provinces as $province) {
            \App\Models\Province::insert($province);
        }
    }
}
