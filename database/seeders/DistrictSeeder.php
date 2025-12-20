<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // AMAZONAS - CHACHAPOYAS (0101)
        $districts = array(
            ['codigo' => '010101', 'distrito' => 'Chachapoyas', 'provincia' => '0101', 'departamento' => '01'],
            ['codigo' => '010102', 'distrito' => 'Asunción', 'provincia' => '0101', 'departamento' => '01'],
            ['codigo' => '010103', 'distrito' => 'Balsas', 'provincia' => '0101', 'departamento' => '01'],
            ['codigo' => '010104', 'distrito' => 'Cheto', 'provincia' => '0101', 'departamento' => '01'],
            ['codigo' => '010105', 'distrito' => 'Chiliquín', 'provincia' => '0101', 'departamento' => '01'],
            ['codigo' => '010106', 'distrito' => 'Chuquibamba', 'provincia' => '0101', 'departamento' => '01'],
            ['codigo' => '010107', 'distrito' => 'Granada', 'provincia' => '0101', 'departamento' => '01'],
            ['codigo' => '010108', 'distrito' => 'Huancas', 'provincia' => '0101', 'departamento' => '01'],
            ['codigo' => '010109', 'distrito' => 'La Jalca', 'provincia' => '0101', 'departamento' => '01'],
            ['codigo' => '010110', 'distrito' => 'Leimebamba', 'provincia' => '0101', 'departamento' => '01'],
            ['codigo' => '010111', 'distrito' => 'Levanto', 'provincia' => '0101', 'departamento' => '01'],
            ['codigo' => '010112', 'distrito' => 'Magdalena', 'provincia' => '0101', 'departamento' => '01'],
            ['codigo' => '010113', 'distrito' => 'Mariscal Castilla', 'provincia' => '0101', 'departamento' => '01'],
            ['codigo' => '010114', 'distrito' => 'Molinopampa', 'provincia' => '0101', 'departamento' => '01'],
            ['codigo' => '010115', 'distrito' => 'Montevideo', 'provincia' => '0101', 'departamento' => '01'],
            ['codigo' => '010116', 'distrito' => 'Olleros', 'provincia' => '0101', 'departamento' => '01'],
            ['codigo' => '010117', 'distrito' => 'Quinjalca', 'provincia' => '0101', 'departamento' => '01'],
            ['codigo' => '010118', 'distrito' => 'San Francisco de Daguas', 'provincia' => '0101', 'departamento' => '01'],
            ['codigo' => '010119', 'distrito' => 'San Isidro de Maino', 'provincia' => '0101', 'departamento' => '01'],
            ['codigo' => '010120', 'distrito' => 'Soloco', 'provincia' => '0101', 'departamento' => '01'],
            ['codigo' => '010121', 'distrito' => 'Sonche', 'provincia' => '0101', 'departamento' => '01'],
        );

        // AMAZONAS - BAGUA (0102)
        $districts = array_merge($districts, [
            ['codigo' => '010201', 'distrito' => 'Bagua', 'provincia' => '0102', 'departamento' => '01'],
            ['codigo' => '010202', 'distrito' => 'Aramango', 'provincia' => '0102', 'departamento' => '01'],
            ['codigo' => '010203', 'distrito' => 'Copallín', 'provincia' => '0102', 'departamento' => '01'],
            ['codigo' => '010204', 'distrito' => 'El Parco', 'provincia' => '0102', 'departamento' => '01'],
            ['codigo' => '010205', 'distrito' => 'Imaza', 'provincia' => '0102', 'departamento' => '01'],
            ['codigo' => '010206', 'distrito' => 'La Peca', 'provincia' => '0102', 'departamento' => '01'],
        ]);

        // AMAZONAS - BONGARÁ (0103)
        $districts = array_merge($districts, [
            ['codigo' => '010301', 'distrito' => 'Jumbilla', 'provincia' => '0103', 'departamento' => '01'],
            ['codigo' => '010302', 'distrito' => 'Chisquilla', 'provincia' => '0103', 'departamento' => '01'],
            ['codigo' => '010303', 'distrito' => 'Churuja', 'provincia' => '0103', 'departamento' => '01'],
            ['codigo' => '010304', 'distrito' => 'Corosha', 'provincia' => '0103', 'departamento' => '01'],
            ['codigo' => '010305', 'distrito' => 'Cuispes', 'provincia' => '0103', 'departamento' => '01'],
            ['codigo' => '010306', 'distrito' => 'Florida', 'provincia' => '0103', 'departamento' => '01'],
            ['codigo' => '010307', 'distrito' => 'Jazán', 'provincia' => '0103', 'departamento' => '01'],
            ['codigo' => '010308', 'distrito' => 'Recta', 'provincia' => '0103', 'departamento' => '01'],
            ['codigo' => '010309', 'distrito' => 'San Carlos', 'provincia' => '0103', 'departamento' => '01'],
            ['codigo' => '010310', 'distrito' => 'Shipasbamba', 'provincia' => '0103', 'departamento' => '01'],
            ['codigo' => '010311', 'distrito' => 'Valera', 'provincia' => '0103', 'departamento' => '01'],
            ['codigo' => '010312', 'distrito' => 'Yámbrasbamba', 'provincia' => '0103', 'departamento' => '01'],
        ]);

        // AMAZONAS - CONDORCANQUI (0104)
        $districts = array_merge($districts, [
            ['codigo' => '010401', 'distrito' => 'Nieva', 'provincia' => '0104', 'departamento' => '01'],
            ['codigo' => '010402', 'distrito' => 'El Cenepa', 'provincia' => '0104', 'departamento' => '01'],
            ['codigo' => '010403', 'distrito' => 'Río Santiago', 'provincia' => '0104', 'departamento' => '01'],
        ]);

        // AMAZONAS - LUYA (0105)
        $districts = array_merge($districts, [
            ['codigo' => '010501', 'distrito' => 'Lamud', 'provincia' => '0105', 'departamento' => '01'],
            ['codigo' => '010502', 'distrito' => 'Camporredondo', 'provincia' => '0105', 'departamento' => '01'],
            ['codigo' => '010503', 'distrito' => 'Cocabamba', 'provincia' => '0105', 'departamento' => '01'],
            ['codigo' => '010504', 'distrito' => 'Colcamar', 'provincia' => '0105', 'departamento' => '01'],
            ['codigo' => '010505', 'distrito' => 'Conila', 'provincia' => '0105', 'departamento' => '01'],
            ['codigo' => '010506', 'distrito' => 'Inguilpata', 'provincia' => '0105', 'departamento' => '01'],
            ['codigo' => '010507', 'distrito' => 'Longuita', 'provincia' => '0105', 'departamento' => '01'],
            ['codigo' => '010508', 'distrito' => 'Lonya Chico', 'provincia' => '0105', 'departamento' => '01'],
            ['codigo' => '010509', 'distrito' => 'Luya', 'provincia' => '0105', 'departamento' => '01'],
            ['codigo' => '010510', 'distrito' => 'Luya Viejo', 'provincia' => '0105', 'departamento' => '01'],
            ['codigo' => '010511', 'distrito' => 'María', 'provincia' => '0105', 'departamento' => '01'],
            ['codigo' => '010512', 'distrito' => 'Ocalli', 'provincia' => '0105', 'departamento' => '01'],
            ['codigo' => '010513', 'distrito' => 'Ocumal', 'provincia' => '0105', 'departamento' => '01'],
            ['codigo' => '010514', 'distrito' => 'Pisuquia', 'provincia' => '0105', 'departamento' => '01'],
            ['codigo' => '010515', 'distrito' => 'Providencia', 'provincia' => '0105', 'departamento' => '01'],
            ['codigo' => '010516', 'distrito' => 'San Cristóbal', 'provincia' => '0105', 'departamento' => '01'],
            ['codigo' => '010517', 'distrito' => 'San Francisco del Yeso', 'provincia' => '0105', 'departamento' => '01'],
            ['codigo' => '010518', 'distrito' => 'San Jerónimo', 'provincia' => '0105', 'departamento' => '01'],
            ['codigo' => '010519', 'distrito' => 'San Juan de Lopecancha', 'provincia' => '0105', 'departamento' => '01'],
            ['codigo' => '010520', 'distrito' => 'Santa Catalina', 'provincia' => '0105', 'departamento' => '01'],
            ['codigo' => '010521', 'distrito' => 'Santo Tomás', 'provincia' => '0105', 'departamento' => '01'],
            ['codigo' => '010522', 'distrito' => 'Tingo', 'provincia' => '0105', 'departamento' => '01'],
            ['codigo' => '010523', 'distrito' => 'Trita', 'provincia' => '0105', 'departamento' => '01'],
        ]);

        // AMAZONAS - RODRÍGUEZ DE MENDOZA (0106)
        $districts = array_merge($districts, [
            ['codigo' => '010601', 'distrito' => 'San Nicolás', 'provincia' => '0106', 'departamento' => '01'],
            ['codigo' => '010602', 'distrito' => 'Chirimoto', 'provincia' => '0106', 'departamento' => '01'],
            ['codigo' => '010603', 'distrito' => 'Cochamal', 'provincia' => '0106', 'departamento' => '01'],
            ['codigo' => '010604', 'distrito' => 'Huambo', 'provincia' => '0106', 'departamento' => '01'],
            ['codigo' => '010605', 'distrito' => 'Limabamba', 'provincia' => '0106', 'departamento' => '01'],
            ['codigo' => '010606', 'distrito' => 'Longar', 'provincia' => '0106', 'departamento' => '01'],
            ['codigo' => '010607', 'distrito' => 'Mariscal Benavides', 'provincia' => '0106', 'departamento' => '01'],
            ['codigo' => '010608', 'distrito' => 'Milpuc', 'provincia' => '0106', 'departamento' => '01'],
            ['codigo' => '010609', 'distrito' => 'Omia', 'provincia' => '0106', 'departamento' => '01'],
            ['codigo' => '010610', 'distrito' => 'Santa Rosa', 'provincia' => '0106', 'departamento' => '01'],
            ['codigo' => '010611', 'distrito' => 'Totora', 'provincia' => '0106', 'departamento' => '01'],
            ['codigo' => '010612', 'distrito' => 'Vista Alegre', 'provincia' => '0106', 'departamento' => '01'],
        ]);

        // AMAZONAS - UTCUBAMBA (0107)
        $districts = array_merge($districts, [
            ['codigo' => '010701', 'distrito' => 'Bagua Grande', 'provincia' => '0107', 'departamento' => '01'],
            ['codigo' => '010702', 'distrito' => 'Cajaruro', 'provincia' => '0107', 'departamento' => '01'],
            ['codigo' => '010703', 'distrito' => 'Cumba', 'provincia' => '0107', 'departamento' => '01'],
            ['codigo' => '010704', 'distrito' => 'El Milagro', 'provincia' => '0107', 'departamento' => '01'],
            ['codigo' => '010705', 'distrito' => 'Jamalca', 'provincia' => '0107', 'departamento' => '01'],
            ['codigo' => '010706', 'distrito' => 'Lonya Grande', 'provincia' => '0107', 'departamento' => '01'],
            ['codigo' => '010707', 'distrito' => 'Yamón', 'provincia' => '0107', 'departamento' => '01'],
        ]);

        // ===============================
        // ÁNCASH - HUARAZ (0201)
        // ===============================
        $districts = array_merge($districts, [
            ['codigo' => '020101', 'distrito' => 'Huaraz', 'provincia' => '0201', 'departamento' => '02'],
            ['codigo' => '020102', 'distrito' => 'Cochabamba', 'provincia' => '0201', 'departamento' => '02'],
            ['codigo' => '020103', 'distrito' => 'Colcabamba', 'provincia' => '0201', 'departamento' => '02'],
            ['codigo' => '020104', 'distrito' => 'Huanchay', 'provincia' => '0201', 'departamento' => '02'],
            ['codigo' => '020105', 'distrito' => 'Independencia', 'provincia' => '0201', 'departamento' => '02'],
            ['codigo' => '020106', 'distrito' => 'Jangas', 'provincia' => '0201', 'departamento' => '02'],
            ['codigo' => '020107', 'distrito' => 'La Libertad', 'provincia' => '0201', 'departamento' => '02'],
            ['codigo' => '020108', 'distrito' => 'Olleros', 'provincia' => '0201', 'departamento' => '02'],
            ['codigo' => '020109', 'distrito' => 'Pampas Grande', 'provincia' => '0201', 'departamento' => '02'],
            ['codigo' => '020110', 'distrito' => 'Pariacoto', 'provincia' => '0201', 'departamento' => '02'],
            ['codigo' => '020111', 'distrito' => 'Pira', 'provincia' => '0201', 'departamento' => '02'],
            ['codigo' => '020112', 'distrito' => 'Tarica', 'provincia' => '0201', 'departamento' => '02'],
        ]);

        // ===============================
        // ÁNCASH - AIJA (0202)
        // ===============================
        $districts = array_merge($districts, [
            ['codigo' => '020201', 'distrito' => 'Aija', 'provincia' => '0202', 'departamento' => '02'],
            ['codigo' => '020202', 'distrito' => 'Coris', 'provincia' => '0202', 'departamento' => '02'],
            ['codigo' => '020203', 'distrito' => 'Huacllán', 'provincia' => '0202', 'departamento' => '02'],
            ['codigo' => '020204', 'distrito' => 'La Merced', 'provincia' => '0202', 'departamento' => '02'],
            ['codigo' => '020205', 'distrito' => 'Succha', 'provincia' => '0202', 'departamento' => '02'],
        ]);

        // ===============================
        // ÁNCASH - ANTONIO RAYMONDI (0203)
        // ===============================
        $districts = array_merge($districts, [
            ['codigo' => '020301', 'distrito' => 'Llamellín', 'provincia' => '0203', 'departamento' => '02'],
            ['codigo' => '020302', 'distrito' => 'Aczo', 'provincia' => '0203', 'departamento' => '02'],
            ['codigo' => '020303', 'distrito' => 'Chaccho', 'provincia' => '0203', 'departamento' => '02'],
            ['codigo' => '020304', 'distrito' => 'Chingas', 'provincia' => '0203', 'departamento' => '02'],
            ['codigo' => '020305', 'distrito' => 'Mirgas', 'provincia' => '0203', 'departamento' => '02'],
            ['codigo' => '020306', 'distrito' => 'San Juan de Rontoy', 'provincia' => '0203', 'departamento' => '02'],
        ]);

        // ===============================
        // ÁNCASH - ASUNCIÓN (0204)
        // ===============================
        $districts = array_merge($districts, [
            ['codigo' => '020401', 'distrito' => 'Chacas', 'provincia' => '0204', 'departamento' => '02'],
            ['codigo' => '020402', 'distrito' => 'Acochaca', 'provincia' => '0204', 'departamento' => '02'],
        ]);

        // ===============================
        // ÁNCASH - BOLOGNESI (0205)
        // ===============================
        $districts = array_merge($districts, [
            ['codigo' => '020501', 'distrito' => 'Chiquián', 'provincia' => '0205', 'departamento' => '02'],
            ['codigo' => '020502', 'distrito' => 'Abelardo Pardo Lezameta', 'provincia' => '0205', 'departamento' => '02'],
            ['codigo' => '020503', 'distrito' => 'Antonio Raymondi', 'provincia' => '0205', 'departamento' => '02'],
            ['codigo' => '020504', 'distrito' => 'Aquia', 'provincia' => '0205', 'departamento' => '02'],
            ['codigo' => '020505', 'distrito' => 'Cajacay', 'provincia' => '0205', 'departamento' => '02'],
            ['codigo' => '020506', 'distrito' => 'Canis', 'provincia' => '0205', 'departamento' => '02'],
            ['codigo' => '020507', 'distrito' => 'Colquioc', 'provincia' => '0205', 'departamento' => '02'],
            ['codigo' => '020508', 'distrito' => 'Huallanca', 'provincia' => '0205', 'departamento' => '02'],
            ['codigo' => '020509', 'distrito' => 'Huasta', 'provincia' => '0205', 'departamento' => '02'],
            ['codigo' => '020510', 'distrito' => 'Huayllacayán', 'provincia' => '0205', 'departamento' => '02'],
            ['codigo' => '020511', 'distrito' => 'La Primavera', 'provincia' => '0205', 'departamento' => '02'],
            ['codigo' => '020512', 'distrito' => 'Mangas', 'provincia' => '0205', 'departamento' => '02'],
            ['codigo' => '020513', 'distrito' => 'Pacllón', 'provincia' => '0205', 'departamento' => '02'],
            ['codigo' => '020514', 'distrito' => 'San Miguel de Corpanqui', 'provincia' => '0205', 'departamento' => '02'],
            ['codigo' => '020515', 'distrito' => 'Ticllos', 'provincia' => '0205', 'departamento' => '02'],
        ]);

        // ===============================
        // ÁNCASH - CARHUAZ (0206)
        // ===============================
        $districts = array_merge($districts, [
            ['codigo' => '020601', 'distrito' => 'Carhuaz', 'provincia' => '0206', 'departamento' => '02'],
            ['codigo' => '020602', 'distrito' => 'Acopampa', 'provincia' => '0206', 'departamento' => '02'],
            ['codigo' => '020603', 'distrito' => 'Amashca', 'provincia' => '0206', 'departamento' => '02'],
            ['codigo' => '020604', 'distrito' => 'Anta', 'provincia' => '0206', 'departamento' => '02'],
            ['codigo' => '020605', 'distrito' => 'Ataquero', 'provincia' => '0206', 'departamento' => '02'],
            ['codigo' => '020606', 'distrito' => 'Marcara', 'provincia' => '0206', 'departamento' => '02'],
            ['codigo' => '020607', 'distrito' => 'Pariahuanca', 'provincia' => '0206', 'departamento' => '02'],
            ['codigo' => '020608', 'distrito' => 'San Miguel de Aco', 'provincia' => '0206', 'departamento' => '02'],
            ['codigo' => '020609', 'distrito' => 'Shilla', 'provincia' => '0206', 'departamento' => '02'],
            ['codigo' => '020610', 'distrito' => 'Tinco', 'provincia' => '0206', 'departamento' => '02'],
            ['codigo' => '020611', 'distrito' => 'Yungar', 'provincia' => '0206', 'departamento' => '02'],
        ]);

        // ===============================
        // ÁNCASH - CARLOS FERMÍN FITZCARRALD (0207)
        // ===============================
        $districts = array_merge($districts, [
            ['codigo' => '020701', 'distrito' => 'San Luis', 'provincia' => '0207', 'departamento' => '02'],
            ['codigo' => '020702', 'distrito' => 'San Nicolás', 'provincia' => '0207', 'departamento' => '02'],
            ['codigo' => '020703', 'distrito' => 'Yauya', 'provincia' => '0207', 'departamento' => '02'],
        ]);

        // ===============================
        // ÁNCASH - CASMA (0208)
        // ===============================
        $districts = array_merge($districts, [
            ['codigo' => '020801', 'distrito' => 'Casma', 'provincia' => '0208', 'departamento' => '02'],
            ['codigo' => '020802', 'distrito' => 'Buena Vista Alta', 'provincia' => '0208', 'departamento' => '02'],
            ['codigo' => '020803', 'distrito' => 'Comandante Noel', 'provincia' => '0208', 'departamento' => '02'],
            ['codigo' => '020804', 'distrito' => 'Yaután', 'provincia' => '0208', 'departamento' => '02'],
        ]);

        // ===============================
        // ÁNCASH - CORONGO (0209)
        // ===============================
        $districts = array_merge($districts, [
            ['codigo' => '020901', 'distrito' => 'Corongo', 'provincia' => '0209', 'departamento' => '02'],
            ['codigo' => '020902', 'distrito' => 'Aco', 'provincia' => '0209', 'departamento' => '02'],
            ['codigo' => '020903', 'distrito' => 'Bambas', 'provincia' => '0209', 'departamento' => '02'],
            ['codigo' => '020904', 'distrito' => 'Cusca', 'provincia' => '0209', 'departamento' => '02'],
            ['codigo' => '020905', 'distrito' => 'La Pampa', 'provincia' => '0209', 'departamento' => '02'],
            ['codigo' => '020906', 'distrito' => 'Yanac', 'provincia' => '0209', 'departamento' => '02'],
            ['codigo' => '020907', 'distrito' => 'Yupán', 'provincia' => '0209', 'departamento' => '02'],
        ]);

        // ===============================
        // ÁNCASH - HUARI (0210)
        // ===============================
        $districts = array_merge($districts, [
            ['codigo' => '021001', 'distrito' => 'Huari', 'provincia' => '0210', 'departamento' => '02'],
            ['codigo' => '021002', 'distrito' => 'Anra', 'provincia' => '0210', 'departamento' => '02'],
            ['codigo' => '021003', 'distrito' => 'Cajay', 'provincia' => '0210', 'departamento' => '02'],
            ['codigo' => '021004', 'distrito' => 'Chavín de Huántar', 'provincia' => '0210', 'departamento' => '02'],
            ['codigo' => '021005', 'distrito' => 'Huacachi', 'provincia' => '0210', 'departamento' => '02'],
            ['codigo' => '021006', 'distrito' => 'Huacchis', 'provincia' => '0210', 'departamento' => '02'],
            ['codigo' => '021007', 'distrito' => 'Huachis', 'provincia' => '0210', 'departamento' => '02'],
            ['codigo' => '021008', 'distrito' => 'Huántar', 'provincia' => '0210', 'departamento' => '02'],
            ['codigo' => '021009', 'distrito' => 'Masín', 'provincia' => '0210', 'departamento' => '02'],
            ['codigo' => '021010', 'distrito' => 'Paucas', 'provincia' => '0210', 'departamento' => '02'],
            ['codigo' => '021011', 'distrito' => 'Ponto', 'provincia' => '0210', 'departamento' => '02'],
            ['codigo' => '021012', 'distrito' => 'Rahuapampa', 'provincia' => '0210', 'departamento' => '02'],
            ['codigo' => '021013', 'distrito' => 'Rapayán', 'provincia' => '0210', 'departamento' => '02'],
            ['codigo' => '021014', 'distrito' => 'San Marcos', 'provincia' => '0210', 'departamento' => '02'],
            ['codigo' => '021015', 'distrito' => 'San Pedro de Chaná', 'provincia' => '0210', 'departamento' => '02'],
            ['codigo' => '021016', 'distrito' => 'Uco', 'provincia' => '0210', 'departamento' => '02'],
        ]);

        // ===============================
        // ÁNCASH - HUARMEY (0211)
        // ===============================
        $districts = array_merge($districts, [
            ['codigo' => '021101', 'distrito' => 'Huarmey', 'provincia' => '0211', 'departamento' => '02'],
            ['codigo' => '021102', 'distrito' => 'Cochapeti', 'provincia' => '0211', 'departamento' => '02'],
            ['codigo' => '021103', 'distrito' => 'Culebras', 'provincia' => '0211', 'departamento' => '02'],
            ['codigo' => '021104', 'distrito' => 'Huayán', 'provincia' => '0211', 'departamento' => '02'],
            ['codigo' => '021105', 'distrito' => 'Malvas', 'provincia' => '0211', 'departamento' => '02'],
        ]);

        // ===============================
        // ÁNCASH - HUAYLAS (0212)
        // ===============================
        $districts = array_merge($districts, [
            ['codigo' => '021201', 'distrito' => 'Caraz', 'provincia' => '0212', 'departamento' => '02'],
            ['codigo' => '021202', 'distrito' => 'Huallanca', 'provincia' => '0212', 'departamento' => '02'],
            ['codigo' => '021203', 'distrito' => 'Huata', 'provincia' => '0212', 'departamento' => '02'],
            ['codigo' => '021204', 'distrito' => 'Huaylas', 'provincia' => '0212', 'departamento' => '02'],
            ['codigo' => '021205', 'distrito' => 'Mato', 'provincia' => '0212', 'departamento' => '02'],
            ['codigo' => '021206', 'distrito' => 'Pamparomás', 'provincia' => '0212', 'departamento' => '02'],
            ['codigo' => '021207', 'distrito' => 'Pueblo Libre', 'provincia' => '0212', 'departamento' => '02'],
            ['codigo' => '021208', 'distrito' => 'Santa Cruz', 'provincia' => '0212', 'departamento' => '02'],
            ['codigo' => '021209', 'distrito' => 'Santo Toribio', 'provincia' => '0212', 'departamento' => '02'],
            ['codigo' => '021210', 'distrito' => 'Yuracmarca', 'provincia' => '0212', 'departamento' => '02'],
        ]);

        // ===============================
        // ÁNCASH - MARISCAL LUZURIAGA (0213)
        // ===============================
        $districts = array_merge($districts, [
            ['codigo' => '021301', 'distrito' => 'Piscobamba', 'provincia' => '0213', 'departamento' => '02'],
            ['codigo' => '021302', 'distrito' => 'Casca', 'provincia' => '0213', 'departamento' => '02'],
            ['codigo' => '021303', 'distrito' => 'Eleazar Guzmán Barrón', 'provincia' => '0213', 'departamento' => '02'],
            ['codigo' => '021304', 'distrito' => 'Fidel Olivas Escudero', 'provincia' => '0213', 'departamento' => '02'],
            ['codigo' => '021305', 'distrito' => 'Llama', 'provincia' => '0213', 'departamento' => '02'],
            ['codigo' => '021306', 'distrito' => 'Llumpa', 'provincia' => '0213', 'departamento' => '02'],
            ['codigo' => '021307', 'distrito' => 'Lucma', 'provincia' => '0213', 'departamento' => '02'],
            ['codigo' => '021308', 'distrito' => 'Musga', 'provincia' => '0213', 'departamento' => '02'],
        ]);

        // ===============================
        // ÁNCASH - OCROS (0214)
        // ===============================
        $districts = array_merge($districts, [
            ['codigo' => '021401', 'distrito' => 'Ocros', 'provincia' => '0214', 'departamento' => '02'],
            ['codigo' => '021402', 'distrito' => 'Acas', 'provincia' => '0214', 'departamento' => '02'],
            ['codigo' => '021403', 'distrito' => 'Cajamarquilla', 'provincia' => '0214', 'departamento' => '02'],
            ['codigo' => '021404', 'distrito' => 'Carhuapampa', 'provincia' => '0214', 'departamento' => '02'],
            ['codigo' => '021405', 'distrito' => 'Cochas', 'provincia' => '0214', 'departamento' => '02'],
            ['codigo' => '021406', 'distrito' => 'Congas', 'provincia' => '0214', 'departamento' => '02'],
            ['codigo' => '021407', 'distrito' => 'Llipa', 'provincia' => '0214', 'departamento' => '02'],
            ['codigo' => '021408', 'distrito' => 'San Cristóbal de Raján', 'provincia' => '0214', 'departamento' => '02'],
            ['codigo' => '021409', 'distrito' => 'San Pedro', 'provincia' => '0214', 'departamento' => '02'],
            ['codigo' => '021410', 'distrito' => 'Santiago de Chilcas', 'provincia' => '0214', 'departamento' => '02'],
        ]);

        // ===============================
        // ÁNCASH - PALLASCA (0215)
        // ===============================
        $districts = array_merge($districts, [
            ['codigo' => '021501', 'distrito' => 'Cabana', 'provincia' => '0215', 'departamento' => '02'],
            ['codigo' => '021502', 'distrito' => 'Bolognesi', 'provincia' => '0215', 'departamento' => '02'],
            ['codigo' => '021503', 'distrito' => 'Conchucos', 'provincia' => '0215', 'departamento' => '02'],
            ['codigo' => '021504', 'distrito' => 'Huacaschuque', 'provincia' => '0215', 'departamento' => '02'],
            ['codigo' => '021505', 'distrito' => 'Huandoval', 'provincia' => '0215', 'departamento' => '02'],
            ['codigo' => '021506', 'distrito' => 'Lacabamba', 'provincia' => '0215', 'departamento' => '02'],
            ['codigo' => '021507', 'distrito' => 'Llapo', 'provincia' => '0215', 'departamento' => '02'],
            ['codigo' => '021508', 'distrito' => 'Pallasca', 'provincia' => '0215', 'departamento' => '02'],
            ['codigo' => '021509', 'distrito' => 'Pampas', 'provincia' => '0215', 'departamento' => '02'],
            ['codigo' => '021510', 'distrito' => 'Santa Rosa', 'provincia' => '0215', 'departamento' => '02'],
            ['codigo' => '021511', 'distrito' => 'Tauca', 'provincia' => '0215', 'departamento' => '02'],
        ]);

        // ===============================
        // ÁNCASH - POMABAMBA (0216)
        // ===============================
        $districts = array_merge($districts, [
            ['codigo' => '021601', 'distrito' => 'Pomabamba', 'provincia' => '0216', 'departamento' => '02'],
            ['codigo' => '021602', 'distrito' => 'Huayllán', 'provincia' => '0216', 'departamento' => '02'],
            ['codigo' => '021603', 'distrito' => 'Parobamba', 'provincia' => '0216', 'departamento' => '02'],
            ['codigo' => '021604', 'distrito' => 'Quinuabamba', 'provincia' => '0216', 'departamento' => '02'],
        ]);

        // ===============================
        // ÁNCASH - RECUAY (0217)
        // ===============================
        $districts = array_merge($districts, [
            ['codigo' => '021701', 'distrito' => 'Recuay', 'provincia' => '0217', 'departamento' => '02'],
            ['codigo' => '021702', 'distrito' => 'Catac', 'provincia' => '0217', 'departamento' => '02'],
            ['codigo' => '021703', 'distrito' => 'Cotaparaco', 'provincia' => '0217', 'departamento' => '02'],
            ['codigo' => '021704', 'distrito' => 'Huayllapampa', 'provincia' => '0217', 'departamento' => '02'],
            ['codigo' => '021705', 'distrito' => 'Llacllín', 'provincia' => '0217', 'departamento' => '02'],
            ['codigo' => '021706', 'distrito' => 'Marca', 'provincia' => '0217', 'departamento' => '02'],
            ['codigo' => '021707', 'distrito' => 'Pampas Chico', 'provincia' => '0217', 'departamento' => '02'],
            ['codigo' => '021708', 'distrito' => 'Pararín', 'provincia' => '0217', 'departamento' => '02'],
            ['codigo' => '021709', 'distrito' => 'Tapacocha', 'provincia' => '0217', 'departamento' => '02'],
            ['codigo' => '021710', 'distrito' => 'Ticapampa', 'provincia' => '0217', 'departamento' => '02'],
        ]);

        // ===============================
        // ÁNCASH - SANTA (0218)
        // ===============================
        $districts = array_merge($districts, [
            ['codigo' => '021801', 'distrito' => 'Chimbote', 'provincia' => '0218', 'departamento' => '02'],
            ['codigo' => '021802', 'distrito' => 'Cáceres del Perú', 'provincia' => '0218', 'departamento' => '02'],
            ['codigo' => '021803', 'distrito' => 'Coishco', 'provincia' => '0218', 'departamento' => '02'],
            ['codigo' => '021804', 'distrito' => 'Macate', 'provincia' => '0218', 'departamento' => '02'],
            ['codigo' => '021805', 'distrito' => 'Moro', 'provincia' => '0218', 'departamento' => '02'],
            ['codigo' => '021806', 'distrito' => 'Nepeña', 'provincia' => '0218', 'departamento' => '02'],
            ['codigo' => '021807', 'distrito' => 'Samanco', 'provincia' => '0218', 'departamento' => '02'],
            ['codigo' => '021808', 'distrito' => 'Santa', 'provincia' => '0218', 'departamento' => '02'],
            ['codigo' => '021809', 'distrito' => 'Nuevo Chimbote', 'provincia' => '0218', 'departamento' => '02'],
        ]);

        // ===============================
        // ÁNCASH - SIHUAS (0219)
        // ===============================
        $districts = array_merge($districts, [
            ['codigo' => '021901', 'distrito' => 'Sihuas', 'provincia' => '0219', 'departamento' => '02'],
            ['codigo' => '021902', 'distrito' => 'Acobamba', 'provincia' => '0219', 'departamento' => '02'],
            ['codigo' => '021903', 'distrito' => 'Alfonso Ugarte', 'provincia' => '0219', 'departamento' => '02'],
            ['codigo' => '021904', 'distrito' => 'Cashapampa', 'provincia' => '0219', 'departamento' => '02'],
            ['codigo' => '021905', 'distrito' => 'Chingalpo', 'provincia' => '0219', 'departamento' => '02'],
            ['codigo' => '021906', 'distrito' => 'Huayllabamba', 'provincia' => '0219', 'departamento' => '02'],
            ['codigo' => '021907', 'distrito' => 'Quiches', 'provincia' => '0219', 'departamento' => '02'],
            ['codigo' => '021908', 'distrito' => 'Ragash', 'provincia' => '0219', 'departamento' => '02'],
            ['codigo' => '021909', 'distrito' => 'San Juan', 'provincia' => '0219', 'departamento' => '02'],
            ['codigo' => '021910', 'distrito' => 'Sicsibamba', 'provincia' => '0219', 'departamento' => '02'],
        ]);

        // ===============================
        // ÁNCASH - YUNGAY (0220)
        // ===============================
        $districts = array_merge($districts, [
            ['codigo' => '022001', 'distrito' => 'Yungay', 'provincia' => '0220', 'departamento' => '02'],
            ['codigo' => '022002', 'distrito' => 'Cascapara', 'provincia' => '0220', 'departamento' => '02'],
            ['codigo' => '022003', 'distrito' => 'Mancos', 'provincia' => '0220', 'departamento' => '02'],
            ['codigo' => '022004', 'distrito' => 'Matacoto', 'provincia' => '0220', 'departamento' => '02'],
            ['codigo' => '022005', 'distrito' => 'Quillo', 'provincia' => '0220', 'departamento' => '02'],
            ['codigo' => '022006', 'distrito' => 'Ranrahirca', 'provincia' => '0220', 'departamento' => '02'],
            ['codigo' => '022007', 'distrito' => 'Shupluy', 'provincia' => '0220', 'departamento' => '02'],
            ['codigo' => '022008', 'distrito' => 'Yanama', 'provincia' => '0220', 'departamento' => '02'],
        ]);

        // ==================================================
        // APURÍMAC (03)
        // ==================================================

        // -------------------------------
        // ABANCAY (0301)
        // -------------------------------
        $districts = array_merge($districts, [
            ['codigo' => '030101', 'distrito' => 'Abancay', 'provincia' => '0301', 'departamento' => '03'],
            ['codigo' => '030102', 'distrito' => 'Chacoche', 'provincia' => '0301', 'departamento' => '03'],
            ['codigo' => '030103', 'distrito' => 'Circa', 'provincia' => '0301', 'departamento' => '03'],
            ['codigo' => '030104', 'distrito' => 'Curahuasi', 'provincia' => '0301', 'departamento' => '03'],
            ['codigo' => '030105', 'distrito' => 'Huanipaca', 'provincia' => '0301', 'departamento' => '03'],
            ['codigo' => '030106', 'distrito' => 'Lambrama', 'provincia' => '0301', 'departamento' => '03'],
            ['codigo' => '030107', 'distrito' => 'Pichirhua', 'provincia' => '0301', 'departamento' => '03'],
            ['codigo' => '030108', 'distrito' => 'San Pedro de Cachora', 'provincia' => '0301', 'departamento' => '03'],
            ['codigo' => '030109', 'distrito' => 'Tamburco', 'provincia' => '0301', 'departamento' => '03'],
        ]);

        // -------------------------------
        // ANDAHUAYLAS (0302)
        // -------------------------------
        $districts = array_merge($districts, [
            ['codigo' => '030201', 'distrito' => 'Andahuaylas', 'provincia' => '0302', 'departamento' => '03'],
            ['codigo' => '030202', 'distrito' => 'Andarapa', 'provincia' => '0302', 'departamento' => '03'],
            ['codigo' => '030203', 'distrito' => 'Chiara', 'provincia' => '0302', 'departamento' => '03'],
            ['codigo' => '030204', 'distrito' => 'Huancarama', 'provincia' => '0302', 'departamento' => '03'],
            ['codigo' => '030205', 'distrito' => 'Huancaray', 'provincia' => '0302', 'departamento' => '03'],
            ['codigo' => '030206', 'distrito' => 'Huayana', 'provincia' => '0302', 'departamento' => '03'],
            ['codigo' => '030207', 'distrito' => 'Kishuara', 'provincia' => '0302', 'departamento' => '03'],
            ['codigo' => '030208', 'distrito' => 'Pacobamba', 'provincia' => '0302', 'departamento' => '03'],
            ['codigo' => '030209', 'distrito' => 'Pacucha', 'provincia' => '0302', 'departamento' => '03'],
            ['codigo' => '030210', 'distrito' => 'Pampachiri', 'provincia' => '0302', 'departamento' => '03'],
            ['codigo' => '030211', 'distrito' => 'Pomacocha', 'provincia' => '0302', 'departamento' => '03'],
            ['codigo' => '030212', 'distrito' => 'San Antonio de Cachi', 'provincia' => '0302', 'departamento' => '03'],
            ['codigo' => '030213', 'distrito' => 'San Jerónimo', 'provincia' => '0302', 'departamento' => '03'],
            ['codigo' => '030214', 'distrito' => 'San Miguel de Chaccrampa', 'provincia' => '0302', 'departamento' => '03'],
            ['codigo' => '030215', 'distrito' => 'Santa María de Chicmo', 'provincia' => '0302', 'departamento' => '03'],
            ['codigo' => '030216', 'distrito' => 'Talavera', 'provincia' => '0302', 'departamento' => '03'],
            ['codigo' => '030217', 'distrito' => 'Tumay Huaraca', 'provincia' => '0302', 'departamento' => '03'],
            ['codigo' => '030218', 'distrito' => 'Turpo', 'provincia' => '0302', 'departamento' => '03'],
            ['codigo' => '030219', 'distrito' => 'Kaquiabamba', 'provincia' => '0302', 'departamento' => '03'],
            ['codigo' => '030220', 'distrito' => 'José María Arguedas', 'provincia' => '0302', 'departamento' => '03'],
        ]);

        // -------------------------------
        // ANTABAMBA (0303)
        // -------------------------------
        $districts = array_merge($districts, [
            ['codigo' => '030301', 'distrito' => 'Antabamba', 'provincia' => '0303', 'departamento' => '03'],
            ['codigo' => '030302', 'distrito' => 'El Oro', 'provincia' => '0303', 'departamento' => '03'],
            ['codigo' => '030303', 'distrito' => 'Huaquirca', 'provincia' => '0303', 'departamento' => '03'],
            ['codigo' => '030304', 'distrito' => 'Juan Espinoza Medrano', 'provincia' => '0303', 'departamento' => '03'],
            ['codigo' => '030305', 'distrito' => 'Oropesa', 'provincia' => '0303', 'departamento' => '03'],
            ['codigo' => '030306', 'distrito' => 'Pachaconas', 'provincia' => '0303', 'departamento' => '03'],
            ['codigo' => '030307', 'distrito' => 'Sabaino', 'provincia' => '0303', 'departamento' => '03'],
        ]);

        // -------------------------------
        // AYMARAES (0304)
        // -------------------------------
        $districts = array_merge($districts, [
            ['codigo' => '030401', 'distrito' => 'Chalhuanca', 'provincia' => '0304', 'departamento' => '03'],
            ['codigo' => '030402', 'distrito' => 'Capaya', 'provincia' => '0304', 'departamento' => '03'],
            ['codigo' => '030403', 'distrito' => 'Caraybamba', 'provincia' => '0304', 'departamento' => '03'],
            ['codigo' => '030404', 'distrito' => 'Chapimarca', 'provincia' => '0304', 'departamento' => '03'],
            ['codigo' => '030405', 'distrito' => 'Colcabamba', 'provincia' => '0304', 'departamento' => '03'],
            ['codigo' => '030406', 'distrito' => 'Cotaruse', 'provincia' => '0304', 'departamento' => '03'],
            ['codigo' => '030407', 'distrito' => 'Ihuayllo', 'provincia' => '0304', 'departamento' => '03'],
            ['codigo' => '030408', 'distrito' => 'Justo Apu Sahuaraura', 'provincia' => '0304', 'departamento' => '03'],
            ['codigo' => '030409', 'distrito' => 'Lucre', 'provincia' => '0304', 'departamento' => '03'],
            ['codigo' => '030410', 'distrito' => 'Pocohuanca', 'provincia' => '0304', 'departamento' => '03'],
            ['codigo' => '030411', 'distrito' => 'San Juan de Chacña', 'provincia' => '0304', 'departamento' => '03'],
            ['codigo' => '030412', 'distrito' => 'Sañayca', 'provincia' => '0304', 'departamento' => '03'],
            ['codigo' => '030413', 'distrito' => 'Soraya', 'provincia' => '0304', 'departamento' => '03'],
            ['codigo' => '030414', 'distrito' => 'Tapairihua', 'provincia' => '0304', 'departamento' => '03'],
            ['codigo' => '030415', 'distrito' => 'Tintay', 'provincia' => '0304', 'departamento' => '03'],
            ['codigo' => '030416', 'distrito' => 'Toraya', 'provincia' => '0304', 'departamento' => '03'],
            ['codigo' => '030417', 'distrito' => 'Yanaca', 'provincia' => '0304', 'departamento' => '03'],
        ]);

        // -------------------------------
        // COTABAMBAS (0305)
        // -------------------------------
        $districts = array_merge($districts, [
            ['codigo' => '030501', 'distrito' => 'Tambobamba', 'provincia' => '0305', 'departamento' => '03'],
            ['codigo' => '030502', 'distrito' => 'Cotabambas', 'provincia' => '0305', 'departamento' => '03'],
            ['codigo' => '030503', 'distrito' => 'Coyllurqui', 'provincia' => '0305', 'departamento' => '03'],
            ['codigo' => '030504', 'distrito' => 'Haquira', 'provincia' => '0305', 'departamento' => '03'],
            ['codigo' => '030505', 'distrito' => 'Mara', 'provincia' => '0305', 'departamento' => '03'],
            ['codigo' => '030506', 'distrito' => 'Challhuahuacho', 'provincia' => '0305', 'departamento' => '03'],
        ]);

        // -------------------------------
        // CHINCHEROS (0306)
        // -------------------------------
        $districts = array_merge($districts, [
            ['codigo' => '030601', 'distrito' => 'Chincheros', 'provincia' => '0306', 'departamento' => '03'],
            ['codigo' => '030602', 'distrito' => 'Anco-Huallo', 'provincia' => '0306', 'departamento' => '03'],
            ['codigo' => '030603', 'distrito' => 'Cocharcas', 'provincia' => '0306', 'departamento' => '03'],
            ['codigo' => '030604', 'distrito' => 'Huaccana', 'provincia' => '0306', 'departamento' => '03'],
            ['codigo' => '030605', 'distrito' => 'Ocobamba', 'provincia' => '0306', 'departamento' => '03'],
            ['codigo' => '030606', 'distrito' => 'Ongoy', 'provincia' => '0306', 'departamento' => '03'],
            ['codigo' => '030607', 'distrito' => 'Uranmarca', 'provincia' => '0306', 'departamento' => '03'],
            ['codigo' => '030608', 'distrito' => 'Ranracancha', 'provincia' => '0306', 'departamento' => '03'],
        ]);

        // -------------------------------
        // GRAU (0307)
        // -------------------------------
        $districts = array_merge($districts, [
            ['codigo' => '030701', 'distrito' => 'Chuquibambilla', 'provincia' => '0307', 'departamento' => '03'],
            ['codigo' => '030702', 'distrito' => 'Curpahuasi', 'provincia' => '0307', 'departamento' => '03'],
            ['codigo' => '030703', 'distrito' => 'Gamarra', 'provincia' => '0307', 'departamento' => '03'],
            ['codigo' => '030704', 'distrito' => 'Huayllati', 'provincia' => '0307', 'departamento' => '03'],
            ['codigo' => '030705', 'distrito' => 'Mamara', 'provincia' => '0307', 'departamento' => '03'],
            ['codigo' => '030706', 'distrito' => 'Micaela Bastidas', 'provincia' => '0307', 'departamento' => '03'],
            ['codigo' => '030707', 'distrito' => 'Pataypampa', 'provincia' => '0307', 'departamento' => '03'],
            ['codigo' => '030708', 'distrito' => 'Progreso', 'provincia' => '0307', 'departamento' => '03'],
            ['codigo' => '030709', 'distrito' => 'San Antonio', 'provincia' => '0307', 'departamento' => '03'],
            ['codigo' => '030710', 'distrito' => 'Santa Rosa', 'provincia' => '0307', 'departamento' => '03'],
            ['codigo' => '030711', 'distrito' => 'Turpay', 'provincia' => '0307', 'departamento' => '03'],
            ['codigo' => '030712', 'distrito' => 'Vilcabamba', 'provincia' => '0307', 'departamento' => '03'],
            ['codigo' => '030713', 'distrito' => 'Virundo', 'provincia' => '0307', 'departamento' => '03'],
            ['codigo' => '030714', 'distrito' => 'Curasco', 'provincia' => '0307', 'departamento' => '03'],
        ]);

        // ==================================================
        // AREQUIPA (04)
        // ==================================================

        // -------------------------------
        // AREQUIPA (0401)
        // -------------------------------
        $districts = array_merge($districts, [
            ['codigo' => '040101', 'distrito' => 'Arequipa', 'provincia' => '0401', 'departamento' => '04'],
            ['codigo' => '040102', 'distrito' => 'Alto Selva Alegre', 'provincia' => '0401', 'departamento' => '04'],
            ['codigo' => '040103', 'distrito' => 'Cayma', 'provincia' => '0401', 'departamento' => '04'],
            ['codigo' => '040104', 'distrito' => 'Cerro Colorado', 'provincia' => '0401', 'departamento' => '04'],
            ['codigo' => '040105', 'distrito' => 'Characato', 'provincia' => '0401', 'departamento' => '04'],
            ['codigo' => '040106', 'distrito' => 'Chiguata', 'provincia' => '0401', 'departamento' => '04'],
            ['codigo' => '040107', 'distrito' => 'Jacobo Hunter', 'provincia' => '0401', 'departamento' => '04'],
            ['codigo' => '040108', 'distrito' => 'La Joya', 'provincia' => '0401', 'departamento' => '04'],
            ['codigo' => '040109', 'distrito' => 'Mariano Melgar', 'provincia' => '0401', 'departamento' => '04'],
            ['codigo' => '040110', 'distrito' => 'Miraflores', 'provincia' => '0401', 'departamento' => '04'],
            ['codigo' => '040111', 'distrito' => 'Mollebaya', 'provincia' => '0401', 'departamento' => '04'],
            ['codigo' => '040112', 'distrito' => 'Paucarpata', 'provincia' => '0401', 'departamento' => '04'],
            ['codigo' => '040113', 'distrito' => 'Pocsi', 'provincia' => '0401', 'departamento' => '04'],
            ['codigo' => '040114', 'distrito' => 'Polobaya', 'provincia' => '0401', 'departamento' => '04'],
            ['codigo' => '040115', 'distrito' => 'Quequeña', 'provincia' => '0401', 'departamento' => '04'],
            ['codigo' => '040116', 'distrito' => 'Sabandía', 'provincia' => '0401', 'departamento' => '04'],
            ['codigo' => '040117', 'distrito' => 'Sachaca', 'provincia' => '0401', 'departamento' => '04'],
            ['codigo' => '040118', 'distrito' => 'San Juan de Siguas', 'provincia' => '0401', 'departamento' => '04'],
            ['codigo' => '040119', 'distrito' => 'San Juan de Tarucani', 'provincia' => '0401', 'departamento' => '04'],
            ['codigo' => '040120', 'distrito' => 'Santa Isabel de Siguas', 'provincia' => '0401', 'departamento' => '04'],
            ['codigo' => '040121', 'distrito' => 'Santa Rita de Siguas', 'provincia' => '0401', 'departamento' => '04'],
            ['codigo' => '040122', 'distrito' => 'Socabaya', 'provincia' => '0401', 'departamento' => '04'],
            ['codigo' => '040123', 'distrito' => 'Tiabaya', 'provincia' => '0401', 'departamento' => '04'],
            ['codigo' => '040124', 'distrito' => 'Uchumayo', 'provincia' => '0401', 'departamento' => '04'],
            ['codigo' => '040125', 'distrito' => 'Vítor', 'provincia' => '0401', 'departamento' => '04'],
            ['codigo' => '040126', 'distrito' => 'Yanahuara', 'provincia' => '0401', 'departamento' => '04'],
            ['codigo' => '040127', 'distrito' => 'Yarabamba', 'provincia' => '0401', 'departamento' => '04'],
            ['codigo' => '040128', 'distrito' => 'Yura', 'provincia' => '0401', 'departamento' => '04'],
            ['codigo' => '040129', 'distrito' => 'José Luis Bustamante y Rivero', 'provincia' => '0401', 'departamento' => '04'],
        ]);

        // -------------------------------
        // CAMANÁ (0402)
        // -------------------------------
        $districts = array_merge($districts, [
            ['codigo' => '040201', 'distrito' => 'Camaná', 'provincia' => '0402', 'departamento' => '04'],
            ['codigo' => '040202', 'distrito' => 'José María Quimper', 'provincia' => '0402', 'departamento' => '04'],
            ['codigo' => '040203', 'distrito' => 'Mariano Nicolás Valcárcel', 'provincia' => '0402', 'departamento' => '04'],
            ['codigo' => '040204', 'distrito' => 'Mariscal Cáceres', 'provincia' => '0402', 'departamento' => '04'],
            ['codigo' => '040205', 'distrito' => 'Nicolás de Piérola', 'provincia' => '0402', 'departamento' => '04'],
            ['codigo' => '040206', 'distrito' => 'Ocoña', 'provincia' => '0402', 'departamento' => '04'],
            ['codigo' => '040207', 'distrito' => 'Quilca', 'provincia' => '0402', 'departamento' => '04'],
            ['codigo' => '040208', 'distrito' => 'Samuel Pastor', 'provincia' => '0402', 'departamento' => '04'],
        ]);

        // -------------------------------
        // CARAVELÍ (0403)
        // -------------------------------
        $districts = array_merge($districts, [
            ['codigo' => '040301', 'distrito' => 'Caravelí', 'provincia' => '0403', 'departamento' => '04'],
            ['codigo' => '040302', 'distrito' => 'Acarí', 'provincia' => '0403', 'departamento' => '04'],
            ['codigo' => '040303', 'distrito' => 'Atico', 'provincia' => '0403', 'departamento' => '04'],
            ['codigo' => '040304', 'distrito' => 'Atiquipa', 'provincia' => '0403', 'departamento' => '04'],
            ['codigo' => '040305', 'distrito' => 'Bella Unión', 'provincia' => '0403', 'departamento' => '04'],
            ['codigo' => '040306', 'distrito' => 'Cahuacho', 'provincia' => '0403', 'departamento' => '04'],
            ['codigo' => '040307', 'distrito' => 'Chala', 'provincia' => '0403', 'departamento' => '04'],
            ['codigo' => '040308', 'distrito' => 'Chaparra', 'provincia' => '0403', 'departamento' => '04'],
            ['codigo' => '040309', 'distrito' => 'Huanuhuanu', 'provincia' => '0403', 'departamento' => '04'],
            ['codigo' => '040310', 'distrito' => 'Jaquí', 'provincia' => '0403', 'departamento' => '04'],
            ['codigo' => '040311', 'distrito' => 'Lomas', 'provincia' => '0403', 'departamento' => '04'],
            ['codigo' => '040312', 'distrito' => 'Quicacha', 'provincia' => '0403', 'departamento' => '04'],
            ['codigo' => '040313', 'distrito' => 'Yauca', 'provincia' => '0403', 'departamento' => '04'],
        ]);

        // -------------------------------
        // CASTILLA (0404)
        // -------------------------------
        $districts = array_merge($districts, [
            ['codigo' => '040401', 'distrito' => 'Aplao', 'provincia' => '0404', 'departamento' => '04'],
            ['codigo' => '040402', 'distrito' => 'Andagua', 'provincia' => '0404', 'departamento' => '04'],
            ['codigo' => '040403', 'distrito' => 'Ayo', 'provincia' => '0404', 'departamento' => '04'],
            ['codigo' => '040404', 'distrito' => 'Chachas', 'provincia' => '0404', 'departamento' => '04'],
            ['codigo' => '040405', 'distrito' => 'Chilcaymarca', 'provincia' => '0404', 'departamento' => '04'],
            ['codigo' => '040406', 'distrito' => 'Choco', 'provincia' => '0404', 'departamento' => '04'],
            ['codigo' => '040407', 'distrito' => 'Huancarqui', 'provincia' => '0404', 'departamento' => '04'],
            ['codigo' => '040408', 'distrito' => 'Machaguay', 'provincia' => '0404', 'departamento' => '04'],
            ['codigo' => '040409', 'distrito' => 'Orcopampa', 'provincia' => '0404', 'departamento' => '04'],
            ['codigo' => '040410', 'distrito' => 'Pampacolca', 'provincia' => '0404', 'departamento' => '04'],
            ['codigo' => '040411', 'distrito' => 'Tipán', 'provincia' => '0404', 'departamento' => '04'],
            ['codigo' => '040412', 'distrito' => 'Uñón', 'provincia' => '0404', 'departamento' => '04'],
            ['codigo' => '040413', 'distrito' => 'Uraca', 'provincia' => '0404', 'departamento' => '04'],
            ['codigo' => '040414', 'distrito' => 'Viraco', 'provincia' => '0404', 'departamento' => '04'],
        ]);

        // -------------------------------
        // CAYLLOMA (0405)
        // -------------------------------
        $districts = array_merge($districts, [
            ['codigo' => '040501', 'distrito' => 'Chivay', 'provincia' => '0405', 'departamento' => '04'],
            ['codigo' => '040502', 'distrito' => 'Achoma', 'provincia' => '0405', 'departamento' => '04'],
            ['codigo' => '040503', 'distrito' => 'Cabanaconde', 'provincia' => '0405', 'departamento' => '04'],
            ['codigo' => '040504', 'distrito' => 'Callalli', 'provincia' => '0405', 'departamento' => '04'],
            ['codigo' => '040505', 'distrito' => 'Caylloma', 'provincia' => '0405', 'departamento' => '04'],
            ['codigo' => '040506', 'distrito' => 'Coporaque', 'provincia' => '0405', 'departamento' => '04'],
            ['codigo' => '040507', 'distrito' => 'Huambo', 'provincia' => '0405', 'departamento' => '04'],
            ['codigo' => '040508', 'distrito' => 'Huanca', 'provincia' => '0405', 'departamento' => '04'],
            ['codigo' => '040509', 'distrito' => 'Ichupampa', 'provincia' => '0405', 'departamento' => '04'],
            ['codigo' => '040510', 'distrito' => 'Lari', 'provincia' => '0405', 'departamento' => '04'],
            ['codigo' => '040511', 'distrito' => 'Lluta', 'provincia' => '0405', 'departamento' => '04'],
            ['codigo' => '040512', 'distrito' => 'Maca', 'provincia' => '0405', 'departamento' => '04'],
            ['codigo' => '040513', 'distrito' => 'Madrigal', 'provincia' => '0405', 'departamento' => '04'],
            ['codigo' => '040514', 'distrito' => 'San Antonio de Chuca', 'provincia' => '0405', 'departamento' => '04'],
            ['codigo' => '040515', 'distrito' => 'Sibayo', 'provincia' => '0405', 'departamento' => '04'],
            ['codigo' => '040516', 'distrito' => 'Tapay', 'provincia' => '0405', 'departamento' => '04'],
            ['codigo' => '040517', 'distrito' => 'Tisco', 'provincia' => '0405', 'departamento' => '04'],
            ['codigo' => '040518', 'distrito' => 'Tuti', 'provincia' => '0405', 'departamento' => '04'],
            ['codigo' => '040519', 'distrito' => 'Yanque', 'provincia' => '0405', 'departamento' => '04'],
            ['codigo' => '040520', 'distrito' => 'Majes', 'provincia' => '0405', 'departamento' => '04'],
        ]);

        // -------------------------------
        // CONDESUYOS (0406)
        // -------------------------------
        $districts = array_merge($districts, [
            ['codigo' => '040601', 'distrito' => 'Chuquibamba', 'provincia' => '0406', 'departamento' => '04'],
            ['codigo' => '040602', 'distrito' => 'Andaray', 'provincia' => '0406', 'departamento' => '04'],
            ['codigo' => '040603', 'distrito' => 'Cayarani', 'provincia' => '0406', 'departamento' => '04'],
            ['codigo' => '040604', 'distrito' => 'Chichas', 'provincia' => '0406', 'departamento' => '04'],
            ['codigo' => '040605', 'distrito' => 'Iray', 'provincia' => '0406', 'departamento' => '04'],
            ['codigo' => '040606', 'distrito' => 'Río Grande', 'provincia' => '0406', 'departamento' => '04'],
            ['codigo' => '040607', 'distrito' => 'Salamanca', 'provincia' => '0406', 'departamento' => '04'],
            ['codigo' => '040608', 'distrito' => 'Yanaquihua', 'provincia' => '0406', 'departamento' => '04'],
        ]);

        // -------------------------------
        // ISLAY (0407)
        // -------------------------------
        $districts = array_merge($districts, [
            ['codigo' => '040701', 'distrito' => 'Mollendo', 'provincia' => '0407', 'departamento' => '04'],
            ['codigo' => '040702', 'distrito' => 'Cocachacra', 'provincia' => '0407', 'departamento' => '04'],
            ['codigo' => '040703', 'distrito' => 'Dean Valdivia', 'provincia' => '0407', 'departamento' => '04'],
            ['codigo' => '040704', 'distrito' => 'Islay', 'provincia' => '0407', 'departamento' => '04'],
            ['codigo' => '040705', 'distrito' => 'Mejía', 'provincia' => '0407', 'departamento' => '04'],
            ['codigo' => '040706', 'distrito' => 'Punta de Bombón', 'provincia' => '0407', 'departamento' => '04'],
        ]);

        // -------------------------------
        // LA UNIÓN (0408)
        // -------------------------------
        $districts = array_merge($districts, [
            ['codigo' => '040801', 'distrito' => 'Cotahuasi', 'provincia' => '0408', 'departamento' => '04'],
            ['codigo' => '040802', 'distrito' => 'Alca', 'provincia' => '0408', 'departamento' => '04'],
            ['codigo' => '040803', 'distrito' => 'Charcana', 'provincia' => '0408', 'departamento' => '04'],
            ['codigo' => '040804', 'distrito' => 'Huaynacotas', 'provincia' => '0408', 'departamento' => '04'],
            ['codigo' => '040805', 'distrito' => 'Pampamarca', 'provincia' => '0408', 'departamento' => '04'],
            ['codigo' => '040806', 'distrito' => 'Puyca', 'provincia' => '0408', 'departamento' => '04'],
            ['codigo' => '040807', 'distrito' => 'Quechualla', 'provincia' => '0408', 'departamento' => '04'],
            ['codigo' => '040808', 'distrito' => 'Sayla', 'provincia' => '0408', 'departamento' => '04'],
            ['codigo' => '040809', 'distrito' => 'Tauría', 'provincia' => '0408', 'departamento' => '04'],
            ['codigo' => '040810', 'distrito' => 'Tomepampa', 'provincia' => '0408', 'departamento' => '04'],
            ['codigo' => '040811', 'distrito' => 'Toro', 'provincia' => '0408', 'departamento' => '04'],
        ]);

        // ==================================================
        // AYACUCHO (05)
        // ==================================================

        // -------------------------------
        // HUAMANGA (0501)
        // -------------------------------
        $districts = array_merge($districts, [
            ['codigo' => '050101', 'distrito' => 'Ayacucho', 'provincia' => '0501', 'departamento' => '05'],
            ['codigo' => '050102', 'distrito' => 'Acocro', 'provincia' => '0501', 'departamento' => '05'],
            ['codigo' => '050103', 'distrito' => 'Acos Vinchos', 'provincia' => '0501', 'departamento' => '05'],
            ['codigo' => '050104', 'distrito' => 'Carmen Alto', 'provincia' => '0501', 'departamento' => '05'],
            ['codigo' => '050105', 'distrito' => 'Chiara', 'provincia' => '0501', 'departamento' => '05'],
            ['codigo' => '050106', 'distrito' => 'Ocros', 'provincia' => '0501', 'departamento' => '05'],
            ['codigo' => '050107', 'distrito' => 'Pacaycasa', 'provincia' => '0501', 'departamento' => '05'],
            ['codigo' => '050108', 'distrito' => 'Quinua', 'provincia' => '0501', 'departamento' => '05'],
            ['codigo' => '050109', 'distrito' => 'San José de Ticllas', 'provincia' => '0501', 'departamento' => '05'],
            ['codigo' => '050110', 'distrito' => 'San Juan Bautista', 'provincia' => '0501', 'departamento' => '05'],
            ['codigo' => '050111', 'distrito' => 'Santiago de Pischa', 'provincia' => '0501', 'departamento' => '05'],
            ['codigo' => '050112', 'distrito' => 'Socos', 'provincia' => '0501', 'departamento' => '05'],
            ['codigo' => '050113', 'distrito' => 'Tambillo', 'provincia' => '0501', 'departamento' => '05'],
            ['codigo' => '050114', 'distrito' => 'Vinchos', 'provincia' => '0501', 'departamento' => '05'],
            ['codigo' => '050115', 'distrito' => 'Jesús Nazareno', 'provincia' => '0501', 'departamento' => '05'],
            ['codigo' => '050116', 'distrito' => 'Andrés Avelino Cáceres Dorregaray', 'provincia' => '0501', 'departamento' => '05'],
        ]);

        // -------------------------------
        // CANGALLO (0502)
        // -------------------------------
        $districts = array_merge($districts, [
            ['codigo' => '050201', 'distrito' => 'Cangallo', 'provincia' => '0502', 'departamento' => '05'],
            ['codigo' => '050202', 'distrito' => 'Chuschi', 'provincia' => '0502', 'departamento' => '05'],
            ['codigo' => '050203', 'distrito' => 'Los Morochucos', 'provincia' => '0502', 'departamento' => '05'],
            ['codigo' => '050204', 'distrito' => 'María Parado de Bellido', 'provincia' => '0502', 'departamento' => '05'],
            ['codigo' => '050205', 'distrito' => 'Paras', 'provincia' => '0502', 'departamento' => '05'],
            ['codigo' => '050206', 'distrito' => 'Totos', 'provincia' => '0502', 'departamento' => '05'],
        ]);

        // -------------------------------
        // HUANCA SANCOS (0503)
        // -------------------------------
        $districts = array_merge($districts, [
            ['codigo' => '050301', 'distrito' => 'Sancos', 'provincia' => '0503', 'departamento' => '05'],
            ['codigo' => '050302', 'distrito' => 'Carapo', 'provincia' => '0503', 'departamento' => '05'],
            ['codigo' => '050303', 'distrito' => 'Sacsamarca', 'provincia' => '0503', 'departamento' => '05'],
            ['codigo' => '050304', 'distrito' => 'Santiago de Lucanamarca', 'provincia' => '0503', 'departamento' => '05'],
        ]);

        // -------------------------------
        // HUANTA (0504)
        // -------------------------------
        $districts = array_merge($districts, [
            ['codigo' => '050401', 'distrito' => 'Huanta', 'provincia' => '0504', 'departamento' => '05'],
            ['codigo' => '050402', 'distrito' => 'Ayahuanco', 'provincia' => '0504', 'departamento' => '05'],
            ['codigo' => '050403', 'distrito' => 'Huamanguilla', 'provincia' => '0504', 'departamento' => '05'],
            ['codigo' => '050404', 'distrito' => 'Iguain', 'provincia' => '0504', 'departamento' => '05'],
            ['codigo' => '050405', 'distrito' => 'Llochegua', 'provincia' => '0504', 'departamento' => '05'],
            ['codigo' => '050406', 'distrito' => 'Luricocha', 'provincia' => '0504', 'departamento' => '05'],
            ['codigo' => '050407', 'distrito' => 'Santillana', 'provincia' => '0504', 'departamento' => '05'],
            ['codigo' => '050408', 'distrito' => 'Sivia', 'provincia' => '0504', 'departamento' => '05'],
            ['codigo' => '050409', 'distrito' => 'Canayre', 'provincia' => '0504', 'departamento' => '05'],
        ]);

        // -------------------------------
        // LA MAR (0505)
        // -------------------------------
        $districts = array_merge($districts, [
            ['codigo' => '050501', 'distrito' => 'San Miguel', 'provincia' => '0505', 'departamento' => '05'],
            ['codigo' => '050502', 'distrito' => 'Anco', 'provincia' => '0505', 'departamento' => '05'],
            ['codigo' => '050503', 'distrito' => 'Ayna', 'provincia' => '0505', 'departamento' => '05'],
            ['codigo' => '050504', 'distrito' => 'Chilcas', 'provincia' => '0505', 'departamento' => '05'],
            ['codigo' => '050505', 'distrito' => 'Chungui', 'provincia' => '0505', 'departamento' => '05'],
            ['codigo' => '050506', 'distrito' => 'Luis Carranza', 'provincia' => '0505', 'departamento' => '05'],
            ['codigo' => '050507', 'distrito' => 'Santa Rosa', 'provincia' => '0505', 'departamento' => '05'],
            ['codigo' => '050508', 'distrito' => 'Tambo', 'provincia' => '0505', 'departamento' => '05'],
        ]);

        // -------------------------------
        // LUCANAS (0506)
        // -------------------------------
        $districts = array_merge($districts, [
            ['codigo' => '050601', 'distrito' => 'Puquio', 'provincia' => '0506', 'departamento' => '05'],
            ['codigo' => '050602', 'distrito' => 'Aucara', 'provincia' => '0506', 'departamento' => '05'],
            ['codigo' => '050603', 'distrito' => 'Cabana', 'provincia' => '0506', 'departamento' => '05'],
            ['codigo' => '050604', 'distrito' => 'Carmen Salcedo', 'provincia' => '0506', 'departamento' => '05'],
            ['codigo' => '050605', 'distrito' => 'Chaviña', 'provincia' => '0506', 'departamento' => '05'],
            ['codigo' => '050606', 'distrito' => 'Chipao', 'provincia' => '0506', 'departamento' => '05'],
            ['codigo' => '050607', 'distrito' => 'Huac-Huas', 'provincia' => '0506', 'departamento' => '05'],
            ['codigo' => '050608', 'distrito' => 'Laramate', 'provincia' => '0506', 'departamento' => '05'],
            ['codigo' => '050609', 'distrito' => 'Leoncio Prado', 'provincia' => '0506', 'departamento' => '05'],
            ['codigo' => '050610', 'distrito' => 'Llauta', 'provincia' => '0506', 'departamento' => '05'],
            ['codigo' => '050611', 'distrito' => 'Lucanas', 'provincia' => '0506', 'departamento' => '05'],
            ['codigo' => '050612', 'distrito' => 'Ocaña', 'provincia' => '0506', 'departamento' => '05'],
            ['codigo' => '050613', 'distrito' => 'Otoca', 'provincia' => '0506', 'departamento' => '05'],
            ['codigo' => '050614', 'distrito' => 'Saisa', 'provincia' => '0506', 'departamento' => '05'],
            ['codigo' => '050615', 'distrito' => 'San Cristóbal', 'provincia' => '0506', 'departamento' => '05'],
            ['codigo' => '050616', 'distrito' => 'San Juan', 'provincia' => '0506', 'departamento' => '05'],
            ['codigo' => '050617', 'distrito' => 'San Pedro', 'provincia' => '0506', 'departamento' => '05'],
            ['codigo' => '050618', 'distrito' => 'San Pedro de Palco', 'provincia' => '0506', 'departamento' => '05'],
            ['codigo' => '050619', 'distrito' => 'Sancos', 'provincia' => '0506', 'departamento' => '05'],
            ['codigo' => '050620', 'distrito' => 'Santa Ana de Huaycahuacho', 'provincia' => '0506', 'departamento' => '05'],
            ['codigo' => '050621', 'distrito' => 'Santa Lucía', 'provincia' => '0506', 'departamento' => '05'],
        ]);

        // -------------------------------
        // PARINACOCHAS (0507)
        // -------------------------------
        $districts = array_merge($districts, [
            ['codigo' => '050701', 'distrito' => 'Coracora', 'provincia' => '0507', 'departamento' => '05'],
            ['codigo' => '050702', 'distrito' => 'Chumpi', 'provincia' => '0507', 'departamento' => '05'],
            ['codigo' => '050703', 'distrito' => 'Coronel Castañeda', 'provincia' => '0507', 'departamento' => '05'],
            ['codigo' => '050704', 'distrito' => 'Pacapausa', 'provincia' => '0507', 'departamento' => '05'],
            ['codigo' => '050705', 'distrito' => 'Pullo', 'provincia' => '0507', 'departamento' => '05'],
            ['codigo' => '050706', 'distrito' => 'Puyusca', 'provincia' => '0507', 'departamento' => '05'],
            ['codigo' => '050707', 'distrito' => 'San Francisco de Ravacayco', 'provincia' => '0507', 'departamento' => '05'],
            ['codigo' => '050708', 'distrito' => 'Upahuacho', 'provincia' => '0507', 'departamento' => '05'],
        ]);

        // -------------------------------
        // PÁUCAR DEL SARA SARA (0508)
        // -------------------------------
        $districts = array_merge($districts, [
            ['codigo' => '050801', 'distrito' => 'Pausa', 'provincia' => '0508', 'departamento' => '05'],
            ['codigo' => '050802', 'distrito' => 'Colta', 'provincia' => '0508', 'departamento' => '05'],
            ['codigo' => '050803', 'distrito' => 'Corculla', 'provincia' => '0508', 'departamento' => '05'],
            ['codigo' => '050804', 'distrito' => 'Lampa', 'provincia' => '0508', 'departamento' => '05'],
            ['codigo' => '050805', 'distrito' => 'Marcabamba', 'provincia' => '0508', 'departamento' => '05'],
            ['codigo' => '050806', 'distrito' => 'Oyolo', 'provincia' => '0508', 'departamento' => '05'],
            ['codigo' => '050807', 'distrito' => 'Pararca', 'provincia' => '0508', 'departamento' => '05'],
            ['codigo' => '050808', 'distrito' => 'San Javier de Alpabamba', 'provincia' => '0508', 'departamento' => '05'],
            ['codigo' => '050809', 'distrito' => 'San José de Ushua', 'provincia' => '0508', 'departamento' => '05'],
            ['codigo' => '050810', 'distrito' => 'Sara Sara', 'provincia' => '0508', 'departamento' => '05'],
        ]);

        // -------------------------------
        // SUCRE (0509)
        // -------------------------------
        $districts = array_merge($districts, [
            ['codigo' => '050901', 'distrito' => 'Querobamba', 'provincia' => '0509', 'departamento' => '05'],
            ['codigo' => '050902', 'distrito' => 'Belén', 'provincia' => '0509', 'departamento' => '05'],
            ['codigo' => '050903', 'distrito' => 'Chalcos', 'provincia' => '0509', 'departamento' => '05'],
            ['codigo' => '050904', 'distrito' => 'Chilcayoc', 'provincia' => '0509', 'departamento' => '05'],
            ['codigo' => '050905', 'distrito' => 'Huacaña', 'provincia' => '0509', 'departamento' => '05'],
            ['codigo' => '050906', 'distrito' => 'Morcolla', 'provincia' => '0509', 'departamento' => '05'],
            ['codigo' => '050907', 'distrito' => 'Paico', 'provincia' => '0509', 'departamento' => '05'],
            ['codigo' => '050908', 'distrito' => 'San Pedro de Larcay', 'provincia' => '0509', 'departamento' => '05'],
            ['codigo' => '050909', 'distrito' => 'San Salvador de Quije', 'provincia' => '0509', 'departamento' => '05'],
            ['codigo' => '050910', 'distrito' => 'Santiago de Paucaray', 'provincia' => '0509', 'departamento' => '05'],
            ['codigo' => '050911', 'distrito' => 'Soras', 'provincia' => '0509', 'departamento' => '05'],
        ]);

        // -------------------------------
        // VÍCTOR FAJARDO (0510)
        // -------------------------------
        $districts = array_merge($districts, [
            ['codigo' => '051001', 'distrito' => 'Huancapi', 'provincia' => '0510', 'departamento' => '05'],
            ['codigo' => '051002', 'distrito' => 'Alcamenca', 'provincia' => '0510', 'departamento' => '05'],
            ['codigo' => '051003', 'distrito' => 'Apongo', 'provincia' => '0510', 'departamento' => '05'],
            ['codigo' => '051004', 'distrito' => 'Asquipata', 'provincia' => '0510', 'departamento' => '05'],
            ['codigo' => '051005', 'distrito' => 'Canaria', 'provincia' => '0510', 'departamento' => '05'],
            ['codigo' => '051006', 'distrito' => 'Cayara', 'provincia' => '0510', 'departamento' => '05'],
            ['codigo' => '051007', 'distrito' => 'Colca', 'provincia' => '0510', 'departamento' => '05'],
            ['codigo' => '051008', 'distrito' => 'Huamanquiquia', 'provincia' => '0510', 'departamento' => '05'],
            ['codigo' => '051009', 'distrito' => 'Huancaraylla', 'provincia' => '0510', 'departamento' => '05'],
            ['codigo' => '051010', 'distrito' => 'Huaya', 'provincia' => '0510', 'departamento' => '05'],
            ['codigo' => '051011', 'distrito' => 'Sarhua', 'provincia' => '0510', 'departamento' => '05'],
            ['codigo' => '051012', 'distrito' => 'Vilcanchos', 'provincia' => '0510', 'departamento' => '05'],
        ]);

        // -------------------------------
        // VILCAS HUAMÁN (0511)
        // -------------------------------
        $districts = array_merge($districts, [
            ['codigo' => '051101', 'distrito' => 'Vilcas Huamán', 'provincia' => '0511', 'departamento' => '05'],
            ['codigo' => '051102', 'distrito' => 'Accomarca', 'provincia' => '0511', 'departamento' => '05'],
            ['codigo' => '051103', 'distrito' => 'Carhuanca', 'provincia' => '0511', 'departamento' => '05'],
            ['codigo' => '051104', 'distrito' => 'Concepción', 'provincia' => '0511', 'departamento' => '05'],
            ['codigo' => '051105', 'distrito' => 'Huambalpa', 'provincia' => '0511', 'departamento' => '05'],
            ['codigo' => '051106', 'distrito' => 'Independencia', 'provincia' => '0511', 'departamento' => '05'],
            ['codigo' => '051107', 'distrito' => 'Saurama', 'provincia' => '0511', 'departamento' => '05'],
            ['codigo' => '051108', 'distrito' => 'Vischongo', 'provincia' => '0511', 'departamento' => '05'],
        ]);

        // -------------------------------
        // CAJAMARCA (0601)
        // -------------------------------
        $districts = array_merge($districts, [
            ['codigo' => '060101', 'distrito' => 'Cajamarca', 'provincia' => '0601', 'departamento' => '06'],
            ['codigo' => '060102', 'distrito' => 'Asunción', 'provincia' => '0601', 'departamento' => '06'],
            ['codigo' => '060103', 'distrito' => 'Chetilla', 'provincia' => '0601', 'departamento' => '06'],
            ['codigo' => '060104', 'distrito' => 'Cospán', 'provincia' => '0601', 'departamento' => '06'],
            ['codigo' => '060105', 'distrito' => 'Encañada', 'provincia' => '0601', 'departamento' => '06'],
            ['codigo' => '060106', 'distrito' => 'Jesús', 'provincia' => '0601', 'departamento' => '06'],
            ['codigo' => '060107', 'distrito' => 'Llacanora', 'provincia' => '0601', 'departamento' => '06'],
            ['codigo' => '060108', 'distrito' => 'Los Baños del Inca', 'provincia' => '0601', 'departamento' => '06'],
            ['codigo' => '060109', 'distrito' => 'Magdalena', 'provincia' => '0601', 'departamento' => '06'],
            ['codigo' => '060110', 'distrito' => 'Matara', 'provincia' => '0601', 'departamento' => '06'],
            ['codigo' => '060111', 'distrito' => 'Namora', 'provincia' => '0601', 'departamento' => '06'],
            ['codigo' => '060112', 'distrito' => 'San Juan', 'provincia' => '0601', 'departamento' => '06'],
        ]);

        // -------------------------------
        // CAJABAMBA (0602)
        // -------------------------------
        $districts = array_merge($districts, [
            ['codigo' => '060201', 'distrito' => 'Cajabamba', 'provincia' => '0602', 'departamento' => '06'],
            ['codigo' => '060202', 'distrito' => 'Cachachi', 'provincia' => '0602', 'departamento' => '06'],
            ['codigo' => '060203', 'distrito' => 'Condebamba', 'provincia' => '0602', 'departamento' => '06'],
            ['codigo' => '060204', 'distrito' => 'Sitacocha', 'provincia' => '0602', 'departamento' => '06'],
        ]);

        // -------------------------------
        // CELENDÍN (0603)
        // -------------------------------
        $districts = array_merge($districts, [
            ['codigo' => '060301', 'distrito' => 'Celendín', 'provincia' => '0603', 'departamento' => '06'],
            ['codigo' => '060302', 'distrito' => 'Chumuch', 'provincia' => '0603', 'departamento' => '06'],
            ['codigo' => '060303', 'distrito' => 'Cortegana', 'provincia' => '0603', 'departamento' => '06'],
            ['codigo' => '060304', 'distrito' => 'Huasmin', 'provincia' => '0603', 'departamento' => '06'],
            ['codigo' => '060305', 'distrito' => 'Jorge Chávez', 'provincia' => '0603', 'departamento' => '06'],
            ['codigo' => '060306', 'distrito' => 'José Gálvez', 'provincia' => '0603', 'departamento' => '06'],
            ['codigo' => '060307', 'distrito' => 'Miguel Iglesias', 'provincia' => '0603', 'departamento' => '06'],
            ['codigo' => '060308', 'distrito' => 'Oxamarca', 'provincia' => '0603', 'departamento' => '06'],
            ['codigo' => '060309', 'distrito' => 'Sorochuco', 'provincia' => '0603', 'departamento' => '06'],
            ['codigo' => '060310', 'distrito' => 'Sucre', 'provincia' => '0603', 'departamento' => '06'],
            ['codigo' => '060311', 'distrito' => 'Utco', 'provincia' => '0603', 'departamento' => '06'],
            ['codigo' => '060312', 'distrito' => 'La Libertad de Pallán', 'provincia' => '0603', 'departamento' => '06'],
        ]);

        // -------------------------------
        // CHOTA (0604)
        // -------------------------------
        $districts = array_merge($districts, [
            ['codigo' => '060401', 'distrito' => 'Chota', 'provincia' => '0604', 'departamento' => '06'],
            ['codigo' => '060402', 'distrito' => 'Anguía', 'provincia' => '0604', 'departamento' => '06'],
            ['codigo' => '060403', 'distrito' => 'Chadín', 'provincia' => '0604', 'departamento' => '06'],
            ['codigo' => '060404', 'distrito' => 'Chiguirip', 'provincia' => '0604', 'departamento' => '06'],
            ['codigo' => '060405', 'distrito' => 'Chimban', 'provincia' => '0604', 'departamento' => '06'],
            ['codigo' => '060406', 'distrito' => 'Choropampa', 'provincia' => '0604', 'departamento' => '06'],
            ['codigo' => '060407', 'distrito' => 'Cochabamba', 'provincia' => '0604', 'departamento' => '06'],
            ['codigo' => '060408', 'distrito' => 'Conchán', 'provincia' => '0604', 'departamento' => '06'],
            ['codigo' => '060409', 'distrito' => 'Huambos', 'provincia' => '0604', 'departamento' => '06'],
            ['codigo' => '060410', 'distrito' => 'Lajas', 'provincia' => '0604', 'departamento' => '06'],
            ['codigo' => '060411', 'distrito' => 'Llama', 'provincia' => '0604', 'departamento' => '06'],
            ['codigo' => '060412', 'distrito' => 'Miracosta', 'provincia' => '0604', 'departamento' => '06'],
            ['codigo' => '060413', 'distrito' => 'Paccha', 'provincia' => '0604', 'departamento' => '06'],
            ['codigo' => '060414', 'distrito' => 'Pion', 'provincia' => '0604', 'departamento' => '06'],
            ['codigo' => '060415', 'distrito' => 'Querocoto', 'provincia' => '0604', 'departamento' => '06'],
            ['codigo' => '060416', 'distrito' => 'San Juan de Licupis', 'provincia' => '0604', 'departamento' => '06'],
            ['codigo' => '060417', 'distrito' => 'Tacabamba', 'provincia' => '0604', 'departamento' => '06'],
            ['codigo' => '060418', 'distrito' => 'Tocmoche', 'provincia' => '0604', 'departamento' => '06'],
            ['codigo' => '060419', 'distrito' => 'Chalamarca', 'provincia' => '0604', 'departamento' => '06'],
        ]);

        // -------------------------------
        // CONTUMAZÁ (0605)
        // -------------------------------
        $districts = array_merge($districts, [
            ['codigo' => '060501', 'distrito' => 'Contumazá', 'provincia' => '0605', 'departamento' => '06'],
            ['codigo' => '060502', 'distrito' => 'Chilete', 'provincia' => '0605', 'departamento' => '06'],
            ['codigo' => '060503', 'distrito' => 'Cupisnique', 'provincia' => '0605', 'departamento' => '06'],
            ['codigo' => '060504', 'distrito' => 'Guzmango', 'provincia' => '0605', 'departamento' => '06'],
            ['codigo' => '060505', 'distrito' => 'San Benito', 'provincia' => '0605', 'departamento' => '06'],
            ['codigo' => '060506', 'distrito' => 'Santa Cruz de Toledo', 'provincia' => '0605', 'departamento' => '06'],
            ['codigo' => '060507', 'distrito' => 'Tantarica', 'provincia' => '0605', 'departamento' => '06'],
            ['codigo' => '060508', 'distrito' => 'Yonan', 'provincia' => '0605', 'departamento' => '06'],
        ]);

        // -------------------------------
        // CUTERVO (0606)
        // -------------------------------
        $districts = array_merge($districts, [
            ['codigo' => '060601', 'distrito' => 'Cutervo', 'provincia' => '0606', 'departamento' => '06'],
            ['codigo' => '060602', 'distrito' => 'Callayuc', 'provincia' => '0606', 'departamento' => '06'],
            ['codigo' => '060603', 'distrito' => 'Choros', 'provincia' => '0606', 'departamento' => '06'],
            ['codigo' => '060604', 'distrito' => 'Cujillo', 'provincia' => '0606', 'departamento' => '06'],
            ['codigo' => '060605', 'distrito' => 'La Ramada', 'provincia' => '0606', 'departamento' => '06'],
            ['codigo' => '060606', 'distrito' => 'Pimpingos', 'provincia' => '0606', 'departamento' => '06'],
            ['codigo' => '060607', 'distrito' => 'Querocotillo', 'provincia' => '0606', 'departamento' => '06'],
            ['codigo' => '060608', 'distrito' => 'San Andrés de Cutervo', 'provincia' => '0606', 'departamento' => '06'],
            ['codigo' => '060609', 'distrito' => 'San Juan de Cutervo', 'provincia' => '0606', 'departamento' => '06'],
            ['codigo' => '060610', 'distrito' => 'San Luis de Lucma', 'provincia' => '0606', 'departamento' => '06'],
            ['codigo' => '060611', 'distrito' => 'Santa Cruz', 'provincia' => '0606', 'departamento' => '06'],
            ['codigo' => '060612', 'distrito' => 'Santo Domingo de la Capilla', 'provincia' => '0606', 'departamento' => '06'],
            ['codigo' => '060613', 'distrito' => 'Santo Tomás', 'provincia' => '0606', 'departamento' => '06'],
            ['codigo' => '060614', 'distrito' => 'Socota', 'provincia' => '0606', 'departamento' => '06'],
            ['codigo' => '060615', 'distrito' => 'Toribio Casanova', 'provincia' => '0606', 'departamento' => '06'],
        ]);

        // -------------------------------
        // HUALGAYOC (0607)
        // -------------------------------
        $districts = array_merge($districts, [
            ['codigo' => '060701', 'distrito' => 'Bambamarca', 'provincia' => '0607', 'departamento' => '06'],
            ['codigo' => '060702', 'distrito' => 'Chugur', 'provincia' => '0607', 'departamento' => '06'],
            ['codigo' => '060703', 'distrito' => 'Hualgayoc', 'provincia' => '0607', 'departamento' => '06'],
        ]);

        // -------------------------------
        // JAÉN (0608)
        // -------------------------------
        $districts = array_merge($districts, [
            ['codigo' => '060801', 'distrito' => 'Jaén', 'provincia' => '0608', 'departamento' => '06'],
            ['codigo' => '060802', 'distrito' => 'Bellavista', 'provincia' => '0608', 'departamento' => '06'],
            ['codigo' => '060803', 'distrito' => 'Chontali', 'provincia' => '0608', 'departamento' => '06'],
            ['codigo' => '060804', 'distrito' => 'Colasay', 'provincia' => '0608', 'departamento' => '06'],
            ['codigo' => '060805', 'distrito' => 'Huabal', 'provincia' => '0608', 'departamento' => '06'],
            ['codigo' => '060806', 'distrito' => 'Las Pirias', 'provincia' => '0608', 'departamento' => '06'],
            ['codigo' => '060807', 'distrito' => 'Pomahuaca', 'provincia' => '0608', 'departamento' => '06'],
            ['codigo' => '060808', 'distrito' => 'Pucará', 'provincia' => '0608', 'departamento' => '06'],
            ['codigo' => '060809', 'distrito' => 'Sallique', 'provincia' => '0608', 'departamento' => '06'],
            ['codigo' => '060810', 'distrito' => 'San Felipe', 'provincia' => '0608', 'departamento' => '06'],
            ['codigo' => '060811', 'distrito' => 'San José del Alto', 'provincia' => '0608', 'departamento' => '06'],
            ['codigo' => '060812', 'distrito' => 'Santa Rosa', 'provincia' => '0608', 'departamento' => '06'],
        ]);

        // -------------------------------
        // SAN IGNACIO (0609)
        // -------------------------------
        $districts = array_merge($districts, [
            ['codigo' => '060901', 'distrito' => 'San Ignacio', 'provincia' => '0609', 'departamento' => '06'],
            ['codigo' => '060902', 'distrito' => 'Chirinos', 'provincia' => '0609', 'departamento' => '06'],
            ['codigo' => '060903', 'distrito' => 'Huarango', 'provincia' => '0609', 'departamento' => '06'],
            ['codigo' => '060904', 'distrito' => 'La Coipa', 'provincia' => '0609', 'departamento' => '06'],
            ['codigo' => '060905', 'distrito' => 'Namballe', 'provincia' => '0609', 'departamento' => '06'],
            ['codigo' => '060906', 'distrito' => 'San José de Lourdes', 'provincia' => '0609', 'departamento' => '06'],
            ['codigo' => '060907', 'distrito' => 'Tabaconas', 'provincia' => '0609', 'departamento' => '06'],
        ]);

        // -------------------------------
        // SAN IGNACIO (0609)
        // -------------------------------
        $districts = array_merge($districts, [
            ['codigo' => '060901', 'distrito' => 'San Ignacio', 'provincia' => '0609', 'departamento' => '06'],
            ['codigo' => '060902', 'distrito' => 'Chirinos', 'provincia' => '0609', 'departamento' => '06'],
            ['codigo' => '060903', 'distrito' => 'Huarango', 'provincia' => '0609', 'departamento' => '06'],
            ['codigo' => '060904', 'distrito' => 'La Coipa', 'provincia' => '0609', 'departamento' => '06'],
            ['codigo' => '060905', 'distrito' => 'Namballe', 'provincia' => '0609', 'departamento' => '06'],
            ['codigo' => '060906', 'distrito' => 'San José de Lourdes', 'provincia' => '0609', 'departamento' => '06'],
            ['codigo' => '060907', 'distrito' => 'Tabaconas', 'provincia' => '0609', 'departamento' => '06'],
        ]);

        // -------------------------------
        // SAN MIGUEL (0611)
        // -------------------------------
        $districts = array_merge($districts, [
            ['codigo' => '061101', 'distrito' => 'San Miguel', 'provincia' => '0611', 'departamento' => '06'],
            ['codigo' => '061102', 'distrito' => 'Bolívar', 'provincia' => '0611', 'departamento' => '06'],
            ['codigo' => '061103', 'distrito' => 'Calquis', 'provincia' => '0611', 'departamento' => '06'],
            ['codigo' => '061104', 'distrito' => 'Catilluc', 'provincia' => '0611', 'departamento' => '06'],
            ['codigo' => '061105', 'distrito' => 'El Prado', 'provincia' => '0611', 'departamento' => '06'],
            ['codigo' => '061106', 'distrito' => 'La Florida', 'provincia' => '0611', 'departamento' => '06'],
            ['codigo' => '061107', 'distrito' => 'Llapa', 'provincia' => '0611', 'departamento' => '06'],
            ['codigo' => '061108', 'distrito' => 'Nanchoc', 'provincia' => '0611', 'departamento' => '06'],
            ['codigo' => '061109', 'distrito' => 'Niepos', 'provincia' => '0611', 'departamento' => '06'],
            ['codigo' => '061110', 'distrito' => 'San Gregorio', 'provincia' => '0611', 'departamento' => '06'],
            ['codigo' => '061111', 'distrito' => 'San Silvestre de Cochan', 'provincia' => '0611', 'departamento' => '06'],
            ['codigo' => '061112', 'distrito' => 'Tongod', 'provincia' => '0611', 'departamento' => '06'],
            ['codigo' => '061113', 'distrito' => 'Unión Agua Blanca', 'provincia' => '0611', 'departamento' => '06'],
        ]);

        // -------------------------------
        // SAN PABLO (0612)
        // -------------------------------
        $districts = array_merge($districts, [
            ['codigo' => '061201', 'distrito' => 'San Pablo', 'provincia' => '0612', 'departamento' => '06'],
            ['codigo' => '061202', 'distrito' => 'San Bernardino', 'provincia' => '0612', 'departamento' => '06'],
            ['codigo' => '061203', 'distrito' => 'San Luis', 'provincia' => '0612', 'departamento' => '06'],
            ['codigo' => '061204', 'distrito' => 'Tumbadén', 'provincia' => '0612', 'departamento' => '06'],
        ]);

        // -------------------------------
        // SANTA CRUZ (0613)
        // -------------------------------
        $districts = array_merge($districts, [
            ['codigo' => '061301', 'distrito' => 'Santa Cruz', 'provincia' => '0613', 'departamento' => '06'],
            ['codigo' => '061302', 'distrito' => 'Andabamba', 'provincia' => '0613', 'departamento' => '06'],
            ['codigo' => '061303', 'distrito' => 'Catache', 'provincia' => '0613', 'departamento' => '06'],
            ['codigo' => '061304', 'distrito' => 'Chancaybaños', 'provincia' => '0613', 'departamento' => '06'],
            ['codigo' => '061305', 'distrito' => 'La Esperanza', 'provincia' => '0613', 'departamento' => '06'],
            ['codigo' => '061306', 'distrito' => 'Ninabamba', 'provincia' => '0613', 'departamento' => '06'],
            ['codigo' => '061307', 'distrito' => 'Pulan', 'provincia' => '0613', 'departamento' => '06'],
            ['codigo' => '061308', 'distrito' => 'Saucepampa', 'provincia' => '0613', 'departamento' => '06'],
            ['codigo' => '061309', 'distrito' => 'Sexi', 'provincia' => '0613', 'departamento' => '06'],
            ['codigo' => '061310', 'distrito' => 'Uticyacu', 'provincia' => '0613', 'departamento' => '06'],
            ['codigo' => '061311', 'distrito' => 'Yauyucan', 'provincia' => '0613', 'departamento' => '06'],
        ]);

        $districts = array_merge($districts, [

            // ================================
            // CALLAO
            // ================================
            ['codigo' => '070101', 'departamento' => 'CALLAO', 'provincia' => 'CALLAO', 'distrito' => 'CALLAO'],
            ['codigo' => '070102', 'departamento' => 'CALLAO', 'provincia' => 'CALLAO', 'distrito' => 'BELLAVISTA'],
            ['codigo' => '070103', 'departamento' => 'CALLAO', 'provincia' => 'CALLAO', 'distrito' => 'CARMEN DE LA LEGUA REYNOSO'],
            ['codigo' => '070104', 'departamento' => 'CALLAO', 'provincia' => 'CALLAO', 'distrito' => 'LA PERLA'],
            ['codigo' => '070105', 'departamento' => 'CALLAO', 'provincia' => 'CALLAO', 'distrito' => 'LA PUNTA'],
            ['codigo' => '070106', 'departamento' => 'CALLAO', 'provincia' => 'CALLAO', 'distrito' => 'VENTANILLA'],
            ['codigo' => '070107', 'departamento' => 'CALLAO', 'provincia' => 'CALLAO', 'distrito' => 'MI PERÚ'],
        ]);

        $districts = array_merge($districts, [

            // ================================
            // CUSCO
            // ================================

            // CUSCO
            ['codigo' => '080101', 'departamento' => 'CUSCO', 'provincia' => 'CUSCO', 'distrito' => 'CUSCO'],
            ['codigo' => '080102', 'departamento' => 'CUSCO', 'provincia' => 'CUSCO', 'distrito' => 'CCORCA'],
            ['codigo' => '080103', 'departamento' => 'CUSCO', 'provincia' => 'CUSCO', 'distrito' => 'POROY'],
            ['codigo' => '080104', 'departamento' => 'CUSCO', 'provincia' => 'CUSCO', 'distrito' => 'SAN JERÓNIMO'],
            ['codigo' => '080105', 'departamento' => 'CUSCO', 'provincia' => 'CUSCO', 'distrito' => 'SAN SEBASTIÁN'],
            ['codigo' => '080106', 'departamento' => 'CUSCO', 'provincia' => 'CUSCO', 'distrito' => 'SANTIAGO'],
            ['codigo' => '080107', 'departamento' => 'CUSCO', 'provincia' => 'CUSCO', 'distrito' => 'SAYLLA'],
            ['codigo' => '080108', 'departamento' => 'CUSCO', 'provincia' => 'CUSCO', 'distrito' => 'WANCHAQ'],

            // ACOMAYO
            ['codigo' => '080201', 'departamento' => 'CUSCO', 'provincia' => 'ACOMAYO', 'distrito' => 'ACOMAYO'],
            ['codigo' => '080202', 'departamento' => 'CUSCO', 'provincia' => 'ACOMAYO', 'distrito' => 'ACOPIA'],
            ['codigo' => '080203', 'departamento' => 'CUSCO', 'provincia' => 'ACOMAYO', 'distrito' => 'ACOS'],
            ['codigo' => '080204', 'departamento' => 'CUSCO', 'provincia' => 'ACOMAYO', 'distrito' => 'MOSOC LLACTA'],
            ['codigo' => '080205', 'departamento' => 'CUSCO', 'provincia' => 'ACOMAYO', 'distrito' => 'POMACANCHI'],
            ['codigo' => '080206', 'departamento' => 'CUSCO', 'provincia' => 'ACOMAYO', 'distrito' => 'RONDOCAN'],
            ['codigo' => '080207', 'departamento' => 'CUSCO', 'provincia' => 'ACOMAYO', 'distrito' => 'SANGARARÁ'],

            // ANTA
            ['codigo' => '080301', 'departamento' => 'CUSCO', 'provincia' => 'ANTA', 'distrito' => 'ANTA'],
            ['codigo' => '080302', 'departamento' => 'CUSCO', 'provincia' => 'ANTA', 'distrito' => 'ANCAHUASI'],
            ['codigo' => '080303', 'departamento' => 'CUSCO', 'provincia' => 'ANTA', 'distrito' => 'CACHIMAYO'],
            ['codigo' => '080304', 'departamento' => 'CUSCO', 'provincia' => 'ANTA', 'distrito' => 'CHINCHAYPUJIO'],
            ['codigo' => '080305', 'departamento' => 'CUSCO', 'provincia' => 'ANTA', 'distrito' => 'HUAROCONDO'],
            ['codigo' => '080306', 'departamento' => 'CUSCO', 'provincia' => 'ANTA', 'distrito' => 'LIMATAMBO'],
            ['codigo' => '080307', 'departamento' => 'CUSCO', 'provincia' => 'ANTA', 'distrito' => 'MOLLEPATA'],
            ['codigo' => '080308', 'departamento' => 'CUSCO', 'provincia' => 'ANTA', 'distrito' => 'PUCYURA'],
            ['codigo' => '080309', 'departamento' => 'CUSCO', 'provincia' => 'ANTA', 'distrito' => 'ZURITE'],

            // CALCA
            ['codigo' => '080401', 'departamento' => 'CUSCO', 'provincia' => 'CALCA', 'distrito' => 'CALCA'],
            ['codigo' => '080402', 'departamento' => 'CUSCO', 'provincia' => 'CALCA', 'distrito' => 'COYA'],
            ['codigo' => '080403', 'departamento' => 'CUSCO', 'provincia' => 'CALCA', 'distrito' => 'LAMAY'],
            ['codigo' => '080404', 'departamento' => 'CUSCO', 'provincia' => 'CALCA', 'distrito' => 'LARES'],
            ['codigo' => '080405', 'departamento' => 'CUSCO', 'provincia' => 'CALCA', 'distrito' => 'PISAC'],
            ['codigo' => '080406', 'departamento' => 'CUSCO', 'provincia' => 'CALCA', 'distrito' => 'SAN SALVADOR'],
            ['codigo' => '080407', 'departamento' => 'CUSCO', 'provincia' => 'CALCA', 'distrito' => 'TARAY'],
            ['codigo' => '080408', 'departamento' => 'CUSCO', 'provincia' => 'CALCA', 'distrito' => 'YANATILE'],
        ]);

        $districts = array_merge($districts, [
            // CANCHIS
            ['codigo' => '080501', 'departamento' => 'CUSCO', 'provincia' => 'CANCHIS', 'distrito' => 'SICUANI'],
            ['codigo' => '080502', 'departamento' => 'CUSCO', 'provincia' => 'CANCHIS', 'distrito' => 'CHECACUPE'],
            ['codigo' => '080503', 'departamento' => 'CUSCO', 'provincia' => 'CANCHIS', 'distrito' => 'COMBAPATA'],
            ['codigo' => '080504', 'departamento' => 'CUSCO', 'provincia' => 'CANCHIS', 'distrito' => 'MARANGANI'],
            ['codigo' => '080505', 'departamento' => 'CUSCO', 'provincia' => 'CANCHIS', 'distrito' => 'PITUMARCA'],
            ['codigo' => '080506', 'departamento' => 'CUSCO', 'provincia' => 'CANCHIS', 'distrito' => 'SAN PABLO'],
            ['codigo' => '080507', 'departamento' => 'CUSCO', 'provincia' => 'CANCHIS', 'distrito' => 'SAN PEDRO'],
            ['codigo' => '080508', 'departamento' => 'CUSCO', 'provincia' => 'CANCHIS', 'distrito' => 'TINTA'],

            // CHUMBIVILCAS
            ['codigo' => '080601', 'departamento' => 'CUSCO', 'provincia' => 'CHUMBIVILCAS', 'distrito' => 'SANTO TOMÁS'],
            ['codigo' => '080602', 'departamento' => 'CUSCO', 'provincia' => 'CHUMBIVILCAS', 'distrito' => 'CAPACMARCA'],
            ['codigo' => '080603', 'departamento' => 'CUSCO', 'provincia' => 'CHUMBIVILCAS', 'distrito' => 'CHAMACA'],
            ['codigo' => '080604', 'departamento' => 'CUSCO', 'provincia' => 'CHUMBIVILCAS', 'distrito' => 'COLQUEMARCA'],
            ['codigo' => '080605', 'departamento' => 'CUSCO', 'provincia' => 'CHUMBIVILCAS', 'distrito' => 'LIVITACA'],
            ['codigo' => '080606', 'departamento' => 'CUSCO', 'provincia' => 'CHUMBIVILCAS', 'distrito' => 'LLUSCO'],
            ['codigo' => '080607', 'departamento' => 'CUSCO', 'provincia' => 'CHUMBIVILCAS', 'distrito' => 'QUIÑOTA'],
            ['codigo' => '080608', 'departamento' => 'CUSCO', 'provincia' => 'CHUMBIVILCAS', 'distrito' => 'VELILLE'],

            // ESPINAR
            ['codigo' => '080701', 'departamento' => 'CUSCO', 'provincia' => 'ESPINAR', 'distrito' => 'ESPINAR'],
            ['codigo' => '080702', 'departamento' => 'CUSCO', 'provincia' => 'ESPINAR', 'distrito' => 'CONDOROMA'],
            ['codigo' => '080703', 'departamento' => 'CUSCO', 'provincia' => 'ESPINAR', 'distrito' => 'COPORAQUE'],
            ['codigo' => '080704', 'departamento' => 'CUSCO', 'provincia' => 'ESPINAR', 'distrito' => 'OCORURO'],
            ['codigo' => '080705', 'departamento' => 'CUSCO', 'provincia' => 'ESPINAR', 'distrito' => 'PALLPATA'],
            ['codigo' => '080706', 'departamento' => 'CUSCO', 'provincia' => 'ESPINAR', 'distrito' => 'PICHIGUA'],
            ['codigo' => '080707', 'departamento' => 'CUSCO', 'provincia' => 'ESPINAR', 'distrito' => 'SUYCKUTAMBO'],
            ['codigo' => '080708', 'departamento' => 'CUSCO', 'provincia' => 'ESPINAR', 'distrito' => 'ALTO PICHIGUA'],

            // LA CONVENCIÓN
            ['codigo' => '080801', 'departamento' => 'CUSCO', 'provincia' => 'LA CONVENCIÓN', 'distrito' => 'SANTA ANA'],
            ['codigo' => '080802', 'departamento' => 'CUSCO', 'provincia' => 'LA CONVENCIÓN', 'distrito' => 'ECHARATE'],
            ['codigo' => '080803', 'departamento' => 'CUSCO', 'provincia' => 'LA CONVENCIÓN', 'distrito' => 'HUAYOPATA'],
            ['codigo' => '080804', 'departamento' => 'CUSCO', 'provincia' => 'LA CONVENCIÓN', 'distrito' => 'MARANURA'],
            ['codigo' => '080805', 'departamento' => 'CUSCO', 'provincia' => 'LA CONVENCIÓN', 'distrito' => 'OCOBAMBA'],
            ['codigo' => '080806', 'departamento' => 'CUSCO', 'provincia' => 'LA CONVENCIÓN', 'distrito' => 'QUELLOUNO'],
            ['codigo' => '080807', 'departamento' => 'CUSCO', 'provincia' => 'LA CONVENCIÓN', 'distrito' => 'KIMBIRI'],
            ['codigo' => '080808', 'departamento' => 'CUSCO', 'provincia' => 'LA CONVENCIÓN', 'distrito' => 'SANTA TERESA'],
            ['codigo' => '080809', 'departamento' => 'CUSCO', 'provincia' => 'LA CONVENCIÓN', 'distrito' => 'VILCABAMBA'],
            ['codigo' => '080810', 'departamento' => 'CUSCO', 'provincia' => 'LA CONVENCIÓN', 'distrito' => 'PICHARI'],
            ['codigo' => '080811', 'departamento' => 'CUSCO', 'provincia' => 'LA CONVENCIÓN', 'distrito' => 'INKAWASI'],
            ['codigo' => '080812', 'departamento' => 'CUSCO', 'provincia' => 'LA CONVENCIÓN', 'distrito' => 'VILLA VIRGEN'],
            ['codigo' => '080813', 'departamento' => 'CUSCO', 'provincia' => 'LA CONVENCIÓN', 'distrito' => 'VILLA KINTIARINA'],
            ['codigo' => '080814', 'departamento' => 'CUSCO', 'provincia' => 'LA CONVENCIÓN', 'distrito' => 'MEGANTONI'],

            // PARURO
            ['codigo' => '080901', 'departamento' => 'CUSCO', 'provincia' => 'PARURO', 'distrito' => 'PARURO'],
            ['codigo' => '080902', 'departamento' => 'CUSCO', 'provincia' => 'PARURO', 'distrito' => 'ACCHA'],
            ['codigo' => '080903', 'departamento' => 'CUSCO', 'provincia' => 'PARURO', 'distrito' => 'CCAPI'],
            ['codigo' => '080904', 'departamento' => 'CUSCO', 'provincia' => 'PARURO', 'distrito' => 'COLCHA'],
            ['codigo' => '080905', 'departamento' => 'CUSCO', 'provincia' => 'PARURO', 'distrito' => 'HUANOQUITE'],
            ['codigo' => '080906', 'departamento' => 'CUSCO', 'provincia' => 'PARURO', 'distrito' => 'OMACHA'],
            ['codigo' => '080907', 'departamento' => 'CUSCO', 'provincia' => 'PARURO', 'distrito' => 'PACCARITAMBO'],
            ['codigo' => '080908', 'departamento' => 'CUSCO', 'provincia' => 'PARURO', 'distrito' => 'PILLPINTO'],
            ['codigo' => '080909', 'departamento' => 'CUSCO', 'provincia' => 'PARURO', 'distrito' => 'YAURISQUE'],

            // PAUCARTAMBO
            ['codigo' => '081001', 'departamento' => 'CUSCO', 'provincia' => 'PAUCARTAMBO', 'distrito' => 'PAUCARTAMBO'],
            ['codigo' => '081002', 'departamento' => 'CUSCO', 'provincia' => 'PAUCARTAMBO', 'distrito' => 'CAICAY'],
            ['codigo' => '081003', 'departamento' => 'CUSCO', 'provincia' => 'PAUCARTAMBO', 'distrito' => 'CHALLABAMBA'],
            ['codigo' => '081004', 'departamento' => 'CUSCO', 'provincia' => 'PAUCARTAMBO', 'distrito' => 'COLQUEPATA'],
            ['codigo' => '081005', 'departamento' => 'CUSCO', 'provincia' => 'PAUCARTAMBO', 'distrito' => 'HUANCARANI'],
            ['codigo' => '081006', 'departamento' => 'CUSCO', 'provincia' => 'PAUCARTAMBO', 'distrito' => 'KOSÑIPATA'],

            // QUISPICANCHI
            ['codigo' => '081101', 'departamento' => 'CUSCO', 'provincia' => 'QUISPICANCHI', 'distrito' => 'URCOS'],
            ['codigo' => '081102', 'departamento' => 'CUSCO', 'provincia' => 'QUISPICANCHI', 'distrito' => 'ANDAHUAYLILLAS'],
            ['codigo' => '081103', 'departamento' => 'CUSCO', 'provincia' => 'QUISPICANCHI', 'distrito' => 'CAMANTI'],
            ['codigo' => '081104', 'departamento' => 'CUSCO', 'provincia' => 'QUISPICANCHI', 'distrito' => 'CCARHUAYO'],
            ['codigo' => '081105', 'departamento' => 'CUSCO', 'provincia' => 'QUISPICANCHI', 'distrito' => 'CCATCA'],
            ['codigo' => '081106', 'departamento' => 'CUSCO', 'provincia' => 'QUISPICANCHI', 'distrito' => 'CUSIPATA'],
            ['codigo' => '081107', 'departamento' => 'CUSCO', 'provincia' => 'QUISPICANCHI', 'distrito' => 'HUARO'],
            ['codigo' => '081108', 'departamento' => 'CUSCO', 'provincia' => 'QUISPICANCHI', 'distrito' => 'LUCRE'],
            ['codigo' => '081109', 'departamento' => 'CUSCO', 'provincia' => 'QUISPICANCHI', 'distrito' => 'MARCAPATA'],
            ['codigo' => '081110', 'departamento' => 'CUSCO', 'provincia' => 'QUISPICANCHI', 'distrito' => 'OCONGATE'],
            ['codigo' => '081111', 'departamento' => 'CUSCO', 'provincia' => 'QUISPICANCHI', 'distrito' => 'OROPESA'],
            ['codigo' => '081112', 'departamento' => 'CUSCO', 'provincia' => 'QUISPICANCHI', 'distrito' => 'QUIQUIJANA'],

            // URUBAMBA
            ['codigo' => '081201', 'departamento' => 'CUSCO', 'provincia' => 'URUBAMBA', 'distrito' => 'URUBAMBA'],
            ['codigo' => '081202', 'departamento' => 'CUSCO', 'provincia' => 'URUBAMBA', 'distrito' => 'CHINCHERO'],
            ['codigo' => '081203', 'departamento' => 'CUSCO', 'provincia' => 'URUBAMBA', 'distrito' => 'HUAYLLABAMBA'],
            ['codigo' => '081204', 'departamento' => 'CUSCO', 'provincia' => 'URUBAMBA', 'distrito' => 'MACHUPICCHU'],
            ['codigo' => '081205', 'departamento' => 'CUSCO', 'provincia' => 'URUBAMBA', 'distrito' => 'MARAS'],
            ['codigo' => '081206', 'departamento' => 'CUSCO', 'provincia' => 'URUBAMBA', 'distrito' => 'OLLANTAYTAMBO'],
            ['codigo' => '081207', 'departamento' => 'CUSCO', 'provincia' => 'URUBAMBA', 'distrito' => 'YUCAY'],
        ]);

        $districts = array_merge($districts, [

            // ================================
            // HUANCAVELICA
            // ================================

            // HUANCAVELICA
            ['codigo' => '090101', 'departamento' => 'HUANCAVELICA', 'provincia' => 'HUANCAVELICA', 'distrito' => 'HUANCAVELICA'],
            ['codigo' => '090102', 'departamento' => 'HUANCAVELICA', 'provincia' => 'HUANCAVELICA', 'distrito' => 'ACOBAMBILLA'],
            ['codigo' => '090103', 'departamento' => 'HUANCAVELICA', 'provincia' => 'HUANCAVELICA', 'distrito' => 'ACORIA'],
            ['codigo' => '090104', 'departamento' => 'HUANCAVELICA', 'provincia' => 'HUANCAVELICA', 'distrito' => 'CONAYCA'],
            ['codigo' => '090105', 'departamento' => 'HUANCAVELICA', 'provincia' => 'HUANCAVELICA', 'distrito' => 'CUENCA'],
            ['codigo' => '090106', 'departamento' => 'HUANCAVELICA', 'provincia' => 'HUANCAVELICA', 'distrito' => 'HUACHOCOLPA'],
            ['codigo' => '090107', 'departamento' => 'HUANCAVELICA', 'provincia' => 'HUANCAVELICA', 'distrito' => 'HUAYLLAHUARA'],
            ['codigo' => '090108', 'departamento' => 'HUANCAVELICA', 'provincia' => 'HUANCAVELICA', 'distrito' => 'IZCUCHACA'],
            ['codigo' => '090109', 'departamento' => 'HUANCAVELICA', 'provincia' => 'HUANCAVELICA', 'distrito' => 'LARIA'],
            ['codigo' => '090110', 'departamento' => 'HUANCAVELICA', 'provincia' => 'HUANCAVELICA', 'distrito' => 'MANTA'],
            ['codigo' => '090111', 'departamento' => 'HUANCAVELICA', 'provincia' => 'HUANCAVELICA', 'distrito' => 'MARISCAL CÁCERES'],
            ['codigo' => '090112', 'departamento' => 'HUANCAVELICA', 'provincia' => 'HUANCAVELICA', 'distrito' => 'MOYA'],
            ['codigo' => '090113', 'departamento' => 'HUANCAVELICA', 'provincia' => 'HUANCAVELICA', 'distrito' => 'NUEVO OCCORO'],
            ['codigo' => '090114', 'departamento' => 'HUANCAVELICA', 'provincia' => 'HUANCAVELICA', 'distrito' => 'PALCA'],
            ['codigo' => '090115', 'departamento' => 'HUANCAVELICA', 'provincia' => 'HUANCAVELICA', 'distrito' => 'PILCHACA'],
            ['codigo' => '090116', 'departamento' => 'HUANCAVELICA', 'provincia' => 'HUANCAVELICA', 'distrito' => 'VILCA'],
            ['codigo' => '090117', 'departamento' => 'HUANCAVELICA', 'provincia' => 'HUANCAVELICA', 'distrito' => 'YAULI'],
            ['codigo' => '090118', 'departamento' => 'HUANCAVELICA', 'provincia' => 'HUANCAVELICA', 'distrito' => 'ASCENSIÓN'],
            ['codigo' => '090119', 'departamento' => 'HUANCAVELICA', 'provincia' => 'HUANCAVELICA', 'distrito' => 'HUANDO'],

            // ACOBAMBA
            ['codigo' => '090201', 'departamento' => 'HUANCAVELICA', 'provincia' => 'ACOBAMBA', 'distrito' => 'ACOBAMBA'],
            ['codigo' => '090202', 'departamento' => 'HUANCAVELICA', 'provincia' => 'ACOBAMBA', 'distrito' => 'ANDABAMBA'],
            ['codigo' => '090203', 'departamento' => 'HUANCAVELICA', 'provincia' => 'ACOBAMBA', 'distrito' => 'ANTA'],
            ['codigo' => '090204', 'departamento' => 'HUANCAVELICA', 'provincia' => 'ACOBAMBA', 'distrito' => 'CAJA'],
            ['codigo' => '090205', 'departamento' => 'HUANCAVELICA', 'provincia' => 'ACOBAMBA', 'distrito' => 'MARCAS'],
            ['codigo' => '090206', 'departamento' => 'HUANCAVELICA', 'provincia' => 'ACOBAMBA', 'distrito' => 'PAUCARA'],
            ['codigo' => '090207', 'departamento' => 'HUANCAVELICA', 'provincia' => 'ACOBAMBA', 'distrito' => 'POMACOCHA'],
            ['codigo' => '090208', 'departamento' => 'HUANCAVELICA', 'provincia' => 'ACOBAMBA', 'distrito' => 'ROSARIO'],

            // ANGARAES
            ['codigo' => '090301', 'departamento' => 'HUANCAVELICA', 'provincia' => 'ANGARAES', 'distrito' => 'LIRCAY'],
            ['codigo' => '090302', 'departamento' => 'HUANCAVELICA', 'provincia' => 'ANGARAES', 'distrito' => 'ANCHONGA'],
            ['codigo' => '090303', 'departamento' => 'HUANCAVELICA', 'provincia' => 'ANGARAES', 'distrito' => 'CALLANMARCA'],
            ['codigo' => '090304', 'departamento' => 'HUANCAVELICA', 'provincia' => 'ANGARAES', 'distrito' => 'CCOCHACCASA'],
            ['codigo' => '090305', 'departamento' => 'HUANCAVELICA', 'provincia' => 'ANGARAES', 'distrito' => 'CHINCHO'],
            ['codigo' => '090306', 'departamento' => 'HUANCAVELICA', 'provincia' => 'ANGARAES', 'distrito' => 'CONGALLA'],
            ['codigo' => '090307', 'departamento' => 'HUANCAVELICA', 'provincia' => 'ANGARAES', 'distrito' => 'HUANCA-HUANCA'],
            ['codigo' => '090308', 'departamento' => 'HUANCAVELICA', 'provincia' => 'ANGARAES', 'distrito' => 'HUAYLLAY GRANDE'],
            ['codigo' => '090309', 'departamento' => 'HUANCAVELICA', 'provincia' => 'ANGARAES', 'distrito' => 'JULCAMARCA'],
            ['codigo' => '090310', 'departamento' => 'HUANCAVELICA', 'provincia' => 'ANGARAES', 'distrito' => 'SAN ANTONIO DE ANTAPARCO'],
            ['codigo' => '090311', 'departamento' => 'HUANCAVELICA', 'provincia' => 'ANGARAES', 'distrito' => 'SANTO TOMÁS DE PATA'],
            ['codigo' => '090312', 'departamento' => 'HUANCAVELICA', 'provincia' => 'ANGARAES', 'distrito' => 'SECCLLA'],

            // CASTROVIRREYNA
            ['codigo' => '090401', 'departamento' => 'HUANCAVELICA', 'provincia' => 'CASTROVIRREYNA', 'distrito' => 'CASTROVIRREYNA'],
            ['codigo' => '090402', 'departamento' => 'HUANCAVELICA', 'provincia' => 'CASTROVIRREYNA', 'distrito' => 'ARMA'],
            ['codigo' => '090403', 'departamento' => 'HUANCAVELICA', 'provincia' => 'CASTROVIRREYNA', 'distrito' => 'AURAHUÁ'],
            ['codigo' => '090404', 'departamento' => 'HUANCAVELICA', 'provincia' => 'CASTROVIRREYNA', 'distrito' => 'CAPILLAS'],
            ['codigo' => '090405', 'departamento' => 'HUANCAVELICA', 'provincia' => 'CASTROVIRREYNA', 'distrito' => 'CHUPAMARCA'],
            ['codigo' => '090406', 'departamento' => 'HUANCAVELICA', 'provincia' => 'CASTROVIRREYNA', 'distrito' => 'COCAS'],
            ['codigo' => '090407', 'departamento' => 'HUANCAVELICA', 'provincia' => 'CASTROVIRREYNA', 'distrito' => 'HUACHOS'],
            ['codigo' => '090408', 'departamento' => 'HUANCAVELICA', 'provincia' => 'CASTROVIRREYNA', 'distrito' => 'HUAMATAMBO'],
            ['codigo' => '090409', 'departamento' => 'HUANCAVELICA', 'provincia' => 'CASTROVIRREYNA', 'distrito' => 'MOLLEPAMPA'],
            ['codigo' => '090410', 'departamento' => 'HUANCAVELICA', 'provincia' => 'CASTROVIRREYNA', 'distrito' => 'SAN JUAN'],
            ['codigo' => '090411', 'departamento' => 'HUANCAVELICA', 'provincia' => 'CASTROVIRREYNA', 'distrito' => 'SANTA ANA'],
            ['codigo' => '090412', 'departamento' => 'HUANCAVELICA', 'provincia' => 'CASTROVIRREYNA', 'distrito' => 'TANTARA'],
            ['codigo' => '090413', 'departamento' => 'HUANCAVELICA', 'provincia' => 'CASTROVIRREYNA', 'distrito' => 'TICRAPO'],

            // CHURCAMPA
            ['codigo' => '090501', 'departamento' => 'HUANCAVELICA', 'provincia' => 'CHURCAMPA', 'distrito' => 'CHURCAMPA'],
            ['codigo' => '090502', 'departamento' => 'HUANCAVELICA', 'provincia' => 'CHURCAMPA', 'distrito' => 'ANCO'],
            ['codigo' => '090503', 'departamento' => 'HUANCAVELICA', 'provincia' => 'CHURCAMPA', 'distrito' => 'CHINCHIHUASI'],
            ['codigo' => '090504', 'departamento' => 'HUANCAVELICA', 'provincia' => 'CHURCAMPA', 'distrito' => 'EL CARMEN'],
            ['codigo' => '090505', 'departamento' => 'HUANCAVELICA', 'provincia' => 'CHURCAMPA', 'distrito' => 'LA MERCED'],
            ['codigo' => '090506', 'departamento' => 'HUANCAVELICA', 'provincia' => 'CHURCAMPA', 'distrito' => 'LOCROJA'],
            ['codigo' => '090507', 'departamento' => 'HUANCAVELICA', 'provincia' => 'CHURCAMPA', 'distrito' => 'PAUCARBAMBA'],
            ['codigo' => '090508', 'departamento' => 'HUANCAVELICA', 'provincia' => 'CHURCAMPA', 'distrito' => 'SAN MIGUEL DE MAYOCC'],
            ['codigo' => '090509', 'departamento' => 'HUANCAVELICA', 'provincia' => 'CHURCAMPA', 'distrito' => 'SAN PEDRO DE CORIS'],
            ['codigo' => '090510', 'departamento' => 'HUANCAVELICA', 'provincia' => 'CHURCAMPA', 'distrito' => 'PACHAMARCA'],

            // HUAYTARÁ
            ['codigo' => '090601', 'departamento' => 'HUANCAVELICA', 'provincia' => 'HUAYTARÁ', 'distrito' => 'HUAYTARÁ'],
            ['codigo' => '090602', 'departamento' => 'HUANCAVELICA', 'provincia' => 'HUAYTARÁ', 'distrito' => 'AYAVÍ'],
            ['codigo' => '090603', 'departamento' => 'HUANCAVELICA', 'provincia' => 'HUAYTARÁ', 'distrito' => 'CÓRDOVA'],
            ['codigo' => '090604', 'departamento' => 'HUANCAVELICA', 'provincia' => 'HUAYTARÁ', 'distrito' => 'HUAYACUNDO ARMA'],
            ['codigo' => '090605', 'departamento' => 'HUANCAVELICA', 'provincia' => 'HUAYTARÁ', 'distrito' => 'LARAMARCA'],
            ['codigo' => '090606', 'departamento' => 'HUANCAVELICA', 'provincia' => 'HUAYTARÁ', 'distrito' => 'OCOYO'],
            ['codigo' => '090607', 'departamento' => 'HUANCAVELICA', 'provincia' => 'HUAYTARÁ', 'distrito' => 'PILPICHACA'],
            ['codigo' => '090608', 'departamento' => 'HUANCAVELICA', 'provincia' => 'HUAYTARÁ', 'distrito' => 'QUERCO'],
            ['codigo' => '090609', 'departamento' => 'HUANCAVELICA', 'provincia' => 'HUAYTARÁ', 'distrito' => 'QUITO-ARMA'],
            ['codigo' => '090610', 'departamento' => 'HUANCAVELICA', 'provincia' => 'HUAYTARÁ', 'distrito' => 'SAN ANTONIO DE CUSICANCHA'],
            ['codigo' => '090611', 'departamento' => 'HUANCAVELICA', 'provincia' => 'HUAYTARÁ', 'distrito' => 'SAN FRANCISCO DE SANGAYAICO'],
            ['codigo' => '090612', 'departamento' => 'HUANCAVELICA', 'provincia' => 'HUAYTARÁ', 'distrito' => 'SAN ISIDRO'],
            ['codigo' => '090613', 'departamento' => 'HUANCAVELICA', 'provincia' => 'HUAYTARÁ', 'distrito' => 'SANTIAGO DE CHOCORVOS'],
            ['codigo' => '090614', 'departamento' => 'HUANCAVELICA', 'provincia' => 'HUAYTARÁ', 'distrito' => 'SANTIAGO DE QUIRAHUARÁ'],
            ['codigo' => '090615', 'departamento' => 'HUANCAVELICA', 'provincia' => 'HUAYTARÁ', 'distrito' => 'SANTO DOMINGO DE CAPILLAS'],
            ['codigo' => '090616', 'departamento' => 'HUANCAVELICA', 'provincia' => 'HUAYTARÁ', 'distrito' => 'TAMBO'],

            // TAYACAJA
            ['codigo' => '090701', 'departamento' => 'HUANCAVELICA', 'provincia' => 'TAYACAJA', 'distrito' => 'PAMPAS'],
            ['codigo' => '090702', 'departamento' => 'HUANCAVELICA', 'provincia' => 'TAYACAJA', 'distrito' => 'ACOSTAMBO'],
            ['codigo' => '090703', 'departamento' => 'HUANCAVELICA', 'provincia' => 'TAYACAJA', 'distrito' => 'ACRAQUIA'],
            ['codigo' => '090704', 'departamento' => 'HUANCAVELICA', 'provincia' => 'TAYACAJA', 'distrito' => 'AHUAYCHA'],
            ['codigo' => '090705', 'departamento' => 'HUANCAVELICA', 'provincia' => 'TAYACAJA', 'distrito' => 'COLCABAMBA'],
            ['codigo' => '090706', 'departamento' => 'HUANCAVELICA', 'provincia' => 'TAYACAJA', 'distrito' => 'DANIEL HERNÁNDEZ'],
            ['codigo' => '090707', 'departamento' => 'HUANCAVELICA', 'provincia' => 'TAYACAJA', 'distrito' => 'HUACHOCOLPA'],
            ['codigo' => '090709', 'departamento' => 'HUANCAVELICA', 'provincia' => 'TAYACAJA', 'distrito' => 'HUARIBAMBA'],
            ['codigo' => '090710', 'departamento' => 'HUANCAVELICA', 'provincia' => 'TAYACAJA', 'distrito' => 'ÑAHUIMPUQUIO'],
            ['codigo' => '090711', 'departamento' => 'HUANCAVELICA', 'provincia' => 'TAYACAJA', 'distrito' => 'PAZOS'],
            ['codigo' => '090713', 'departamento' => 'HUANCAVELICA', 'provincia' => 'TAYACAJA', 'distrito' => 'QUISHUAR'],
            ['codigo' => '090714', 'departamento' => 'HUANCAVELICA', 'provincia' => 'TAYACAJA', 'distrito' => 'SALCABAMBA'],
            ['codigo' => '090715', 'departamento' => 'HUANCAVELICA', 'provincia' => 'TAYACAJA', 'distrito' => 'SALCAHUASI'],
            ['codigo' => '090716', 'departamento' => 'HUANCAVELICA', 'provincia' => 'TAYACAJA', 'distrito' => 'SAN MARCOS DE ROCCHAC'],
            ['codigo' => '090717', 'departamento' => 'HUANCAVELICA', 'provincia' => 'TAYACAJA', 'distrito' => 'SURCUBAMBA'],
            ['codigo' => '090718', 'departamento' => 'HUANCAVELICA', 'provincia' => 'TAYACAJA', 'distrito' => 'TINTAY PUNCU'],
            ['codigo' => '090719', 'departamento' => 'HUANCAVELICA', 'provincia' => 'TAYACAJA', 'distrito' => 'QUICHUAS'],
            ['codigo' => '090720', 'departamento' => 'HUANCAVELICA', 'provincia' => 'TAYACAJA', 'distrito' => 'ANDAYMARCA'],
            ['codigo' => '090721', 'departamento' => 'HUANCAVELICA', 'provincia' => 'TAYACAJA', 'distrito' => 'ROBLE'],
            ['codigo' => '090722', 'departamento' => 'HUANCAVELICA', 'provincia' => 'TAYACAJA', 'distrito' => 'PICHOS'],
        ]);

        $districts = array_merge($districts, [

            // ================================
            // HUÁNUCO
            // ================================

            // HUÁNUCO
            ['codigo' => '100101', 'departamento' => 'HUÁNUCO', 'provincia' => 'HUÁNUCO', 'distrito' => 'HUÁNUCO'],
            ['codigo' => '100102', 'departamento' => 'HUÁNUCO', 'provincia' => 'HUÁNUCO', 'distrito' => 'AMARILIS'],
            ['codigo' => '100103', 'departamento' => 'HUÁNUCO', 'provincia' => 'HUÁNUCO', 'distrito' => 'CHINCHAO'],
            ['codigo' => '100104', 'departamento' => 'HUÁNUCO', 'provincia' => 'HUÁNUCO', 'distrito' => 'CHURUBAMBA'],
            ['codigo' => '100105', 'departamento' => 'HUÁNUCO', 'provincia' => 'HUÁNUCO', 'distrito' => 'MARGOS'],
            ['codigo' => '100106', 'departamento' => 'HUÁNUCO', 'provincia' => 'HUÁNUCO', 'distrito' => 'QUISQUI (KICHKI)'],
            ['codigo' => '100107', 'departamento' => 'HUÁNUCO', 'provincia' => 'HUÁNUCO', 'distrito' => 'SAN FRANCISCO DE CAYRÁN'],
            ['codigo' => '100108', 'departamento' => 'HUÁNUCO', 'provincia' => 'HUÁNUCO', 'distrito' => 'SAN PEDRO DE CHAULÁN'],
            ['codigo' => '100109', 'departamento' => 'HUÁNUCO', 'provincia' => 'HUÁNUCO', 'distrito' => 'SANTA MARÍA DEL VALLE'],
            ['codigo' => '100110', 'departamento' => 'HUÁNUCO', 'provincia' => 'HUÁNUCO', 'distrito' => 'YARUMAYO'],
            ['codigo' => '100111', 'departamento' => 'HUÁNUCO', 'provincia' => 'HUÁNUCO', 'distrito' => 'PILLCO MARCA'],
            ['codigo' => '100112', 'departamento' => 'HUÁNUCO', 'provincia' => 'HUÁNUCO', 'distrito' => 'YACUS'],
            ['codigo' => '100113', 'departamento' => 'HUÁNUCO', 'provincia' => 'HUÁNUCO', 'distrito' => 'SAN PABLO DE PILLAO'],

            // AMBO
            ['codigo' => '100201', 'departamento' => 'HUÁNUCO', 'provincia' => 'AMBO', 'distrito' => 'AMBO'],
            ['codigo' => '100202', 'departamento' => 'HUÁNUCO', 'provincia' => 'AMBO', 'distrito' => 'CAYNA'],
            ['codigo' => '100203', 'departamento' => 'HUÁNUCO', 'provincia' => 'AMBO', 'distrito' => 'COLPAS'],
            ['codigo' => '100204', 'departamento' => 'HUÁNUCO', 'provincia' => 'AMBO', 'distrito' => 'CONCHAMARCA'],
            ['codigo' => '100205', 'departamento' => 'HUÁNUCO', 'provincia' => 'AMBO', 'distrito' => 'HUÁCAR'],
            ['codigo' => '100206', 'departamento' => 'HUÁNUCO', 'provincia' => 'AMBO', 'distrito' => 'SAN FRANCISCO'],
            ['codigo' => '100207', 'departamento' => 'HUÁNUCO', 'provincia' => 'AMBO', 'distrito' => 'SAN RAFAEL'],
            ['codigo' => '100208', 'departamento' => 'HUÁNUCO', 'provincia' => 'AMBO', 'distrito' => 'TOMAY KICHWA'],

            // DOS DE MAYO
            ['codigo' => '100301', 'departamento' => 'HUÁNUCO', 'provincia' => 'DOS DE MAYO', 'distrito' => 'LA UNIÓN'],
            ['codigo' => '100307', 'departamento' => 'HUÁNUCO', 'provincia' => 'DOS DE MAYO', 'distrito' => 'CHUQUIS'],
            ['codigo' => '100302', 'departamento' => 'HUÁNUCO', 'provincia' => 'DOS DE MAYO', 'distrito' => 'MARIAS'],
            ['codigo' => '100303', 'departamento' => 'HUÁNUCO', 'provincia' => 'DOS DE MAYO', 'distrito' => 'PACHAS'],
            ['codigo' => '100304', 'departamento' => 'HUÁNUCO', 'provincia' => 'DOS DE MAYO', 'distrito' => 'QUIVILLA'],
            ['codigo' => '100305', 'departamento' => 'HUÁNUCO', 'provincia' => 'DOS DE MAYO', 'distrito' => 'RIPÁN'],
            ['codigo' => '100306', 'departamento' => 'HUÁNUCO', 'provincia' => 'DOS DE MAYO', 'distrito' => 'SHUNQUI'],
            ['codigo' => '100308', 'departamento' => 'HUÁNUCO', 'provincia' => 'DOS DE MAYO', 'distrito' => 'SILLAPATA'],
            ['codigo' => '100309', 'departamento' => 'HUÁNUCO', 'provincia' => 'DOS DE MAYO', 'distrito' => 'YANAS'],

            // HUACAYBAMBA
            ['codigo' => '100401', 'departamento' => 'HUÁNUCO', 'provincia' => 'HUACAYBAMBA', 'distrito' => 'HUACAYBAMBA'],
            ['codigo' => '100402', 'departamento' => 'HUÁNUCO', 'provincia' => 'HUACAYBAMBA', 'distrito' => 'CANCHABAMBA'],
            ['codigo' => '100403', 'departamento' => 'HUÁNUCO', 'provincia' => 'HUACAYBAMBA', 'distrito' => 'COCHABAMBA'],
            ['codigo' => '100404', 'departamento' => 'HUÁNUCO', 'provincia' => 'HUACAYBAMBA', 'distrito' => 'PINRA'],

            // HUAMALÍES
            ['codigo' => '100501', 'departamento' => 'HUÁNUCO', 'provincia' => 'HUAMALÍES', 'distrito' => 'LLATA'],
            ['codigo' => '100502', 'departamento' => 'HUÁNUCO', 'provincia' => 'HUAMALÍES', 'distrito' => 'ARANCAY'],
            ['codigo' => '100503', 'departamento' => 'HUÁNUCO', 'provincia' => 'HUAMALÍES', 'distrito' => 'CHAVÍN DE PARIARCA'],
            ['codigo' => '100504', 'departamento' => 'HUÁNUCO', 'provincia' => 'HUAMALÍES', 'distrito' => 'JACAS GRANDE'],
            ['codigo' => '100505', 'departamento' => 'HUÁNUCO', 'provincia' => 'HUAMALÍES', 'distrito' => 'JIRCÁN'],
            ['codigo' => '100506', 'departamento' => 'HUÁNUCO', 'provincia' => 'HUAMALÍES', 'distrito' => 'MIRAFLORES'],
            ['codigo' => '100507', 'departamento' => 'HUÁNUCO', 'provincia' => 'HUAMALÍES', 'distrito' => 'MONZÓN'],
            ['codigo' => '100508', 'departamento' => 'HUÁNUCO', 'provincia' => 'HUAMALÍES', 'distrito' => 'PUNCHAO'],
            ['codigo' => '100509', 'departamento' => 'HUÁNUCO', 'provincia' => 'HUAMALÍES', 'distrito' => 'PUÑOS'],
            ['codigo' => '100510', 'departamento' => 'HUÁNUCO', 'provincia' => 'HUAMALÍES', 'distrito' => 'SINGA'],
            ['codigo' => '100511', 'departamento' => 'HUÁNUCO', 'provincia' => 'HUAMALÍES', 'distrito' => 'TANTAMAYO'],

            // LEONCIO PRADO
            ['codigo' => '100601', 'departamento' => 'HUÁNUCO', 'provincia' => 'LEONCIO PRADO', 'distrito' => 'RUPA-RUPA'],
            ['codigo' => '100602', 'departamento' => 'HUÁNUCO', 'provincia' => 'LEONCIO PRADO', 'distrito' => 'DANIEL ALOMÍA ROBLES'],
            ['codigo' => '100603', 'departamento' => 'HUÁNUCO', 'provincia' => 'LEONCIO PRADO', 'distrito' => 'HERMILIO VALDIZÁN'],
            ['codigo' => '100604', 'departamento' => 'HUÁNUCO', 'provincia' => 'LEONCIO PRADO', 'distrito' => 'JOSÉ CRESPO Y CASTILLO'],
            ['codigo' => '100605', 'departamento' => 'HUÁNUCO', 'provincia' => 'LEONCIO PRADO', 'distrito' => 'LUYANDO'],
            ['codigo' => '100606', 'departamento' => 'HUÁNUCO', 'provincia' => 'LEONCIO PRADO', 'distrito' => 'MARIANO DAMASO BERAUN'],

            // MARAÑÓN
            ['codigo' => '100701', 'departamento' => 'HUÁNUCO', 'provincia' => 'MARAÑÓN', 'distrito' => 'HUACRACHUCO'],
            ['codigo' => '100702', 'departamento' => 'HUÁNUCO', 'provincia' => 'MARAÑÓN', 'distrito' => 'CHOLÓN'],
            ['codigo' => '100703', 'departamento' => 'HUÁNUCO', 'provincia' => 'MARAÑÓN', 'distrito' => 'SAN BUENAVENTURA'],

            // PACHITEA
            ['codigo' => '100801', 'departamento' => 'HUÁNUCO', 'provincia' => 'PACHITEA', 'distrito' => 'PANAO'],
            ['codigo' => '100802', 'departamento' => 'HUÁNUCO', 'provincia' => 'PACHITEA', 'distrito' => 'CHAGLLA'],
            ['codigo' => '100803', 'departamento' => 'HUÁNUCO', 'provincia' => 'PACHITEA', 'distrito' => 'MOLINO'],
            ['codigo' => '100804', 'departamento' => 'HUÁNUCO', 'provincia' => 'PACHITEA', 'distrito' => 'UMARI'],

            // PUERTO INCA
            ['codigo' => '100901', 'departamento' => 'HUÁNUCO', 'provincia' => 'PUERTO INCA', 'distrito' => 'PUERTO INCA'],
            ['codigo' => '100902', 'departamento' => 'HUÁNUCO', 'provincia' => 'PUERTO INCA', 'distrito' => 'CODO DEL POZUZO'],
            ['codigo' => '100903', 'departamento' => 'HUÁNUCO', 'provincia' => 'PUERTO INCA', 'distrito' => 'HONORIA'],
            ['codigo' => '100904', 'departamento' => 'HUÁNUCO', 'provincia' => 'PUERTO INCA', 'distrito' => 'TOURNAVISTA'],
            ['codigo' => '100905', 'departamento' => 'HUÁNUCO', 'provincia' => 'PUERTO INCA', 'distrito' => 'YUYAPICHIS'],

            // LAURICOCHA
            ['codigo' => '101001', 'departamento' => 'HUÁNUCO', 'provincia' => 'LAURICOCHA', 'distrito' => 'JESÚS'],
            ['codigo' => '101002', 'departamento' => 'HUÁNUCO', 'provincia' => 'LAURICOCHA', 'distrito' => 'BAÑOS'],
            ['codigo' => '101003', 'departamento' => 'HUÁNUCO', 'provincia' => 'LAURICOCHA', 'distrito' => 'JIVIA'],
            ['codigo' => '101004', 'departamento' => 'HUÁNUCO', 'provincia' => 'LAURICOCHA', 'distrito' => 'QUEROPALCA'],
            ['codigo' => '101005', 'departamento' => 'HUÁNUCO', 'provincia' => 'LAURICOCHA', 'distrito' => 'RONDOS'],
            ['codigo' => '101006', 'departamento' => 'HUÁNUCO', 'provincia' => 'LAURICOCHA', 'distrito' => 'SAN FRANCISCO DE ASÍS'],
            ['codigo' => '101007', 'departamento' => 'HUÁNUCO', 'provincia' => 'LAURICOCHA', 'distrito' => 'SAN MIGUEL DE CAURI'],

            // YAROWILCA
            ['codigo' => '101101', 'departamento' => 'HUÁNUCO', 'provincia' => 'YAROWILCA', 'distrito' => 'CHAVÍNILLO'],
            ['codigo' => '101102', 'departamento' => 'HUÁNUCO', 'provincia' => 'YAROWILCA', 'distrito' => 'CAHUAC'],
            ['codigo' => '101103', 'departamento' => 'HUÁNUCO', 'provincia' => 'YAROWILCA', 'distrito' => 'CHACABAMBA'],
            ['codigo' => '101104', 'departamento' => 'HUÁNUCO', 'provincia' => 'YAROWILCA', 'distrito' => 'APARICIO POMARES'],
            ['codigo' => '101105', 'departamento' => 'HUÁNUCO', 'provincia' => 'YAROWILCA', 'distrito' => 'JACAS CHICO'],
            ['codigo' => '101106', 'departamento' => 'HUÁNUCO', 'provincia' => 'YAROWILCA', 'distrito' => 'OBAS'],
            ['codigo' => '101107', 'departamento' => 'HUÁNUCO', 'provincia' => 'YAROWILCA', 'distrito' => 'PAMPAMARCA'],

            // ================================
            // ICA
            // ================================

            // ICA
            ['codigo' => '110101', 'departamento' => 'ICA', 'provincia' => 'ICA', 'distrito' => 'ICA'],
            ['codigo' => '110102', 'departamento' => 'ICA', 'provincia' => 'ICA', 'distrito' => 'LA TINGUIÑA'],
            ['codigo' => '110103', 'departamento' => 'ICA', 'provincia' => 'ICA', 'distrito' => 'LOS AQUIJES'],
            ['codigo' => '110104', 'departamento' => 'ICA', 'provincia' => 'ICA', 'distrito' => 'OCUCAJE'],
            ['codigo' => '110105', 'departamento' => 'ICA', 'provincia' => 'ICA', 'distrito' => 'PACHACÚTEC'],
            ['codigo' => '110106', 'departamento' => 'ICA', 'provincia' => 'ICA', 'distrito' => 'PARCONA'],
            ['codigo' => '110107', 'departamento' => 'ICA', 'provincia' => 'ICA', 'distrito' => 'PUEBLO NUEVO'],
            ['codigo' => '110108', 'departamento' => 'ICA', 'provincia' => 'ICA', 'distrito' => 'SALAS'],
            ['codigo' => '110109', 'departamento' => 'ICA', 'provincia' => 'ICA', 'distrito' => 'SAN JOSÉ DE LOS MOLINOS'],
            ['codigo' => '110110', 'departamento' => 'ICA', 'provincia' => 'ICA', 'distrito' => 'SAN JUAN BAUTISTA'],
            ['codigo' => '110111', 'departamento' => 'ICA', 'provincia' => 'ICA', 'distrito' => 'SANTIAGO'],
            ['codigo' => '110112', 'departamento' => 'ICA', 'provincia' => 'ICA', 'distrito' => 'SUBTANJALLA'],
            ['codigo' => '110113', 'departamento' => 'ICA', 'provincia' => 'ICA', 'distrito' => 'TATE'],
            ['codigo' => '110114', 'departamento' => 'ICA', 'provincia' => 'ICA', 'distrito' => 'YAUCA DEL ROSARIO'],

            // CHINCHA
            ['codigo' => '110201', 'departamento' => 'ICA', 'provincia' => 'CHINCHA', 'distrito' => 'CHINCHA ALTA'],
            ['codigo' => '110202', 'departamento' => 'ICA', 'provincia' => 'CHINCHA', 'distrito' => 'ALTO LARÁN'],
            ['codigo' => '110203', 'departamento' => 'ICA', 'provincia' => 'CHINCHA', 'distrito' => 'CHAVÍN'],
            ['codigo' => '110204', 'departamento' => 'ICA', 'provincia' => 'CHINCHA', 'distrito' => 'CHINCHA BAJA'],
            ['codigo' => '110205', 'departamento' => 'ICA', 'provincia' => 'CHINCHA', 'distrito' => 'EL CARMEN'],
            ['codigo' => '110206', 'departamento' => 'ICA', 'provincia' => 'CHINCHA', 'distrito' => 'GROCIO PRADO'],
            ['codigo' => '110207', 'departamento' => 'ICA', 'provincia' => 'CHINCHA', 'distrito' => 'PUEBLO NUEVO'],
            ['codigo' => '110208', 'departamento' => 'ICA', 'provincia' => 'CHINCHA', 'distrito' => 'SAN JUAN DE YANAC'],
            ['codigo' => '110209', 'departamento' => 'ICA', 'provincia' => 'CHINCHA', 'distrito' => 'SAN PEDRO DE HUACARPANA'],
            ['codigo' => '110210', 'departamento' => 'ICA', 'provincia' => 'CHINCHA', 'distrito' => 'SUNAMPE'],
            ['codigo' => '110211', 'departamento' => 'ICA', 'provincia' => 'CHINCHA', 'distrito' => 'TAMBO DE MORA'],

            // NAZCA
            ['codigo' => '110301', 'departamento' => 'ICA', 'provincia' => 'NAZCA', 'distrito' => 'NAZCA'],
            ['codigo' => '110302', 'departamento' => 'ICA', 'provincia' => 'NAZCA', 'distrito' => 'CHANGUILLO'],
            ['codigo' => '110303', 'departamento' => 'ICA', 'provincia' => 'NAZCA', 'distrito' => 'EL INGENIO'],
            ['codigo' => '110304', 'departamento' => 'ICA', 'provincia' => 'NAZCA', 'distrito' => 'MARCONA'],
            ['codigo' => '110305', 'departamento' => 'ICA', 'provincia' => 'NAZCA', 'distrito' => 'VISTA ALEGRE'],

            // PALPA
            ['codigo' => '110401', 'departamento' => 'ICA', 'provincia' => 'PALPA', 'distrito' => 'PALPA'],
            ['codigo' => '110402', 'departamento' => 'ICA', 'provincia' => 'PALPA', 'distrito' => 'LLIPATA'],
            ['codigo' => '110403', 'departamento' => 'ICA', 'provincia' => 'PALPA', 'distrito' => 'RÍO GRANDE'],
            ['codigo' => '110404', 'departamento' => 'ICA', 'provincia' => 'PALPA', 'distrito' => 'SANTA CRUZ'],
            ['codigo' => '110405', 'departamento' => 'ICA', 'provincia' => 'PALPA', 'distrito' => 'TIBILLO'],

            // PISCO
            ['codigo' => '110501', 'departamento' => 'ICA', 'provincia' => 'PISCO', 'distrito' => 'PISCO'],
            ['codigo' => '110502', 'departamento' => 'ICA', 'provincia' => 'PISCO', 'distrito' => 'HUANCANO'],
            ['codigo' => '110503', 'departamento' => 'ICA', 'provincia' => 'PISCO', 'distrito' => 'HUMAY'],
            ['codigo' => '110504', 'departamento' => 'ICA', 'provincia' => 'PISCO', 'distrito' => 'INDEPENDENCIA'],
            ['codigo' => '110505', 'departamento' => 'ICA', 'provincia' => 'PISCO', 'distrito' => 'PARACAS'],
            ['codigo' => '110506', 'departamento' => 'ICA', 'provincia' => 'PISCO', 'distrito' => 'SAN ANDRÉS'],
            ['codigo' => '110507', 'departamento' => 'ICA', 'provincia' => 'PISCO', 'distrito' => 'SAN CLEMENTE'],
            ['codigo' => '110508', 'departamento' => 'ICA', 'provincia' => 'PISCO', 'distrito' => 'TÚPAC AMARU INCA'],
        ]);

        $districts = array_merge($districts, [

            // ================================
            // JUNÍN
            // ================================

            // HUANCAYO
            ['codigo' => '120101', 'departamento' => 'JUNÍN', 'provincia' => 'HUANCAYO', 'distrito' => 'HUANCAYO'],
            ['codigo' => '120104', 'departamento' => 'JUNÍN', 'provincia' => 'HUANCAYO', 'distrito' => 'CARHUACALLANGA'],
            ['codigo' => '120105', 'departamento' => 'JUNÍN', 'provincia' => 'HUANCAYO', 'distrito' => 'CHACAPAMPA'],
            ['codigo' => '120106', 'departamento' => 'JUNÍN', 'provincia' => 'HUANCAYO', 'distrito' => 'CHICCHE'],
            ['codigo' => '120107', 'departamento' => 'JUNÍN', 'provincia' => 'HUANCAYO', 'distrito' => 'CHILCA'],
            ['codigo' => '120108', 'departamento' => 'JUNÍN', 'provincia' => 'HUANCAYO', 'distrito' => 'CHONGOS ALTO'],
            ['codigo' => '120111', 'departamento' => 'JUNÍN', 'provincia' => 'HUANCAYO', 'distrito' => 'CHUPURO'],
            ['codigo' => '120112', 'departamento' => 'JUNÍN', 'provincia' => 'HUANCAYO', 'distrito' => 'COLCA'],
            ['codigo' => '120113', 'departamento' => 'JUNÍN', 'provincia' => 'HUANCAYO', 'distrito' => 'CULLHUAS'],
            ['codigo' => '120114', 'departamento' => 'JUNÍN', 'provincia' => 'HUANCAYO', 'distrito' => 'EL TAMBO'],
            ['codigo' => '120116', 'departamento' => 'JUNÍN', 'provincia' => 'HUANCAYO', 'distrito' => 'HUACRAPUQUIO'],
            ['codigo' => '120117', 'departamento' => 'JUNÍN', 'provincia' => 'HUANCAYO', 'distrito' => 'HUALHUAS'],
            ['codigo' => '120119', 'departamento' => 'JUNÍN', 'provincia' => 'HUANCAYO', 'distrito' => 'HUANCÁN'],
            ['codigo' => '120120', 'departamento' => 'JUNÍN', 'provincia' => 'HUANCAYO', 'distrito' => 'HUASICANCHA'],
            ['codigo' => '120121', 'departamento' => 'JUNÍN', 'provincia' => 'HUANCAYO', 'distrito' => 'HUAYUCACHI'],
            ['codigo' => '120122', 'departamento' => 'JUNÍN', 'provincia' => 'HUANCAYO', 'distrito' => 'INGENIO'],
            ['codigo' => '120124', 'departamento' => 'JUNÍN', 'provincia' => 'HUANCAYO', 'distrito' => 'PARIAHUANCA'],
            ['codigo' => '120125', 'departamento' => 'JUNÍN', 'provincia' => 'HUANCAYO', 'distrito' => 'PILCOMAYO'],
            ['codigo' => '120126', 'departamento' => 'JUNÍN', 'provincia' => 'HUANCAYO', 'distrito' => 'PUCARA'],
            ['codigo' => '120127', 'departamento' => 'JUNÍN', 'provincia' => 'HUANCAYO', 'distrito' => 'QUICHUAY'],
            ['codigo' => '120128', 'departamento' => 'JUNÍN', 'provincia' => 'HUANCAYO', 'distrito' => 'QUILCAS'],
            ['codigo' => '120129', 'departamento' => 'JUNÍN', 'provincia' => 'HUANCAYO', 'distrito' => 'SAN AGUSTÍN'],
            ['codigo' => '120130', 'departamento' => 'JUNÍN', 'provincia' => 'HUANCAYO', 'distrito' => 'SAN JERÓNIMO DE TUNÁN'],
            ['codigo' => '120132', 'departamento' => 'JUNÍN', 'provincia' => 'HUANCAYO', 'distrito' => 'SAÑO'],
            ['codigo' => '120133', 'departamento' => 'JUNÍN', 'provincia' => 'HUANCAYO', 'distrito' => 'SAPALLANGA'],
            ['codigo' => '120134', 'departamento' => 'JUNÍN', 'provincia' => 'HUANCAYO', 'distrito' => 'SICAYA'],
            ['codigo' => '120135', 'departamento' => 'JUNÍN', 'provincia' => 'HUANCAYO', 'distrito' => 'SANTO DOMINGO DE ACOBAMBA'],
            ['codigo' => '120136', 'departamento' => 'JUNÍN', 'provincia' => 'HUANCAYO', 'distrito' => 'VIQUES'],

            // CONCEPCIÓN
            ['codigo' => '120201', 'departamento' => 'JUNÍN', 'provincia' => 'CONCEPCIÓN', 'distrito' => 'CONCEPCIÓN'],
            ['codigo' => '120202', 'departamento' => 'JUNÍN', 'provincia' => 'CONCEPCIÓN', 'distrito' => 'ACO'],
            ['codigo' => '120203', 'departamento' => 'JUNÍN', 'provincia' => 'CONCEPCIÓN', 'distrito' => 'ANDAMARCA'],
            ['codigo' => '120204', 'departamento' => 'JUNÍN', 'provincia' => 'CONCEPCIÓN', 'distrito' => 'CHAMBARA'],
            ['codigo' => '120205', 'departamento' => 'JUNÍN', 'provincia' => 'CONCEPCIÓN', 'distrito' => 'COCHAS'],
            ['codigo' => '120206', 'departamento' => 'JUNÍN', 'provincia' => 'CONCEPCIÓN', 'distrito' => 'COMAS'],
            ['codigo' => '120207', 'departamento' => 'JUNÍN', 'provincia' => 'CONCEPCIÓN', 'distrito' => 'HEROINAS TOLEDO'],
            ['codigo' => '120208', 'departamento' => 'JUNÍN', 'provincia' => 'CONCEPCIÓN', 'distrito' => 'MANZANARES'],
            ['codigo' => '120209', 'departamento' => 'JUNÍN', 'provincia' => 'CONCEPCIÓN', 'distrito' => 'MARISCAL CASTILLA'],
            ['codigo' => '120210', 'departamento' => 'JUNÍN', 'provincia' => 'CONCEPCIÓN', 'distrito' => 'MATAHUASI'],
            ['codigo' => '120211', 'departamento' => 'JUNÍN', 'provincia' => 'CONCEPCIÓN', 'distrito' => 'MITO'],
            ['codigo' => '120212', 'departamento' => 'JUNÍN', 'provincia' => 'CONCEPCIÓN', 'distrito' => 'NUEVE DE JULIO'],
            ['codigo' => '120213', 'departamento' => 'JUNÍN', 'provincia' => 'CONCEPCIÓN', 'distrito' => 'ORCOTUNA'],
            ['codigo' => '120214', 'departamento' => 'JUNÍN', 'provincia' => 'CONCEPCIÓN', 'distrito' => 'SAN JOSÉ DE QUERO'],
            ['codigo' => '120215', 'departamento' => 'JUNÍN', 'provincia' => 'CONCEPCIÓN', 'distrito' => 'SANTA ROSA DE OCOPA'],

            // CHANCHAMAYO
            ['codigo' => '120301', 'departamento' => 'JUNÍN', 'provincia' => 'CHANCHAMAYO', 'distrito' => 'CHANCHAMAYO'],
            ['codigo' => '120302', 'departamento' => 'JUNÍN', 'provincia' => 'CHANCHAMAYO', 'distrito' => 'PERENÉ'],
            ['codigo' => '120303', 'departamento' => 'JUNÍN', 'provincia' => 'CHANCHAMAYO', 'distrito' => 'PICHANAQUI'],
            ['codigo' => '120304', 'departamento' => 'JUNÍN', 'provincia' => 'CHANCHAMAYO', 'distrito' => 'SAN LUIS DE SHUARO'],
            ['codigo' => '120305', 'departamento' => 'JUNÍN', 'provincia' => 'CHANCHAMAYO', 'distrito' => 'SAN RAMÓN'],
            ['codigo' => '120306', 'departamento' => 'JUNÍN', 'provincia' => 'CHANCHAMAYO', 'distrito' => 'VITOC'],

            // JAUJA
            ['codigo' => '120401', 'departamento' => 'JUNÍN', 'provincia' => 'JAUJA', 'distrito' => 'JAUJA'],
            ['codigo' => '120402', 'departamento' => 'JUNÍN', 'provincia' => 'JAUJA', 'distrito' => 'ACOLLA'],
            ['codigo' => '120403', 'departamento' => 'JUNÍN', 'provincia' => 'JAUJA', 'distrito' => 'APATA'],
            ['codigo' => '120404', 'departamento' => 'JUNÍN', 'provincia' => 'JAUJA', 'distrito' => 'ATAURA'],
            ['codigo' => '120405', 'departamento' => 'JUNÍN', 'provincia' => 'JAUJA', 'distrito' => 'CANCHAYLLO'],
            ['codigo' => '120406', 'departamento' => 'JUNÍN', 'provincia' => 'JAUJA', 'distrito' => 'CURICACA'],
            ['codigo' => '120407', 'departamento' => 'JUNÍN', 'provincia' => 'JAUJA', 'distrito' => 'EL MANTARO'],
            ['codigo' => '120408', 'departamento' => 'JUNÍN', 'provincia' => 'JAUJA', 'distrito' => 'HUAMALÍ'],
            ['codigo' => '120409', 'departamento' => 'JUNÍN', 'provincia' => 'JAUJA', 'distrito' => 'HUARIPAMPA'],
            ['codigo' => '120410', 'departamento' => 'JUNÍN', 'provincia' => 'JAUJA', 'distrito' => 'HUERTAS'],
            ['codigo' => '120411', 'departamento' => 'JUNÍN', 'provincia' => 'JAUJA', 'distrito' => 'JANJAILLO'],
            ['codigo' => '120412', 'departamento' => 'JUNÍN', 'provincia' => 'JAUJA', 'distrito' => 'JULCÁN'],
            ['codigo' => '120413', 'departamento' => 'JUNÍN', 'provincia' => 'JAUJA', 'distrito' => 'LEONOR ORDÓÑEZ'],
            ['codigo' => '120414', 'departamento' => 'JUNÍN', 'provincia' => 'JAUJA', 'distrito' => 'LLOCLLAPAMPA'],
            ['codigo' => '120415', 'departamento' => 'JUNÍN', 'provincia' => 'JAUJA', 'distrito' => 'MARCO'],
            ['codigo' => '120416', 'departamento' => 'JUNÍN', 'provincia' => 'JAUJA', 'distrito' => 'MASMA'],
            ['codigo' => '120417', 'departamento' => 'JUNÍN', 'provincia' => 'JAUJA', 'distrito' => 'MASMA CHICCHE'],
            ['codigo' => '120418', 'departamento' => 'JUNÍN', 'provincia' => 'JAUJA', 'distrito' => 'MOLINOS'],
            ['codigo' => '120419', 'departamento' => 'JUNÍN', 'provincia' => 'JAUJA', 'distrito' => 'MONOBAMBA'],
            ['codigo' => '120420', 'departamento' => 'JUNÍN', 'provincia' => 'JAUJA', 'distrito' => 'MUQUI'],
            ['codigo' => '120421', 'departamento' => 'JUNÍN', 'provincia' => 'JAUJA', 'distrito' => 'MUQUIYAUYO'],
            ['codigo' => '120422', 'departamento' => 'JUNÍN', 'provincia' => 'JAUJA', 'distrito' => 'PACA'],
            ['codigo' => '120423', 'departamento' => 'JUNÍN', 'provincia' => 'JAUJA', 'distrito' => 'PACCHA'],
            ['codigo' => '120424', 'departamento' => 'JUNÍN', 'provincia' => 'JAUJA', 'distrito' => 'PANCÁN'],
            ['codigo' => '120425', 'departamento' => 'JUNÍN', 'provincia' => 'JAUJA', 'distrito' => 'PARCO'],
            ['codigo' => '120426', 'departamento' => 'JUNÍN', 'provincia' => 'JAUJA', 'distrito' => 'POMACANCHA'],
            ['codigo' => '120427', 'departamento' => 'JUNÍN', 'provincia' => 'JAUJA', 'distrito' => 'RICRÁN'],
            ['codigo' => '120428', 'departamento' => 'JUNÍN', 'provincia' => 'JAUJA', 'distrito' => 'SAN LORENZO'],
            ['codigo' => '120429', 'departamento' => 'JUNÍN', 'provincia' => 'JAUJA', 'distrito' => 'SAN PEDRO DE CHUNÁN'],
            ['codigo' => '120430', 'departamento' => 'JUNÍN', 'provincia' => 'JAUJA', 'distrito' => 'SAUSA'],
            ['codigo' => '120431', 'departamento' => 'JUNÍN', 'provincia' => 'JAUJA', 'distrito' => 'SINCOS'],
            ['codigo' => '120432', 'departamento' => 'JUNÍN', 'provincia' => 'JAUJA', 'distrito' => 'TUNAN MARCA'],
            ['codigo' => '120433', 'departamento' => 'JUNÍN', 'provincia' => 'JAUJA', 'distrito' => 'YAULI'],
            ['codigo' => '120434', 'departamento' => 'JUNÍN', 'provincia' => 'JAUJA', 'distrito' => 'YAUYOS'],
        ]);

        $districts = array_merge($districts, [

            // ================================
            // LA LIBERTAD
            // ================================

            // TRUJILLO
            ['codigo' => '130101', 'departamento' => 'LA LIBERTAD', 'provincia' => 'TRUJILLO', 'distrito' => 'TRUJILLO'],
            ['codigo' => '130102', 'departamento' => 'LA LIBERTAD', 'provincia' => 'TRUJILLO', 'distrito' => 'EL PORVENIR'],
            ['codigo' => '130103', 'departamento' => 'LA LIBERTAD', 'provincia' => 'TRUJILLO', 'distrito' => 'FLORENCIA DE MORA'],
            ['codigo' => '130104', 'departamento' => 'LA LIBERTAD', 'provincia' => 'TRUJILLO', 'distrito' => 'HUANCHACO'],
            ['codigo' => '130105', 'departamento' => 'LA LIBERTAD', 'provincia' => 'TRUJILLO', 'distrito' => 'LA ESPERANZA'],
            ['codigo' => '130106', 'departamento' => 'LA LIBERTAD', 'provincia' => 'TRUJILLO', 'distrito' => 'LAREDO'],
            ['codigo' => '130107', 'departamento' => 'LA LIBERTAD', 'provincia' => 'TRUJILLO', 'distrito' => 'MOCHE'],
            ['codigo' => '130108', 'departamento' => 'LA LIBERTAD', 'provincia' => 'TRUJILLO', 'distrito' => 'POROTO'],
            ['codigo' => '130109', 'departamento' => 'LA LIBERTAD', 'provincia' => 'TRUJILLO', 'distrito' => 'SALAVERRY'],
            ['codigo' => '130110', 'departamento' => 'LA LIBERTAD', 'provincia' => 'TRUJILLO', 'distrito' => 'SIMBAL'],
            ['codigo' => '130111', 'departamento' => 'LA LIBERTAD', 'provincia' => 'TRUJILLO', 'distrito' => 'VICTOR LARCO HERRERA'],

            // ASCOPE
            ['codigo' => '130201', 'departamento' => 'LA LIBERTAD', 'provincia' => 'ASCOPE', 'distrito' => 'ASCOPE'],
            ['codigo' => '130202', 'departamento' => 'LA LIBERTAD', 'provincia' => 'ASCOPE', 'distrito' => 'CHICAMA'],
            ['codigo' => '130203', 'departamento' => 'LA LIBERTAD', 'provincia' => 'ASCOPE', 'distrito' => 'CHOCOPE'],
            ['codigo' => '130204', 'departamento' => 'LA LIBERTAD', 'provincia' => 'ASCOPE', 'distrito' => 'MAGDALENA DE CAO'],
            ['codigo' => '130205', 'departamento' => 'LA LIBERTAD', 'provincia' => 'ASCOPE', 'distrito' => 'PAIJÁN'],
            ['codigo' => '130206', 'departamento' => 'LA LIBERTAD', 'provincia' => 'ASCOPE', 'distrito' => 'RÁZURI'],
            ['codigo' => '130207', 'departamento' => 'LA LIBERTAD', 'provincia' => 'ASCOPE', 'distrito' => 'SANTIAGO DE CAO'],
            ['codigo' => '130208', 'departamento' => 'LA LIBERTAD', 'provincia' => 'ASCOPE', 'distrito' => 'CASA GRANDE'],

            // BOLÍVAR
            ['codigo' => '130301', 'departamento' => 'LA LIBERTAD', 'provincia' => 'BOLÍVAR', 'distrito' => 'BOLÍVAR'],
            ['codigo' => '130302', 'departamento' => 'LA LIBERTAD', 'provincia' => 'BOLÍVAR', 'distrito' => 'BAMBAMARCA'],
            ['codigo' => '130303', 'departamento' => 'LA LIBERTAD', 'provincia' => 'BOLÍVAR', 'distrito' => 'CONDORMARCA'],
            ['codigo' => '130304', 'departamento' => 'LA LIBERTAD', 'provincia' => 'BOLÍVAR', 'distrito' => 'LONGOTEA'],
            ['codigo' => '130305', 'departamento' => 'LA LIBERTAD', 'provincia' => 'BOLÍVAR', 'distrito' => 'UCHUMARCA'],
            ['codigo' => '130306', 'departamento' => 'LA LIBERTAD', 'provincia' => 'BOLÍVAR', 'distrito' => 'UCUNCHA'],

            // CHEPÉN
            ['codigo' => '130401', 'departamento' => 'LA LIBERTAD', 'provincia' => 'CHEPÉN', 'distrito' => 'CHEPÉN'],
            ['codigo' => '130402', 'departamento' => 'LA LIBERTAD', 'provincia' => 'CHEPÉN', 'distrito' => 'PACANGA'],
            ['codigo' => '130403', 'departamento' => 'LA LIBERTAD', 'provincia' => 'CHEPÉN', 'distrito' => 'PUEBLO NUEVO'],

            // JULCÁN
            ['codigo' => '130501', 'departamento' => 'LA LIBERTAD', 'provincia' => 'JULCÁN', 'distrito' => 'JULCÁN'],
            ['codigo' => '130502', 'departamento' => 'LA LIBERTAD', 'provincia' => 'JULCÁN', 'distrito' => 'CALAMARCA'],
            ['codigo' => '130503', 'departamento' => 'LA LIBERTAD', 'provincia' => 'JULCÁN', 'distrito' => 'CARABAMBA'],
            ['codigo' => '130504', 'departamento' => 'LA LIBERTAD', 'provincia' => 'JULCÁN', 'distrito' => 'HUASO'],

            // OTUZCO
            ['codigo' => '130601', 'departamento' => 'LA LIBERTAD', 'provincia' => 'OTUZCO', 'distrito' => 'OTUZCO'],
            ['codigo' => '130602', 'departamento' => 'LA LIBERTAD', 'provincia' => 'OTUZCO', 'distrito' => 'AGALLPAMPA'],
            ['codigo' => '130604', 'departamento' => 'LA LIBERTAD', 'provincia' => 'OTUZCO', 'distrito' => 'CHARAT'],
            ['codigo' => '130605', 'departamento' => 'LA LIBERTAD', 'provincia' => 'OTUZCO', 'distrito' => 'HUARANCHAL'],
            ['codigo' => '130606', 'departamento' => 'LA LIBERTAD', 'provincia' => 'OTUZCO', 'distrito' => 'LA CUESTA'],
            ['codigo' => '130608', 'departamento' => 'LA LIBERTAD', 'provincia' => 'OTUZCO', 'distrito' => 'MACHE'],
            ['codigo' => '130610', 'departamento' => 'LA LIBERTAD', 'provincia' => 'OTUZCO', 'distrito' => 'PARANDAY'],
            ['codigo' => '130611', 'departamento' => 'LA LIBERTAD', 'provincia' => 'OTUZCO', 'distrito' => 'SALPO'],
            ['codigo' => '130613', 'departamento' => 'LA LIBERTAD', 'provincia' => 'OTUZCO', 'distrito' => 'SINSICAP'],
            ['codigo' => '130614', 'departamento' => 'LA LIBERTAD', 'provincia' => 'OTUZCO', 'distrito' => 'USQUIL'],

            // PACASMAYO
            ['codigo' => '130701', 'departamento' => 'LA LIBERTAD', 'provincia' => 'PACASMAYO', 'distrito' => 'SAN PEDRO DE LLOC'],
            ['codigo' => '130702', 'departamento' => 'LA LIBERTAD', 'provincia' => 'PACASMAYO', 'distrito' => 'GUADALUPE'],
            ['codigo' => '130703', 'departamento' => 'LA LIBERTAD', 'provincia' => 'PACASMAYO', 'distrito' => 'JEQUETEPEQUE'],
            ['codigo' => '130704', 'departamento' => 'LA LIBERTAD', 'provincia' => 'PACASMAYO', 'distrito' => 'PACASMAYO'],
            ['codigo' => '130705', 'departamento' => 'LA LIBERTAD', 'provincia' => 'PACASMAYO', 'distrito' => 'SAN JOSÉ'],

            // PATAZ
            ['codigo' => '130801', 'departamento' => 'LA LIBERTAD', 'provincia' => 'PATAZ', 'distrito' => 'TAYABAMBA'],
            ['codigo' => '130802', 'departamento' => 'LA LIBERTAD', 'provincia' => 'PATAZ', 'distrito' => 'BULDIBUYO'],
            ['codigo' => '130803', 'departamento' => 'LA LIBERTAD', 'provincia' => 'PATAZ', 'distrito' => 'CHILLIA'],
            ['codigo' => '130804', 'departamento' => 'LA LIBERTAD', 'provincia' => 'PATAZ', 'distrito' => 'HUANCASPATA'],
            ['codigo' => '130805', 'departamento' => 'LA LIBERTAD', 'provincia' => 'PATAZ', 'distrito' => 'HUAYLILLAS'],
            ['codigo' => '130806', 'departamento' => 'LA LIBERTAD', 'provincia' => 'PATAZ', 'distrito' => 'HUAYO'],
            ['codigo' => '130807', 'departamento' => 'LA LIBERTAD', 'provincia' => 'PATAZ', 'distrito' => 'ONGÓN'],
            ['codigo' => '130808', 'departamento' => 'LA LIBERTAD', 'provincia' => 'PATAZ', 'distrito' => 'PARCOY'],
            ['codigo' => '130809', 'departamento' => 'LA LIBERTAD', 'provincia' => 'PATAZ', 'distrito' => 'PATAZ'],
            ['codigo' => '130810', 'departamento' => 'LA LIBERTAD', 'provincia' => 'PATAZ', 'distrito' => 'PIAS'],
            ['codigo' => '130811', 'departamento' => 'LA LIBERTAD', 'provincia' => 'PATAZ', 'distrito' => 'SANTIAGO DE CHALLAS'],
            ['codigo' => '130812', 'departamento' => 'LA LIBERTAD', 'provincia' => 'PATAZ', 'distrito' => 'TAURIJA'],
            ['codigo' => '130813', 'departamento' => 'LA LIBERTAD', 'provincia' => 'PATAZ', 'distrito' => 'URPAY'],

            // SÁNCHEZ CARRIÓN
            ['codigo' => '130901', 'departamento' => 'LA LIBERTAD', 'provincia' => 'SÁNCHEZ CARRIÓN', 'distrito' => 'HUAMACHUCO'],
            ['codigo' => '130902', 'departamento' => 'LA LIBERTAD', 'provincia' => 'SÁNCHEZ CARRIÓN', 'distrito' => 'CHUGAY'],
            ['codigo' => '130903', 'departamento' => 'LA LIBERTAD', 'provincia' => 'SÁNCHEZ CARRIÓN', 'distrito' => 'COCHORCO'],
            ['codigo' => '130904', 'departamento' => 'LA LIBERTAD', 'provincia' => 'SÁNCHEZ CARRIÓN', 'distrito' => 'CURGOS'],
            ['codigo' => '130905', 'departamento' => 'LA LIBERTAD', 'provincia' => 'SÁNCHEZ CARRIÓN', 'distrito' => 'MARCABAL'],
            ['codigo' => '130906', 'departamento' => 'LA LIBERTAD', 'provincia' => 'SÁNCHEZ CARRIÓN', 'distrito' => 'SANAGORÁN'],
            ['codigo' => '130907', 'departamento' => 'LA LIBERTAD', 'provincia' => 'SÁNCHEZ CARRIÓN', 'distrito' => 'SARÍN'],
            ['codigo' => '130908', 'departamento' => 'LA LIBERTAD', 'provincia' => 'SÁNCHEZ CARRIÓN', 'distrito' => 'SARTIMBAMBA'],

            // SANTIAGO DE CHUCO
            ['codigo' => '131001', 'departamento' => 'LA LIBERTAD', 'provincia' => 'SANTIAGO DE CHUCO', 'distrito' => 'SANTIAGO DE CHUCO'],
            ['codigo' => '131002', 'departamento' => 'LA LIBERTAD', 'provincia' => 'SANTIAGO DE CHUCO', 'distrito' => 'ANGASMARCA'],
            ['codigo' => '131003', 'departamento' => 'LA LIBERTAD', 'provincia' => 'SANTIAGO DE CHUCO', 'distrito' => 'CACHICADÁN'],
            ['codigo' => '131004', 'departamento' => 'LA LIBERTAD', 'provincia' => 'SANTIAGO DE CHUCO', 'distrito' => 'MOLLEBAMBA'],
            ['codigo' => '131005', 'departamento' => 'LA LIBERTAD', 'provincia' => 'SANTIAGO DE CHUCO', 'distrito' => 'MOLLEPATA'],
            ['codigo' => '131006', 'departamento' => 'LA LIBERTAD', 'provincia' => 'SANTIAGO DE CHUCO', 'distrito' => 'QUIRUVILCA'],
            ['codigo' => '131007', 'departamento' => 'LA LIBERTAD', 'provincia' => 'SANTIAGO DE CHUCO', 'distrito' => 'SANTA CRUZ DE CHUCA'],
            ['codigo' => '131008', 'departamento' => 'LA LIBERTAD', 'provincia' => 'SANTIAGO DE CHUCO', 'distrito' => 'SITABAMBA'],

            // GRAN CHIMÚ
            ['codigo' => '131101', 'departamento' => 'LA LIBERTAD', 'provincia' => 'GRAN CHIMÚ', 'distrito' => 'CASCAS'],
            ['codigo' => '131102', 'departamento' => 'LA LIBERTAD', 'provincia' => 'GRAN CHIMÚ', 'distrito' => 'LUCMA'],
            ['codigo' => '131103', 'departamento' => 'LA LIBERTAD', 'provincia' => 'GRAN CHIMÚ', 'distrito' => 'MARMOT'],
            ['codigo' => '131104', 'departamento' => 'LA LIBERTAD', 'provincia' => 'GRAN CHIMÚ', 'distrito' => 'SAYAPULLO'],

            // VIRÚ
            ['codigo' => '131201', 'departamento' => 'LA LIBERTAD', 'provincia' => 'VIRÚ', 'distrito' => 'VIRÚ'],
            ['codigo' => '131202', 'departamento' => 'LA LIBERTAD', 'provincia' => 'VIRÚ', 'distrito' => 'CHAO'],
            ['codigo' => '131203', 'departamento' => 'LA LIBERTAD', 'provincia' => 'VIRÚ', 'distrito' => 'GUADALUPITO'],
        ]);

        $districts = array_merge($districts, [

            // ================================
            // LAMBAYEQUE
            // ================================

            // CHICLAYO
            ['codigo' => '140101', 'departamento' => 'LAMBAYEQUE', 'provincia' => 'CHICLAYO', 'distrito' => 'CHICLAYO'],
            ['codigo' => '140102', 'departamento' => 'LAMBAYEQUE', 'provincia' => 'CHICLAYO', 'distrito' => 'CHONGOYAPE'],
            ['codigo' => '140103', 'departamento' => 'LAMBAYEQUE', 'provincia' => 'CHICLAYO', 'distrito' => 'ETEN'],
            ['codigo' => '140104', 'departamento' => 'LAMBAYEQUE', 'provincia' => 'CHICLAYO', 'distrito' => 'ETEN PUERTO'],
            ['codigo' => '140105', 'departamento' => 'LAMBAYEQUE', 'provincia' => 'CHICLAYO', 'distrito' => 'JOSÉ LEONARDO ORTIZ'],
            ['codigo' => '140106', 'departamento' => 'LAMBAYEQUE', 'provincia' => 'CHICLAYO', 'distrito' => 'LA VICTORIA'],
            ['codigo' => '140107', 'departamento' => 'LAMBAYEQUE', 'provincia' => 'CHICLAYO', 'distrito' => 'LAGUNAS'],
            ['codigo' => '140108', 'departamento' => 'LAMBAYEQUE', 'provincia' => 'CHICLAYO', 'distrito' => 'MONSEFÚ'],
            ['codigo' => '140109', 'departamento' => 'LAMBAYEQUE', 'provincia' => 'CHICLAYO', 'distrito' => 'NUEVA ARICA'],
            ['codigo' => '140110', 'departamento' => 'LAMBAYEQUE', 'provincia' => 'CHICLAYO', 'distrito' => 'OYOTÚN'],
            ['codigo' => '140111', 'departamento' => 'LAMBAYEQUE', 'provincia' => 'CHICLAYO', 'distrito' => 'PICSI'],
            ['codigo' => '140112', 'departamento' => 'LAMBAYEQUE', 'provincia' => 'CHICLAYO', 'distrito' => 'PIMENTEL'],
            ['codigo' => '140113', 'departamento' => 'LAMBAYEQUE', 'provincia' => 'CHICLAYO', 'distrito' => 'REQUE'],
            ['codigo' => '140114', 'departamento' => 'LAMBAYEQUE', 'provincia' => 'CHICLAYO', 'distrito' => 'SANTA ROSA'],
            ['codigo' => '140115', 'departamento' => 'LAMBAYEQUE', 'provincia' => 'CHICLAYO', 'distrito' => 'SAÑA'],
            ['codigo' => '140116', 'departamento' => 'LAMBAYEQUE', 'provincia' => 'CHICLAYO', 'distrito' => 'CAYALTÍ'],
            ['codigo' => '140117', 'departamento' => 'LAMBAYEQUE', 'provincia' => 'CHICLAYO', 'distrito' => 'PATAPO'],
            ['codigo' => '140118', 'departamento' => 'LAMBAYEQUE', 'provincia' => 'CHICLAYO', 'distrito' => 'POMALCA'],
            ['codigo' => '140119', 'departamento' => 'LAMBAYEQUE', 'provincia' => 'CHICLAYO', 'distrito' => 'PUCALA'],
            ['codigo' => '140120', 'departamento' => 'LAMBAYEQUE', 'provincia' => 'CHICLAYO', 'distrito' => 'TUMÁN'],

            // FERREÑAFE
            ['codigo' => '140201', 'departamento' => 'LAMBAYEQUE', 'provincia' => 'FERREÑAFE', 'distrito' => 'FERREÑAFE'],
            ['codigo' => '140202', 'departamento' => 'LAMBAYEQUE', 'provincia' => 'FERREÑAFE', 'distrito' => 'CAÑARIS'],
            ['codigo' => '140203', 'departamento' => 'LAMBAYEQUE', 'provincia' => 'FERREÑAFE', 'distrito' => 'INCAHUASI'],
            ['codigo' => '140204', 'departamento' => 'LAMBAYEQUE', 'provincia' => 'FERREÑAFE', 'distrito' => 'MANUEL ANTONIO MESONES MURO'],
            ['codigo' => '140205', 'departamento' => 'LAMBAYEQUE', 'provincia' => 'FERREÑAFE', 'distrito' => 'PÍTICO'],
            ['codigo' => '140206', 'departamento' => 'LAMBAYEQUE', 'provincia' => 'FERREÑAFE', 'distrito' => 'PUEBLO NUEVO'],

            // LAMBAYEQUE
            ['codigo' => '140301', 'departamento' => 'LAMBAYEQUE', 'provincia' => 'LAMBAYEQUE', 'distrito' => 'LAMBAYEQUE'],
            ['codigo' => '140302', 'departamento' => 'LAMBAYEQUE', 'provincia' => 'LAMBAYEQUE', 'distrito' => 'CHOCHOPE'],
            ['codigo' => '140303', 'departamento' => 'LAMBAYEQUE', 'provincia' => 'LAMBAYEQUE', 'distrito' => 'ÍLLIMO'],
            ['codigo' => '140304', 'departamento' => 'LAMBAYEQUE', 'provincia' => 'LAMBAYEQUE', 'distrito' => 'JAYANCA'],
            ['codigo' => '140305', 'departamento' => 'LAMBAYEQUE', 'provincia' => 'LAMBAYEQUE', 'distrito' => 'MOCHUMÍ'],
            ['codigo' => '140306', 'departamento' => 'LAMBAYEQUE', 'provincia' => 'LAMBAYEQUE', 'distrito' => 'MÓRROPE'],
            ['codigo' => '140307', 'departamento' => 'LAMBAYEQUE', 'provincia' => 'LAMBAYEQUE', 'distrito' => 'MOTUPE'],
            ['codigo' => '140308', 'departamento' => 'LAMBAYEQUE', 'provincia' => 'LAMBAYEQUE', 'distrito' => 'OLMOS'],
            ['codigo' => '140309', 'departamento' => 'LAMBAYEQUE', 'provincia' => 'LAMBAYEQUE', 'distrito' => 'PACORA'],
            ['codigo' => '140310', 'departamento' => 'LAMBAYEQUE', 'provincia' => 'LAMBAYEQUE', 'distrito' => 'SALAS'],
            ['codigo' => '140311', 'departamento' => 'LAMBAYEQUE', 'provincia' => 'LAMBAYEQUE', 'distrito' => 'SAN JOSÉ'],
            ['codigo' => '140312', 'departamento' => 'LAMBAYEQUE', 'provincia' => 'LAMBAYEQUE', 'distrito' => 'TÚCUME'],
        ]);

        $districts = array_merge($districts, [

            // ================================
            // LIMA
            // ================================

            // LIMA
            ['codigo' => '150101', 'departamento' => 'LIMA', 'provincia' => 'LIMA', 'distrito' => 'LIMA'],
            ['codigo' => '150102', 'departamento' => 'LIMA', 'provincia' => 'LIMA', 'distrito' => 'ANCÓN'],
            ['codigo' => '150103', 'departamento' => 'LIMA', 'provincia' => 'LIMA', 'distrito' => 'ATE'],
            ['codigo' => '150104', 'departamento' => 'LIMA', 'provincia' => 'LIMA', 'distrito' => 'BARRANCO'],
            ['codigo' => '150105', 'departamento' => 'LIMA', 'provincia' => 'LIMA', 'distrito' => 'BREÑA'],
            ['codigo' => '150106', 'departamento' => 'LIMA', 'provincia' => 'LIMA', 'distrito' => 'CARABAYLLO'],
            ['codigo' => '150107', 'departamento' => 'LIMA', 'provincia' => 'LIMA', 'distrito' => 'CHACLACAYO'],
            ['codigo' => '150108', 'departamento' => 'LIMA', 'provincia' => 'LIMA', 'distrito' => 'CHORRILLOS'],
            ['codigo' => '150109', 'departamento' => 'LIMA', 'provincia' => 'LIMA', 'distrito' => 'CIENEGUILLA'],
            ['codigo' => '150110', 'departamento' => 'LIMA', 'provincia' => 'LIMA', 'distrito' => 'COMAS'],
            ['codigo' => '150111', 'departamento' => 'LIMA', 'provincia' => 'LIMA', 'distrito' => 'EL AGUSTINO'],
            ['codigo' => '150112', 'departamento' => 'LIMA', 'provincia' => 'LIMA', 'distrito' => 'INDEPENDENCIA'],
            ['codigo' => '150113', 'departamento' => 'LIMA', 'provincia' => 'LIMA', 'distrito' => 'JESÚS MARÍA'],
            ['codigo' => '150114', 'departamento' => 'LIMA', 'provincia' => 'LIMA', 'distrito' => 'LA MOLINA'],
            ['codigo' => '150115', 'departamento' => 'LIMA', 'provincia' => 'LIMA', 'distrito' => 'LA VICTORIA'],
            ['codigo' => '150116', 'departamento' => 'LIMA', 'provincia' => 'LIMA', 'distrito' => 'LINCE'],
            ['codigo' => '150117', 'departamento' => 'LIMA', 'provincia' => 'LIMA', 'distrito' => 'LOS OLIVOS'],
            ['codigo' => '150118', 'departamento' => 'LIMA', 'provincia' => 'LIMA', 'distrito' => 'LURIGANCHO'],
            ['codigo' => '150119', 'departamento' => 'LIMA', 'provincia' => 'LIMA', 'distrito' => 'LURÍN'],
            ['codigo' => '150120', 'departamento' => 'LIMA', 'provincia' => 'LIMA', 'distrito' => 'MAGDALENA DEL MAR'],
            ['codigo' => '150121', 'departamento' => 'LIMA', 'provincia' => 'LIMA', 'distrito' => 'PUEBLO LIBRE'],
            ['codigo' => '150122', 'departamento' => 'LIMA', 'provincia' => 'LIMA', 'distrito' => 'MIRAFLORES'],
            ['codigo' => '150123', 'departamento' => 'LIMA', 'provincia' => 'LIMA', 'distrito' => 'PACHACÁMAC'],
            ['codigo' => '150124', 'departamento' => 'LIMA', 'provincia' => 'LIMA', 'distrito' => 'PUCUSANA'],
            ['codigo' => '150125', 'departamento' => 'LIMA', 'provincia' => 'LIMA', 'distrito' => 'PUENTE PIEDRA'],
            ['codigo' => '150126', 'departamento' => 'LIMA', 'provincia' => 'LIMA', 'distrito' => 'PUNTA HERMOSA'],
            ['codigo' => '150127', 'departamento' => 'LIMA', 'provincia' => 'LIMA', 'distrito' => 'PUNTA NEGRA'],
            ['codigo' => '150128', 'departamento' => 'LIMA', 'provincia' => 'LIMA', 'distrito' => 'RÍMAC'],
            ['codigo' => '150129', 'departamento' => 'LIMA', 'provincia' => 'LIMA', 'distrito' => 'SAN BARTOLO'],
            ['codigo' => '150130', 'departamento' => 'LIMA', 'provincia' => 'LIMA', 'distrito' => 'SAN BORJA'],
            ['codigo' => '150131', 'departamento' => 'LIMA', 'provincia' => 'LIMA', 'distrito' => 'SAN ISIDRO'],
            ['codigo' => '150132', 'departamento' => 'LIMA', 'provincia' => 'LIMA', 'distrito' => 'SAN JUAN DE LURIGANCHO'],
            ['codigo' => '150133', 'departamento' => 'LIMA', 'provincia' => 'LIMA', 'distrito' => 'SAN JUAN DE MIRAFLORES'],
            ['codigo' => '150134', 'departamento' => 'LIMA', 'provincia' => 'LIMA', 'distrito' => 'SAN LUIS'],
            ['codigo' => '150135', 'departamento' => 'LIMA', 'provincia' => 'LIMA', 'distrito' => 'SAN MARTÍN DE PORRES'],
            ['codigo' => '150136', 'departamento' => 'LIMA', 'provincia' => 'LIMA', 'distrito' => 'SAN MIGUEL'],
            ['codigo' => '150137', 'departamento' => 'LIMA', 'provincia' => 'LIMA', 'distrito' => 'SANTA ANITA'],
            ['codigo' => '150138', 'departamento' => 'LIMA', 'provincia' => 'LIMA', 'distrito' => 'SANTA MARÍA DEL MAR'],
            ['codigo' => '150139', 'departamento' => 'LIMA', 'provincia' => 'LIMA', 'distrito' => 'SANTA ROSA'],
            ['codigo' => '150140', 'departamento' => 'LIMA', 'provincia' => 'LIMA', 'distrito' => 'SANTIAGO DE SURCO'],
            ['codigo' => '150141', 'departamento' => 'LIMA', 'provincia' => 'LIMA', 'distrito' => 'SURQUILLO'],
            ['codigo' => '150142', 'departamento' => 'LIMA', 'provincia' => 'LIMA', 'distrito' => 'VILLA EL SALVADOR'],
            ['codigo' => '150143', 'departamento' => 'LIMA', 'provincia' => 'LIMA', 'distrito' => 'VILLA MARÍA DEL TRIUNFO'],

            // BARRANCA
            ['codigo' => '150201', 'departamento' => 'LIMA', 'provincia' => 'BARRANCA', 'distrito' => 'BARRANCA'],
            ['codigo' => '150202', 'departamento' => 'LIMA', 'provincia' => 'BARRANCA', 'distrito' => 'PARAMONGA'],
            ['codigo' => '150203', 'departamento' => 'LIMA', 'provincia' => 'BARRANCA', 'distrito' => 'PATIVILCA'],
            ['codigo' => '150204', 'departamento' => 'LIMA', 'provincia' => 'BARRANCA', 'distrito' => 'SUPE'],
            ['codigo' => '150205', 'departamento' => 'LIMA', 'provincia' => 'BARRANCA', 'distrito' => 'SUPE PUERTO'],

            // CAJATAMBO
            ['codigo' => '150301', 'departamento' => 'LIMA', 'provincia' => 'CAJATAMBO', 'distrito' => 'CAJATAMBO'],
            ['codigo' => '150302', 'departamento' => 'LIMA', 'provincia' => 'CAJATAMBO', 'distrito' => 'COPA'],
            ['codigo' => '150303', 'departamento' => 'LIMA', 'provincia' => 'CAJATAMBO', 'distrito' => 'GORGOR'],
            ['codigo' => '150304', 'departamento' => 'LIMA', 'provincia' => 'CAJATAMBO', 'distrito' => 'HUANCAPÓN'],
            ['codigo' => '150305', 'departamento' => 'LIMA', 'provincia' => 'CAJATAMBO', 'distrito' => 'MANÁS'],
        ]);

        $districts = array_merge($districts, [

            // ================================
            // LIMA (continuación)
            // ================================

            // CANTA
            ['codigo' => '150401', 'departamento' => 'LIMA', 'provincia' => 'CANTA', 'distrito' => 'CANTA'],
            ['codigo' => '150402', 'departamento' => 'LIMA', 'provincia' => 'CANTA', 'distrito' => 'ARAHUAY'],
            ['codigo' => '150403', 'departamento' => 'LIMA', 'provincia' => 'CANTA', 'distrito' => 'HUAMANTANGA'],
            ['codigo' => '150404', 'departamento' => 'LIMA', 'provincia' => 'CANTA', 'distrito' => 'HUAROS'],
            ['codigo' => '150405', 'departamento' => 'LIMA', 'provincia' => 'CANTA', 'distrito' => 'LACHAQUI'],
            ['codigo' => '150406', 'departamento' => 'LIMA', 'provincia' => 'CANTA', 'distrito' => 'SAN BUENAVENTURA'],
            ['codigo' => '150407', 'departamento' => 'LIMA', 'provincia' => 'CANTA', 'distrito' => 'SANTA ROSA DE QUIVES'],

            // CAÑETE
            ['codigo' => '150501', 'departamento' => 'LIMA', 'provincia' => 'CAÑETE', 'distrito' => 'SAN VICENTE DE CAÑETE'],
            ['codigo' => '150502', 'departamento' => 'LIMA', 'provincia' => 'CAÑETE', 'distrito' => 'ASIA'],
            ['codigo' => '150503', 'departamento' => 'LIMA', 'provincia' => 'CAÑETE', 'distrito' => 'CALANGO'],
            ['codigo' => '150504', 'departamento' => 'LIMA', 'provincia' => 'CAÑETE', 'distrito' => 'CERRO AZUL'],
            ['codigo' => '150505', 'departamento' => 'LIMA', 'provincia' => 'CAÑETE', 'distrito' => 'CHILCA'],
            ['codigo' => '150506', 'departamento' => 'LIMA', 'provincia' => 'CAÑETE', 'distrito' => 'COAYLLO'],
            ['codigo' => '150507', 'departamento' => 'LIMA', 'provincia' => 'CAÑETE', 'distrito' => 'IMPERIAL'],
            ['codigo' => '150508', 'departamento' => 'LIMA', 'provincia' => 'CAÑETE', 'distrito' => 'LUNAHUANÁ'],
            ['codigo' => '150509', 'departamento' => 'LIMA', 'provincia' => 'CAÑETE', 'distrito' => 'MALA'],
            ['codigo' => '150510', 'departamento' => 'LIMA', 'provincia' => 'CAÑETE', 'distrito' => 'NUEVO IMPERIAL'],
            ['codigo' => '150511', 'departamento' => 'LIMA', 'provincia' => 'CAÑETE', 'distrito' => 'PACARÁN'],
            ['codigo' => '150512', 'departamento' => 'LIMA', 'provincia' => 'CAÑETE', 'distrito' => 'QUILMANÁ'],
            ['codigo' => '150513', 'departamento' => 'LIMA', 'provincia' => 'CAÑETE', 'distrito' => 'SAN ANTONIO'],
            ['codigo' => '150514', 'departamento' => 'LIMA', 'provincia' => 'CAÑETE', 'distrito' => 'SAN LUIS'],
            ['codigo' => '150515', 'departamento' => 'LIMA', 'provincia' => 'CAÑETE', 'distrito' => 'SANTA CRUZ DE FLORES'],
            ['codigo' => '150516', 'departamento' => 'LIMA', 'provincia' => 'CAÑETE', 'distrito' => 'ZÚÑIGA'],

            // HUARAL
            ['codigo' => '150601', 'departamento' => 'LIMA', 'provincia' => 'HUARAL', 'distrito' => 'HUARAL'],
            ['codigo' => '150602', 'departamento' => 'LIMA', 'provincia' => 'HUARAL', 'distrito' => 'ATAVILLOS ALTO'],
            ['codigo' => '150603', 'departamento' => 'LIMA', 'provincia' => 'HUARAL', 'distrito' => 'ATAVILLOS BAJO'],
            ['codigo' => '150604', 'departamento' => 'LIMA', 'provincia' => 'HUARAL', 'distrito' => 'AUCALLAMA'],
            ['codigo' => '150605', 'departamento' => 'LIMA', 'provincia' => 'HUARAL', 'distrito' => 'CHANCAY'],
            ['codigo' => '150606', 'departamento' => 'LIMA', 'provincia' => 'HUARAL', 'distrito' => 'IHUARÍ'],
            ['codigo' => '150607', 'departamento' => 'LIMA', 'provincia' => 'HUARAL', 'distrito' => 'LAMPIÁN'],
            ['codigo' => '150608', 'departamento' => 'LIMA', 'provincia' => 'HUARAL', 'distrito' => 'PACARAOS'],
            ['codigo' => '150609', 'departamento' => 'LIMA', 'provincia' => 'HUARAL', 'distrito' => 'SAN MIGUEL DE ACOS'],
            ['codigo' => '150610', 'departamento' => 'LIMA', 'provincia' => 'HUARAL', 'distrito' => 'SANTA CRUZ DE ANDAMARCA'],
            ['codigo' => '150611', 'departamento' => 'LIMA', 'provincia' => 'HUARAL', 'distrito' => 'SUMBILCA'],
            ['codigo' => '150612', 'departamento' => 'LIMA', 'provincia' => 'HUARAL', 'distrito' => 'VEINTISIETE DE NOVIEMBRE'],

            // HUAROCHIRÍ
            ['codigo' => '150701', 'departamento' => 'LIMA', 'provincia' => 'HUAROCHIRÍ', 'distrito' => 'MATUCANA'],
            ['codigo' => '150702', 'departamento' => 'LIMA', 'provincia' => 'HUAROCHIRÍ', 'distrito' => 'ANTIOQUÍA'],
            ['codigo' => '150703', 'departamento' => 'LIMA', 'provincia' => 'HUAROCHIRÍ', 'distrito' => 'CALLAHUANCA'],
            ['codigo' => '150704', 'departamento' => 'LIMA', 'provincia' => 'HUAROCHIRÍ', 'distrito' => 'CARAMPOMA'],
            ['codigo' => '150705', 'departamento' => 'LIMA', 'provincia' => 'HUAROCHIRÍ', 'distrito' => 'CHICLA'],
            ['codigo' => '150706', 'departamento' => 'LIMA', 'provincia' => 'HUAROCHIRÍ', 'distrito' => 'CUENCA'],
            ['codigo' => '150707', 'departamento' => 'LIMA', 'provincia' => 'HUAROCHIRÍ', 'distrito' => 'HUACHUPAMPA'],
            ['codigo' => '150708', 'departamento' => 'LIMA', 'provincia' => 'HUAROCHIRÍ', 'distrito' => 'HUANZA'],
            ['codigo' => '150709', 'departamento' => 'LIMA', 'provincia' => 'HUAROCHIRÍ', 'distrito' => 'HUAROCHIRÍ'],
            ['codigo' => '150710', 'departamento' => 'LIMA', 'provincia' => 'HUAROCHIRÍ', 'distrito' => 'LAHUAYTAMBO'],
            ['codigo' => '150711', 'departamento' => 'LIMA', 'provincia' => 'HUAROCHIRÍ', 'distrito' => 'LANGA'],
            ['codigo' => '150712', 'departamento' => 'LIMA', 'provincia' => 'HUAROCHIRÍ', 'distrito' => 'LARAOS'],
            ['codigo' => '150713', 'departamento' => 'LIMA', 'provincia' => 'HUAROCHIRÍ', 'distrito' => 'MARIATANA'],
            ['codigo' => '150714', 'departamento' => 'LIMA', 'provincia' => 'HUAROCHIRÍ', 'distrito' => 'RICARDO PALMA'],
            ['codigo' => '150715', 'departamento' => 'LIMA', 'provincia' => 'HUAROCHIRÍ', 'distrito' => 'SAN ANDRÉS DE TUPICOCHA'],
            ['codigo' => '150716', 'departamento' => 'LIMA', 'provincia' => 'HUAROCHIRÍ', 'distrito' => 'SAN ANTONIO'],
            ['codigo' => '150717', 'departamento' => 'LIMA', 'provincia' => 'HUAROCHIRÍ', 'distrito' => 'SAN BARTOLOMÉ'],
            ['codigo' => '150718', 'departamento' => 'LIMA', 'provincia' => 'HUAROCHIRÍ', 'distrito' => 'SAN DAMIÁN'],
            ['codigo' => '150719', 'departamento' => 'LIMA', 'provincia' => 'HUAROCHIRÍ', 'distrito' => 'SAN JUAN DE IRIS'],
            ['codigo' => '150720', 'departamento' => 'LIMA', 'provincia' => 'HUAROCHIRÍ', 'distrito' => 'SAN JUAN DE TANTARANCHE'],
            ['codigo' => '150721', 'departamento' => 'LIMA', 'provincia' => 'HUAROCHIRÍ', 'distrito' => 'SAN LORENZO DE QUINTI'],
            ['codigo' => '150722', 'departamento' => 'LIMA', 'provincia' => 'HUAROCHIRÍ', 'distrito' => 'SAN MATEO'],
            ['codigo' => '150723', 'departamento' => 'LIMA', 'provincia' => 'HUAROCHIRÍ', 'distrito' => 'SAN MATEO DE OTAO'],
            ['codigo' => '150724', 'departamento' => 'LIMA', 'provincia' => 'HUAROCHIRÍ', 'distrito' => 'SAN PEDRO DE CASTA'],
            ['codigo' => '150725', 'departamento' => 'LIMA', 'provincia' => 'HUAROCHIRÍ', 'distrito' => 'SAN PEDRO DE HUANCAYRE'],
            ['codigo' => '150726', 'departamento' => 'LIMA', 'provincia' => 'HUAROCHIRÍ', 'distrito' => 'SANGALLAYA'],
            ['codigo' => '150727', 'departamento' => 'LIMA', 'provincia' => 'HUAROCHIRÍ', 'distrito' => 'SANTA CRUZ DE COCACHACRA'],
            ['codigo' => '150728', 'departamento' => 'LIMA', 'provincia' => 'HUAROCHIRÍ', 'distrito' => 'SANTA EULALIA'],
            ['codigo' => '150729', 'departamento' => 'LIMA', 'provincia' => 'HUAROCHIRÍ', 'distrito' => 'SANTIAGO DE ANCHUCAYA'],
            ['codigo' => '150730', 'departamento' => 'LIMA', 'provincia' => 'HUAROCHIRÍ', 'distrito' => 'SANTIAGO DE TUNA'],
            ['codigo' => '150731', 'departamento' => 'LIMA', 'provincia' => 'HUAROCHIRÍ', 'distrito' => 'SANTO DOMINGO DE LOS OLLEROS'],
            ['codigo' => '150732', 'departamento' => 'LIMA', 'provincia' => 'HUAROCHIRÍ', 'distrito' => 'SURCO'],

            // HUAURA
            ['codigo' => '150801', 'departamento' => 'LIMA', 'provincia' => 'HUAURA', 'distrito' => 'HUACHO'],
            ['codigo' => '150802', 'departamento' => 'LIMA', 'provincia' => 'HUAURA', 'distrito' => 'AMBAR'],
            ['codigo' => '150803', 'departamento' => 'LIMA', 'provincia' => 'HUAURA', 'distrito' => 'CALETA DE CARQUÍN'],
            ['codigo' => '150804', 'departamento' => 'LIMA', 'provincia' => 'HUAURA', 'distrito' => 'CHECRAS'],
            ['codigo' => '150805', 'departamento' => 'LIMA', 'provincia' => 'HUAURA', 'distrito' => 'HUALMAY'],
            ['codigo' => '150806', 'departamento' => 'LIMA', 'provincia' => 'HUAURA', 'distrito' => 'HUAURA'],
            ['codigo' => '150807', 'departamento' => 'LIMA', 'provincia' => 'HUAURA', 'distrito' => 'LEONCIO PRADO'],
            ['codigo' => '150808', 'departamento' => 'LIMA', 'provincia' => 'HUAURA', 'distrito' => 'PACCHO'],
            ['codigo' => '150809', 'departamento' => 'LIMA', 'provincia' => 'HUAURA', 'distrito' => 'SANTA LEONOR'],
            ['codigo' => '150810', 'departamento' => 'LIMA', 'provincia' => 'HUAURA', 'distrito' => 'SANTA MARÍA'],
            ['codigo' => '150811', 'departamento' => 'LIMA', 'provincia' => 'HUAURA', 'distrito' => 'SAYÁN'],
            ['codigo' => '150812', 'departamento' => 'LIMA', 'provincia' => 'HUAURA', 'distrito' => 'VÉGUETA'],

            // OYÓN
            ['codigo' => '150901', 'departamento' => 'LIMA', 'provincia' => 'OYÓN', 'distrito' => 'OYÓN'],
            ['codigo' => '150902', 'departamento' => 'LIMA', 'provincia' => 'OYÓN', 'distrito' => 'ANDAJES'],
            ['codigo' => '150903', 'departamento' => 'LIMA', 'provincia' => 'OYÓN', 'distrito' => 'CAUJUL'],
            ['codigo' => '150904', 'departamento' => 'LIMA', 'provincia' => 'OYÓN', 'distrito' => 'COCHAMARCA'],
            ['codigo' => '150905', 'departamento' => 'LIMA', 'provincia' => 'OYÓN', 'distrito' => 'NAVÁN'],
            ['codigo' => '150906', 'departamento' => 'LIMA', 'provincia' => 'OYÓN', 'distrito' => 'PACHANGARA'],

            // YAUYOS
            ['codigo' => '151001', 'departamento' => 'LIMA', 'provincia' => 'YAUYOS', 'distrito' => 'YAUYOS'],
            ['codigo' => '151002', 'departamento' => 'LIMA', 'provincia' => 'YAUYOS', 'distrito' => 'ALIS'],
            ['codigo' => '151003', 'departamento' => 'LIMA', 'provincia' => 'YAUYOS', 'distrito' => 'ALLAUCA'],
            ['codigo' => '151004', 'departamento' => 'LIMA', 'provincia' => 'YAUYOS', 'distrito' => 'AYAVIRÍ'],
            ['codigo' => '151005', 'departamento' => 'LIMA', 'provincia' => 'YAUYOS', 'distrito' => 'AZÁNGARO'],
            ['codigo' => '151006', 'departamento' => 'LIMA', 'provincia' => 'YAUYOS', 'distrito' => 'CACRA'],
            ['codigo' => '151007', 'departamento' => 'LIMA', 'provincia' => 'YAUYOS', 'distrito' => 'CARANIA'],
            ['codigo' => '151008', 'departamento' => 'LIMA', 'provincia' => 'YAUYOS', 'distrito' => 'CATAHUASI'],
            ['codigo' => '151009', 'departamento' => 'LIMA', 'provincia' => 'YAUYOS', 'distrito' => 'CHOCOS'],
            ['codigo' => '151010', 'departamento' => 'LIMA', 'provincia' => 'YAUYOS', 'distrito' => 'COCHAS'],
            ['codigo' => '151011', 'departamento' => 'LIMA', 'provincia' => 'YAUYOS', 'distrito' => 'COLONIA'],
            ['codigo' => '151012', 'departamento' => 'LIMA', 'provincia' => 'YAUYOS', 'distrito' => 'HONGOS'],
            ['codigo' => '151013', 'departamento' => 'LIMA', 'provincia' => 'YAUYOS', 'distrito' => 'HUAMPARÁ'],
            ['codigo' => '151014', 'departamento' => 'LIMA', 'provincia' => 'YAUYOS', 'distrito' => 'HUANCAYA'],
            ['codigo' => '151015', 'departamento' => 'LIMA', 'provincia' => 'YAUYOS', 'distrito' => 'HUANGÁSCAR'],
            ['codigo' => '151016', 'departamento' => 'LIMA', 'provincia' => 'YAUYOS', 'distrito' => 'HUANTÁN'],
            ['codigo' => '151017', 'departamento' => 'LIMA', 'provincia' => 'YAUYOS', 'distrito' => 'HUAÑEC'],
            ['codigo' => '151018', 'departamento' => 'LIMA', 'provincia' => 'YAUYOS', 'distrito' => 'LARAOS'],
            ['codigo' => '151019', 'departamento' => 'LIMA', 'provincia' => 'YAUYOS', 'distrito' => 'LINCHA'],
            ['codigo' => '151020', 'departamento' => 'LIMA', 'provincia' => 'YAUYOS', 'distrito' => 'MADEAN'],
            ['codigo' => '151021', 'departamento' => 'LIMA', 'provincia' => 'YAUYOS', 'distrito' => 'MIRAFLORES'],
            ['codigo' => '151022', 'departamento' => 'LIMA', 'provincia' => 'YAUYOS', 'distrito' => 'OMAS'],
            ['codigo' => '151023', 'departamento' => 'LIMA', 'provincia' => 'YAUYOS', 'distrito' => 'PUTINZA'],
            ['codigo' => '151024', 'departamento' => 'LIMA', 'provincia' => 'YAUYOS', 'distrito' => 'QUINCHES'],
            ['codigo' => '151025', 'departamento' => 'LIMA', 'provincia' => 'YAUYOS', 'distrito' => 'QUINOCAY'],
            ['codigo' => '151026', 'departamento' => 'LIMA', 'provincia' => 'YAUYOS', 'distrito' => 'SAN JOAQUÍN'],
            ['codigo' => '151027', 'departamento' => 'LIMA', 'provincia' => 'YAUYOS', 'distrito' => 'SAN PEDRO DE PILAS'],
            ['codigo' => '151028', 'departamento' => 'LIMA', 'provincia' => 'YAUYOS', 'distrito' => 'TANTA'],
            ['codigo' => '151029', 'departamento' => 'LIMA', 'provincia' => 'YAUYOS', 'distrito' => 'TAURIPAMPA'],
            ['codigo' => '151030', 'departamento' => 'LIMA', 'provincia' => 'YAUYOS', 'distrito' => 'TOMÁS'],
            ['codigo' => '151031', 'departamento' => 'LIMA', 'provincia' => 'YAUYOS', 'distrito' => 'TUPE'],
            ['codigo' => '151032', 'departamento' => 'LIMA', 'provincia' => 'YAUYOS', 'distrito' => 'VIÑAC'],
            ['codigo' => '151033', 'departamento' => 'LIMA', 'provincia' => 'YAUYOS', 'distrito' => 'VITIS'],
        ]);

        $districts = array_merge($districts, [

            // ================================
            // LORETO
            // ================================

            // MAYNAS
            ['codigo' => '160101', 'departamento' => 'LORETO', 'provincia' => 'MAYNAS', 'distrito' => 'IQUITOS'],
            ['codigo' => '160102', 'departamento' => 'LORETO', 'provincia' => 'MAYNAS', 'distrito' => 'ALTO NANAY'],
            ['codigo' => '160103', 'departamento' => 'LORETO', 'provincia' => 'MAYNAS', 'distrito' => 'FERNANDO LORES'],
            ['codigo' => '160104', 'departamento' => 'LORETO', 'provincia' => 'MAYNAS', 'distrito' => 'INDIANA'],
            ['codigo' => '160105', 'departamento' => 'LORETO', 'provincia' => 'MAYNAS', 'distrito' => 'LAS AMAZONAS'],
            ['codigo' => '160106', 'departamento' => 'LORETO', 'provincia' => 'MAYNAS', 'distrito' => 'MAZÁN'],
            ['codigo' => '160107', 'departamento' => 'LORETO', 'provincia' => 'MAYNAS', 'distrito' => 'NAPO'],
            ['codigo' => '160108', 'departamento' => 'LORETO', 'provincia' => 'MAYNAS', 'distrito' => 'PUNCHANA'],
            ['codigo' => '160109', 'departamento' => 'LORETO', 'provincia' => 'MAYNAS', 'distrito' => 'PUTUMAYO'],
            ['codigo' => '160110', 'departamento' => 'LORETO', 'provincia' => 'MAYNAS', 'distrito' => 'TORRES CAUSANA'],
            ['codigo' => '160111', 'departamento' => 'LORETO', 'provincia' => 'MAYNAS', 'distrito' => 'BELÉN'],
            ['codigo' => '160112', 'departamento' => 'LORETO', 'provincia' => 'MAYNAS', 'distrito' => 'SAN JUAN BAUTISTA'],

            // ALTO AMAZONAS
            ['codigo' => '160201', 'departamento' => 'LORETO', 'provincia' => 'ALTO AMAZONAS', 'distrito' => 'YURIMAGUAS'],
            ['codigo' => '160202', 'departamento' => 'LORETO', 'provincia' => 'ALTO AMAZONAS', 'distrito' => 'BALSAPUERTO'],
            ['codigo' => '160205', 'departamento' => 'LORETO', 'provincia' => 'ALTO AMAZONAS', 'distrito' => 'JEBEROS'],
            ['codigo' => '160206', 'departamento' => 'LORETO', 'provincia' => 'ALTO AMAZONAS', 'distrito' => 'LAGUNAS'],
            ['codigo' => '160210', 'departamento' => 'LORETO', 'provincia' => 'ALTO AMAZONAS', 'distrito' => 'SANTA CRUZ'],
            ['codigo' => '160211', 'departamento' => 'LORETO', 'provincia' => 'ALTO AMAZONAS', 'distrito' => 'TENIENTE CÉSAR LÓPEZ ROJAS'],

            // LORETO
            ['codigo' => '160301', 'departamento' => 'LORETO', 'provincia' => 'LORETO', 'distrito' => 'NAUTA'],
            ['codigo' => '160302', 'departamento' => 'LORETO', 'provincia' => 'LORETO', 'distrito' => 'PARINARI'],
            ['codigo' => '160303', 'departamento' => 'LORETO', 'provincia' => 'LORETO', 'distrito' => 'TIGRE'],
            ['codigo' => '160304', 'departamento' => 'LORETO', 'provincia' => 'LORETO', 'distrito' => 'TROMPETEROS'],
            ['codigo' => '160305', 'departamento' => 'LORETO', 'provincia' => 'LORETO', 'distrito' => 'URARINAS'],

            // MARISCAL RAMÓN CASTILLA
            ['codigo' => '160401', 'departamento' => 'LORETO', 'provincia' => 'MARISCAL RAMÓN CASTILLA', 'distrito' => 'RAMÓN CASTILLA'],
            ['codigo' => '160402', 'departamento' => 'LORETO', 'provincia' => 'MARISCAL RAMÓN CASTILLA', 'distrito' => 'PEBAS'],
            ['codigo' => '160403', 'departamento' => 'LORETO', 'provincia' => 'MARISCAL RAMÓN CASTILLA', 'distrito' => 'YAVARÍ'],
            ['codigo' => '160404', 'departamento' => 'LORETO', 'provincia' => 'MARISCAL RAMÓN CASTILLA', 'distrito' => 'SAN PABLO'],

            // REQUENA
            ['codigo' => '160501', 'departamento' => 'LORETO', 'provincia' => 'REQUENA', 'distrito' => 'REQUENA'],
            ['codigo' => '160502', 'departamento' => 'LORETO', 'provincia' => 'REQUENA', 'distrito' => 'ALTO TAPICHE'],
            ['codigo' => '160503', 'departamento' => 'LORETO', 'provincia' => 'REQUENA', 'distrito' => 'CAPELO'],
            ['codigo' => '160504', 'departamento' => 'LORETO', 'provincia' => 'REQUENA', 'distrito' => 'EMILIO SAN MARTÍN'],
            ['codigo' => '160505', 'departamento' => 'LORETO', 'provincia' => 'REQUENA', 'distrito' => 'MAQUÍA'],
            ['codigo' => '160506', 'departamento' => 'LORETO', 'provincia' => 'REQUENA', 'distrito' => 'PUINAHUA'],
            ['codigo' => '160507', 'departamento' => 'LORETO', 'provincia' => 'REQUENA', 'distrito' => 'SAQUENA'],
            ['codigo' => '160508', 'departamento' => 'LORETO', 'provincia' => 'REQUENA', 'distrito' => 'SOPLIN'],
            ['codigo' => '160509', 'departamento' => 'LORETO', 'provincia' => 'REQUENA', 'distrito' => 'TAPICHE'],
            ['codigo' => '160510', 'departamento' => 'LORETO', 'provincia' => 'REQUENA', 'distrito' => 'JENARO HERRERA'],
            ['codigo' => '160511', 'departamento' => 'LORETO', 'provincia' => 'REQUENA', 'distrito' => 'YAQUERANA'],

            // UCAYALI
            ['codigo' => '160601', 'departamento' => 'LORETO', 'provincia' => 'UCAYALI', 'distrito' => 'CONTAMANA'],
            ['codigo' => '160602', 'departamento' => 'LORETO', 'provincia' => 'UCAYALI', 'distrito' => 'INAHUAYA'],
            ['codigo' => '160603', 'departamento' => 'LORETO', 'provincia' => 'UCAYALI', 'distrito' => 'PADRE MÁRQUEZ'],
            ['codigo' => '160604', 'departamento' => 'LORETO', 'provincia' => 'UCAYALI', 'distrito' => 'PAMPA HERMOSA'],
            ['codigo' => '160605', 'departamento' => 'LORETO', 'provincia' => 'UCAYALI', 'distrito' => 'SARAYACU'],
            ['codigo' => '160606', 'departamento' => 'LORETO', 'provincia' => 'UCAYALI', 'distrito' => 'VARGAS GUERRA'],
        ]);

        $districts = array_merge($districts, [

            // ================================
            // MADRE DE DIOS
            // ================================

            // TAMBOPATA
            ['codigo' => '170101', 'departamento' => 'MADRE DE DIOS', 'provincia' => 'TAMBOPATA', 'distrito' => 'TAMBOPATA'],
            ['codigo' => '170102', 'departamento' => 'MADRE DE DIOS', 'provincia' => 'TAMBOPATA', 'distrito' => 'INAMBARI'],
            ['codigo' => '170103', 'departamento' => 'MADRE DE DIOS', 'provincia' => 'TAMBOPATA', 'distrito' => 'LAS PIEDRAS'],
            ['codigo' => '170104', 'departamento' => 'MADRE DE DIOS', 'provincia' => 'TAMBOPATA', 'distrito' => 'LABERINTO'],

            // MANU
            ['codigo' => '170201', 'departamento' => 'MADRE DE DIOS', 'provincia' => 'MANU', 'distrito' => 'MANU'],
            ['codigo' => '170202', 'departamento' => 'MADRE DE DIOS', 'provincia' => 'MANU', 'distrito' => 'FITZCARRALD'],
            ['codigo' => '170203', 'departamento' => 'MADRE DE DIOS', 'provincia' => 'MANU', 'distrito' => 'MADRE DE DIOS'],
            ['codigo' => '170204', 'departamento' => 'MADRE DE DIOS', 'provincia' => 'MANU', 'distrito' => 'HUEPETUHE'],

            // TAHUAMANU
            ['codigo' => '170301', 'departamento' => 'MADRE DE DIOS', 'provincia' => 'TAHUAMANU', 'distrito' => 'IÑAPARI'],
            ['codigo' => '170302', 'departamento' => 'MADRE DE DIOS', 'provincia' => 'TAHUAMANU', 'distrito' => 'IBERIA'],
            ['codigo' => '170303', 'departamento' => 'MADRE DE DIOS', 'provincia' => 'TAHUAMANU', 'distrito' => 'TAHUAMANU'],
        ]);

        $districts = array_merge($districts, [

            // ================================
            // MOQUEGUA
            // ================================

            // MARISCAL NIETO
            ['codigo' => '180101', 'departamento' => 'MOQUEGUA', 'provincia' => 'MARISCAL NIETO', 'distrito' => 'MOQUEGUA'],
            ['codigo' => '180102', 'departamento' => 'MOQUEGUA', 'provincia' => 'MARISCAL NIETO', 'distrito' => 'CARUMAS'],
            ['codigo' => '180103', 'departamento' => 'MOQUEGUA', 'provincia' => 'MARISCAL NIETO', 'distrito' => 'CUCHUMBAYA'],
            ['codigo' => '180104', 'departamento' => 'MOQUEGUA', 'provincia' => 'MARISCAL NIETO', 'distrito' => 'SAMEGUA'],
            ['codigo' => '180105', 'departamento' => 'MOQUEGUA', 'provincia' => 'MARISCAL NIETO', 'distrito' => 'SAN CRISTÓBAL'],
            ['codigo' => '180106', 'departamento' => 'MOQUEGUA', 'provincia' => 'MARISCAL NIETO', 'distrito' => 'TORATA'],

            // GENERAL SÁNCHEZ CERRO
            ['codigo' => '180201', 'departamento' => 'MOQUEGUA', 'provincia' => 'GENERAL SÁNCHEZ CERRO', 'distrito' => 'OMATE'],
            ['codigo' => '180202', 'departamento' => 'MOQUEGUA', 'provincia' => 'GENERAL SÁNCHEZ CERRO', 'distrito' => 'CHOJATA'],
            ['codigo' => '180203', 'departamento' => 'MOQUEGUA', 'provincia' => 'GENERAL SÁNCHEZ CERRO', 'distrito' => 'COALAQUE'],
            ['codigo' => '180204', 'departamento' => 'MOQUEGUA', 'provincia' => 'GENERAL SÁNCHEZ CERRO', 'distrito' => 'ICHUÑA'],
            ['codigo' => '180205', 'departamento' => 'MOQUEGUA', 'provincia' => 'GENERAL SÁNCHEZ CERRO', 'distrito' => 'LA CAPILLA'],
            ['codigo' => '180206', 'departamento' => 'MOQUEGUA', 'provincia' => 'GENERAL SÁNCHEZ CERRO', 'distrito' => 'LLOQUE'],
            ['codigo' => '180207', 'departamento' => 'MOQUEGUA', 'provincia' => 'GENERAL SÁNCHEZ CERRO', 'distrito' => 'MATALAQUE'],
            ['codigo' => '180208', 'departamento' => 'MOQUEGUA', 'provincia' => 'GENERAL SÁNCHEZ CERRO', 'distrito' => 'PUQUINA'],
            ['codigo' => '180209', 'departamento' => 'MOQUEGUA', 'provincia' => 'GENERAL SÁNCHEZ CERRO', 'distrito' => 'QUINISTAQUILLAS'],
            ['codigo' => '180210', 'departamento' => 'MOQUEGUA', 'provincia' => 'GENERAL SÁNCHEZ CERRO', 'distrito' => 'UBINAS'],
            ['codigo' => '180211', 'departamento' => 'MOQUEGUA', 'provincia' => 'GENERAL SÁNCHEZ CERRO', 'distrito' => 'YUNGA'],

            // ILO
            ['codigo' => '180301', 'departamento' => 'MOQUEGUA', 'provincia' => 'ILO', 'distrito' => 'ILO'],
            ['codigo' => '180302', 'departamento' => 'MOQUEGUA', 'provincia' => 'ILO', 'distrito' => 'EL ALGARROBAL'],
            ['codigo' => '180303', 'departamento' => 'MOQUEGUA', 'provincia' => 'ILO', 'distrito' => 'PACOCHA'],

        ]);

        $districts = array_merge($districts, [

            // ================================
            // PASCO
            // ================================

            // PASCO
            ['codigo' => '190101', 'departamento' => 'PASCO', 'provincia' => 'PASCO', 'distrito' => 'CHAUPIMARCA'],
            ['codigo' => '190102', 'departamento' => 'PASCO', 'provincia' => 'PASCO', 'distrito' => 'HUACHON'],
            ['codigo' => '190103', 'departamento' => 'PASCO', 'provincia' => 'PASCO', 'distrito' => 'HUARIACA'],
            ['codigo' => '190104', 'departamento' => 'PASCO', 'provincia' => 'PASCO', 'distrito' => 'HUAYLLAY'],
            ['codigo' => '190105', 'departamento' => 'PASCO', 'provincia' => 'PASCO', 'distrito' => 'NINACACA'],
            ['codigo' => '190106', 'departamento' => 'PASCO', 'provincia' => 'PASCO', 'distrito' => 'PALLANCHACRA'],
            ['codigo' => '190107', 'departamento' => 'PASCO', 'provincia' => 'PASCO', 'distrito' => 'PAUCARTAMBO'],
            ['codigo' => '190108', 'departamento' => 'PASCO', 'provincia' => 'PASCO', 'distrito' => 'SAN FRANCISCO DE ASIS DE YARUSYACAN'],
            ['codigo' => '190109', 'departamento' => 'PASCO', 'provincia' => 'PASCO', 'distrito' => 'SIMON BOLIVAR'],
            ['codigo' => '190110', 'departamento' => 'PASCO', 'provincia' => 'PASCO', 'distrito' => 'TICLACAYAN'],
            ['codigo' => '190111', 'departamento' => 'PASCO', 'provincia' => 'PASCO', 'distrito' => 'TINYAHUARCO'],
            ['codigo' => '190112', 'departamento' => 'PASCO', 'provincia' => 'PASCO', 'distrito' => 'VICCO'],
            ['codigo' => '190113', 'departamento' => 'PASCO', 'provincia' => 'PASCO', 'distrito' => 'YANACANCHA'],

            // DANIEL ALCIDES CARRIÓN
            ['codigo' => '190201', 'departamento' => 'PASCO', 'provincia' => 'DANIEL ALCIDES CARRIÓN', 'distrito' => 'YANAHUANCA'],
            ['codigo' => '190202', 'departamento' => 'PASCO', 'provincia' => 'DANIEL ALCIDES CARRIÓN', 'distrito' => 'CHACAYAN'],
            ['codigo' => '190203', 'departamento' => 'PASCO', 'provincia' => 'DANIEL ALCIDES CARRIÓN', 'distrito' => 'GOYLLARISQUIZGA'],
            ['codigo' => '190204', 'departamento' => 'PASCO', 'provincia' => 'DANIEL ALCIDES CARRIÓN', 'distrito' => 'PAUCAR'],
            ['codigo' => '190205', 'departamento' => 'PASCO', 'provincia' => 'DANIEL ALCIDES CARRIÓN', 'distrito' => 'SAN PEDRO DE PILLAO'],
            ['codigo' => '190206', 'departamento' => 'PASCO', 'provincia' => 'DANIEL ALCIDES CARRIÓN', 'distrito' => 'SANTA ANA DE TUSI'],
            ['codigo' => '190207', 'departamento' => 'PASCO', 'provincia' => 'DANIEL ALCIDES CARRIÓN', 'distrito' => 'TAPUC'],
            ['codigo' => '190208', 'departamento' => 'PASCO', 'provincia' => 'DANIEL ALCIDES CARRIÓN', 'distrito' => 'VILCABAMBA'],

            // OXAPAMPA
            ['codigo' => '190301', 'departamento' => 'PASCO', 'provincia' => 'OXAPAMPA', 'distrito' => 'OXAPAMPA'],
            ['codigo' => '190302', 'departamento' => 'PASCO', 'provincia' => 'OXAPAMPA', 'distrito' => 'CHONTABAMBA'],
            ['codigo' => '190303', 'departamento' => 'PASCO', 'provincia' => 'OXAPAMPA', 'distrito' => 'HUANCABAMBA'],
            ['codigo' => '190304', 'departamento' => 'PASCO', 'provincia' => 'OXAPAMPA', 'distrito' => 'PALCAZU'],
            ['codigo' => '190305', 'departamento' => 'PASCO', 'provincia' => 'OXAPAMPA', 'distrito' => 'POZUZO'],
            ['codigo' => '190306', 'departamento' => 'PASCO', 'provincia' => 'OXAPAMPA', 'distrito' => 'PUERTO BERMUDEZ'],
            ['codigo' => '190307', 'departamento' => 'PASCO', 'provincia' => 'OXAPAMPA', 'distrito' => 'VILLA RICA'],
            ['codigo' => '190308', 'departamento' => 'PASCO', 'provincia' => 'OXAPAMPA', 'distrito' => 'CONSTITUCION'],
        ]);

        $districts = array_merge($districts, [

            // ================================
            // PIURA
            // ================================

            // PIURA
            ['codigo' => '200101', 'departamento' => 'PIURA', 'provincia' => 'PIURA', 'distrito' => 'PIURA'],
            ['codigo' => '200104', 'departamento' => 'PIURA', 'provincia' => 'PIURA', 'distrito' => 'CASTILLA'],
            ['codigo' => '200105', 'departamento' => 'PIURA', 'provincia' => 'PIURA', 'distrito' => 'CATACAOS'],
            ['codigo' => '200107', 'departamento' => 'PIURA', 'provincia' => 'PIURA', 'distrito' => 'CURA MORI'],
            ['codigo' => '200108', 'departamento' => 'PIURA', 'provincia' => 'PIURA', 'distrito' => 'EL TALLAN'],
            ['codigo' => '200109', 'departamento' => 'PIURA', 'provincia' => 'PIURA', 'distrito' => 'LA ARENA'],
            ['codigo' => '200110', 'departamento' => 'PIURA', 'provincia' => 'PIURA', 'distrito' => 'LA UNION'],
            ['codigo' => '200111', 'departamento' => 'PIURA', 'provincia' => 'PIURA', 'distrito' => 'LAS LOMAS'],
            ['codigo' => '200114', 'departamento' => 'PIURA', 'provincia' => 'PIURA', 'distrito' => 'TAMBO GRANDE'],
            ['codigo' => '200115', 'departamento' => 'PIURA', 'provincia' => 'PIURA', 'distrito' => 'VEINTISEIS DE OCTUBRE'],

            // AYABACA
            ['codigo' => '200201', 'departamento' => 'PIURA', 'provincia' => 'AYABACA', 'distrito' => 'AYABACA'],
            ['codigo' => '200202', 'departamento' => 'PIURA', 'provincia' => 'AYABACA', 'distrito' => 'FRIAS'],
            ['codigo' => '200203', 'departamento' => 'PIURA', 'provincia' => 'AYABACA', 'distrito' => 'JILILI'],
            ['codigo' => '200204', 'departamento' => 'PIURA', 'provincia' => 'AYABACA', 'distrito' => 'LAGUNAS'],
            ['codigo' => '200205', 'departamento' => 'PIURA', 'provincia' => 'AYABACA', 'distrito' => 'MONTERO'],
            ['codigo' => '200206', 'departamento' => 'PIURA', 'provincia' => 'AYABACA', 'distrito' => 'PACAIPAMPA'],
            ['codigo' => '200207', 'departamento' => 'PIURA', 'provincia' => 'AYABACA', 'distrito' => 'PAIMAS'],
            ['codigo' => '200208', 'departamento' => 'PIURA', 'provincia' => 'AYABACA', 'distrito' => 'SAPILLICA'],
            ['codigo' => '200209', 'departamento' => 'PIURA', 'provincia' => 'AYABACA', 'distrito' => 'SICCHEZ'],
            ['codigo' => '200210', 'departamento' => 'PIURA', 'provincia' => 'AYABACA', 'distrito' => 'SUYO'],

            // HUANCABAMBA
            ['codigo' => '200301', 'departamento' => 'PIURA', 'provincia' => 'HUANCABAMBA', 'distrito' => 'HUANCABAMBA'],
            ['codigo' => '200302', 'departamento' => 'PIURA', 'provincia' => 'HUANCABAMBA', 'distrito' => 'CANCHAQUE'],
            ['codigo' => '200303', 'departamento' => 'PIURA', 'provincia' => 'HUANCABAMBA', 'distrito' => 'EL CARMEN DE LA FRONTERA'],
            ['codigo' => '200304', 'departamento' => 'PIURA', 'provincia' => 'HUANCABAMBA', 'distrito' => 'HUARMACA'],
            ['codigo' => '200305', 'departamento' => 'PIURA', 'provincia' => 'HUANCABAMBA', 'distrito' => 'LALAQUIZ'],
            ['codigo' => '200306', 'departamento' => 'PIURA', 'provincia' => 'HUANCABAMBA', 'distrito' => 'SAN MIGUEL DE EL FAIQUE'],
            ['codigo' => '200307', 'departamento' => 'PIURA', 'provincia' => 'HUANCABAMBA', 'distrito' => 'SONDOR'],
            ['codigo' => '200308', 'departamento' => 'PIURA', 'provincia' => 'HUANCABAMBA', 'distrito' => 'SONDORILLO'],

            // MORROPON
            ['codigo' => '200401', 'departamento' => 'PIURA', 'provincia' => 'MORROPON', 'distrito' => 'CHULUCANAS'],
            ['codigo' => '200402', 'departamento' => 'PIURA', 'provincia' => 'MORROPON', 'distrito' => 'BUENOS AIRES'],
            ['codigo' => '200403', 'departamento' => 'PIURA', 'provincia' => 'MORROPON', 'distrito' => 'CHALACO'],
            ['codigo' => '200404', 'departamento' => 'PIURA', 'provincia' => 'MORROPON', 'distrito' => 'LA MATANZA'],
            ['codigo' => '200405', 'departamento' => 'PIURA', 'provincia' => 'MORROPON', 'distrito' => 'MORROPON'],
            ['codigo' => '200406', 'departamento' => 'PIURA', 'provincia' => 'MORROPON', 'distrito' => 'SALITRAL'],
            ['codigo' => '200407', 'departamento' => 'PIURA', 'provincia' => 'MORROPON', 'distrito' => 'SAN JUAN DE BIGOTE'],
            ['codigo' => '200408', 'departamento' => 'PIURA', 'provincia' => 'MORROPON', 'distrito' => 'SANTA CATALINA DE MOSSA'],
            ['codigo' => '200409', 'departamento' => 'PIURA', 'provincia' => 'MORROPON', 'distrito' => 'SANTO DOMINGO'],
            ['codigo' => '200410', 'departamento' => 'PIURA', 'provincia' => 'MORROPON', 'distrito' => 'YAMANGO'],

            // PAITA
            ['codigo' => '200501', 'departamento' => 'PIURA', 'provincia' => 'PAITA', 'distrito' => 'PAITA'],
            ['codigo' => '200502', 'departamento' => 'PIURA', 'provincia' => 'PAITA', 'distrito' => 'AMOTAPE'],
            ['codigo' => '200503', 'departamento' => 'PIURA', 'provincia' => 'PAITA', 'distrito' => 'ARENAL'],
            ['codigo' => '200504', 'departamento' => 'PIURA', 'provincia' => 'PAITA', 'distrito' => 'COLAN'],
            ['codigo' => '200505', 'departamento' => 'PIURA', 'provincia' => 'PAITA', 'distrito' => 'LA HUACA'],
            ['codigo' => '200506', 'departamento' => 'PIURA', 'provincia' => 'PAITA', 'distrito' => 'TAMARINDO'],
            ['codigo' => '200507', 'departamento' => 'PIURA', 'provincia' => 'PAITA', 'distrito' => 'VICHAYAL'],

            // SECHURA
            ['codigo' => '200601', 'departamento' => 'PIURA', 'provincia' => 'SECHURA', 'distrito' => 'SECHURA'],
            ['codigo' => '200602', 'departamento' => 'PIURA', 'provincia' => 'SECHURA', 'distrito' => 'BELLAVISTA DE LA UNION'],
            ['codigo' => '200603', 'departamento' => 'PIURA', 'provincia' => 'SECHURA', 'distrito' => 'BERNAL'],
            ['codigo' => '200604', 'departamento' => 'PIURA', 'provincia' => 'SECHURA', 'distrito' => 'CRISTO NOS VALGA'],
            ['codigo' => '200605', 'departamento' => 'PIURA', 'provincia' => 'SECHURA', 'distrito' => 'VICE'],
            ['codigo' => '200606', 'departamento' => 'PIURA', 'provincia' => 'SECHURA', 'distrito' => 'RINCONADA LLICUAR'],

            // SULLANA
            ['codigo' => '200701', 'departamento' => 'PIURA', 'provincia' => 'SULLANA', 'distrito' => 'SULLANA'],
            ['codigo' => '200702', 'departamento' => 'PIURA', 'provincia' => 'SULLANA', 'distrito' => 'BELLAVISTA'],
            ['codigo' => '200703', 'departamento' => 'PIURA', 'provincia' => 'SULLANA', 'distrito' => 'IGNACIO ESCUDERO'],
            ['codigo' => '200704', 'departamento' => 'PIURA', 'provincia' => 'SULLANA', 'distrito' => 'LANCONES'],
            ['codigo' => '200705', 'departamento' => 'PIURA', 'provincia' => 'SULLANA', 'distrito' => 'MARCAVELICA'],
            ['codigo' => '200706', 'departamento' => 'PIURA', 'provincia' => 'SULLANA', 'distrito' => 'MIGUEL CHECA'],
            ['codigo' => '200707', 'departamento' => 'PIURA', 'provincia' => 'SULLANA', 'distrito' => 'QUERECOTILLO'],
            ['codigo' => '200708', 'departamento' => 'PIURA', 'provincia' => 'SULLANA', 'distrito' => 'SALITRAL'],

            // TALARA
            ['codigo' => '200801', 'departamento' => 'PIURA', 'provincia' => 'TALARA', 'distrito' => 'PARIÑAS'],
            ['codigo' => '200802', 'departamento' => 'PIURA', 'provincia' => 'TALARA', 'distrito' => 'EL ALTO'],
            ['codigo' => '200803', 'departamento' => 'PIURA', 'provincia' => 'TALARA', 'distrito' => 'LA BREA'],
            ['codigo' => '200804', 'departamento' => 'PIURA', 'provincia' => 'TALARA', 'distrito' => 'LOBITOS'],
            ['codigo' => '200805', 'departamento' => 'PIURA', 'provincia' => 'TALARA', 'distrito' => 'LOS ORGANOS'],
            ['codigo' => '200806', 'departamento' => 'PIURA', 'provincia' => 'TALARA', 'distrito' => 'MANCORA'],

            // ZARUMILLA
            ['codigo' => '200901', 'departamento' => 'PIURA', 'provincia' => 'ZARUMILLA', 'distrito' => 'ZARUMILLA'],
            ['codigo' => '200902', 'departamento' => 'PIURA', 'provincia' => 'ZARUMILLA', 'distrito' => 'AGUAS VERDES'],
            ['codigo' => '200903', 'departamento' => 'PIURA', 'provincia' => 'ZARUMILLA', 'distrito' => 'MATAPALO'],
            ['codigo' => '200904', 'departamento' => 'PIURA', 'provincia' => 'ZARUMILLA', 'distrito' => 'PAPAYAL'],
        ]);

        $districts = array_merge($districts, [

            // ================================
            // PUNO
            // ================================

            // PUNO
            ['codigo' => '210101', 'departamento' => 'PUNO', 'provincia' => 'PUNO', 'distrito' => 'PUNO'],
            ['codigo' => '210102', 'departamento' => 'PUNO', 'provincia' => 'PUNO', 'distrito' => 'ACORA'],
            ['codigo' => '210103', 'departamento' => 'PUNO', 'provincia' => 'PUNO', 'distrito' => 'AMANTANI'],
            ['codigo' => '210104', 'departamento' => 'PUNO', 'provincia' => 'PUNO', 'distrito' => 'ATUNCOLLA'],
            ['codigo' => '210105', 'departamento' => 'PUNO', 'provincia' => 'PUNO', 'distrito' => 'CAPACHICA'],
            ['codigo' => '210106', 'departamento' => 'PUNO', 'provincia' => 'PUNO', 'distrito' => 'CHUCUITO'],
            ['codigo' => '210107', 'departamento' => 'PUNO', 'provincia' => 'PUNO', 'distrito' => 'COATA'],
            ['codigo' => '210108', 'departamento' => 'PUNO', 'provincia' => 'PUNO', 'distrito' => 'HUATA'],
            ['codigo' => '210109', 'departamento' => 'PUNO', 'provincia' => 'PUNO', 'distrito' => 'MAÑAZO'],
            ['codigo' => '210110', 'departamento' => 'PUNO', 'provincia' => 'PUNO', 'distrito' => 'PAUCARCOLLA'],
            ['codigo' => '210111', 'departamento' => 'PUNO', 'provincia' => 'PUNO', 'distrito' => 'PICHACANI'],
            ['codigo' => '210112', 'departamento' => 'PUNO', 'provincia' => 'PUNO', 'distrito' => 'PLATERIA'],
            ['codigo' => '210113', 'departamento' => 'PUNO', 'provincia' => 'PUNO', 'distrito' => 'SAN ANTONIO'],
            ['codigo' => '210114', 'departamento' => 'PUNO', 'provincia' => 'PUNO', 'distrito' => 'TIQUILLACA'],
            ['codigo' => '210115', 'departamento' => 'PUNO', 'provincia' => 'PUNO', 'distrito' => 'VILQUE'],

            // AZANGARO
            ['codigo' => '210201', 'departamento' => 'PUNO', 'provincia' => 'AZANGARO', 'distrito' => 'AZANGARO'],
            ['codigo' => '210202', 'departamento' => 'PUNO', 'provincia' => 'AZANGARO', 'distrito' => 'ACHAYA'],
            ['codigo' => '210203', 'departamento' => 'PUNO', 'provincia' => 'AZANGARO', 'distrito' => 'ARAPA'],
            ['codigo' => '210204', 'departamento' => 'PUNO', 'provincia' => 'AZANGARO', 'distrito' => 'ASILLO'],
            ['codigo' => '210205', 'departamento' => 'PUNO', 'provincia' => 'AZANGARO', 'distrito' => 'CAMINACA'],
            ['codigo' => '210206', 'departamento' => 'PUNO', 'provincia' => 'AZANGARO', 'distrito' => 'CHUPA'],
            ['codigo' => '210207', 'departamento' => 'PUNO', 'provincia' => 'AZANGARO', 'distrito' => 'JOSE DOMINGO CHOQUEHUANCA'],
            ['codigo' => '210208', 'departamento' => 'PUNO', 'provincia' => 'AZANGARO', 'distrito' => 'MUÑANI'],
            ['codigo' => '210209', 'departamento' => 'PUNO', 'provincia' => 'AZANGARO', 'distrito' => 'POTONI'],
            ['codigo' => '210210', 'departamento' => 'PUNO', 'provincia' => 'AZANGARO', 'distrito' => 'SAMAN'],
            ['codigo' => '210211', 'departamento' => 'PUNO', 'provincia' => 'AZANGARO', 'distrito' => 'SAN ANTON'],
            ['codigo' => '210212', 'departamento' => 'PUNO', 'provincia' => 'AZANGARO', 'distrito' => 'SAN JOSE'],
            ['codigo' => '210213', 'departamento' => 'PUNO', 'provincia' => 'AZANGARO', 'distrito' => 'SAN JUAN DE SALINAS'],
            ['codigo' => '210214', 'departamento' => 'PUNO', 'provincia' => 'AZANGARO', 'distrito' => 'SANTIAGO DE PUPUJA'],
            ['codigo' => '210215', 'departamento' => 'PUNO', 'provincia' => 'AZANGARO', 'distrito' => 'TIRAPATA'],

            // CARABAYA
            ['codigo' => '210301', 'departamento' => 'PUNO', 'provincia' => 'CARABAYA', 'distrito' => 'MACUSANI'],
            ['codigo' => '210302', 'departamento' => 'PUNO', 'provincia' => 'CARABAYA', 'distrito' => 'AJOYANI'],
            ['codigo' => '210303', 'departamento' => 'PUNO', 'provincia' => 'CARABAYA', 'distrito' => 'AYAPATA'],
            ['codigo' => '210304', 'departamento' => 'PUNO', 'provincia' => 'CARABAYA', 'distrito' => 'COASA'],
            ['codigo' => '210305', 'departamento' => 'PUNO', 'provincia' => 'CARABAYA', 'distrito' => 'CORANI'],
            ['codigo' => '210306', 'departamento' => 'PUNO', 'provincia' => 'CARABAYA', 'distrito' => 'CRUCERO'],
            ['codigo' => '210307', 'departamento' => 'PUNO', 'provincia' => 'CARABAYA', 'distrito' => 'ITUATA'],
            ['codigo' => '210308', 'departamento' => 'PUNO', 'provincia' => 'CARABAYA', 'distrito' => 'OLLACHEA'],
            ['codigo' => '210309', 'departamento' => 'PUNO', 'provincia' => 'CARABAYA', 'distrito' => 'SAN GABAN'],
            ['codigo' => '210310', 'departamento' => 'PUNO', 'provincia' => 'CARABAYA', 'distrito' => 'USICAYOS'],

            // CHUCUITO
            ['codigo' => '210401', 'departamento' => 'PUNO', 'provincia' => 'CHUCUITO', 'distrito' => 'JULI'],
            ['codigo' => '210402', 'departamento' => 'PUNO', 'provincia' => 'CHUCUITO', 'distrito' => 'DESAGUADERO'],
            ['codigo' => '210403', 'departamento' => 'PUNO', 'provincia' => 'CHUCUITO', 'distrito' => 'HUACULLANI'],
            ['codigo' => '210404', 'departamento' => 'PUNO', 'provincia' => 'CHUCUITO', 'distrito' => 'KELLUYO'],
            ['codigo' => '210405', 'departamento' => 'PUNO', 'provincia' => 'CHUCUITO', 'distrito' => 'PISACOMA'],
            ['codigo' => '210406', 'departamento' => 'PUNO', 'provincia' => 'CHUCUITO', 'distrito' => 'POMATA'],
            ['codigo' => '210407', 'departamento' => 'PUNO', 'provincia' => 'CHUCUITO', 'distrito' => 'ZEPITA'],

            // EL COLLAO
            ['codigo' => '210501', 'departamento' => 'PUNO', 'provincia' => 'EL COLLAO', 'distrito' => 'ILAVE'],
            ['codigo' => '210502', 'departamento' => 'PUNO', 'provincia' => 'EL COLLAO', 'distrito' => 'CAPAZO'],
            ['codigo' => '210503', 'departamento' => 'PUNO', 'provincia' => 'EL COLLAO', 'distrito' => 'PILCUYO'],
            ['codigo' => '210504', 'departamento' => 'PUNO', 'provincia' => 'EL COLLAO', 'distrito' => 'SANTA ROSA'],
            ['codigo' => '210505', 'departamento' => 'PUNO', 'provincia' => 'EL COLLAO', 'distrito' => 'CONDURIRI'],

            // HUANCANE
            ['codigo' => '210601', 'departamento' => 'PUNO', 'provincia' => 'HUANCANE', 'distrito' => 'HUANCANE'],
            ['codigo' => '210602', 'departamento' => 'PUNO', 'provincia' => 'HUANCANE', 'distrito' => 'COJATA'],
            ['codigo' => '210603', 'departamento' => 'PUNO', 'provincia' => 'HUANCANE', 'distrito' => 'HUATASANI'],
            ['codigo' => '210604', 'departamento' => 'PUNO', 'provincia' => 'HUANCANE', 'distrito' => 'INCHUPALLA'],
            ['codigo' => '210605', 'departamento' => 'PUNO', 'provincia' => 'HUANCANE', 'distrito' => 'PUSI'],
            ['codigo' => '210606', 'departamento' => 'PUNO', 'provincia' => 'HUANCANE', 'distrito' => 'ROSASPATA'],
            ['codigo' => '210607', 'departamento' => 'PUNO', 'provincia' => 'HUANCANE', 'distrito' => 'TARACO'],
            ['codigo' => '210608', 'departamento' => 'PUNO', 'provincia' => 'HUANCANE', 'distrito' => 'VILQUE CHICO'],
        ]);

        $districts = array_merge($districts, [

            // ================================
            // SAN MARTÍN
            // ================================

            // MOYOBAMBA
            ['codigo' => '220101', 'departamento' => 'SAN MARTIN', 'provincia' => 'MOYOBAMBA', 'distrito' => 'MOYOBAMBA'],
            ['codigo' => '220102', 'departamento' => 'SAN MARTIN', 'provincia' => 'MOYOBAMBA', 'distrito' => 'CALZADA'],
            ['codigo' => '220103', 'departamento' => 'SAN MARTIN', 'provincia' => 'MOYOBAMBA', 'distrito' => 'HABANA'],
            ['codigo' => '220104', 'departamento' => 'SAN MARTIN', 'provincia' => 'MOYOBAMBA', 'distrito' => 'JEPELACIO'],
            ['codigo' => '220105', 'departamento' => 'SAN MARTIN', 'provincia' => 'MOYOBAMBA', 'distrito' => 'SORITOR'],
            ['codigo' => '220106', 'departamento' => 'SAN MARTIN', 'provincia' => 'MOYOBAMBA', 'distrito' => 'YANTALO'],

            // BELLAVISTA
            ['codigo' => '220201', 'departamento' => 'SAN MARTIN', 'provincia' => 'BELLAVISTA', 'distrito' => 'BELLAVISTA'],
            ['codigo' => '220202', 'departamento' => 'SAN MARTIN', 'provincia' => 'BELLAVISTA', 'distrito' => 'ALTO BIAVO'],
            ['codigo' => '220203', 'departamento' => 'SAN MARTIN', 'provincia' => 'BELLAVISTA', 'distrito' => 'BAJO BIAVO'],
            ['codigo' => '220204', 'departamento' => 'SAN MARTIN', 'provincia' => 'BELLAVISTA', 'distrito' => 'HUALLAGA'],
            ['codigo' => '220205', 'departamento' => 'SAN MARTIN', 'provincia' => 'BELLAVISTA', 'distrito' => 'SAN PABLO'],
            ['codigo' => '220206', 'departamento' => 'SAN MARTIN', 'provincia' => 'BELLAVISTA', 'distrito' => 'SAN RAFAEL'],

            // EL DORADO
            ['codigo' => '220301', 'departamento' => 'SAN MARTIN', 'provincia' => 'EL DORADO', 'distrito' => 'SAN JOSE DE SISA'],
            ['codigo' => '220302', 'departamento' => 'SAN MARTIN', 'provincia' => 'EL DORADO', 'distrito' => 'AGUA BLANCA'],
            ['codigo' => '220303', 'departamento' => 'SAN MARTIN', 'provincia' => 'EL DORADO', 'distrito' => 'SAN MARTIN'],
            ['codigo' => '220304', 'departamento' => 'SAN MARTIN', 'provincia' => 'EL DORADO', 'distrito' => 'SANTA ROSA'],
            ['codigo' => '220305', 'departamento' => 'SAN MARTIN', 'provincia' => 'EL DORADO', 'distrito' => 'SHATOJA'],

            // HUALLAGA
            ['codigo' => '220401', 'departamento' => 'SAN MARTIN', 'provincia' => 'HUALLAGA', 'distrito' => 'SAPOSOA'],
            ['codigo' => '220402', 'departamento' => 'SAN MARTIN', 'provincia' => 'HUALLAGA', 'distrito' => 'ALTO SAPOSOA'],
            ['codigo' => '220403', 'departamento' => 'SAN MARTIN', 'provincia' => 'HUALLAGA', 'distrito' => 'EL ESLABON'],
            ['codigo' => '220404', 'departamento' => 'SAN MARTIN', 'provincia' => 'HUALLAGA', 'distrito' => 'PISCOYACU'],
            ['codigo' => '220405', 'departamento' => 'SAN MARTIN', 'provincia' => 'HUALLAGA', 'distrito' => 'SACANCHE'],
            ['codigo' => '220406', 'departamento' => 'SAN MARTIN', 'provincia' => 'HUALLAGA', 'distrito' => 'TINGO DE SAPOSOA'],

            // LAMAS
            ['codigo' => '220501', 'departamento' => 'SAN MARTIN', 'provincia' => 'LAMAS', 'distrito' => 'LAMAS'],
            ['codigo' => '220502', 'departamento' => 'SAN MARTIN', 'provincia' => 'LAMAS', 'distrito' => 'ALONSO DE ALVARADO'],
            ['codigo' => '220503', 'departamento' => 'SAN MARTIN', 'provincia' => 'LAMAS', 'distrito' => 'BARRANQUITA'],
            ['codigo' => '220504', 'departamento' => 'SAN MARTIN', 'provincia' => 'LAMAS', 'distrito' => 'CAYNARACHI'],
            ['codigo' => '220505', 'departamento' => 'SAN MARTIN', 'provincia' => 'LAMAS', 'distrito' => 'CUÑUMBUQUI'],
            ['codigo' => '220506', 'departamento' => 'SAN MARTIN', 'provincia' => 'LAMAS', 'distrito' => 'PINTO RECODO'],
            ['codigo' => '220507', 'departamento' => 'SAN MARTIN', 'provincia' => 'LAMAS', 'distrito' => 'RUMISAPA'],
            ['codigo' => '220508', 'departamento' => 'SAN MARTIN', 'provincia' => 'LAMAS', 'distrito' => 'SAN ROQUE DE CUMBAZA'],
            ['codigo' => '220509', 'departamento' => 'SAN MARTIN', 'provincia' => 'LAMAS', 'distrito' => 'SHANAO'],
            ['codigo' => '220510', 'departamento' => 'SAN MARTIN', 'provincia' => 'LAMAS', 'distrito' => 'TABALOSOS'],
            ['codigo' => '220511', 'departamento' => 'SAN MARTIN', 'provincia' => 'LAMAS', 'distrito' => 'ZAPATERO'],

            // MARISCAL CACERES
            ['codigo' => '220601', 'departamento' => 'SAN MARTIN', 'provincia' => 'MARISCAL CACERES', 'distrito' => 'JUANJUI'],
            ['codigo' => '220602', 'departamento' => 'SAN MARTIN', 'provincia' => 'MARISCAL CACERES', 'distrito' => 'CAMPANILLA'],
            ['codigo' => '220603', 'departamento' => 'SAN MARTIN', 'provincia' => 'MARISCAL CACERES', 'distrito' => 'HUICUNGO'],
            ['codigo' => '220604', 'departamento' => 'SAN MARTIN', 'provincia' => 'MARISCAL CACERES', 'distrito' => 'PACHIZA'],
            ['codigo' => '220605', 'departamento' => 'SAN MARTIN', 'provincia' => 'MARISCAL CACERES', 'distrito' => 'PAJARILLO'],

            // PICOTA
            ['codigo' => '220701', 'departamento' => 'SAN MARTIN', 'provincia' => 'PICOTA', 'distrito' => 'PICOTA'],
            ['codigo' => '220702', 'departamento' => 'SAN MARTIN', 'provincia' => 'PICOTA', 'distrito' => 'BUENOS AIRES'],
            ['codigo' => '220703', 'departamento' => 'SAN MARTIN', 'provincia' => 'PICOTA', 'distrito' => 'CASPISAPA'],
            ['codigo' => '220704', 'departamento' => 'SAN MARTIN', 'provincia' => 'PICOTA', 'distrito' => 'PILLUANA'],
            ['codigo' => '220705', 'departamento' => 'SAN MARTIN', 'provincia' => 'PICOTA', 'distrito' => 'PUCACACA'],
            ['codigo' => '220706', 'departamento' => 'SAN MARTIN', 'provincia' => 'PICOTA', 'distrito' => 'SAN CRISTOBAL'],
            ['codigo' => '220707', 'departamento' => 'SAN MARTIN', 'provincia' => 'PICOTA', 'distrito' => 'SAN HILARION'],
            ['codigo' => '220708', 'departamento' => 'SAN MARTIN', 'provincia' => 'PICOTA', 'distrito' => 'SHAMBOYACU'],
            ['codigo' => '220709', 'departamento' => 'SAN MARTIN', 'provincia' => 'PICOTA', 'distrito' => 'TINGO DE PONASA'],
            ['codigo' => '220710', 'departamento' => 'SAN MARTIN', 'provincia' => 'PICOTA', 'distrito' => 'TRES UNIDOS'],

            // RIOJA
            ['codigo' => '220801', 'departamento' => 'SAN MARTIN', 'provincia' => 'RIOJA', 'distrito' => 'RIOJA'],
            ['codigo' => '220802', 'departamento' => 'SAN MARTIN', 'provincia' => 'RIOJA', 'distrito' => 'AWAJUN'],
            ['codigo' => '220803', 'departamento' => 'SAN MARTIN', 'provincia' => 'RIOJA', 'distrito' => 'ELIAS SOPLIN VARGAS'],
            ['codigo' => '220804', 'departamento' => 'SAN MARTIN', 'provincia' => 'RIOJA', 'distrito' => 'NUEVA CAJAMARCA'],
            ['codigo' => '220805', 'departamento' => 'SAN MARTIN', 'provincia' => 'RIOJA', 'distrito' => 'PARDO MIGUEL'],
            ['codigo' => '220806', 'departamento' => 'SAN MARTIN', 'provincia' => 'RIOJA', 'distrito' => 'POSIC'],
            ['codigo' => '220807', 'departamento' => 'SAN MARTIN', 'provincia' => 'RIOJA', 'distrito' => 'SAN FERNANDO'],
            ['codigo' => '220808', 'departamento' => 'SAN MARTIN', 'provincia' => 'RIOJA', 'distrito' => 'YORONGOS'],
            ['codigo' => '220809', 'departamento' => 'SAN MARTIN', 'provincia' => 'RIOJA', 'distrito' => 'YURACYACU'],

            // SAN MARTIN
            ['codigo' => '220901', 'departamento' => 'SAN MARTIN', 'provincia' => 'SAN MARTIN', 'distrito' => 'TARAPOTO'],
            ['codigo' => '220902', 'departamento' => 'SAN MARTIN', 'provincia' => 'SAN MARTIN', 'distrito' => 'ALBERTO LEVEAU'],
            ['codigo' => '220903', 'departamento' => 'SAN MARTIN', 'provincia' => 'SAN MARTIN', 'distrito' => 'CACATACHI'],
            ['codigo' => '220904', 'departamento' => 'SAN MARTIN', 'provincia' => 'SAN MARTIN', 'distrito' => 'CHAZUTA'],
            ['codigo' => '220905', 'departamento' => 'SAN MARTIN', 'provincia' => 'SAN MARTIN', 'distrito' => 'CHIPURANA'],
            ['codigo' => '220906', 'departamento' => 'SAN MARTIN', 'provincia' => 'SAN MARTIN', 'distrito' => 'EL PORVENIR'],
            ['codigo' => '220907', 'departamento' => 'SAN MARTIN', 'provincia' => 'SAN MARTIN', 'distrito' => 'HUIMBAYOC'],
            ['codigo' => '220908', 'departamento' => 'SAN MARTIN', 'provincia' => 'SAN MARTIN', 'distrito' => 'JUAN GUERRA'],
            ['codigo' => '220909', 'departamento' => 'SAN MARTIN', 'provincia' => 'SAN MARTIN', 'distrito' => 'LA BANDA DE SHILCAYO'],
            ['codigo' => '220910', 'departamento' => 'SAN MARTIN', 'provincia' => 'SAN MARTIN', 'distrito' => 'MORALES'],
            ['codigo' => '220911', 'departamento' => 'SAN MARTIN', 'provincia' => 'SAN MARTIN', 'distrito' => 'PAPAPLAYA'],
            ['codigo' => '220912', 'departamento' => 'SAN MARTIN', 'provincia' => 'SAN MARTIN', 'distrito' => 'SAN ANTONIO'],
            ['codigo' => '220913', 'departamento' => 'SAN MARTIN', 'provincia' => 'SAN MARTIN', 'distrito' => 'SAUCE'],
            ['codigo' => '220914', 'departamento' => 'SAN MARTIN', 'provincia' => 'SAN MARTIN', 'distrito' => 'SHAPAJA'],

            // TOCACHE
            ['codigo' => '221001', 'departamento' => 'SAN MARTIN', 'provincia' => 'TOCACHE', 'distrito' => 'TOCACHE'],
            ['codigo' => '221002', 'departamento' => 'SAN MARTIN', 'provincia' => 'TOCACHE', 'distrito' => 'NUEVO PROGRESO'],
            ['codigo' => '221003', 'departamento' => 'SAN MARTIN', 'provincia' => 'TOCACHE', 'distrito' => 'POLVORA'],
            ['codigo' => '221004', 'departamento' => 'SAN MARTIN', 'provincia' => 'TOCACHE', 'distrito' => 'SHUNTE'],
            ['codigo' => '221005', 'departamento' => 'SAN MARTIN', 'provincia' => 'TOCACHE', 'distrito' => 'UCHIZA'],
        ]);

        $districts = array_merge($districts, [

            // ================================
            // TACNA
            // ================================

            // TACNA
            ['codigo' => '230101', 'departamento' => 'TACNA', 'provincia' => 'TACNA', 'distrito' => 'TACNA'],
            ['codigo' => '230102', 'departamento' => 'TACNA', 'provincia' => 'TACNA', 'distrito' => 'ALTO DE LA ALIANZA'],
            ['codigo' => '230103', 'departamento' => 'TACNA', 'provincia' => 'TACNA', 'distrito' => 'CALANA'],
            ['codigo' => '230104', 'departamento' => 'TACNA', 'provincia' => 'TACNA', 'distrito' => 'CIUDAD NUEVA'],
            ['codigo' => '230105', 'departamento' => 'TACNA', 'provincia' => 'TACNA', 'distrito' => 'INCLAN'],
            ['codigo' => '230106', 'departamento' => 'TACNA', 'provincia' => 'TACNA', 'distrito' => 'PACHIA'],
            ['codigo' => '230107', 'departamento' => 'TACNA', 'provincia' => 'TACNA', 'distrito' => 'PALCA'],
            ['codigo' => '230108', 'departamento' => 'TACNA', 'provincia' => 'TACNA', 'distrito' => 'POCOLLAY'],
            ['codigo' => '230109', 'departamento' => 'TACNA', 'provincia' => 'TACNA', 'distrito' => 'SAMA'],
            ['codigo' => '230110', 'departamento' => 'TACNA', 'provincia' => 'TACNA', 'distrito' => 'CORONEL GREGORIO ALBARRACIN LANCHIPA'],

            // CANDARAVE
            ['codigo' => '230201', 'departamento' => 'TACNA', 'provincia' => 'CANDARAVE', 'distrito' => 'CANDARAVE'],
            ['codigo' => '230202', 'departamento' => 'TACNA', 'provincia' => 'CANDARAVE', 'distrito' => 'CAIRANI'],
            ['codigo' => '230203', 'departamento' => 'TACNA', 'provincia' => 'CANDARAVE', 'distrito' => 'CAMILACA'],
            ['codigo' => '230204', 'departamento' => 'TACNA', 'provincia' => 'CANDARAVE', 'distrito' => 'CURIBAYA'],
            ['codigo' => '230205', 'departamento' => 'TACNA', 'provincia' => 'CANDARAVE', 'distrito' => 'HUANUARA'],
            ['codigo' => '230206', 'departamento' => 'TACNA', 'provincia' => 'CANDARAVE', 'distrito' => 'QUILAHUANI'],

            // JORGE BASADRE
            ['codigo' => '230301', 'departamento' => 'TACNA', 'provincia' => 'JORGE BASADRE', 'distrito' => 'LOCUMBA'],
            ['codigo' => '230302', 'departamento' => 'TACNA', 'provincia' => 'JORGE BASADRE', 'distrito' => 'ILABAYA'],
            ['codigo' => '230303', 'departamento' => 'TACNA', 'provincia' => 'JORGE BASADRE', 'distrito' => 'ITE'],

            // TARATA
            ['codigo' => '230401', 'departamento' => 'TACNA', 'provincia' => 'TARATA', 'distrito' => 'TARATA'],
            ['codigo' => '230402', 'departamento' => 'TACNA', 'provincia' => 'TARATA', 'distrito' => 'HEROES ALBARRACIN'],
            ['codigo' => '230403', 'departamento' => 'TACNA', 'provincia' => 'TARATA', 'distrito' => 'ESTIQUE'],
            ['codigo' => '230404', 'departamento' => 'TACNA', 'provincia' => 'TARATA', 'distrito' => 'ESTIQUE PAMPA'],
            ['codigo' => '230405', 'departamento' => 'TACNA', 'provincia' => 'TARATA', 'distrito' => 'SITAJARA'],
            ['codigo' => '230406', 'departamento' => 'TACNA', 'provincia' => 'TARATA', 'distrito' => 'SUSAPAYA'],
            ['codigo' => '230407', 'departamento' => 'TACNA', 'provincia' => 'TARATA', 'distrito' => 'TARUCACHI'],
            ['codigo' => '230408', 'departamento' => 'TACNA', 'provincia' => 'TARATA', 'distrito' => 'TICACO'],
        ]);

        $districts = array_merge($districts, [

            // ================================
            // TUMBES
            // ================================

            // TUMBES
            ['codigo' => '240101', 'departamento' => 'TUMBES', 'provincia' => 'TUMBES', 'distrito' => 'TUMBES'],
            ['codigo' => '240102', 'departamento' => 'TUMBES', 'provincia' => 'TUMBES', 'distrito' => 'CORRALES'],
            ['codigo' => '240103', 'departamento' => 'TUMBES', 'provincia' => 'TUMBES', 'distrito' => 'LA CRUZ'],
            ['codigo' => '240104', 'departamento' => 'TUMBES', 'provincia' => 'TUMBES', 'distrito' => 'PAMPAS DE HOSPITAL'],
            ['codigo' => '240105', 'departamento' => 'TUMBES', 'provincia' => 'TUMBES', 'distrito' => 'SAN JACINTO'],
            ['codigo' => '240106', 'departamento' => 'TUMBES', 'provincia' => 'TUMBES', 'distrito' => 'SAN JUAN DE LA VIRGEN'],

            // CONTRALMIRANTE VILLAR
            ['codigo' => '240201', 'departamento' => 'TUMBES', 'provincia' => 'CONTRALMIRANTE VILLAR', 'distrito' => 'ZORRITOS'],
            ['codigo' => '240202', 'departamento' => 'TUMBES', 'provincia' => 'CONTRALMIRANTE VILLAR', 'distrito' => 'CASITAS'],
            ['codigo' => '240203', 'departamento' => 'TUMBES', 'provincia' => 'CONTRALMIRANTE VILLAR', 'distrito' => 'CANOAS DE PUNTA SAL'],

            // ZARUMILLA
            ['codigo' => '240301', 'departamento' => 'TUMBES', 'provincia' => 'ZARUMILLA', 'distrito' => 'ZARUMILLA'],
            ['codigo' => '240302', 'departamento' => 'TUMBES', 'provincia' => 'ZARUMILLA', 'distrito' => 'AGUAS VERDES'],
            ['codigo' => '240303', 'departamento' => 'TUMBES', 'provincia' => 'ZARUMILLA', 'distrito' => 'MATAPALO'],
            ['codigo' => '240304', 'departamento' => 'TUMBES', 'provincia' => 'ZARUMILLA', 'distrito' => 'PAPAYAL'],


            // ================================
            // UCAYALI
            // ================================

            // CORONEL PORTILLO
            ['codigo' => '250101', 'departamento' => 'UCAYALI', 'provincia' => 'CORONEL PORTILLO', 'distrito' => 'CALLERIA'],
            ['codigo' => '250102', 'departamento' => 'UCAYALI', 'provincia' => 'CORONEL PORTILLO', 'distrito' => 'CAMPOVERDE'],
            ['codigo' => '250103', 'departamento' => 'UCAYALI', 'provincia' => 'CORONEL PORTILLO', 'distrito' => 'IPARIA'],
            ['codigo' => '250104', 'departamento' => 'UCAYALI', 'provincia' => 'CORONEL PORTILLO', 'distrito' => 'MASISEA'],
            ['codigo' => '250105', 'departamento' => 'UCAYALI', 'provincia' => 'CORONEL PORTILLO', 'distrito' => 'YARINACOCHA'],
            ['codigo' => '250106', 'departamento' => 'UCAYALI', 'provincia' => 'CORONEL PORTILLO', 'distrito' => 'NUEVA REQUENA'],
            ['codigo' => '250107', 'departamento' => 'UCAYALI', 'provincia' => 'CORONEL PORTILLO', 'distrito' => 'MANANTAY'],

            // ATALAYA
            ['codigo' => '250201', 'departamento' => 'UCAYALI', 'provincia' => 'ATALAYA', 'distrito' => 'RAYMONDI'],
            ['codigo' => '250202', 'departamento' => 'UCAYALI', 'provincia' => 'ATALAYA', 'distrito' => 'SEPAHUA'],
            ['codigo' => '250203', 'departamento' => 'UCAYALI', 'provincia' => 'ATALAYA', 'distrito' => 'TAHUANIA'],
            ['codigo' => '250204', 'departamento' => 'UCAYALI', 'provincia' => 'ATALAYA', 'distrito' => 'YURUA'],

            // PADRE ABAD
            ['codigo' => '250301', 'departamento' => 'UCAYALI', 'provincia' => 'PADRE ABAD', 'distrito' => 'PADRE ABAD'],
            ['codigo' => '250302', 'departamento' => 'UCAYALI', 'provincia' => 'PADRE ABAD', 'distrito' => 'IRAZOLA'],
            ['codigo' => '250303', 'departamento' => 'UCAYALI', 'provincia' => 'PADRE ABAD', 'distrito' => 'CURIMANA'],
            ['codigo' => '250304', 'departamento' => 'UCAYALI', 'provincia' => 'PADRE ABAD', 'distrito' => 'NESHUYA'],
            ['codigo' => '250305', 'departamento' => 'UCAYALI', 'provincia' => 'PADRE ABAD', 'distrito' => 'ALEXANDER VON HUMBOLDT'],

            // PURUS
            ['codigo' => '250401', 'departamento' => 'UCAYALI', 'provincia' => 'PURUS', 'distrito' => 'PURUS'],
        ]);

        $chunks     = array_chunk($districts, 500);
        foreach ($chunks as $chunk) {
            DB::table('districts')->insert($chunk);
        }
    }
}
