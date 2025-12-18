<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // AMAZONAS - CHACHAPOYAS (0101)
        $districts = array(
            ['codigo' => '010101', 'descripcion' => 'Chachapoyas', 'provincia_codigo' => '0101', 'departamento_codigo' => '01'],
            ['codigo' => '010102', 'descripcion' => 'Asunción', 'provincia_codigo' => '0101', 'departamento_codigo' => '01'],
            ['codigo' => '010103', 'descripcion' => 'Balsas', 'provincia_codigo' => '0101', 'departamento_codigo' => '01'],
            ['codigo' => '010104', 'descripcion' => 'Cheto', 'provincia_codigo' => '0101', 'departamento_codigo' => '01'],
            ['codigo' => '010105', 'descripcion' => 'Chiliquín', 'provincia_codigo' => '0101', 'departamento_codigo' => '01'],
            ['codigo' => '010106', 'descripcion' => 'Chuquibamba', 'provincia_codigo' => '0101', 'departamento_codigo' => '01'],
            ['codigo' => '010107', 'descripcion' => 'Granada', 'provincia_codigo' => '0101', 'departamento_codigo' => '01'],
            ['codigo' => '010108', 'descripcion' => 'Huancas', 'provincia_codigo' => '0101', 'departamento_codigo' => '01'],
            ['codigo' => '010109', 'descripcion' => 'La Jalca', 'provincia_codigo' => '0101', 'departamento_codigo' => '01'],
            ['codigo' => '010110', 'descripcion' => 'Leimebamba', 'provincia_codigo' => '0101', 'departamento_codigo' => '01'],
            ['codigo' => '010111', 'descripcion' => 'Levanto', 'provincia_codigo' => '0101', 'departamento_codigo' => '01'],
            ['codigo' => '010112', 'descripcion' => 'Magdalena', 'provincia_codigo' => '0101', 'departamento_codigo' => '01'],
            ['codigo' => '010113', 'descripcion' => 'Mariscal Castilla', 'provincia_codigo' => '0101', 'departamento_codigo' => '01'],
            ['codigo' => '010114', 'descripcion' => 'Molinopampa', 'provincia_codigo' => '0101', 'departamento_codigo' => '01'],
            ['codigo' => '010115', 'descripcion' => 'Montevideo', 'provincia_codigo' => '0101', 'departamento_codigo' => '01'],
            ['codigo' => '010116', 'descripcion' => 'Olleros', 'provincia_codigo' => '0101', 'departamento_codigo' => '01'],
            ['codigo' => '010117', 'descripcion' => 'Quinjalca', 'provincia_codigo' => '0101', 'departamento_codigo' => '01'],
            ['codigo' => '010118', 'descripcion' => 'San Francisco de Daguas', 'provincia_codigo' => '0101', 'departamento_codigo' => '01'],
            ['codigo' => '010119', 'descripcion' => 'San Isidro de Maino', 'provincia_codigo' => '0101', 'departamento_codigo' => '01'],
            ['codigo' => '010120', 'descripcion' => 'Soloco', 'provincia_codigo' => '0101', 'departamento_codigo' => '01'],
            ['codigo' => '010121', 'descripcion' => 'Sonche', 'provincia_codigo' => '0101', 'departamento_codigo' => '01'],
        );

        // AMAZONAS - BAGUA (0102)
        $districts = array_merge($districts, [
            ['codigo' => '010201', 'descripcion' => 'Bagua', 'provincia_codigo' => '0102', 'departamento_codigo' => '01'],
            ['codigo' => '010202', 'descripcion' => 'Aramango', 'provincia_codigo' => '0102', 'departamento_codigo' => '01'],
            ['codigo' => '010203', 'descripcion' => 'Copallín', 'provincia_codigo' => '0102', 'departamento_codigo' => '01'],
            ['codigo' => '010204', 'descripcion' => 'El Parco', 'provincia_codigo' => '0102', 'departamento_codigo' => '01'],
            ['codigo' => '010205', 'descripcion' => 'Imaza', 'provincia_codigo' => '0102', 'departamento_codigo' => '01'],
            ['codigo' => '010206', 'descripcion' => 'La Peca', 'provincia_codigo' => '0102', 'departamento_codigo' => '01'],
        ]);

        // AMAZONAS - BONGARÁ (0103)
        $districts = array_merge($districts, [
            ['codigo' => '010301', 'descripcion' => 'Jumbilla', 'provincia_codigo' => '0103', 'departamento_codigo' => '01'],
            ['codigo' => '010302', 'descripcion' => 'Chisquilla', 'provincia_codigo' => '0103', 'departamento_codigo' => '01'],
            ['codigo' => '010303', 'descripcion' => 'Churuja', 'provincia_codigo' => '0103', 'departamento_codigo' => '01'],
            ['codigo' => '010304', 'descripcion' => 'Corosha', 'provincia_codigo' => '0103', 'departamento_codigo' => '01'],
            ['codigo' => '010305', 'descripcion' => 'Cuispes', 'provincia_codigo' => '0103', 'departamento_codigo' => '01'],
            ['codigo' => '010306', 'descripcion' => 'Florida', 'provincia_codigo' => '0103', 'departamento_codigo' => '01'],
            ['codigo' => '010307', 'descripcion' => 'Jazán', 'provincia_codigo' => '0103', 'departamento_codigo' => '01'],
            ['codigo' => '010308', 'descripcion' => 'Recta', 'provincia_codigo' => '0103', 'departamento_codigo' => '01'],
            ['codigo' => '010309', 'descripcion' => 'San Carlos', 'provincia_codigo' => '0103', 'departamento_codigo' => '01'],
            ['codigo' => '010310', 'descripcion' => 'Shipasbamba', 'provincia_codigo' => '0103', 'departamento_codigo' => '01'],
            ['codigo' => '010311', 'descripcion' => 'Valera', 'provincia_codigo' => '0103', 'departamento_codigo' => '01'],
            ['codigo' => '010312', 'descripcion' => 'Yámbrasbamba', 'provincia_codigo' => '0103', 'departamento_codigo' => '01'],
        ]);

        // AMAZONAS - CONDORCANQUI (0104)
        $districts = array_merge($districts, [
            ['codigo' => '010401', 'descripcion' => 'Nieva', 'provincia_codigo' => '0104', 'departamento_codigo' => '01'],
            ['codigo' => '010402', 'descripcion' => 'El Cenepa', 'provincia_codigo' => '0104', 'departamento_codigo' => '01'],
            ['codigo' => '010403', 'descripcion' => 'Río Santiago', 'provincia_codigo' => '0104', 'departamento_codigo' => '01'],
        ]);

        // AMAZONAS - LUYA (0105)
        $districts = array_merge($districts, [
            ['codigo' => '010501', 'descripcion' => 'Lamud', 'provincia_codigo' => '0105', 'departamento_codigo' => '01'],
            ['codigo' => '010502', 'descripcion' => 'Camporredondo', 'provincia_codigo' => '0105', 'departamento_codigo' => '01'],
            ['codigo' => '010503', 'descripcion' => 'Cocabamba', 'provincia_codigo' => '0105', 'departamento_codigo' => '01'],
            ['codigo' => '010504', 'descripcion' => 'Colcamar', 'provincia_codigo' => '0105', 'departamento_codigo' => '01'],
            ['codigo' => '010505', 'descripcion' => 'Conila', 'provincia_codigo' => '0105', 'departamento_codigo' => '01'],
            ['codigo' => '010506', 'descripcion' => 'Inguilpata', 'provincia_codigo' => '0105', 'departamento_codigo' => '01'],
            ['codigo' => '010507', 'descripcion' => 'Longuita', 'provincia_codigo' => '0105', 'departamento_codigo' => '01'],
            ['codigo' => '010508', 'descripcion' => 'Lonya Chico', 'provincia_codigo' => '0105', 'departamento_codigo' => '01'],
            ['codigo' => '010509', 'descripcion' => 'Luya', 'provincia_codigo' => '0105', 'departamento_codigo' => '01'],
            ['codigo' => '010510', 'descripcion' => 'Luya Viejo', 'provincia_codigo' => '0105', 'departamento_codigo' => '01'],
            ['codigo' => '010511', 'descripcion' => 'María', 'provincia_codigo' => '0105', 'departamento_codigo' => '01'],
            ['codigo' => '010512', 'descripcion' => 'Ocalli', 'provincia_codigo' => '0105', 'departamento_codigo' => '01'],
            ['codigo' => '010513', 'descripcion' => 'Ocumal', 'provincia_codigo' => '0105', 'departamento_codigo' => '01'],
            ['codigo' => '010514', 'descripcion' => 'Pisuquia', 'provincia_codigo' => '0105', 'departamento_codigo' => '01'],
            ['codigo' => '010515', 'descripcion' => 'Providencia', 'provincia_codigo' => '0105', 'departamento_codigo' => '01'],
            ['codigo' => '010516', 'descripcion' => 'San Cristóbal', 'provincia_codigo' => '0105', 'departamento_codigo' => '01'],
            ['codigo' => '010517', 'descripcion' => 'San Francisco del Yeso', 'provincia_codigo' => '0105', 'departamento_codigo' => '01'],
            ['codigo' => '010518', 'descripcion' => 'San Jerónimo', 'provincia_codigo' => '0105', 'departamento_codigo' => '01'],
            ['codigo' => '010519', 'descripcion' => 'San Juan de Lopecancha', 'provincia_codigo' => '0105', 'departamento_codigo' => '01'],
            ['codigo' => '010520', 'descripcion' => 'Santa Catalina', 'provincia_codigo' => '0105', 'departamento_codigo' => '01'],
            ['codigo' => '010521', 'descripcion' => 'Santo Tomás', 'provincia_codigo' => '0105', 'departamento_codigo' => '01'],
            ['codigo' => '010522', 'descripcion' => 'Tingo', 'provincia_codigo' => '0105', 'departamento_codigo' => '01'],
            ['codigo' => '010523', 'descripcion' => 'Trita', 'provincia_codigo' => '0105', 'departamento_codigo' => '01'],
        ]);

        // AMAZONAS - RODRÍGUEZ DE MENDOZA (0106)
        $districts = array_merge($districts, [
            ['codigo' => '010601', 'descripcion' => 'San Nicolás', 'provincia_codigo' => '0106', 'departamento_codigo' => '01'],
            ['codigo' => '010602', 'descripcion' => 'Chirimoto', 'provincia_codigo' => '0106', 'departamento_codigo' => '01'],
            ['codigo' => '010603', 'descripcion' => 'Cochamal', 'provincia_codigo' => '0106', 'departamento_codigo' => '01'],
            ['codigo' => '010604', 'descripcion' => 'Huambo', 'provincia_codigo' => '0106', 'departamento_codigo' => '01'],
            ['codigo' => '010605', 'descripcion' => 'Limabamba', 'provincia_codigo' => '0106', 'departamento_codigo' => '01'],
            ['codigo' => '010606', 'descripcion' => 'Longar', 'provincia_codigo' => '0106', 'departamento_codigo' => '01'],
            ['codigo' => '010607', 'descripcion' => 'Mariscal Benavides', 'provincia_codigo' => '0106', 'departamento_codigo' => '01'],
            ['codigo' => '010608', 'descripcion' => 'Milpuc', 'provincia_codigo' => '0106', 'departamento_codigo' => '01'],
            ['codigo' => '010609', 'descripcion' => 'Omia', 'provincia_codigo' => '0106', 'departamento_codigo' => '01'],
            ['codigo' => '010610', 'descripcion' => 'Santa Rosa', 'provincia_codigo' => '0106', 'departamento_codigo' => '01'],
            ['codigo' => '010611', 'descripcion' => 'Totora', 'provincia_codigo' => '0106', 'departamento_codigo' => '01'],
            ['codigo' => '010612', 'descripcion' => 'Vista Alegre', 'provincia_codigo' => '0106', 'departamento_codigo' => '01'],
        ]);

        // AMAZONAS - UTCUBAMBA (0107)
        $districts = array_merge($districts, [
            ['codigo' => '010701', 'descripcion' => 'Bagua Grande', 'provincia_codigo' => '0107', 'departamento_codigo' => '01'],
            ['codigo' => '010702', 'descripcion' => 'Cajaruro', 'provincia_codigo' => '0107', 'departamento_codigo' => '01'],
            ['codigo' => '010703', 'descripcion' => 'Cumba', 'provincia_codigo' => '0107', 'departamento_codigo' => '01'],
            ['codigo' => '010704', 'descripcion' => 'El Milagro', 'provincia_codigo' => '0107', 'departamento_codigo' => '01'],
            ['codigo' => '010705', 'descripcion' => 'Jamalca', 'provincia_codigo' => '0107', 'departamento_codigo' => '01'],
            ['codigo' => '010706', 'descripcion' => 'Lonya Grande', 'provincia_codigo' => '0107', 'departamento_codigo' => '01'],
            ['codigo' => '010707', 'descripcion' => 'Yamón', 'provincia_codigo' => '0107', 'departamento_codigo' => '01'],
        ]);

        // ===============================
        // ÁNCASH - HUARAZ (0201)
        // ===============================
        $districts = array_merge($districts, [
            ['codigo' => '020101', 'descripcion' => 'Huaraz', 'provincia_codigo' => '0201', 'departamento_codigo' => '02'],
            ['codigo' => '020102', 'descripcion' => 'Cochabamba', 'provincia_codigo' => '0201', 'departamento_codigo' => '02'],
            ['codigo' => '020103', 'descripcion' => 'Colcabamba', 'provincia_codigo' => '0201', 'departamento_codigo' => '02'],
            ['codigo' => '020104', 'descripcion' => 'Huanchay', 'provincia_codigo' => '0201', 'departamento_codigo' => '02'],
            ['codigo' => '020105', 'descripcion' => 'Independencia', 'provincia_codigo' => '0201', 'departamento_codigo' => '02'],
            ['codigo' => '020106', 'descripcion' => 'Jangas', 'provincia_codigo' => '0201', 'departamento_codigo' => '02'],
            ['codigo' => '020107', 'descripcion' => 'La Libertad', 'provincia_codigo' => '0201', 'departamento_codigo' => '02'],
            ['codigo' => '020108', 'descripcion' => 'Olleros', 'provincia_codigo' => '0201', 'departamento_codigo' => '02'],
            ['codigo' => '020109', 'descripcion' => 'Pampas Grande', 'provincia_codigo' => '0201', 'departamento_codigo' => '02'],
            ['codigo' => '020110', 'descripcion' => 'Pariacoto', 'provincia_codigo' => '0201', 'departamento_codigo' => '02'],
            ['codigo' => '020111', 'descripcion' => 'Pira', 'provincia_codigo' => '0201', 'departamento_codigo' => '02'],
            ['codigo' => '020112', 'descripcion' => 'Tarica', 'provincia_codigo' => '0201', 'departamento_codigo' => '02'],
        ]);

        // ===============================
        // ÁNCASH - AIJA (0202)
        // ===============================
        $districts = array_merge($districts, [
            ['codigo' => '020201', 'descripcion' => 'Aija', 'provincia_codigo' => '0202', 'departamento_codigo' => '02'],
            ['codigo' => '020202', 'descripcion' => 'Coris', 'provincia_codigo' => '0202', 'departamento_codigo' => '02'],
            ['codigo' => '020203', 'descripcion' => 'Huacllán', 'provincia_codigo' => '0202', 'departamento_codigo' => '02'],
            ['codigo' => '020204', 'descripcion' => 'La Merced', 'provincia_codigo' => '0202', 'departamento_codigo' => '02'],
            ['codigo' => '020205', 'descripcion' => 'Succha', 'provincia_codigo' => '0202', 'departamento_codigo' => '02'],
        ]);

        // ===============================
        // ÁNCASH - ANTONIO RAYMONDI (0203)
        // ===============================
        $districts = array_merge($districts, [
            ['codigo' => '020301', 'descripcion' => 'Llamellín', 'provincia_codigo' => '0203', 'departamento_codigo' => '02'],
            ['codigo' => '020302', 'descripcion' => 'Aczo', 'provincia_codigo' => '0203', 'departamento_codigo' => '02'],
            ['codigo' => '020303', 'descripcion' => 'Chaccho', 'provincia_codigo' => '0203', 'departamento_codigo' => '02'],
            ['codigo' => '020304', 'descripcion' => 'Chingas', 'provincia_codigo' => '0203', 'departamento_codigo' => '02'],
            ['codigo' => '020305', 'descripcion' => 'Mirgas', 'provincia_codigo' => '0203', 'departamento_codigo' => '02'],
            ['codigo' => '020306', 'descripcion' => 'San Juan de Rontoy', 'provincia_codigo' => '0203', 'departamento_codigo' => '02'],
        ]);

        // ===============================
        // ÁNCASH - ASUNCIÓN (0204)
        // ===============================
        $districts = array_merge($districts, [
            ['codigo' => '020401', 'descripcion' => 'Chacas', 'provincia_codigo' => '0204', 'departamento_codigo' => '02'],
            ['codigo' => '020402', 'descripcion' => 'Acochaca', 'provincia_codigo' => '0204', 'departamento_codigo' => '02'],
        ]);

        // ===============================
        // ÁNCASH - BOLOGNESI (0205)
        // ===============================
        $districts = array_merge($districts, [
            ['codigo' => '020501', 'descripcion' => 'Chiquián', 'provincia_codigo' => '0205', 'departamento_codigo' => '02'],
            ['codigo' => '020502', 'descripcion' => 'Abelardo Pardo Lezameta', 'provincia_codigo' => '0205', 'departamento_codigo' => '02'],
            ['codigo' => '020503', 'descripcion' => 'Antonio Raymondi', 'provincia_codigo' => '0205', 'departamento_codigo' => '02'],
            ['codigo' => '020504', 'descripcion' => 'Aquia', 'provincia_codigo' => '0205', 'departamento_codigo' => '02'],
            ['codigo' => '020505', 'descripcion' => 'Cajacay', 'provincia_codigo' => '0205', 'departamento_codigo' => '02'],
            ['codigo' => '020506', 'descripcion' => 'Canis', 'provincia_codigo' => '0205', 'departamento_codigo' => '02'],
            ['codigo' => '020507', 'descripcion' => 'Colquioc', 'provincia_codigo' => '0205', 'departamento_codigo' => '02'],
            ['codigo' => '020508', 'descripcion' => 'Huallanca', 'provincia_codigo' => '0205', 'departamento_codigo' => '02'],
            ['codigo' => '020509', 'descripcion' => 'Huasta', 'provincia_codigo' => '0205', 'departamento_codigo' => '02'],
            ['codigo' => '020510', 'descripcion' => 'Huayllacayán', 'provincia_codigo' => '0205', 'departamento_codigo' => '02'],
            ['codigo' => '020511', 'descripcion' => 'La Primavera', 'provincia_codigo' => '0205', 'departamento_codigo' => '02'],
            ['codigo' => '020512', 'descripcion' => 'Mangas', 'provincia_codigo' => '0205', 'departamento_codigo' => '02'],
            ['codigo' => '020513', 'descripcion' => 'Pacllón', 'provincia_codigo' => '0205', 'departamento_codigo' => '02'],
            ['codigo' => '020514', 'descripcion' => 'San Miguel de Corpanqui', 'provincia_codigo' => '0205', 'departamento_codigo' => '02'],
            ['codigo' => '020515', 'descripcion' => 'Ticllos', 'provincia_codigo' => '0205', 'departamento_codigo' => '02'],
        ]);

        // ===============================
        // ÁNCASH - CARHUAZ (0206)
        // ===============================
        $districts = array_merge($districts, [
            ['codigo' => '020601', 'descripcion' => 'Carhuaz', 'provincia_codigo' => '0206', 'departamento_codigo' => '02'],
            ['codigo' => '020602', 'descripcion' => 'Acopampa', 'provincia_codigo' => '0206', 'departamento_codigo' => '02'],
            ['codigo' => '020603', 'descripcion' => 'Amashca', 'provincia_codigo' => '0206', 'departamento_codigo' => '02'],
            ['codigo' => '020604', 'descripcion' => 'Anta', 'provincia_codigo' => '0206', 'departamento_codigo' => '02'],
            ['codigo' => '020605', 'descripcion' => 'Ataquero', 'provincia_codigo' => '0206', 'departamento_codigo' => '02'],
            ['codigo' => '020606', 'descripcion' => 'Marcara', 'provincia_codigo' => '0206', 'departamento_codigo' => '02'],
            ['codigo' => '020607', 'descripcion' => 'Pariahuanca', 'provincia_codigo' => '0206', 'departamento_codigo' => '02'],
            ['codigo' => '020608', 'descripcion' => 'San Miguel de Aco', 'provincia_codigo' => '0206', 'departamento_codigo' => '02'],
            ['codigo' => '020609', 'descripcion' => 'Shilla', 'provincia_codigo' => '0206', 'departamento_codigo' => '02'],
            ['codigo' => '020610', 'descripcion' => 'Tinco', 'provincia_codigo' => '0206', 'departamento_codigo' => '02'],
            ['codigo' => '020611', 'descripcion' => 'Yungar', 'provincia_codigo' => '0206', 'departamento_codigo' => '02'],
        ]);

        // ===============================
        // ÁNCASH - CARLOS FERMÍN FITZCARRALD (0207)
        // ===============================
        $districts = array_merge($districts, [
            ['codigo' => '020701', 'descripcion' => 'San Luis', 'provincia_codigo' => '0207', 'departamento_codigo' => '02'],
            ['codigo' => '020702', 'descripcion' => 'San Nicolás', 'provincia_codigo' => '0207', 'departamento_codigo' => '02'],
            ['codigo' => '020703', 'descripcion' => 'Yauya', 'provincia_codigo' => '0207', 'departamento_codigo' => '02'],
        ]);

        // ===============================
        // ÁNCASH - CASMA (0208)
        // ===============================
        $districts = array_merge($districts, [
            ['codigo' => '020801', 'descripcion' => 'Casma', 'provincia_codigo' => '0208', 'departamento_codigo' => '02'],
            ['codigo' => '020802', 'descripcion' => 'Buena Vista Alta', 'provincia_codigo' => '0208', 'departamento_codigo' => '02'],
            ['codigo' => '020803', 'descripcion' => 'Comandante Noel', 'provincia_codigo' => '0208', 'departamento_codigo' => '02'],
            ['codigo' => '020804', 'descripcion' => 'Yaután', 'provincia_codigo' => '0208', 'departamento_codigo' => '02'],
        ]);

        // ===============================
        // ÁNCASH - CORONGO (0209)
        // ===============================
        $districts = array_merge($districts, [
            ['codigo' => '020901', 'descripcion' => 'Corongo', 'provincia_codigo' => '0209', 'departamento_codigo' => '02'],
            ['codigo' => '020902', 'descripcion' => 'Aco', 'provincia_codigo' => '0209', 'departamento_codigo' => '02'],
            ['codigo' => '020903', 'descripcion' => 'Bambas', 'provincia_codigo' => '0209', 'departamento_codigo' => '02'],
            ['codigo' => '020904', 'descripcion' => 'Cusca', 'provincia_codigo' => '0209', 'departamento_codigo' => '02'],
            ['codigo' => '020905', 'descripcion' => 'La Pampa', 'provincia_codigo' => '0209', 'departamento_codigo' => '02'],
            ['codigo' => '020906', 'descripcion' => 'Yanac', 'provincia_codigo' => '0209', 'departamento_codigo' => '02'],
            ['codigo' => '020907', 'descripcion' => 'Yupán', 'provincia_codigo' => '0209', 'departamento_codigo' => '02'],
        ]);

        // ===============================
        // ÁNCASH - HUARI (0210)
        // ===============================
        $districts = array_merge($districts, [
            ['codigo' => '021001', 'descripcion' => 'Huari', 'provincia_codigo' => '0210', 'departamento_codigo' => '02'],
            ['codigo' => '021002', 'descripcion' => 'Anra', 'provincia_codigo' => '0210', 'departamento_codigo' => '02'],
            ['codigo' => '021003', 'descripcion' => 'Cajay', 'provincia_codigo' => '0210', 'departamento_codigo' => '02'],
            ['codigo' => '021004', 'descripcion' => 'Chavín de Huántar', 'provincia_codigo' => '0210', 'departamento_codigo' => '02'],
            ['codigo' => '021005', 'descripcion' => 'Huacachi', 'provincia_codigo' => '0210', 'departamento_codigo' => '02'],
            ['codigo' => '021006', 'descripcion' => 'Huacchis', 'provincia_codigo' => '0210', 'departamento_codigo' => '02'],
            ['codigo' => '021007', 'descripcion' => 'Huachis', 'provincia_codigo' => '0210', 'departamento_codigo' => '02'],
            ['codigo' => '021008', 'descripcion' => 'Huántar', 'provincia_codigo' => '0210', 'departamento_codigo' => '02'],
            ['codigo' => '021009', 'descripcion' => 'Masín', 'provincia_codigo' => '0210', 'departamento_codigo' => '02'],
            ['codigo' => '021010', 'descripcion' => 'Paucas', 'provincia_codigo' => '0210', 'departamento_codigo' => '02'],
            ['codigo' => '021011', 'descripcion' => 'Ponto', 'provincia_codigo' => '0210', 'departamento_codigo' => '02'],
            ['codigo' => '021012', 'descripcion' => 'Rahuapampa', 'provincia_codigo' => '0210', 'departamento_codigo' => '02'],
            ['codigo' => '021013', 'descripcion' => 'Rapayán', 'provincia_codigo' => '0210', 'departamento_codigo' => '02'],
            ['codigo' => '021014', 'descripcion' => 'San Marcos', 'provincia_codigo' => '0210', 'departamento_codigo' => '02'],
            ['codigo' => '021015', 'descripcion' => 'San Pedro de Chaná', 'provincia_codigo' => '0210', 'departamento_codigo' => '02'],
            ['codigo' => '021016', 'descripcion' => 'Uco', 'provincia_codigo' => '0210', 'departamento_codigo' => '02'],
        ]);

        // ===============================
        // ÁNCASH - HUARMEY (0211)
        // ===============================
        $districts = array_merge($districts, [
            ['codigo' => '021101', 'descripcion' => 'Huarmey', 'provincia_codigo' => '0211', 'departamento_codigo' => '02'],
            ['codigo' => '021102', 'descripcion' => 'Cochapeti', 'provincia_codigo' => '0211', 'departamento_codigo' => '02'],
            ['codigo' => '021103', 'descripcion' => 'Culebras', 'provincia_codigo' => '0211', 'departamento_codigo' => '02'],
            ['codigo' => '021104', 'descripcion' => 'Huayán', 'provincia_codigo' => '0211', 'departamento_codigo' => '02'],
            ['codigo' => '021105', 'descripcion' => 'Malvas', 'provincia_codigo' => '0211', 'departamento_codigo' => '02'],
        ]);

        // ===============================
        // ÁNCASH - HUAYLAS (0212)
        // ===============================
        $districts = array_merge($districts, [
            ['codigo' => '021201', 'descripcion' => 'Caraz', 'provincia_codigo' => '0212', 'departamento_codigo' => '02'],
            ['codigo' => '021202', 'descripcion' => 'Huallanca', 'provincia_codigo' => '0212', 'departamento_codigo' => '02'],
            ['codigo' => '021203', 'descripcion' => 'Huata', 'provincia_codigo' => '0212', 'departamento_codigo' => '02'],
            ['codigo' => '021204', 'descripcion' => 'Huaylas', 'provincia_codigo' => '0212', 'departamento_codigo' => '02'],
            ['codigo' => '021205', 'descripcion' => 'Mato', 'provincia_codigo' => '0212', 'departamento_codigo' => '02'],
            ['codigo' => '021206', 'descripcion' => 'Pamparomás', 'provincia_codigo' => '0212', 'departamento_codigo' => '02'],
            ['codigo' => '021207', 'descripcion' => 'Pueblo Libre', 'provincia_codigo' => '0212', 'departamento_codigo' => '02'],
            ['codigo' => '021208', 'descripcion' => 'Santa Cruz', 'provincia_codigo' => '0212', 'departamento_codigo' => '02'],
            ['codigo' => '021209', 'descripcion' => 'Santo Toribio', 'provincia_codigo' => '0212', 'departamento_codigo' => '02'],
            ['codigo' => '021210', 'descripcion' => 'Yuracmarca', 'provincia_codigo' => '0212', 'departamento_codigo' => '02'],
        ]);

        // ===============================
        // ÁNCASH - MARISCAL LUZURIAGA (0213)
        // ===============================
        $districts = array_merge($districts, [
            ['codigo' => '021301', 'descripcion' => 'Piscobamba', 'provincia_codigo' => '0213', 'departamento_codigo' => '02'],
            ['codigo' => '021302', 'descripcion' => 'Casca', 'provincia_codigo' => '0213', 'departamento_codigo' => '02'],
            ['codigo' => '021303', 'descripcion' => 'Eleazar Guzmán Barrón', 'provincia_codigo' => '0213', 'departamento_codigo' => '02'],
            ['codigo' => '021304', 'descripcion' => 'Fidel Olivas Escudero', 'provincia_codigo' => '0213', 'departamento_codigo' => '02'],
            ['codigo' => '021305', 'descripcion' => 'Llama', 'provincia_codigo' => '0213', 'departamento_codigo' => '02'],
            ['codigo' => '021306', 'descripcion' => 'Llumpa', 'provincia_codigo' => '0213', 'departamento_codigo' => '02'],
            ['codigo' => '021307', 'descripcion' => 'Lucma', 'provincia_codigo' => '0213', 'departamento_codigo' => '02'],
            ['codigo' => '021308', 'descripcion' => 'Musga', 'provincia_codigo' => '0213', 'departamento_codigo' => '02'],
        ]);

        // ===============================
        // ÁNCASH - OCROS (0214)
        // ===============================
        $districts = array_merge($districts, [
            ['codigo' => '021401', 'descripcion' => 'Ocros', 'provincia_codigo' => '0214', 'departamento_codigo' => '02'],
            ['codigo' => '021402', 'descripcion' => 'Acas', 'provincia_codigo' => '0214', 'departamento_codigo' => '02'],
            ['codigo' => '021403', 'descripcion' => 'Cajamarquilla', 'provincia_codigo' => '0214', 'departamento_codigo' => '02'],
            ['codigo' => '021404', 'descripcion' => 'Carhuapampa', 'provincia_codigo' => '0214', 'departamento_codigo' => '02'],
            ['codigo' => '021405', 'descripcion' => 'Cochas', 'provincia_codigo' => '0214', 'departamento_codigo' => '02'],
            ['codigo' => '021406', 'descripcion' => 'Congas', 'provincia_codigo' => '0214', 'departamento_codigo' => '02'],
            ['codigo' => '021407', 'descripcion' => 'Llipa', 'provincia_codigo' => '0214', 'departamento_codigo' => '02'],
            ['codigo' => '021408', 'descripcion' => 'San Cristóbal de Raján', 'provincia_codigo' => '0214', 'departamento_codigo' => '02'],
            ['codigo' => '021409', 'descripcion' => 'San Pedro', 'provincia_codigo' => '0214', 'departamento_codigo' => '02'],
            ['codigo' => '021410', 'descripcion' => 'Santiago de Chilcas', 'provincia_codigo' => '0214', 'departamento_codigo' => '02'],
        ]);

        // ===============================
        // ÁNCASH - PALLASCA (0215)
        // ===============================
        $districts = array_merge($districts, [
            ['codigo' => '021501', 'descripcion' => 'Cabana', 'provincia_codigo' => '0215', 'departamento_codigo' => '02'],
            ['codigo' => '021502', 'descripcion' => 'Bolognesi', 'provincia_codigo' => '0215', 'departamento_codigo' => '02'],
            ['codigo' => '021503', 'descripcion' => 'Conchucos', 'provincia_codigo' => '0215', 'departamento_codigo' => '02'],
            ['codigo' => '021504', 'descripcion' => 'Huacaschuque', 'provincia_codigo' => '0215', 'departamento_codigo' => '02'],
            ['codigo' => '021505', 'descripcion' => 'Huandoval', 'provincia_codigo' => '0215', 'departamento_codigo' => '02'],
            ['codigo' => '021506', 'descripcion' => 'Lacabamba', 'provincia_codigo' => '0215', 'departamento_codigo' => '02'],
            ['codigo' => '021507', 'descripcion' => 'Llapo', 'provincia_codigo' => '0215', 'departamento_codigo' => '02'],
            ['codigo' => '021508', 'descripcion' => 'Pallasca', 'provincia_codigo' => '0215', 'departamento_codigo' => '02'],
            ['codigo' => '021509', 'descripcion' => 'Pampas', 'provincia_codigo' => '0215', 'departamento_codigo' => '02'],
            ['codigo' => '021510', 'descripcion' => 'Santa Rosa', 'provincia_codigo' => '0215', 'departamento_codigo' => '02'],
            ['codigo' => '021511', 'descripcion' => 'Tauca', 'provincia_codigo' => '0215', 'departamento_codigo' => '02'],
        ]);

        // ===============================
        // ÁNCASH - POMABAMBA (0216)
        // ===============================
        $districts = array_merge($districts, [
            ['codigo' => '021601', 'descripcion' => 'Pomabamba', 'provincia_codigo' => '0216', 'departamento_codigo' => '02'],
            ['codigo' => '021602', 'descripcion' => 'Huayllán', 'provincia_codigo' => '0216', 'departamento_codigo' => '02'],
            ['codigo' => '021603', 'descripcion' => 'Parobamba', 'provincia_codigo' => '0216', 'departamento_codigo' => '02'],
            ['codigo' => '021604', 'descripcion' => 'Quinuabamba', 'provincia_codigo' => '0216', 'departamento_codigo' => '02'],
        ]);

        // ===============================
        // ÁNCASH - RECUAY (0217)
        // ===============================
        $districts = array_merge($districts, [
            ['codigo' => '021701', 'descripcion' => 'Recuay', 'provincia_codigo' => '0217', 'departamento_codigo' => '02'],
            ['codigo' => '021702', 'descripcion' => 'Catac', 'provincia_codigo' => '0217', 'departamento_codigo' => '02'],
            ['codigo' => '021703', 'descripcion' => 'Cotaparaco', 'provincia_codigo' => '0217', 'departamento_codigo' => '02'],
            ['codigo' => '021704', 'descripcion' => 'Huayllapampa', 'provincia_codigo' => '0217', 'departamento_codigo' => '02'],
            ['codigo' => '021705', 'descripcion' => 'Llacllín', 'provincia_codigo' => '0217', 'departamento_codigo' => '02'],
            ['codigo' => '021706', 'descripcion' => 'Marca', 'provincia_codigo' => '0217', 'departamento_codigo' => '02'],
            ['codigo' => '021707', 'descripcion' => 'Pampas Chico', 'provincia_codigo' => '0217', 'departamento_codigo' => '02'],
            ['codigo' => '021708', 'descripcion' => 'Pararín', 'provincia_codigo' => '0217', 'departamento_codigo' => '02'],
            ['codigo' => '021709', 'descripcion' => 'Tapacocha', 'provincia_codigo' => '0217', 'departamento_codigo' => '02'],
            ['codigo' => '021710', 'descripcion' => 'Ticapampa', 'provincia_codigo' => '0217', 'departamento_codigo' => '02'],
        ]);

        // ===============================
        // ÁNCASH - SANTA (0218)
        // ===============================
        $districts = array_merge($districts, [
            ['codigo' => '021801', 'descripcion' => 'Chimbote', 'provincia_codigo' => '0218', 'departamento_codigo' => '02'],
            ['codigo' => '021802', 'descripcion' => 'Cáceres del Perú', 'provincia_codigo' => '0218', 'departamento_codigo' => '02'],
            ['codigo' => '021803', 'descripcion' => 'Coishco', 'provincia_codigo' => '0218', 'departamento_codigo' => '02'],
            ['codigo' => '021804', 'descripcion' => 'Macate', 'provincia_codigo' => '0218', 'departamento_codigo' => '02'],
            ['codigo' => '021805', 'descripcion' => 'Moro', 'provincia_codigo' => '0218', 'departamento_codigo' => '02'],
            ['codigo' => '021806', 'descripcion' => 'Nepeña', 'provincia_codigo' => '0218', 'departamento_codigo' => '02'],
            ['codigo' => '021807', 'descripcion' => 'Samanco', 'provincia_codigo' => '0218', 'departamento_codigo' => '02'],
            ['codigo' => '021808', 'descripcion' => 'Santa', 'provincia_codigo' => '0218', 'departamento_codigo' => '02'],
            ['codigo' => '021809', 'descripcion' => 'Nuevo Chimbote', 'provincia_codigo' => '0218', 'departamento_codigo' => '02'],
        ]);

        // ===============================
        // ÁNCASH - SIHUAS (0219)
        // ===============================
        $districts = array_merge($districts, [
            ['codigo' => '021901', 'descripcion' => 'Sihuas', 'provincia_codigo' => '0219', 'departamento_codigo' => '02'],
            ['codigo' => '021902', 'descripcion' => 'Acobamba', 'provincia_codigo' => '0219', 'departamento_codigo' => '02'],
            ['codigo' => '021903', 'descripcion' => 'Alfonso Ugarte', 'provincia_codigo' => '0219', 'departamento_codigo' => '02'],
            ['codigo' => '021904', 'descripcion' => 'Cashapampa', 'provincia_codigo' => '0219', 'departamento_codigo' => '02'],
            ['codigo' => '021905', 'descripcion' => 'Chingalpo', 'provincia_codigo' => '0219', 'departamento_codigo' => '02'],
            ['codigo' => '021906', 'descripcion' => 'Huayllabamba', 'provincia_codigo' => '0219', 'departamento_codigo' => '02'],
            ['codigo' => '021907', 'descripcion' => 'Quiches', 'provincia_codigo' => '0219', 'departamento_codigo' => '02'],
            ['codigo' => '021908', 'descripcion' => 'Ragash', 'provincia_codigo' => '0219', 'departamento_codigo' => '02'],
            ['codigo' => '021909', 'descripcion' => 'San Juan', 'provincia_codigo' => '0219', 'departamento_codigo' => '02'],
            ['codigo' => '021910', 'descripcion' => 'Sicsibamba', 'provincia_codigo' => '0219', 'departamento_codigo' => '02'],
        ]);

        // ===============================
        // ÁNCASH - YUNGAY (0220)
        // ===============================
        $districts = array_merge($districts, [
            ['codigo' => '022001', 'descripcion' => 'Yungay', 'provincia_codigo' => '0220', 'departamento_codigo' => '02'],
            ['codigo' => '022002', 'descripcion' => 'Cascapara', 'provincia_codigo' => '0220', 'departamento_codigo' => '02'],
            ['codigo' => '022003', 'descripcion' => 'Mancos', 'provincia_codigo' => '0220', 'departamento_codigo' => '02'],
            ['codigo' => '022004', 'descripcion' => 'Matacoto', 'provincia_codigo' => '0220', 'departamento_codigo' => '02'],
            ['codigo' => '022005', 'descripcion' => 'Quillo', 'provincia_codigo' => '0220', 'departamento_codigo' => '02'],
            ['codigo' => '022006', 'descripcion' => 'Ranrahirca', 'provincia_codigo' => '0220', 'departamento_codigo' => '02'],
            ['codigo' => '022007', 'descripcion' => 'Shupluy', 'provincia_codigo' => '0220', 'departamento_codigo' => '02'],
            ['codigo' => '022008', 'descripcion' => 'Yanama', 'provincia_codigo' => '0220', 'departamento_codigo' => '02'],
        ]);

        // ==================================================
        // APURÍMAC (03)
        // ==================================================

        // -------------------------------
        // ABANCAY (0301)
        // -------------------------------
        $districts = array_merge($districts, [
            ['codigo' => '030101', 'descripcion' => 'Abancay', 'provincia_codigo' => '0301', 'departamento_codigo' => '03'],
            ['codigo' => '030102', 'descripcion' => 'Chacoche', 'provincia_codigo' => '0301', 'departamento_codigo' => '03'],
            ['codigo' => '030103', 'descripcion' => 'Circa', 'provincia_codigo' => '0301', 'departamento_codigo' => '03'],
            ['codigo' => '030104', 'descripcion' => 'Curahuasi', 'provincia_codigo' => '0301', 'departamento_codigo' => '03'],
            ['codigo' => '030105', 'descripcion' => 'Huanipaca', 'provincia_codigo' => '0301', 'departamento_codigo' => '03'],
            ['codigo' => '030106', 'descripcion' => 'Lambrama', 'provincia_codigo' => '0301', 'departamento_codigo' => '03'],
            ['codigo' => '030107', 'descripcion' => 'Pichirhua', 'provincia_codigo' => '0301', 'departamento_codigo' => '03'],
            ['codigo' => '030108', 'descripcion' => 'San Pedro de Cachora', 'provincia_codigo' => '0301', 'departamento_codigo' => '03'],
            ['codigo' => '030109', 'descripcion' => 'Tamburco', 'provincia_codigo' => '0301', 'departamento_codigo' => '03'],
        ]);

        // -------------------------------
        // ANDAHUAYLAS (0302)
        // -------------------------------
        $districts = array_merge($districts, [
            ['codigo' => '030201', 'descripcion' => 'Andahuaylas', 'provincia_codigo' => '0302', 'departamento_codigo' => '03'],
            ['codigo' => '030202', 'descripcion' => 'Andarapa', 'provincia_codigo' => '0302', 'departamento_codigo' => '03'],
            ['codigo' => '030203', 'descripcion' => 'Chiara', 'provincia_codigo' => '0302', 'departamento_codigo' => '03'],
            ['codigo' => '030204', 'descripcion' => 'Huancarama', 'provincia_codigo' => '0302', 'departamento_codigo' => '03'],
            ['codigo' => '030205', 'descripcion' => 'Huancaray', 'provincia_codigo' => '0302', 'departamento_codigo' => '03'],
            ['codigo' => '030206', 'descripcion' => 'Huayana', 'provincia_codigo' => '0302', 'departamento_codigo' => '03'],
            ['codigo' => '030207', 'descripcion' => 'Kishuara', 'provincia_codigo' => '0302', 'departamento_codigo' => '03'],
            ['codigo' => '030208', 'descripcion' => 'Pacobamba', 'provincia_codigo' => '0302', 'departamento_codigo' => '03'],
            ['codigo' => '030209', 'descripcion' => 'Pacucha', 'provincia_codigo' => '0302', 'departamento_codigo' => '03'],
            ['codigo' => '030210', 'descripcion' => 'Pampachiri', 'provincia_codigo' => '0302', 'departamento_codigo' => '03'],
            ['codigo' => '030211', 'descripcion' => 'Pomacocha', 'provincia_codigo' => '0302', 'departamento_codigo' => '03'],
            ['codigo' => '030212', 'descripcion' => 'San Antonio de Cachi', 'provincia_codigo' => '0302', 'departamento_codigo' => '03'],
            ['codigo' => '030213', 'descripcion' => 'San Jerónimo', 'provincia_codigo' => '0302', 'departamento_codigo' => '03'],
            ['codigo' => '030214', 'descripcion' => 'San Miguel de Chaccrampa', 'provincia_codigo' => '0302', 'departamento_codigo' => '03'],
            ['codigo' => '030215', 'descripcion' => 'Santa María de Chicmo', 'provincia_codigo' => '0302', 'departamento_codigo' => '03'],
            ['codigo' => '030216', 'descripcion' => 'Talavera', 'provincia_codigo' => '0302', 'departamento_codigo' => '03'],
            ['codigo' => '030217', 'descripcion' => 'Tumay Huaraca', 'provincia_codigo' => '0302', 'departamento_codigo' => '03'],
            ['codigo' => '030218', 'descripcion' => 'Turpo', 'provincia_codigo' => '0302', 'departamento_codigo' => '03'],
            ['codigo' => '030219', 'descripcion' => 'Kaquiabamba', 'provincia_codigo' => '0302', 'departamento_codigo' => '03'],
            ['codigo' => '030220', 'descripcion' => 'José María Arguedas', 'provincia_codigo' => '0302', 'departamento_codigo' => '03'],
        ]);

        // -------------------------------
        // ANTABAMBA (0303)
        // -------------------------------
        $districts = array_merge($districts, [
            ['codigo' => '030301', 'descripcion' => 'Antabamba', 'provincia_codigo' => '0303', 'departamento_codigo' => '03'],
            ['codigo' => '030302', 'descripcion' => 'El Oro', 'provincia_codigo' => '0303', 'departamento_codigo' => '03'],
            ['codigo' => '030303', 'descripcion' => 'Huaquirca', 'provincia_codigo' => '0303', 'departamento_codigo' => '03'],
            ['codigo' => '030304', 'descripcion' => 'Juan Espinoza Medrano', 'provincia_codigo' => '0303', 'departamento_codigo' => '03'],
            ['codigo' => '030305', 'descripcion' => 'Oropesa', 'provincia_codigo' => '0303', 'departamento_codigo' => '03'],
            ['codigo' => '030306', 'descripcion' => 'Pachaconas', 'provincia_codigo' => '0303', 'departamento_codigo' => '03'],
            ['codigo' => '030307', 'descripcion' => 'Sabaino', 'provincia_codigo' => '0303', 'departamento_codigo' => '03'],
        ]);

        // -------------------------------
        // AYMARAES (0304)
        // -------------------------------
        $districts = array_merge($districts, [
            ['codigo' => '030401', 'descripcion' => 'Chalhuanca', 'provincia_codigo' => '0304', 'departamento_codigo' => '03'],
            ['codigo' => '030402', 'descripcion' => 'Capaya', 'provincia_codigo' => '0304', 'departamento_codigo' => '03'],
            ['codigo' => '030403', 'descripcion' => 'Caraybamba', 'provincia_codigo' => '0304', 'departamento_codigo' => '03'],
            ['codigo' => '030404', 'descripcion' => 'Chapimarca', 'provincia_codigo' => '0304', 'departamento_codigo' => '03'],
            ['codigo' => '030405', 'descripcion' => 'Colcabamba', 'provincia_codigo' => '0304', 'departamento_codigo' => '03'],
            ['codigo' => '030406', 'descripcion' => 'Cotaruse', 'provincia_codigo' => '0304', 'departamento_codigo' => '03'],
            ['codigo' => '030407', 'descripcion' => 'Ihuayllo', 'provincia_codigo' => '0304', 'departamento_codigo' => '03'],
            ['codigo' => '030408', 'descripcion' => 'Justo Apu Sahuaraura', 'provincia_codigo' => '0304', 'departamento_codigo' => '03'],
            ['codigo' => '030409', 'descripcion' => 'Lucre', 'provincia_codigo' => '0304', 'departamento_codigo' => '03'],
            ['codigo' => '030410', 'descripcion' => 'Pocohuanca', 'provincia_codigo' => '0304', 'departamento_codigo' => '03'],
            ['codigo' => '030411', 'descripcion' => 'San Juan de Chacña', 'provincia_codigo' => '0304', 'departamento_codigo' => '03'],
            ['codigo' => '030412', 'descripcion' => 'Sañayca', 'provincia_codigo' => '0304', 'departamento_codigo' => '03'],
            ['codigo' => '030413', 'descripcion' => 'Soraya', 'provincia_codigo' => '0304', 'departamento_codigo' => '03'],
            ['codigo' => '030414', 'descripcion' => 'Tapairihua', 'provincia_codigo' => '0304', 'departamento_codigo' => '03'],
            ['codigo' => '030415', 'descripcion' => 'Tintay', 'provincia_codigo' => '0304', 'departamento_codigo' => '03'],
            ['codigo' => '030416', 'descripcion' => 'Toraya', 'provincia_codigo' => '0304', 'departamento_codigo' => '03'],
            ['codigo' => '030417', 'descripcion' => 'Yanaca', 'provincia_codigo' => '0304', 'departamento_codigo' => '03'],
        ]);

        // -------------------------------
        // COTABAMBAS (0305)
        // -------------------------------
        $districts = array_merge($districts, [
            ['codigo' => '030501', 'descripcion' => 'Tambobamba', 'provincia_codigo' => '0305', 'departamento_codigo' => '03'],
            ['codigo' => '030502', 'descripcion' => 'Cotabambas', 'provincia_codigo' => '0305', 'departamento_codigo' => '03'],
            ['codigo' => '030503', 'descripcion' => 'Coyllurqui', 'provincia_codigo' => '0305', 'departamento_codigo' => '03'],
            ['codigo' => '030504', 'descripcion' => 'Haquira', 'provincia_codigo' => '0305', 'departamento_codigo' => '03'],
            ['codigo' => '030505', 'descripcion' => 'Mara', 'provincia_codigo' => '0305', 'departamento_codigo' => '03'],
            ['codigo' => '030506', 'descripcion' => 'Challhuahuacho', 'provincia_codigo' => '0305', 'departamento_codigo' => '03'],
        ]);

        // -------------------------------
        // CHINCHEROS (0306)
        // -------------------------------
        $districts = array_merge($districts, [
            ['codigo' => '030601', 'descripcion' => 'Chincheros', 'provincia_codigo' => '0306', 'departamento_codigo' => '03'],
            ['codigo' => '030602', 'descripcion' => 'Anco-Huallo', 'provincia_codigo' => '0306', 'departamento_codigo' => '03'],
            ['codigo' => '030603', 'descripcion' => 'Cocharcas', 'provincia_codigo' => '0306', 'departamento_codigo' => '03'],
            ['codigo' => '030604', 'descripcion' => 'Huaccana', 'provincia_codigo' => '0306', 'departamento_codigo' => '03'],
            ['codigo' => '030605', 'descripcion' => 'Ocobamba', 'provincia_codigo' => '0306', 'departamento_codigo' => '03'],
            ['codigo' => '030606', 'descripcion' => 'Ongoy', 'provincia_codigo' => '0306', 'departamento_codigo' => '03'],
            ['codigo' => '030607', 'descripcion' => 'Uranmarca', 'provincia_codigo' => '0306', 'departamento_codigo' => '03'],
            ['codigo' => '030608', 'descripcion' => 'Ranracancha', 'provincia_codigo' => '0306', 'departamento_codigo' => '03'],
        ]);

        // -------------------------------
        // GRAU (0307)
        // -------------------------------
        $districts = array_merge($districts, [
            ['codigo' => '030701', 'descripcion' => 'Chuquibambilla', 'provincia_codigo' => '0307', 'departamento_codigo' => '03'],
            ['codigo' => '030702', 'descripcion' => 'Curpahuasi', 'provincia_codigo' => '0307', 'departamento_codigo' => '03'],
            ['codigo' => '030703', 'descripcion' => 'Gamarra', 'provincia_codigo' => '0307', 'departamento_codigo' => '03'],
            ['codigo' => '030704', 'descripcion' => 'Huayllati', 'provincia_codigo' => '0307', 'departamento_codigo' => '03'],
            ['codigo' => '030705', 'descripcion' => 'Mamara', 'provincia_codigo' => '0307', 'departamento_codigo' => '03'],
            ['codigo' => '030706', 'descripcion' => 'Micaela Bastidas', 'provincia_codigo' => '0307', 'departamento_codigo' => '03'],
            ['codigo' => '030707', 'descripcion' => 'Pataypampa', 'provincia_codigo' => '0307', 'departamento_codigo' => '03'],
            ['codigo' => '030708', 'descripcion' => 'Progreso', 'provincia_codigo' => '0307', 'departamento_codigo' => '03'],
            ['codigo' => '030709', 'descripcion' => 'San Antonio', 'provincia_codigo' => '0307', 'departamento_codigo' => '03'],
            ['codigo' => '030710', 'descripcion' => 'Santa Rosa', 'provincia_codigo' => '0307', 'departamento_codigo' => '03'],
            ['codigo' => '030711', 'descripcion' => 'Turpay', 'provincia_codigo' => '0307', 'departamento_codigo' => '03'],
            ['codigo' => '030712', 'descripcion' => 'Vilcabamba', 'provincia_codigo' => '0307', 'departamento_codigo' => '03'],
            ['codigo' => '030713', 'descripcion' => 'Virundo', 'provincia_codigo' => '0307', 'departamento_codigo' => '03'],
            ['codigo' => '030714', 'descripcion' => 'Curasco', 'provincia_codigo' => '0307', 'departamento_codigo' => '03'],
        ]);
    }
}
