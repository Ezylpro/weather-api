<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $states = '[{
        "id": "1",
        "uf": "AC",
        "name": "Acre"
        },
        {
            "id": "2",
            "uf": "AL",
            "name": "Alagoas"
        }, {
            "id": "3",
            "uf": "AM",
            "name": "Amazonas"
        }, {
            "id": "4",
            "uf": "AP",
            "name": "Amapá"
        }, {
            "id": "5",
            "uf": "BA",
            "name": "Bahia"
        }, {
            "id": "6",
            "uf": "CE",
            "name": "Ceará"
        }, {
            "id": "7",
            "uf": "DF",
            "name": "Distrito Federal"
        }, {
            "id": "8",
            "uf": "ES",
            "name": "Espírito Santo"
        }, {
            "id": "9",
            "uf": "GO",
            "name": "Goiás"
        }, {
            "id": "10",
            "uf": "MA",
            "name": "Maranhão"
        }, {
            "id": "11",
            "uf": "MG",
            "name": "Minas Gerais"
        }, {
            "id": "12",
            "uf": "MS",
            "name": "Mato Grosso do Sul"
        }, {
            "id": "13",
            "uf": "MT",
            "name": "Mato Grosso"
        }, {
            "id": "14",
            "uf": "PA",
            "name": "Pará"
        }, {
            "id": "15",
            "uf": "PB",
            "name": "Paraíba"
        }, {
            "id": "16",
            "uf": "PE",
            "name": "Pernambuco"
        }, {
            "id": "17",
            "uf": "PI",
            "name": "Piauí"
        }, {
            "id": "18",
            "uf": "PR",
            "name": "Paraná"
        }, {
            "id": "19",
            "uf": "RJ",
            "name": "Rio de Janeiro"
        }, {
            "id": "20",
            "uf": "RN",
            "name": "Rio Grande do Norte"
        }, {
            "id": "21",
            "uf": "RO",
            "name": "Rondônia"
        }, {
            "id": "22",
            "uf": "RR",
            "name": "Roraima"
        }, {
            "id": "23",
            "uf": "RS",
            "name": "Rio Grande do Sul"
        }, {
            "id": "24",
            "uf": "SC",
            "name": "Santa Catarina"
        }, {
            "id": "25",
            "uf": "SE",
            "name": "Sergipe"
        }, {
            "id": "26",
            "uf": "SP",
            "name": "São Paulo"
        }, {
            "id": "27",
            "uf": "TO",
            "name": "Tocantins"
        }]';

        $statesArr = json_decode($states, true);

        DB::table('states')->insert($statesArr);

        $cities = '[{
		"id": "1",
		"name": "Afonso Cláudio",
		"state_id": "8"
        },
            {
            "id": "2",
            "name": "Água Doce do Norte",
            "state_id": "8"
        },
            {
            "id": "3",
            "name": "Águia Branca",
            "state_id": "8"
        },
            {
            "id": "4",
            "name": "Alegre",
            "state_id": "8"
        },
            {
            "id": "5",
            "name": "Alfredo Chaves",
            "state_id": "8"
        },
            {
            "id": "6",
            "name": "Alto Rio Novo",
            "state_id": "8"
        },
            {
            "id": "7",
            "name": "Anchieta",
            "state_id": "8"
        },
            {
            "id": "8",
            "name": "Apiacá",
            "state_id": "8"
        },
            {
            "id": "9",
            "name": "Aracruz",
            "state_id": "8"
        },
            {
            "id": "10",
            "name": "Atílio Vivacqua",
            "state_id": "8"
        },
            {
            "id": "11",
            "name": "Baixo Guandu",
            "state_id": "8"
        },
            {
            "id": "12",
            "name": "Barra de São Francisco",
            "state_id": "8"
        },
            {
            "id": "13",
            "name": "Boa Esperança",
            "state_id": "8"
        },
            {
            "id": "14",
            "name": "Bom Jesus do Norte",
            "state_id": "8"
        },
            {
            "id": "15",
            "name": "Brejetuba",
            "state_id": "8"
        },
            {
            "id": "16",
            "name": "Cachoeiro de Itapemirim",
            "state_id": "8"
        },
            {
            "id": "17",
            "name": "Cariacica",
            "state_id": "8"
        },
            {
            "id": "18",
            "name": "Castelo",
            "state_id": "8"
        },
            {
            "id": "19",
            "name": "Colatina",
            "state_id": "8"
        },
            {
            "id": "20",
            "name": "Conceição da Barra",
            "state_id": "8"
        },
            {
            "id": "21",
            "name": "Conceição do Castelo",
            "state_id": "8"
        },
            {
            "id": "22",
            "name": "Divino de São Lourenço",
            "state_id": "8"
        },
            {
            "id": "23",
            "name": "Domingos Martins",
            "state_id": "8"
        },
            {
            "id": "24",
            "name": "Dores do Rio Preto",
            "state_id": "8"
        },
            {
            "id": "25",
            "name": "Ecoporanga",
            "state_id": "8"
        },
            {
            "id": "26",
            "name": "Fundão",
            "state_id": "8"
        },
            {
            "id": "27",
            "name": "Governador Lindenberg",
            "state_id": "8"
        },
            {
            "id": "28",
            "name": "Guaçuí",
            "state_id": "8"
        },
            {
            "id": "29",
            "name": "Guarapari",
            "state_id": "8"
        },
            {
            "id": "30",
            "name": "Ibatiba",
            "state_id": "8"
        },
            {
            "id": "31",
            "name": "Ibiraçu",
            "state_id": "8"
        },
            {
            "id": "32",
            "name": "Ibitirama",
            "state_id": "8"
        },
            {
            "id": "33",
            "name": "Iconha",
            "state_id": "8"
        },
            {
            "id": "34",
            "name": "Irupi",
            "state_id": "8"
        },
            {
            "id": "35",
            "name": "Itaguaçu",
            "state_id": "8"
        },
            {
            "id": "36",
            "name": "Itapemirim",
            "state_id": "8"
        },
            {
            "id": "37",
            "name": "Itarana",
            "state_id": "8"
        },
            {
            "id": "38",
            "name": "Iúna",
            "state_id": "8"
        },
            {
            "id": "39",
            "name": "Jaguaré",
            "state_id": "8"
        },
            {
            "id": "40",
            "name": "Jerônimo Monteiro",
            "state_id": "8"
        },
            {
            "id": "41",
            "name": "João Neiva",
            "state_id": "8"
        },
            {
            "id": "42",
            "name": "Laranja da Terra",
            "state_id": "8"
        },
            {
            "id": "43",
            "name": "Linhares",
            "state_id": "8"
        },
            {
            "id": "44",
            "name": "Mantenópolis",
            "state_id": "8"
        },
            {
            "id": "45",
            "name": "Marataízes",
            "state_id": "8"
        },
            {
            "id": "46",
            "name": "Marechal Floriano",
            "state_id": "8"
        },
            {
            "id": "47",
            "name": "Marilândia",
            "state_id": "8"
        },
            {
            "id": "48",
            "name": "Mimoso do Sul",
            "state_id": "8"
        },
            {
            "id": "49",
            "name": "Montanha",
            "state_id": "8"
        },
            {
            "id": "50",
            "name": "Mucurici",
            "state_id": "8"
        },
            {
            "id": "51",
            "name": "Muniz Freire",
            "state_id": "8"
        },
            {
            "id": "52",
            "name": "Muqui",
            "state_id": "8"
        },
            {
            "id": "53",
            "name": "Nova Venécia",
            "state_id": "8"
        },
            {
            "id": "54",
            "name": "Pancas",
            "state_id": "8"
        },
            {
            "id": "55",
            "name": "Pedro Canário",
            "state_id": "8"
        },
            {
            "id": "56",
            "name": "Pinheiros",
            "state_id": "8"
        },
            {
            "id": "57",
            "name": "Piúma",
            "state_id": "8"
        },
            {
            "id": "58",
            "name": "Ponto Belo",
            "state_id": "8"
        },
            {
            "id": "59",
            "name": "Presidente Kennedy",
            "state_id": "8"
        },
            {
            "id": "60",
            "name": "Rio Bananal",
            "state_id": "8"
        },
            {
            "id": "61",
            "name": "Rio Novo do Sul",
            "state_id": "8"
        },
            {
            "id": "62",
            "name": "Santa Leopoldina",
            "state_id": "8"
        },
            {
            "id": "63",
            "name": "Santa Maria de Jetibá",
            "state_id": "8"
        },
            {
            "id": "64",
            "name": "Santa Teresa",
            "state_id": "8"
        },
            {
            "id": "65",
            "name": "São Domingos do Norte",
            "state_id": "8"
        },
            {
            "id": "66",
            "name": "São Gabriel da Palha",
            "state_id": "8"
        },
            {
            "id": "67",
            "name": "São José do Calçado",
            "state_id": "8"
        },
            {
            "id": "68",
            "name": "São Mateus",
            "state_id": "8"
        },
            {
            "id": "69",
            "name": "São Roque do Canaã",
            "state_id": "8"
        },
            {
            "id": "70",
            "name": "Serra",
            "state_id": "8"
        },
            {
            "id": "71",
            "name": "Sooretama",
            "state_id": "8"
        },
            {
            "id": "72",
            "name": "Vargem Alta",
            "state_id": "8"
        },
            {
            "id": "73",
            "name": "Venda Nova do Imigrante",
            "state_id": "8"
        },
            {
            "id": "74",
            "name": "Viana",
            "state_id": "8"
        },
            {
            "id": "75",
            "name": "Vila Pavão",
            "state_id": "8"
        },
            {
            "id": "76",
            "name": "Vila Valério",
            "state_id": "8"
        },
            {
            "id": "77",
            "name": "Vila Velha",
            "state_id": "8"
        },
            {
            "id": "78",
            "name": "Vitória",
            "state_id": "8"
        },
            {
            "id": "79",
            "name": "Acrelândia",
            "state_id": "1"
        },
            {
            "id": "80",
            "name": "Assis Brasil",
            "state_id": "1"
        },
            {
            "id": "81",
            "name": "Brasiléia",
            "state_id": "1"
        },
            {
            "id": "82",
            "name": "Bujari",
            "state_id": "1"
        },
            {
            "id": "83",
            "name": "Capixaba",
            "state_id": "1"
        },
            {
            "id": "84",
            "name": "Cruzeiro do Sul",
            "state_id": "1"
        },
            {
            "id": "85",
            "name": "Epitaciolândia",
            "state_id": "1"
        },
            {
            "id": "86",
            "name": "Feijó",
            "state_id": "1"
        },
            {
            "id": "87",
            "name": "Jordão",
            "state_id": "1"
        },
            {
            "id": "88",
            "name": "Mâncio Lima",
            "state_id": "1"
        },
            {
            "id": "89",
            "name": "Manoel Urbano",
            "state_id": "1"
        },
            {
            "id": "90",
            "name": "Marechal Thaumaturgo",
            "state_id": "1"
        },
            {
            "id": "91",
            "name": "Plácido de Castro",
            "state_id": "1"
        },
            {
            "id": "92",
            "name": "Porto Acre",
            "state_id": "1"
        },
            {
            "id": "93",
            "name": "Porto Walter",
            "state_id": "1"
        },
            {
            "id": "94",
            "name": "Rio Branco",
            "state_id": "1"
        },
            {
            "id": "95",
            "name": "Rodrigues Alves",
            "state_id": "1"
        },
            {
            "id": "96",
            "name": "Santa Rosa do Purus",
            "state_id": "1"
        },
            {
            "id": "97",
            "name": "Sena Madureira",
            "state_id": "1"
        },
            {
            "id": "98",
            "name": "Senador Guiomard",
            "state_id": "1"
        },
            {
            "id": "99",
            "name": "Tarauacá",
            "state_id": "1"
        },
            {
            "id": "100",
            "name": "Xapuri",
            "state_id": "1"
        },
            {
            "id": "101",
            "name": "Água Branca",
            "state_id": "2"
        },
            {
            "id": "102",
            "name": "Anadia",
            "state_id": "2"
        },
            {
            "id": "103",
            "name": "Arapiraca",
            "state_id": "2"
        },
            {
            "id": "104",
            "name": "Atalaia",
            "state_id": "2"
        },
            {
            "id": "105",
            "name": "Barra de Santo Antônio",
            "state_id": "2"
        },
            {
            "id": "106",
            "name": "Barra de São Miguel",
            "state_id": "2"
        },
            {
            "id": "107",
            "name": "Batalha",
            "state_id": "2"
        },
            {
            "id": "108",
            "name": "Belém",
            "state_id": "2"
        },
            {
            "id": "109",
            "name": "Belo Monte",
            "state_id": "2"
        },
            {
            "id": "110",
            "name": "Boca da Mata",
            "state_id": "2"
        },
            {
            "id": "111",
            "name": "Branquinha",
            "state_id": "2"
        },
            {
            "id": "112",
            "name": "Cacimbinhas",
            "state_id": "2"
        },
            {
            "id": "113",
            "name": "Cajueiro",
            "state_id": "2"
        },
            {
            "id": "114",
            "name": "Campestre",
            "state_id": "2"
        },
            {
            "id": "115",
            "name": "Campo Alegre",
            "state_id": "2"
        },
            {
            "id": "116",
            "name": "Campo Grande",
            "state_id": "2"
        },
            {
            "id": "117",
            "name": "Canapi",
            "state_id": "2"
        },
            {
            "id": "118",
            "name": "Capela",
            "state_id": "2"
        },
            {
            "id": "119",
            "name": "Carneiros",
            "state_id": "2"
        },
            {
            "id": "120",
            "name": "Chã Preta",
            "state_id": "2"
        },
            {
            "id": "121",
            "name": "Coité do Nóia",
            "state_id": "2"
        },
            {
            "id": "122",
            "name": "Colônia Leopoldina",
            "state_id": "2"
        },
            {
            "id": "123",
            "name": "Coqueiro Seco",
            "state_id": "2"
        },
            {
            "id": "124",
            "name": "Coruripe",
            "state_id": "2"
        },
            {
            "id": "125",
            "name": "Craíbas",
            "state_id": "2"
        },
            {
            "id": "126",
            "name": "Delmiro Gouveia",
            "state_id": "2"
        },
            {
            "id": "127",
            "name": "Dois Riachos",
            "state_id": "2"
        },
            {
            "id": "128",
            "name": "Estrela de Alagoas",
            "state_id": "2"
        },
            {
            "id": "129",
            "name": "Feira Grande",
            "state_id": "2"
        },
            {
            "id": "130",
            "name": "Feliz Deserto",
            "state_id": "2"
        },
            {
            "id": "131",
            "name": "Flexeiras",
            "state_id": "2"
        },
            {
            "id": "132",
            "name": "Girau do Ponciano",
            "state_id": "2"
        },
            {
            "id": "133",
            "name": "Ibateguara",
            "state_id": "2"
        },
            {
            "id": "134",
            "name": "Igaci",
            "state_id": "2"
        },
            {
            "id": "135",
            "name": "Igreja Nova",
            "state_id": "2"
        },
            {
            "id": "136",
            "name": "Inhapi",
            "state_id": "2"
        },
            {
            "id": "137",
            "name": "Jacaré dos Homens",
            "state_id": "2"
        },
            {
            "id": "138",
            "name": "Jacuípe",
            "state_id": "2"
        },
            {
            "id": "139",
            "name": "Japaratinga",
            "state_id": "2"
        },
            {
            "id": "140",
            "name": "Jaramataia",
            "state_id": "2"
        },
            {
            "id": "141",
            "name": "Jequiá da Praia",
            "state_id": "2"
        },
            {
            "id": "142",
            "name": "Joaquim Gomes",
            "state_id": "2"
        },
            {
            "id": "143",
            "name": "Jundiá",
            "state_id": "2"
        },
            {
            "id": "144",
            "name": "Junqueiro",
            "state_id": "2"
        },
            {
            "id": "145",
            "name": "Lagoa da Canoa",
            "state_id": "2"
        },
            {
            "id": "146",
            "name": "Limoeiro de Anadia",
            "state_id": "2"
        },
            {
            "id": "147",
            "name": "Maceió",
            "state_id": "2"
        },
            {
            "id": "148",
            "name": "Major Isidoro",
            "state_id": "2"
        },
            {
            "id": "149",
            "name": "Mar Vermelho",
            "state_id": "2"
        },
            {
            "id": "150",
            "name": "Maragogi",
            "state_id": "2"
        },
            {
            "id": "151",
            "name": "Maravilha",
            "state_id": "2"
        },
            {
            "id": "152",
            "name": "Marechal Deodoro",
            "state_id": "2"
        },
            {
            "id": "153",
            "name": "Maribondo",
            "state_id": "2"
        },
            {
            "id": "154",
            "name": "Mata Grande",
            "state_id": "2"
        },
            {
            "id": "155",
            "name": "Matriz de Camaragibe",
            "state_id": "2"
        },
            {
            "id": "156",
            "name": "Messias",
            "state_id": "2"
        },
            {
            "id": "157",
            "name": "Minador do Negrão",
            "state_id": "2"
        },
            {
            "id": "158",
            "name": "Monteirópolis",
            "state_id": "2"
        },
            {
            "id": "159",
            "name": "Murici",
            "state_id": "2"
        },
            {
            "id": "160",
            "name": "Novo Lino",
            "state_id": "2"
        },
            {
            "id": "161",
            "name": "Olho d`Água das Flores",
            "state_id": "2"
        },
            {
            "id": "162",
            "name": "Olho d`Água do Casado",
            "state_id": "2"
        },
            {
            "id": "163",
            "name": "Olho d`Água Grande",
            "state_id": "2"
        },
            {
            "id": "164",
            "name": "Olivença",
            "state_id": "2"
        },
            {
            "id": "165",
            "name": "Ouro Branco",
            "state_id": "2"
        },
            {
            "id": "166",
            "name": "Palestina",
            "state_id": "2"
        },
            {
            "id": "167",
            "name": "Palmeira dos Índios",
            "state_id": "2"
        },
            {
            "id": "168",
            "name": "Pão de Açúcar",
            "state_id": "2"
        },
            {
            "id": "169",
            "name": "Pariconha",
            "state_id": "2"
        },
            {
            "id": "170",
            "name": "Paripueira",
            "state_id": "2"
        },
            {
            "id": "171",
            "name": "Passo de Camaragibe",
            "state_id": "2"
        },
            {
            "id": "172",
            "name": "Paulo Jacinto",
            "state_id": "2"
        },
            {
            "id": "173",
            "name": "Penedo",
            "state_id": "2"
        },
            {
            "id": "174",
            "name": "Piaçabuçu",
            "state_id": "2"
        },
            {
            "id": "175",
            "name": "Pilar",
            "state_id": "2"
        },
            {
            "id": "176",
            "name": "Pindoba",
            "state_id": "2"
        },
            {
            "id": "177",
            "name": "Piranhas",
            "state_id": "2"
        },
            {
            "id": "178",
            "name": "Poço das Trincheiras",
            "state_id": "2"
        },
            {
            "id": "179",
            "name": "Porto Calvo",
            "state_id": "2"
        },
            {
            "id": "180",
            "name": "Porto de Pedras",
            "state_id": "2"
        },
            {
            "id": "181",
            "name": "Porto Real do Colégio",
            "state_id": "2"
        },
            {
            "id": "182",
            "name": "Quebrangulo",
            "state_id": "2"
        },
            {
            "id": "183",
            "name": "Rio Largo",
            "state_id": "2"
        },
            {
            "id": "184",
            "name": "Roteiro",
            "state_id": "2"
        },
            {
            "id": "185",
            "name": "Santa Luzia do Norte",
            "state_id": "2"
        },
            {
            "id": "186",
            "name": "Santana do Ipanema",
            "state_id": "2"
        },
            {
            "id": "187",
            "name": "Santana do Mundaú",
            "state_id": "2"
        },
            {
            "id": "188",
            "name": "São Brás",
            "state_id": "2"
        },
            {
            "id": "189",
            "name": "São José da Laje",
            "state_id": "2"
        },
            {
            "id": "190",
            "name": "São José da Tapera",
            "state_id": "2"
        },
            {
            "id": "191",
            "name": "São Luís do Quitunde",
            "state_id": "2"
        },
            {
            "id": "192",
            "name": "São Miguel dos Campos",
            "state_id": "2"
        },
            {
            "id": "193",
            "name": "São Miguel dos Milagres",
            "state_id": "2"
        },
            {
            "id": "194",
            "name": "São Sebastião",
            "state_id": "2"
        },
            {
            "id": "195",
            "name": "Satuba",
            "state_id": "2"
        },
            {
            "id": "196",
            "name": "Senador Rui Palmeira",
            "state_id": "2"
        },
            {
            "id": "197",
            "name": "Tanque d`Arca",
            "state_id": "2"
        },
            {
            "id": "198",
            "name": "Taquarana",
            "state_id": "2"
        },
            {
            "id": "199",
            "name": "Teotônio Vilela",
            "state_id": "2"
        },
            {
            "id": "200",
            "name": "Traipu",
            "state_id": "2"
        },
            {
            "id": "201",
            "name": "União dos Palmares",
            "state_id": "2"
        },
            {
            "id": "202",
            "name": "Viçosa",
            "state_id": "2"
        },
            {
            "id": "203",
            "name": "Amapá",
            "state_id": "4"
        },
            {
            "id": "204",
            "name": "Calçoene",
            "state_id": "4"
        },
            {
            "id": "205",
            "name": "Cutias",
            "state_id": "4"
        },
            {
            "id": "206",
            "name": "Ferreira Gomes",
            "state_id": "4"
        },
            {
            "id": "207",
            "name": "Itaubal",
            "state_id": "4"
        },
            {
            "id": "208",
            "name": "Laranjal do Jari",
            "state_id": "4"
        },
            {
            "id": "209",
            "name": "Macapá",
            "state_id": "4"
        },
            {
            "id": "210",
            "name": "Mazagão",
            "state_id": "4"
        },
            {
            "id": "211",
            "name": "Oiapoque",
            "state_id": "4"
        },
            {
            "id": "212",
            "name": "Pedra Branca do Amaparí",
            "state_id": "4"
        },
            {
            "id": "213",
            "name": "Porto Grande",
            "state_id": "4"
        },
            {
            "id": "214",
            "name": "Pracuúba",
            "state_id": "4"
        },
            {
            "id": "215",
            "name": "Santana",
            "state_id": "4"
        },
            {
            "id": "216",
            "name": "Serra do Navio",
            "state_id": "4"
        },
            {
            "id": "217",
            "name": "Tartarugalzinho",
            "state_id": "4"
        },
            {
            "id": "218",
            "name": "Vitória do Jari",
            "state_id": "4"
        },
            {
            "id": "219",
            "name": "Alvarães",
            "state_id": "3"
        },
            {
            "id": "220",
            "name": "Amaturá",
            "state_id": "3"
        },
            {
            "id": "221",
            "name": "Anamã",
            "state_id": "3"
        },
            {
            "id": "222",
            "name": "Anori",
            "state_id": "3"
        },
            {
            "id": "223",
            "name": "Apuí",
            "state_id": "3"
        },
            {
            "id": "224",
            "name": "Atalaia do Norte",
            "state_id": "3"
        },
            {
            "id": "225",
            "name": "Autazes",
            "state_id": "3"
        },
            {
            "id": "226",
            "name": "Barcelos",
            "state_id": "3"
        },
            {
            "id": "227",
            "name": "Barreirinha",
            "state_id": "3"
        },
            {
            "id": "228",
            "name": "Benjamin Constant",
            "state_id": "3"
        },
            {
            "id": "229",
            "name": "Beruri",
            "state_id": "3"
        },
            {
            "id": "230",
            "name": "Boa Vista do Ramos",
            "state_id": "3"
        },
            {
            "id": "231",
            "name": "Boca do Acre",
            "state_id": "3"
        },
            {
            "id": "232",
            "name": "Borba",
            "state_id": "3"
        },
            {
            "id": "233",
            "name": "Caapiranga",
            "state_id": "3"
        },
            {
            "id": "234",
            "name": "Canutama",
            "state_id": "3"
        },
            {
            "id": "235",
            "name": "Carauari",
            "state_id": "3"
        },
            {
            "id": "236",
            "name": "Careiro",
            "state_id": "3"
        },
            {
            "id": "237",
            "name": "Careiro da Várzea",
            "state_id": "3"
        },
            {
            "id": "238",
            "name": "Coari",
            "state_id": "3"
        },
            {
            "id": "239",
            "name": "Codajás",
            "state_id": "3"
        },
            {
            "id": "240",
            "name": "Eirunepé",
            "state_id": "3"
        },
            {
            "id": "241",
            "name": "Envira",
            "state_id": "3"
        },
            {
            "id": "242",
            "name": "Fonte Boa",
            "state_id": "3"
        },
            {
            "id": "243",
            "name": "Guajará",
            "state_id": "3"
        },
            {
            "id": "244",
            "name": "Humaitá",
            "state_id": "3"
        },
            {
            "id": "245",
            "name": "Ipixuna",
            "state_id": "3"
        },
            {
            "id": "246",
            "name": "Iranduba",
            "state_id": "3"
        },
            {
            "id": "247",
            "name": "Itacoatiara",
            "state_id": "3"
        },
            {
            "id": "248",
            "name": "Itamarati",
            "state_id": "3"
        },
            {
            "id": "249",
            "name": "Itapiranga",
            "state_id": "3"
        },
            {
            "id": "250",
            "name": "Japurá",
            "state_id": "3"
        },
            {
            "id": "251",
            "name": "Juruá",
            "state_id": "3"
        },
            {
            "id": "252",
            "name": "Jutaí",
            "state_id": "3"
        },
            {
            "id": "253",
            "name": "Lábrea",
            "state_id": "3"
        },
            {
            "id": "254",
            "name": "Manacapuru",
            "state_id": "3"
        },
            {
            "id": "255",
            "name": "Manaquiri",
            "state_id": "3"
        },
            {
            "id": "256",
            "name": "Manaus",
            "state_id": "3"
        },
            {
            "id": "257",
            "name": "Manicoré",
            "state_id": "3"
        },
            {
            "id": "258",
            "name": "Maraã",
            "state_id": "3"
        },
            {
            "id": "259",
            "name": "Maués",
            "state_id": "3"
        },
            {
            "id": "260",
            "name": "Nhamundá",
            "state_id": "3"
        },
            {
            "id": "261",
            "name": "Nova Olinda do Norte",
            "state_id": "3"
        },
            {
            "id": "262",
            "name": "Novo Airão",
            "state_id": "3"
        },
            {
            "id": "263",
            "name": "Novo Aripuanã",
            "state_id": "3"
        },
            {
            "id": "264",
            "name": "Parintins",
            "state_id": "3"
        },
            {
            "id": "265",
            "name": "Pauini",
            "state_id": "3"
        },
            {
            "id": "266",
            "name": "Presidente Figueiredo",
            "state_id": "3"
        },
            {
            "id": "267",
            "name": "Rio Preto da Eva",
            "state_id": "3"
        },
            {
            "id": "268",
            "name": "Santa Isabel do Rio Negro",
            "state_id": "3"
        },
            {
            "id": "269",
            "name": "Santo Antônio do Içá",
            "state_id": "3"
        },
            {
            "id": "270",
            "name": "São Gabriel da Cachoeira",
            "state_id": "3"
        },
            {
            "id": "271",
            "name": "São Paulo de Olivença",
            "state_id": "3"
        },
            {
            "id": "272",
            "name": "São Sebastião do Uatumã",
            "state_id": "3"
        },
            {
            "id": "273",
            "name": "Silves",
            "state_id": "3"
        },
            {
            "id": "274",
            "name": "Tabatinga",
            "state_id": "3"
        },
            {
            "id": "275",
            "name": "Tapauá",
            "state_id": "3"
        },
            {
            "id": "276",
            "name": "Tefé",
            "state_id": "3"
        },
            {
            "id": "277",
            "name": "Tonantins",
            "state_id": "3"
        },
            {
            "id": "278",
            "name": "Uarini",
            "state_id": "3"
        },
            {
            "id": "279",
            "name": "Urucará",
            "state_id": "3"
        },
            {
            "id": "280",
            "name": "Urucurituba",
            "state_id": "3"
        },
            {
            "id": "281",
            "name": "Abaíra",
            "state_id": "5"
        },
            {
            "id": "282",
            "name": "Abaré",
            "state_id": "5"
        },
            {
            "id": "283",
            "name": "Acajutiba",
            "state_id": "5"
        },
            {
            "id": "284",
            "name": "Adustina",
            "state_id": "5"
        },
            {
            "id": "285",
            "name": "Água Fria",
            "state_id": "5"
        },
            {
            "id": "286",
            "name": "Aiquara",
            "state_id": "5"
        },
            {
            "id": "287",
            "name": "Alagoinhas",
            "state_id": "5"
        },
            {
            "id": "288",
            "name": "Alcobaça",
            "state_id": "5"
        },
            {
            "id": "289",
            "name": "Almadina",
            "state_id": "5"
        },
            {
            "id": "290",
            "name": "Amargosa",
            "state_id": "5"
        },
            {
            "id": "291",
            "name": "Amélia Rodrigues",
            "state_id": "5"
        },
            {
            "id": "292",
            "name": "América Dourada",
            "state_id": "5"
        },
            {
            "id": "293",
            "name": "Anagé",
            "state_id": "5"
        },
            {
            "id": "294",
            "name": "Andaraí",
            "state_id": "5"
        },
            {
            "id": "295",
            "name": "Andorinha",
            "state_id": "5"
        },
            {
            "id": "296",
            "name": "Angical",
            "state_id": "5"
        },
            {
            "id": "297",
            "name": "Anguera",
            "state_id": "5"
        },
            {
            "id": "298",
            "name": "Antas",
            "state_id": "5"
        },
            {
            "id": "299",
            "name": "Antônio Cardoso",
            "state_id": "5"
        },
            {
            "id": "300",
            "name": "Antônio Gonçalves",
            "state_id": "5"
        },
            {
            "id": "301",
            "name": "Aporá",
            "state_id": "5"
        },
            {
            "id": "302",
            "name": "Apuarema",
            "state_id": "5"
        },
            {
            "id": "303",
            "name": "Araças",
            "state_id": "5"
        },
            {
            "id": "304",
            "name": "Aracatu",
            "state_id": "5"
        },
            {
            "id": "305",
            "name": "Araci",
            "state_id": "5"
        },
            {
            "id": "306",
            "name": "Aramari",
            "state_id": "5"
        },
            {
            "id": "307",
            "name": "Arataca",
            "state_id": "5"
        },
            {
            "id": "308",
            "name": "Aratuípe",
            "state_id": "5"
        },
            {
            "id": "309",
            "name": "Aurelino Leal",
            "state_id": "5"
        },
            {
            "id": "310",
            "name": "Baianópolis",
            "state_id": "5"
        },
            {
            "id": "311",
            "name": "Baixa Grande",
            "state_id": "5"
        },
            {
            "id": "312",
            "name": "Banzaê",
            "state_id": "5"
        },
            {
            "id": "313",
            "name": "Barra",
            "state_id": "5"
        },
            {
            "id": "314",
            "name": "Barra da Estiva",
            "state_id": "5"
        },
            {
            "id": "315",
            "name": "Barra do Choça",
            "state_id": "5"
        },
            {
            "id": "316",
            "name": "Barra do Mendes",
            "state_id": "5"
        },
            {
            "id": "317",
            "name": "Barra do Rocha",
            "state_id": "5"
        },
            {
            "id": "318",
            "name": "Barreiras",
            "state_id": "5"
        },
            {
            "id": "319",
            "name": "Barro Alto",
            "state_id": "5"
        },
            {
            "id": "320",
            "name": "Barro Preto (antigo Gov. Lomanto Jr.)",
            "state_id": "5"
        },
            {
            "id": "321",
            "name": "Barrocas",
            "state_id": "5"
        },
            {
            "id": "322",
            "name": "Belmonte",
            "state_id": "5"
        },
            {
            "id": "323",
            "name": "Belo Campo",
            "state_id": "5"
        },
            {
            "id": "324",
            "name": "Biritinga",
            "state_id": "5"
        },
            {
            "id": "325",
            "name": "Boa Nova",
            "state_id": "5"
        },
            {
            "id": "326",
            "name": "Boa Vista do Tupim",
            "state_id": "5"
        },
            {
            "id": "327",
            "name": "Bom Jesus da Lapa",
            "state_id": "5"
        },
            {
            "id": "328",
            "name": "Bom Jesus da Serra",
            "state_id": "5"
        },
            {
            "id": "329",
            "name": "Boninal",
            "state_id": "5"
        },
            {
            "id": "330",
            "name": "Bonito",
            "state_id": "5"
        },
            {
            "id": "331",
            "name": "Boquira",
            "state_id": "5"
        },
            {
            "id": "332",
            "name": "Botuporã",
            "state_id": "5"
        },
            {
            "id": "333",
            "name": "Brejões",
            "state_id": "5"
        },
            {
            "id": "334",
            "name": "Brejolândia",
            "state_id": "5"
        },
            {
            "id": "335",
            "name": "Brotas de Macaúbas",
            "state_id": "5"
        },
            {
            "id": "336",
            "name": "Brumado",
            "state_id": "5"
        },
            {
            "id": "337",
            "name": "Buerarema",
            "state_id": "5"
        },
            {
            "id": "338",
            "name": "Buritirama",
            "state_id": "5"
        },
            {
            "id": "339",
            "name": "Caatiba",
            "state_id": "5"
        },
            {
            "id": "340",
            "name": "Cabaceiras do Paraguaçu",
            "state_id": "5"
        },
            {
            "id": "341",
            "name": "Cachoeira",
            "state_id": "5"
        },
            {
            "id": "342",
            "name": "Caculé",
            "state_id": "5"
        },
            {
            "id": "343",
            "name": "Caém",
            "state_id": "5"
        },
            {
            "id": "344",
            "name": "Caetanos",
            "state_id": "5"
        },
            {
            "id": "345",
            "name": "Caetité",
            "state_id": "5"
        },
            {
            "id": "346",
            "name": "Cafarnaum",
            "state_id": "5"
        },
            {
            "id": "347",
            "name": "Cairu",
            "state_id": "5"
        },
            {
            "id": "348",
            "name": "Caldeirão Grande",
            "state_id": "5"
        },
            {
            "id": "349",
            "name": "Camacan",
            "state_id": "5"
        },
            {
            "id": "350",
            "name": "Camaçari",
            "state_id": "5"
        },
            {
            "id": "351",
            "name": "Camamu",
            "state_id": "5"
        },
            {
            "id": "352",
            "name": "Campo Alegre de Lourdes",
            "state_id": "5"
        },
            {
            "id": "353",
            "name": "Campo Formoso",
            "state_id": "5"
        },
            {
            "id": "354",
            "name": "Canápolis",
            "state_id": "5"
        },
            {
            "id": "355",
            "name": "Canarana",
            "state_id": "5"
        },
            {
            "id": "356",
            "name": "Canavieiras",
            "state_id": "5"
        },
            {
            "id": "357",
            "name": "Candeal",
            "state_id": "5"
        },
            {
            "id": "358",
            "name": "Candeias",
            "state_id": "5"
        },
            {
            "id": "359",
            "name": "Candiba",
            "state_id": "5"
        },
            {
            "id": "360",
            "name": "Cândido Sales",
            "state_id": "5"
        },
            {
            "id": "361",
            "name": "Cansanção",
            "state_id": "5"
        },
            {
            "id": "362",
            "name": "Canudos",
            "state_id": "5"
        },
            {
            "id": "363",
            "name": "Capela do Alto Alegre",
            "state_id": "5"
        },
            {
            "id": "364",
            "name": "Capim Grosso",
            "state_id": "5"
        },
            {
            "id": "365",
            "name": "Caraíbas",
            "state_id": "5"
        },
            {
            "id": "366",
            "name": "Caravelas",
            "state_id": "5"
        },
            {
            "id": "367",
            "name": "Cardeal da Silva",
            "state_id": "5"
        },
            {
            "id": "368",
            "name": "Carinhanha",
            "state_id": "5"
        },
            {
            "id": "369",
            "name": "Casa Nova",
            "state_id": "5"
        },
            {
            "id": "370",
            "name": "Castro Alves",
            "state_id": "5"
        },
            {
            "id": "371",
            "name": "Catolândia",
            "state_id": "5"
        },
            {
            "id": "372",
            "name": "Catu",
            "state_id": "5"
        },
            {
            "id": "373",
            "name": "Caturama",
            "state_id": "5"
        },
            {
            "id": "374",
            "name": "Central",
            "state_id": "5"
        },
            {
            "id": "375",
            "name": "Chorrochó",
            "state_id": "5"
        },
            {
            "id": "376",
            "name": "Cícero Dantas",
            "state_id": "5"
        },
            {
            "id": "377",
            "name": "Cipó",
            "state_id": "5"
        },
            {
            "id": "378",
            "name": "Coaraci",
            "state_id": "5"
        },
            {
            "id": "379",
            "name": "Cocos",
            "state_id": "5"
        },
            {
            "id": "380",
            "name": "Conceição da Feira",
            "state_id": "5"
        },
            {
            "id": "381",
            "name": "Conceição do Almeida",
            "state_id": "5"
        },
            {
            "id": "382",
            "name": "Conceição do Coité",
            "state_id": "5"
        },
            {
            "id": "383",
            "name": "Conceição do Jacuípe",
            "state_id": "5"
        },
            {
            "id": "384",
            "name": "Conde",
            "state_id": "5"
        },
            {
            "id": "385",
            "name": "Condeúba",
            "state_id": "5"
        },
            {
            "id": "386",
            "name": "Contendas do Sincorá",
            "state_id": "5"
        },
            {
            "id": "387",
            "name": "Coração de Maria",
            "state_id": "5"
        },
            {
            "id": "388",
            "name": "Cordeiros",
            "state_id": "5"
        },
            {
            "id": "389",
            "name": "Coribe",
            "state_id": "5"
        },
            {
            "id": "390",
            "name": "Coronel João Sá",
            "state_id": "5"
        },
            {
            "id": "391",
            "name": "Correntina",
            "state_id": "5"
        },
            {
            "id": "392",
            "name": "Cotegipe",
            "state_id": "5"
        },
            {
            "id": "393",
            "name": "Cravolândia",
            "state_id": "5"
        },
            {
            "id": "394",
            "name": "Crisópolis",
            "state_id": "5"
        },
            {
            "id": "395",
            "name": "Cristópolis",
            "state_id": "5"
        },
            {
            "id": "396",
            "name": "Cruz das Almas",
            "state_id": "5"
        },
            {
            "id": "397",
            "name": "Curaçá",
            "state_id": "5"
        },
            {
            "id": "398",
            "name": "Dário Meira",
            "state_id": "5"
        },
            {
            "id": "399",
            "name": "Dias d`Ávila",
            "state_id": "5"
        },
            {
            "id": "400",
            "name": "Dom Basílio",
            "state_id": "5"
        },
            {
            "id": "401",
            "name": "Dom Macedo Costa",
            "state_id": "5"
        },
            {
            "id": "402",
            "name": "Elísio Medrado",
            "state_id": "5"
        },
            {
            "id": "403",
            "name": "Encruzilhada",
            "state_id": "5"
        },
            {
            "id": "404",
            "name": "Entre Rios",
            "state_id": "5"
        },
            {
            "id": "405",
            "name": "Érico Cardoso",
            "state_id": "5"
        },
            {
            "id": "406",
            "name": "Esplanada",
            "state_id": "5"
        },
            {
            "id": "407",
            "name": "Euclides da Cunha",
            "state_id": "5"
        },
            {
            "id": "408",
            "name": "Eunápolis",
            "state_id": "5"
        },
            {
            "id": "409",
            "name": "Fátima",
            "state_id": "5"
        },
            {
            "id": "410",
            "name": "Feira da Mata",
            "state_id": "5"
        },
            {
            "id": "411",
            "name": "Feira de Santana",
            "state_id": "5"
        },
            {
            "id": "412",
            "name": "Filadélfia",
            "state_id": "5"
        },
            {
            "id": "413",
            "name": "Firmino Alves",
            "state_id": "5"
        },
            {
            "id": "414",
            "name": "Floresta Azul",
            "state_id": "5"
        },
            {
            "id": "415",
            "name": "Formosa do Rio Preto",
            "state_id": "5"
        },
            {
            "id": "416",
            "name": "Gandu",
            "state_id": "5"
        },
            {
            "id": "417",
            "name": "Gavião",
            "state_id": "5"
        },
            {
            "id": "418",
            "name": "Gentio do Ouro",
            "state_id": "5"
        },
            {
            "id": "419",
            "name": "Glória",
            "state_id": "5"
        },
            {
            "id": "420",
            "name": "Gongogi",
            "state_id": "5"
        },
            {
            "id": "421",
            "name": "Governador Mangabeira",
            "state_id": "5"
        },
            {
            "id": "422",
            "name": "Guajeru",
            "state_id": "5"
        },
            {
            "id": "423",
            "name": "Guanambi",
            "state_id": "5"
        },
            {
            "id": "424",
            "name": "Guaratinga",
            "state_id": "5"
        },
            {
            "id": "425",
            "name": "Heliópolis",
            "state_id": "5"
        },
            {
            "id": "426",
            "name": "Iaçu",
            "state_id": "5"
        },
            {
            "id": "427",
            "name": "Ibiassucê",
            "state_id": "5"
        },
            {
            "id": "428",
            "name": "Ibicaraí",
            "state_id": "5"
        },
            {
            "id": "429",
            "name": "Ibicoara",
            "state_id": "5"
        },
            {
            "id": "430",
            "name": "Ibicuí",
            "state_id": "5"
        },
            {
            "id": "431",
            "name": "Ibipeba",
            "state_id": "5"
        },
            {
            "id": "432",
            "name": "Ibipitanga",
            "state_id": "5"
        },
            {
            "id": "433",
            "name": "Ibiquera",
            "state_id": "5"
        },
            {
            "id": "434",
            "name": "Ibirapitanga",
            "state_id": "5"
        },
            {
            "id": "435",
            "name": "Ibirapuã",
            "state_id": "5"
        },
            {
            "id": "436",
            "name": "Ibirataia",
            "state_id": "5"
        },
            {
            "id": "437",
            "name": "Ibitiara",
            "state_id": "5"
        },
            {
            "id": "438",
            "name": "Ibititá",
            "state_id": "5"
        },
            {
            "id": "439",
            "name": "Ibotirama",
            "state_id": "5"
        },
            {
            "id": "440",
            "name": "Ichu",
            "state_id": "5"
        },
            {
            "id": "441",
            "name": "Igaporã",
            "state_id": "5"
        },
            {
            "id": "442",
            "name": "Igrapiúna",
            "state_id": "5"
        },
            {
            "id": "443",
            "name": "Iguaí",
            "state_id": "5"
        },
            {
            "id": "444",
            "name": "Ilhéus",
            "state_id": "5"
        },
            {
            "id": "445",
            "name": "Inhambupe",
            "state_id": "5"
        },
            {
            "id": "446",
            "name": "Ipecaetá",
            "state_id": "5"
        },
            {
            "id": "447",
            "name": "Ipiaú",
            "state_id": "5"
        },
            {
            "id": "448",
            "name": "Ipirá",
            "state_id": "5"
        },
            {
            "id": "449",
            "name": "Ipupiara",
            "state_id": "5"
        },
            {
            "id": "450",
            "name": "Irajuba",
            "state_id": "5"
        },
            {
            "id": "451",
            "name": "Iramaia",
            "state_id": "5"
        },
            {
            "id": "452",
            "name": "Iraquara",
            "state_id": "5"
        },
            {
            "id": "453",
            "name": "Irará",
            "state_id": "5"
        },
            {
            "id": "454",
            "name": "Irecê",
            "state_id": "5"
        },
            {
            "id": "455",
            "name": "Itabela",
            "state_id": "5"
        },
            {
            "id": "456",
            "name": "Itaberaba",
            "state_id": "5"
        },
            {
            "id": "457",
            "name": "Itabuna",
            "state_id": "5"
        },
            {
            "id": "458",
            "name": "Itacaré",
            "state_id": "5"
        },
            {
            "id": "459",
            "name": "Itaeté",
            "state_id": "5"
        },
            {
            "id": "460",
            "name": "Itagi",
            "state_id": "5"
        },
            {
            "id": "461",
            "name": "Itagibá",
            "state_id": "5"
        },
            {
            "id": "462",
            "name": "Itagimirim",
            "state_id": "5"
        },
            {
            "id": "463",
            "name": "Itaguaçu da Bahia",
            "state_id": "5"
        },
            {
            "id": "464",
            "name": "Itaju do Colônia",
            "state_id": "5"
        },
            {
            "id": "465",
            "name": "Itajuípe",
            "state_id": "5"
        },
            {
            "id": "466",
            "name": "Itamaraju",
            "state_id": "5"
        },
            {
            "id": "467",
            "name": "Itamari",
            "state_id": "5"
        },
            {
            "id": "468",
            "name": "Itambé",
            "state_id": "5"
        },
            {
            "id": "469",
            "name": "Itanagra",
            "state_id": "5"
        },
            {
            "id": "470",
            "name": "Itanhém",
            "state_id": "5"
        },
            {
            "id": "471",
            "name": "Itaparica",
            "state_id": "5"
        },
            {
            "id": "472",
            "name": "Itapé",
            "state_id": "5"
        },
            {
            "id": "473",
            "name": "Itapebi",
            "state_id": "5"
        },
            {
            "id": "474",
            "name": "Itapetinga",
            "state_id": "5"
        },
            {
            "id": "475",
            "name": "Itapicuru",
            "state_id": "5"
        },
            {
            "id": "476",
            "name": "Itapitanga",
            "state_id": "5"
        },
            {
            "id": "477",
            "name": "Itaquara",
            "state_id": "5"
        },
            {
            "id": "478",
            "name": "Itarantim",
            "state_id": "5"
        },
            {
            "id": "479",
            "name": "Itatim",
            "state_id": "5"
        },
            {
            "id": "480",
            "name": "Itiruçu",
            "state_id": "5"
        },
            {
            "id": "481",
            "name": "Itiúba",
            "state_id": "5"
        },
            {
            "id": "482",
            "name": "Itororó",
            "state_id": "5"
        },
            {
            "id": "483",
            "name": "Ituaçu",
            "state_id": "5"
        },
            {
            "id": "484",
            "name": "Ituberá",
            "state_id": "5"
        },
            {
            "id": "485",
            "name": "Iuiú",
            "state_id": "5"
        },
            {
            "id": "486",
            "name": "Jaborandi",
            "state_id": "5"
        },
            {
            "id": "487",
            "name": "Jacaraci",
            "state_id": "5"
        },
            {
            "id": "488",
            "name": "Jacobina",
            "state_id": "5"
        },
            {
            "id": "489",
            "name": "Jaguaquara",
            "state_id": "5"
        },
            {
            "id": "490",
            "name": "Jaguarari",
            "state_id": "5"
        },
            {
            "id": "491",
            "name": "Jaguaripe",
            "state_id": "5"
        },
            {
            "id": "492",
            "name": "Jandaíra",
            "state_id": "5"
        },
            {
            "id": "493",
            "name": "Jequié",
            "state_id": "5"
        },
            {
            "id": "494",
            "name": "Jeremoabo",
            "state_id": "5"
        },
            {
            "id": "495",
            "name": "Jiquiriçá",
            "state_id": "5"
        },
            {
            "id": "496",
            "name": "Jitaúna",
            "state_id": "5"
        },
            {
            "id": "497",
            "name": "João Dourado",
            "state_id": "5"
        },
            {
            "id": "498",
            "name": "Juazeiro",
            "state_id": "5"
        },
            {
            "id": "499",
            "name": "Jucuruçu",
            "state_id": "5"
        },
            {
            "id": "500",
            "name": "Jussara",
            "state_id": "5"
        },
            {
            "id": "501",
            "name": "Jussari",
            "state_id": "5"
        },
            {
            "id": "502",
            "name": "Jussiape",
            "state_id": "5"
        },
            {
            "id": "503",
            "name": "Lafaiete Coutinho",
            "state_id": "5"
        },
            {
            "id": "504",
            "name": "Lagoa Real",
            "state_id": "5"
        },
            {
            "id": "505",
            "name": "Laje",
            "state_id": "5"
        },
            {
            "id": "506",
            "name": "Lajedão",
            "state_id": "5"
        },
            {
            "id": "507",
            "name": "Lajedinho",
            "state_id": "5"
        },
            {
            "id": "508",
            "name": "Lajedo do Tabocal",
            "state_id": "5"
        },
            {
            "id": "509",
            "name": "Lamarão",
            "state_id": "5"
        },
            {
            "id": "510",
            "name": "Lapão",
            "state_id": "5"
        },
            {
            "id": "511",
            "name": "Lauro de Freitas",
            "state_id": "5"
        },
            {
            "id": "512",
            "name": "Lençóis",
            "state_id": "5"
        },
            {
            "id": "513",
            "name": "Licínio de Almeida",
            "state_id": "5"
        },
            {
            "id": "514",
            "name": "Livramento de Nossa Senhora",
            "state_id": "5"
        },
            {
            "id": "515",
            "name": "Luís Eduardo Magalhães",
            "state_id": "5"
        },
            {
            "id": "516",
            "name": "Macajuba",
            "state_id": "5"
        },
            {
            "id": "517",
            "name": "Macarani",
            "state_id": "5"
        },
            {
            "id": "518",
            "name": "Macaúbas",
            "state_id": "5"
        },
            {
            "id": "519",
            "name": "Macururé",
            "state_id": "5"
        },
            {
            "id": "520",
            "name": "Madre de Deus",
            "state_id": "5"
        },
            {
            "id": "521",
            "name": "Maetinga",
            "state_id": "5"
        },
            {
            "id": "522",
            "name": "Maiquinique",
            "state_id": "5"
        },
            {
            "id": "523",
            "name": "Mairi",
            "state_id": "5"
        },
            {
            "id": "524",
            "name": "Malhada",
            "state_id": "5"
        },
            {
            "id": "525",
            "name": "Malhada de Pedras",
            "state_id": "5"
        },
            {
            "id": "526",
            "name": "Manoel Vitorino",
            "state_id": "5"
        },
            {
            "id": "527",
            "name": "Mansidão",
            "state_id": "5"
        },
            {
            "id": "528",
            "name": "Maracás",
            "state_id": "5"
        },
            {
            "id": "529",
            "name": "Maragogipe",
            "state_id": "5"
        },
            {
            "id": "530",
            "name": "Maraú",
            "state_id": "5"
        },
            {
            "id": "531",
            "name": "Marcionílio Souza",
            "state_id": "5"
        },
            {
            "id": "532",
            "name": "Mascote",
            "state_id": "5"
        },
            {
            "id": "533",
            "name": "Mata de São João",
            "state_id": "5"
        },
            {
            "id": "534",
            "name": "Matina",
            "state_id": "5"
        },
            {
            "id": "535",
            "name": "Medeiros Neto",
            "state_id": "5"
        },
            {
            "id": "536",
            "name": "Miguel Calmon",
            "state_id": "5"
        },
            {
            "id": "537",
            "name": "Milagres",
            "state_id": "5"
        },
            {
            "id": "538",
            "name": "Mirangaba",
            "state_id": "5"
        },
            {
            "id": "539",
            "name": "Mirante",
            "state_id": "5"
        },
            {
            "id": "540",
            "name": "Monte Santo",
            "state_id": "5"
        },
            {
            "id": "541",
            "name": "Morpará",
            "state_id": "5"
        },
            {
            "id": "542",
            "name": "Morro do Chapéu",
            "state_id": "5"
        },
            {
            "id": "543",
            "name": "Mortugaba",
            "state_id": "5"
        },
            {
            "id": "544",
            "name": "Mucugê",
            "state_id": "5"
        },
            {
            "id": "545",
            "name": "Mucuri",
            "state_id": "5"
        },
            {
            "id": "546",
            "name": "Mulungu do Morro",
            "state_id": "5"
        },
            {
            "id": "547",
            "name": "Mundo Novo",
            "state_id": "5"
        },
            {
            "id": "548",
            "name": "Muniz Ferreira",
            "state_id": "5"
        },
            {
            "id": "549",
            "name": "Muquém de São Francisco",
            "state_id": "5"
        },
            {
            "id": "550",
            "name": "Muritiba",
            "state_id": "5"
        },
            {
            "id": "551",
            "name": "Mutuípe",
            "state_id": "5"
        },
            {
            "id": "552",
            "name": "Nazaré",
            "state_id": "5"
        },
            {
            "id": "553",
            "name": "Nilo Peçanha",
            "state_id": "5"
        },
            {
            "id": "554",
            "name": "Nordestina",
            "state_id": "5"
        },
            {
            "id": "555",
            "name": "Nova Canaã",
            "state_id": "5"
        },
            {
            "id": "556",
            "name": "Nova Fátima",
            "state_id": "5"
        },
            {
            "id": "557",
            "name": "Nova Ibiá",
            "state_id": "5"
        },
            {
            "id": "558",
            "name": "Nova Itarana",
            "state_id": "5"
        },
            {
            "id": "559",
            "name": "Nova Redenção",
            "state_id": "5"
        },
            {
            "id": "560",
            "name": "Nova Soure",
            "state_id": "5"
        },
            {
            "id": "561",
            "name": "Nova Viçosa",
            "state_id": "5"
        },
            {
            "id": "562",
            "name": "Novo Horizonte",
            "state_id": "5"
        },
            {
            "id": "563",
            "name": "Novo Triunfo",
            "state_id": "5"
        },
            {
            "id": "564",
            "name": "Olindina",
            "state_id": "5"
        },
            {
            "id": "565",
            "name": "Oliveira dos Brejinhos",
            "state_id": "5"
        },
            {
            "id": "566",
            "name": "Ouriçangas",
            "state_id": "5"
        },
            {
            "id": "567",
            "name": "Ourolândia",
            "state_id": "5"
        },
            {
            "id": "568",
            "name": "Palmas de Monte Alto",
            "state_id": "5"
        },
            {
            "id": "569",
            "name": "Palmeiras",
            "state_id": "5"
        },
            {
            "id": "570",
            "name": "Paramirim",
            "state_id": "5"
        },
            {
            "id": "571",
            "name": "Paratinga",
            "state_id": "5"
        },
            {
            "id": "572",
            "name": "Paripiranga",
            "state_id": "5"
        },
            {
            "id": "573",
            "name": "Pau Brasil",
            "state_id": "5"
        },
            {
            "id": "574",
            "name": "Paulo Afonso",
            "state_id": "5"
        },
            {
            "id": "575",
            "name": "Pé de Serra",
            "state_id": "5"
        },
            {
            "id": "576",
            "name": "Pedrão",
            "state_id": "5"
        },
            {
            "id": "577",
            "name": "Pedro Alexandre",
            "state_id": "5"
        },
            {
            "id": "578",
            "name": "Piatã",
            "state_id": "5"
        },
            {
            "id": "579",
            "name": "Pilão Arcado",
            "state_id": "5"
        },
            {
            "id": "580",
            "name": "Pindaí",
            "state_id": "5"
        },
            {
            "id": "581",
            "name": "Pindobaçu",
            "state_id": "5"
        },
            {
            "id": "582",
            "name": "Pintadas",
            "state_id": "5"
        },
            {
            "id": "583",
            "name": "Piraí do Norte",
            "state_id": "5"
        },
            {
            "id": "584",
            "name": "Piripá",
            "state_id": "5"
        },
            {
            "id": "585",
            "name": "Piritiba",
            "state_id": "5"
        },
            {
            "id": "586",
            "name": "Planaltino",
            "state_id": "5"
        },
            {
            "id": "587",
            "name": "Planalto",
            "state_id": "5"
        },
            {
            "id": "588",
            "name": "Poções",
            "state_id": "5"
        },
            {
            "id": "589",
            "name": "Pojuca",
            "state_id": "5"
        },
            {
            "id": "590",
            "name": "Ponto Novo",
            "state_id": "5"
        },
            {
            "id": "591",
            "name": "Porto Seguro",
            "state_id": "5"
        },
            {
            "id": "592",
            "name": "Potiraguá",
            "state_id": "5"
        },
            {
            "id": "593",
            "name": "Prado",
            "state_id": "5"
        },
            {
            "id": "594",
            "name": "Presidente Dutra",
            "state_id": "5"
        },
            {
            "id": "595",
            "name": "Presidente Jânio Quadros",
            "state_id": "5"
        },
            {
            "id": "596",
            "name": "Presidente Tancredo Neves",
            "state_id": "5"
        },
            {
            "id": "597",
            "name": "Queimadas",
            "state_id": "5"
        },
            {
            "id": "598",
            "name": "Quijingue",
            "state_id": "5"
        },
            {
            "id": "599",
            "name": "Quixabeira",
            "state_id": "5"
        },
            {
            "id": "600",
            "name": "Rafael Jambeiro",
            "state_id": "5"
        },
            {
            "id": "601",
            "name": "Remanso",
            "state_id": "5"
        },
            {
            "id": "602",
            "name": "Retirolândia",
            "state_id": "5"
        },
            {
            "id": "603",
            "name": "Riachão das Neves",
            "state_id": "5"
        },
            {
            "id": "604",
            "name": "Riachão do Jacuípe",
            "state_id": "5"
        },
            {
            "id": "605",
            "name": "Riacho de Santana",
            "state_id": "5"
        },
            {
            "id": "606",
            "name": "Ribeira do Amparo",
            "state_id": "5"
        },
            {
            "id": "607",
            "name": "Ribeira do Pombal",
            "state_id": "5"
        },
            {
            "id": "608",
            "name": "Ribeirão do Largo",
            "state_id": "5"
        },
            {
            "id": "609",
            "name": "Rio de Contas",
            "state_id": "5"
        },
            {
            "id": "610",
            "name": "Rio do Antônio",
            "state_id": "5"
        },
            {
            "id": "611",
            "name": "Rio do Pires",
            "state_id": "5"
        },
            {
            "id": "612",
            "name": "Rio Real",
            "state_id": "5"
        },
            {
            "id": "613",
            "name": "Rodelas",
            "state_id": "5"
        },
            {
            "id": "614",
            "name": "Ruy Barbosa",
            "state_id": "5"
        },
            {
            "id": "615",
            "name": "Salinas da Margarida",
            "state_id": "5"
        },
            {
            "id": "616",
            "name": "Salvador",
            "state_id": "5"
        },
            {
            "id": "617",
            "name": "Santa Bárbara",
            "state_id": "5"
        },
            {
            "id": "618",
            "name": "Santa Brígida",
            "state_id": "5"
        },
            {
            "id": "619",
            "name": "Santa Cruz Cabrália",
            "state_id": "5"
        },
            {
            "id": "620",
            "name": "Santa Cruz da Vitória",
            "state_id": "5"
        },
            {
            "id": "621",
            "name": "Santa Inês",
            "state_id": "5"
        },
            {
            "id": "622",
            "name": "Santa Luzia",
            "state_id": "5"
        },
            {
            "id": "623",
            "name": "Santa Maria da Vitória",
            "state_id": "5"
        },
            {
            "id": "624",
            "name": "Santa Rita de Cássia",
            "state_id": "5"
        },
            {
            "id": "625",
            "name": "Santa Teresinha",
            "state_id": "5"
        },
            {
            "id": "626",
            "name": "Santaluz",
            "state_id": "5"
        },
            {
            "id": "627",
            "name": "Santana",
            "state_id": "5"
        },
            {
            "id": "628",
            "name": "Santanópolis",
            "state_id": "5"
        },
            {
            "id": "629",
            "name": "Santo Amaro",
            "state_id": "5"
        },
            {
            "id": "630",
            "name": "Santo Antônio de Jesus",
            "state_id": "5"
        },
            {
            "id": "631",
            "name": "Santo Estêvão",
            "state_id": "5"
        },
            {
            "id": "632",
            "name": "São Desidério",
            "state_id": "5"
        },
            {
            "id": "633",
            "name": "São Domingos",
            "state_id": "5"
        },
            {
            "id": "634",
            "name": "São Felipe",
            "state_id": "5"
        },
            {
            "id": "635",
            "name": "São Félix",
            "state_id": "5"
        },
            {
            "id": "636",
            "name": "São Félix do Coribe",
            "state_id": "5"
        },
            {
            "id": "637",
            "name": "São Francisco do Conde",
            "state_id": "5"
        },
            {
            "id": "638",
            "name": "São Gabriel",
            "state_id": "5"
        },
            {
            "id": "639",
            "name": "São Gonçalo dos Campos",
            "state_id": "5"
        },
            {
            "id": "640",
            "name": "São José da Vitória",
            "state_id": "5"
        },
            {
            "id": "641",
            "name": "São José do Jacuípe",
            "state_id": "5"
        },
            {
            "id": "642",
            "name": "São Miguel das Matas",
            "state_id": "5"
        },
            {
            "id": "643",
            "name": "São Sebastião do Passé",
            "state_id": "5"
        },
            {
            "id": "644",
            "name": "Sapeaçu",
            "state_id": "5"
        },
            {
            "id": "645",
            "name": "Sátiro Dias",
            "state_id": "5"
        },
            {
            "id": "646",
            "name": "Saubara",
            "state_id": "5"
        },
            {
            "id": "647",
            "name": "Saúde",
            "state_id": "5"
        },
            {
            "id": "648",
            "name": "Seabra",
            "state_id": "5"
        },
            {
            "id": "649",
            "name": "Sebastião Laranjeiras",
            "state_id": "5"
        },
            {
            "id": "650",
            "name": "Senhor do Bonfim",
            "state_id": "5"
        },
            {
            "id": "651",
            "name": "Sento Sé",
            "state_id": "5"
        },
            {
            "id": "652",
            "name": "Serra do Ramalho",
            "state_id": "5"
        },
            {
            "id": "653",
            "name": "Serra Dourada",
            "state_id": "5"
        },
            {
            "id": "654",
            "name": "Serra Preta",
            "state_id": "5"
        },
            {
            "id": "655",
            "name": "Serrinha",
            "state_id": "5"
        },
            {
            "id": "656",
            "name": "Serrolândia",
            "state_id": "5"
        },
            {
            "id": "657",
            "name": "Simões Filho",
            "state_id": "5"
        },
            {
            "id": "658",
            "name": "Sítio do Mato",
            "state_id": "5"
        },
            {
            "id": "659",
            "name": "Sítio do Quinto",
            "state_id": "5"
        },
            {
            "id": "660",
            "name": "Sobradinho",
            "state_id": "5"
        },
            {
            "id": "661",
            "name": "Souto Soares",
            "state_id": "5"
        },
            {
            "id": "662",
            "name": "Tabocas do Brejo Velho",
            "state_id": "5"
        },
            {
            "id": "663",
            "name": "Tanhaçu",
            "state_id": "5"
        },
            {
            "id": "664",
            "name": "Tanque Novo",
            "state_id": "5"
        },
            {
            "id": "665",
            "name": "Tanquinho",
            "state_id": "5"
        },
            {
            "id": "666",
            "name": "Taperoá",
            "state_id": "5"
        },
            {
            "id": "667",
            "name": "Tapiramutá",
            "state_id": "5"
        },
            {
            "id": "668",
            "name": "Teixeira de Freitas",
            "state_id": "5"
        },
            {
            "id": "669",
            "name": "Teodoro Sampaio",
            "state_id": "5"
        },
            {
            "id": "670",
            "name": "Teofilândia",
            "state_id": "5"
        },
            {
            "id": "671",
            "name": "Teolândia",
            "state_id": "5"
        },
            {
            "id": "672",
            "name": "Terra Nova",
            "state_id": "5"
        },
            {
            "id": "673",
            "name": "Tremedal",
            "state_id": "5"
        },
            {
            "id": "674",
            "name": "Tucano",
            "state_id": "5"
        },
            {
            "id": "675",
            "name": "Uauá",
            "state_id": "5"
        },
            {
            "id": "676",
            "name": "Ubaíra",
            "state_id": "5"
        },
            {
            "id": "677",
            "name": "Ubaitaba",
            "state_id": "5"
        },
            {
            "id": "678",
            "name": "Ubatã",
            "state_id": "5"
        },
            {
            "id": "679",
            "name": "Uibaí",
            "state_id": "5"
        },
            {
            "id": "680",
            "name": "Umburanas",
            "state_id": "5"
        },
            {
            "id": "681",
            "name": "Una",
            "state_id": "5"
        },
            {
            "id": "682",
            "name": "Urandi",
            "state_id": "5"
        },
            {
            "id": "683",
            "name": "Uruçuca",
            "state_id": "5"
        },
            {
            "id": "684",
            "name": "Utinga",
            "state_id": "5"
        },
            {
            "id": "685",
            "name": "Valença",
            "state_id": "5"
        },
            {
            "id": "686",
            "name": "Valente",
            "state_id": "5"
        },
            {
            "id": "687",
            "name": "Várzea da Roça",
            "state_id": "5"
        },
            {
            "id": "688",
            "name": "Várzea do Poço",
            "state_id": "5"
        },
            {
            "id": "689",
            "name": "Várzea Nova",
            "state_id": "5"
        },
            {
            "id": "690",
            "name": "Varzedo",
            "state_id": "5"
        },
            {
            "id": "691",
            "name": "Vera Cruz",
            "state_id": "5"
        },
            {
            "id": "692",
            "name": "Vereda",
            "state_id": "5"
        },
            {
            "id": "693",
            "name": "Vitória da Conquista",
            "state_id": "5"
        },
            {
            "id": "694",
            "name": "Wagner",
            "state_id": "5"
        },
            {
            "id": "695",
            "name": "Wanderley",
            "state_id": "5"
        },
            {
            "id": "696",
            "name": "Wenceslau Guimarães",
            "state_id": "5"
        },
            {
            "id": "697",
            "name": "Xique-Xique",
            "state_id": "5"
        },
            {
            "id": "698",
            "name": "Abaiara",
            "state_id": "6"
        },
            {
            "id": "699",
            "name": "Acarape",
            "state_id": "6"
        },
            {
            "id": "700",
            "name": "Acaraú",
            "state_id": "6"
        },
            {
            "id": "701",
            "name": "Acopiara",
            "state_id": "6"
        },
            {
            "id": "702",
            "name": "Aiuaba",
            "state_id": "6"
        },
            {
            "id": "703",
            "name": "Alcântaras",
            "state_id": "6"
        },
            {
            "id": "704",
            "name": "Altaneira",
            "state_id": "6"
        },
            {
            "id": "705",
            "name": "Alto Santo",
            "state_id": "6"
        },
            {
            "id": "706",
            "name": "Amontada",
            "state_id": "6"
        },
            {
            "id": "707",
            "name": "Antonina do Norte",
            "state_id": "6"
        },
            {
            "id": "708",
            "name": "Apuiarés",
            "state_id": "6"
        },
            {
            "id": "709",
            "name": "Aquiraz",
            "state_id": "6"
        },
            {
            "id": "710",
            "name": "Aracati",
            "state_id": "6"
        },
            {
            "id": "711",
            "name": "Aracoiaba",
            "state_id": "6"
        },
            {
            "id": "712",
            "name": "Ararendá",
            "state_id": "6"
        },
            {
            "id": "713",
            "name": "Araripe",
            "state_id": "6"
        },
            {
            "id": "714",
            "name": "Aratuba",
            "state_id": "6"
        },
            {
            "id": "715",
            "name": "Arneiroz",
            "state_id": "6"
        },
            {
            "id": "716",
            "name": "Assaré",
            "state_id": "6"
        },
            {
            "id": "717",
            "name": "Aurora",
            "state_id": "6"
        },
            {
            "id": "718",
            "name": "Baixio",
            "state_id": "6"
        },
            {
            "id": "719",
            "name": "Banabuiú",
            "state_id": "6"
        },
            {
            "id": "720",
            "name": "Barbalha",
            "state_id": "6"
        },
            {
            "id": "721",
            "name": "Barreira",
            "state_id": "6"
        },
            {
            "id": "722",
            "name": "Barro",
            "state_id": "6"
        },
            {
            "id": "723",
            "name": "Barroquinha",
            "state_id": "6"
        },
            {
            "id": "724",
            "name": "Baturité",
            "state_id": "6"
        },
            {
            "id": "725",
            "name": "Beberibe",
            "state_id": "6"
        },
            {
            "id": "726",
            "name": "Bela Cruz",
            "state_id": "6"
        },
            {
            "id": "727",
            "name": "Boa Viagem",
            "state_id": "6"
        },
            {
            "id": "728",
            "name": "Brejo Santo",
            "state_id": "6"
        },
            {
            "id": "729",
            "name": "Camocim",
            "state_id": "6"
        },
            {
            "id": "730",
            "name": "Campos Sales",
            "state_id": "6"
        },
            {
            "id": "731",
            "name": "Canindé",
            "state_id": "6"
        },
            {
            "id": "732",
            "name": "Capistrano",
            "state_id": "6"
        },
            {
            "id": "733",
            "name": "Caridade",
            "state_id": "6"
        },
            {
            "id": "734",
            "name": "Cariré",
            "state_id": "6"
        },
            {
            "id": "735",
            "name": "Caririaçu",
            "state_id": "6"
        },
            {
            "id": "736",
            "name": "Cariús",
            "state_id": "6"
        },
            {
            "id": "737",
            "name": "Carnaubal",
            "state_id": "6"
        },
            {
            "id": "738",
            "name": "Cascavel",
            "state_id": "6"
        },
            {
            "id": "739",
            "name": "Catarina",
            "state_id": "6"
        },
            {
            "id": "740",
            "name": "Catunda",
            "state_id": "6"
        },
            {
            "id": "741",
            "name": "Caucaia",
            "state_id": "6"
        },
            {
            "id": "742",
            "name": "Cedro",
            "state_id": "6"
        },
            {
            "id": "743",
            "name": "Chaval",
            "state_id": "6"
        },
            {
            "id": "744",
            "name": "Choró",
            "state_id": "6"
        },
            {
            "id": "745",
            "name": "Chorozinho",
            "state_id": "6"
        },
            {
            "id": "746",
            "name": "Coreaú",
            "state_id": "6"
        },
            {
            "id": "747",
            "name": "Crateús",
            "state_id": "6"
        },
            {
            "id": "748",
            "name": "Crato",
            "state_id": "6"
        },
            {
            "id": "749",
            "name": "Croatá",
            "state_id": "6"
        },
            {
            "id": "750",
            "name": "Cruz",
            "state_id": "6"
        },
            {
            "id": "751",
            "name": "Deputado Irapuan Pinheiro",
            "state_id": "6"
        },
            {
            "id": "752",
            "name": "Ererê",
            "state_id": "6"
        },
            {
            "id": "753",
            "name": "Eusébio",
            "state_id": "6"
        },
            {
            "id": "754",
            "name": "Farias Brito",
            "state_id": "6"
        },
            {
            "id": "755",
            "name": "Forquilha",
            "state_id": "6"
        },
            {
            "id": "756",
            "name": "Fortaleza",
            "state_id": "6"
        },
            {
            "id": "757",
            "name": "Fortim",
            "state_id": "6"
        },
            {
            "id": "758",
            "name": "Frecheirinha",
            "state_id": "6"
        },
            {
            "id": "759",
            "name": "General Sampaio",
            "state_id": "6"
        },
            {
            "id": "760",
            "name": "Graça",
            "state_id": "6"
        },
            {
            "id": "761",
            "name": "Granja",
            "state_id": "6"
        },
            {
            "id": "762",
            "name": "Granjeiro",
            "state_id": "6"
        },
            {
            "id": "763",
            "name": "Groaíras",
            "state_id": "6"
        },
            {
            "id": "764",
            "name": "Guaiúba",
            "state_id": "6"
        },
            {
            "id": "765",
            "name": "Guaraciaba do Norte",
            "state_id": "6"
        },
            {
            "id": "766",
            "name": "Guaramiranga",
            "state_id": "6"
        },
            {
            "id": "767",
            "name": "Hidrolândia",
            "state_id": "6"
        },
            {
            "id": "768",
            "name": "Horizonte",
            "state_id": "6"
        },
            {
            "id": "769",
            "name": "Ibaretama",
            "state_id": "6"
        },
            {
            "id": "770",
            "name": "Ibiapina",
            "state_id": "6"
        },
            {
            "id": "771",
            "name": "Ibicuitinga",
            "state_id": "6"
        },
            {
            "id": "772",
            "name": "Icapuí",
            "state_id": "6"
        },
            {
            "id": "773",
            "name": "Icó",
            "state_id": "6"
        },
            {
            "id": "774",
            "name": "Iguatu",
            "state_id": "6"
        },
            {
            "id": "775",
            "name": "Independência",
            "state_id": "6"
        },
            {
            "id": "776",
            "name": "Ipaporanga",
            "state_id": "6"
        },
            {
            "id": "777",
            "name": "Ipaumirim",
            "state_id": "6"
        },
            {
            "id": "778",
            "name": "Ipu",
            "state_id": "6"
        },
            {
            "id": "779",
            "name": "Ipueiras",
            "state_id": "6"
        },
            {
            "id": "780",
            "name": "Iracema",
            "state_id": "6"
        },
            {
            "id": "781",
            "name": "Irauçuba",
            "state_id": "6"
        },
            {
            "id": "782",
            "name": "Itaiçaba",
            "state_id": "6"
        },
            {
            "id": "783",
            "name": "Itaitinga",
            "state_id": "6"
        },
            {
            "id": "784",
            "name": "Itapagé",
            "state_id": "6"
        },
            {
            "id": "785",
            "name": "Itapipoca",
            "state_id": "6"
        },
            {
            "id": "786",
            "name": "Itapiúna",
            "state_id": "6"
        },
            {
            "id": "787",
            "name": "Itarema",
            "state_id": "6"
        },
            {
            "id": "788",
            "name": "Itatira",
            "state_id": "6"
        },
            {
            "id": "789",
            "name": "Jaguaretama",
            "state_id": "6"
        },
            {
            "id": "790",
            "name": "Jaguaribara",
            "state_id": "6"
        },
            {
            "id": "791",
            "name": "Jaguaribe",
            "state_id": "6"
        },
            {
            "id": "792",
            "name": "Jaguaruana",
            "state_id": "6"
        },
            {
            "id": "793",
            "name": "Jardim",
            "state_id": "6"
        },
            {
            "id": "794",
            "name": "Jati",
            "state_id": "6"
        },
            {
            "id": "795",
            "name": "Jijoca de Jericoacoara",
            "state_id": "6"
        },
            {
            "id": "796",
            "name": "Juazeiro do Norte",
            "state_id": "6"
        },
            {
            "id": "797",
            "name": "Jucás",
            "state_id": "6"
        },
            {
            "id": "798",
            "name": "Lavras da Mangabeira",
            "state_id": "6"
        },
            {
            "id": "799",
            "name": "Limoeiro do Norte",
            "state_id": "6"
        },
            {
            "id": "800",
            "name": "Madalena",
            "state_id": "6"
        },
            {
            "id": "801",
            "name": "Maracanaú",
            "state_id": "6"
        },
            {
            "id": "802",
            "name": "Maranguape",
            "state_id": "6"
        },
            {
            "id": "803",
            "name": "Marco",
            "state_id": "6"
        },
            {
            "id": "804",
            "name": "Martinópole",
            "state_id": "6"
        },
            {
            "id": "805",
            "name": "Massapê",
            "state_id": "6"
        },
            {
            "id": "806",
            "name": "Mauriti",
            "state_id": "6"
        },
            {
            "id": "807",
            "name": "Meruoca",
            "state_id": "6"
        },
            {
            "id": "808",
            "name": "Milagres",
            "state_id": "6"
        },
            {
            "id": "809",
            "name": "Milhã",
            "state_id": "6"
        },
            {
            "id": "810",
            "name": "Miraíma",
            "state_id": "6"
        },
            {
            "id": "811",
            "name": "Missão Velha",
            "state_id": "6"
        },
            {
            "id": "812",
            "name": "Mombaça",
            "state_id": "6"
        },
            {
            "id": "813",
            "name": "Monsenhor Tabosa",
            "state_id": "6"
        },
            {
            "id": "814",
            "name": "Morada Nova",
            "state_id": "6"
        },
            {
            "id": "815",
            "name": "Moraújo",
            "state_id": "6"
        },
            {
            "id": "816",
            "name": "Morrinhos",
            "state_id": "6"
        },
            {
            "id": "817",
            "name": "Mucambo",
            "state_id": "6"
        },
            {
            "id": "818",
            "name": "Mulungu",
            "state_id": "6"
        },
            {
            "id": "819",
            "name": "Nova Olinda",
            "state_id": "6"
        },
            {
            "id": "820",
            "name": "Nova Russas",
            "state_id": "6"
        },
            {
            "id": "821",
            "name": "Novo Oriente",
            "state_id": "6"
        },
            {
            "id": "822",
            "name": "Ocara",
            "state_id": "6"
        },
            {
            "id": "823",
            "name": "Orós",
            "state_id": "6"
        },
            {
            "id": "824",
            "name": "Pacajus",
            "state_id": "6"
        },
            {
            "id": "825",
            "name": "Pacatuba",
            "state_id": "6"
        },
            {
            "id": "826",
            "name": "Pacoti",
            "state_id": "6"
        },
            {
            "id": "827",
            "name": "Pacujá",
            "state_id": "6"
        },
            {
            "id": "828",
            "name": "Palhano",
            "state_id": "6"
        },
            {
            "id": "829",
            "name": "Palmácia",
            "state_id": "6"
        },
            {
            "id": "830",
            "name": "Paracuru",
            "state_id": "6"
        },
            {
            "id": "831",
            "name": "Paraipaba",
            "state_id": "6"
        },
            {
            "id": "832",
            "name": "Parambu",
            "state_id": "6"
        },
            {
            "id": "833",
            "name": "Paramoti",
            "state_id": "6"
        },
            {
            "id": "834",
            "name": "Pedra Branca",
            "state_id": "6"
        },
            {
            "id": "835",
            "name": "Penaforte",
            "state_id": "6"
        },
            {
            "id": "836",
            "name": "Pentecoste",
            "state_id": "6"
        },
            {
            "id": "837",
            "name": "Pereiro",
            "state_id": "6"
        },
            {
            "id": "838",
            "name": "Pindoretama",
            "state_id": "6"
        },
            {
            "id": "839",
            "name": "Piquet Carneiro",
            "state_id": "6"
        },
            {
            "id": "840",
            "name": "Pires Ferreira",
            "state_id": "6"
        },
            {
            "id": "841",
            "name": "Poranga",
            "state_id": "6"
        },
            {
            "id": "842",
            "name": "Porteiras",
            "state_id": "6"
        },
            {
            "id": "843",
            "name": "Potengi",
            "state_id": "6"
        },
            {
            "id": "844",
            "name": "Potiretama",
            "state_id": "6"
        },
            {
            "id": "845",
            "name": "Quiterianópolis",
            "state_id": "6"
        },
            {
            "id": "846",
            "name": "Quixadá",
            "state_id": "6"
        },
            {
            "id": "847",
            "name": "Quixelô",
            "state_id": "6"
        },
            {
            "id": "848",
            "name": "Quixeramobim",
            "state_id": "6"
        },
            {
            "id": "849",
            "name": "Quixeré",
            "state_id": "6"
        },
            {
            "id": "850",
            "name": "Redenção",
            "state_id": "6"
        },
            {
            "id": "851",
            "name": "Reriutaba",
            "state_id": "6"
        },
            {
            "id": "852",
            "name": "Russas",
            "state_id": "6"
        },
            {
            "id": "853",
            "name": "Saboeiro",
            "state_id": "6"
        },
            {
            "id": "854",
            "name": "Salitre",
            "state_id": "6"
        },
            {
            "id": "855",
            "name": "Santa Quitéria",
            "state_id": "6"
        },
            {
            "id": "856",
            "name": "Santana do Acaraú",
            "state_id": "6"
        },
            {
            "id": "857",
            "name": "Santana do Cariri",
            "state_id": "6"
        },
            {
            "id": "858",
            "name": "São Benedito",
            "state_id": "6"
        },
            {
            "id": "859",
            "name": "São Gonçalo do Amarante",
            "state_id": "6"
        },
            {
            "id": "860",
            "name": "São João do Jaguaribe",
            "state_id": "6"
        },
            {
            "id": "861",
            "name": "São Luís do Curu",
            "state_id": "6"
        },
            {
            "id": "862",
            "name": "Senador Pompeu",
            "state_id": "6"
        },
            {
            "id": "863",
            "name": "Senador Sá",
            "state_id": "6"
        },
            {
            "id": "864",
            "name": "Sobral",
            "state_id": "6"
        },
            {
            "id": "865",
            "name": "Solonópole",
            "state_id": "6"
        },
            {
            "id": "866",
            "name": "Tabuleiro do Norte",
            "state_id": "6"
        },
            {
            "id": "867",
            "name": "Tamboril",
            "state_id": "6"
        },
            {
            "id": "868",
            "name": "Tarrafas",
            "state_id": "6"
        },
            {
            "id": "869",
            "name": "Tauá",
            "state_id": "6"
        },
            {
            "id": "870",
            "name": "Tejuçuoca",
            "state_id": "6"
        },
            {
            "id": "871",
            "name": "Tianguá",
            "state_id": "6"
        },
            {
            "id": "872",
            "name": "Trairi",
            "state_id": "6"
        },
            {
            "id": "873",
            "name": "Tururu",
            "state_id": "6"
        },
            {
            "id": "874",
            "name": "Ubajara",
            "state_id": "6"
        },
            {
            "id": "875",
            "name": "Umari",
            "state_id": "6"
        },
            {
            "id": "876",
            "name": "Umirim",
            "state_id": "6"
        },
            {
            "id": "877",
            "name": "Uruburetama",
            "state_id": "6"
        },
            {
            "id": "878",
            "name": "Uruoca",
            "state_id": "6"
        },
            {
            "id": "879",
            "name": "Varjota",
            "state_id": "6"
        },
            {
            "id": "880",
            "name": "Várzea Alegre",
            "state_id": "6"
        },
            {
            "id": "881",
            "name": "Viçosa do Ceará",
            "state_id": "6"
        },
            {
            "id": "882",
            "name": "Brasília",
            "state_id": "7"
        },
            {
            "id": "883",
            "name": "Abadia de Goiás",
            "state_id": "9"
        },
            {
            "id": "884",
            "name": "Abadiânia",
            "state_id": "9"
        },
            {
            "id": "885",
            "name": "Acreúna",
            "state_id": "9"
        },
            {
            "id": "886",
            "name": "Adelândia",
            "state_id": "9"
        },
            {
            "id": "887",
            "name": "Água Fria de Goiás",
            "state_id": "9"
        },
            {
            "id": "888",
            "name": "Água Limpa",
            "state_id": "9"
        },
            {
            "id": "889",
            "name": "Águas Lindas de Goiás",
            "state_id": "9"
        },
            {
            "id": "890",
            "name": "Alexânia",
            "state_id": "9"
        },
            {
            "id": "891",
            "name": "Aloândia",
            "state_id": "9"
        },
            {
            "id": "892",
            "name": "Alto Horizonte",
            "state_id": "9"
        },
            {
            "id": "893",
            "name": "Alto Paraíso de Goiás",
            "state_id": "9"
        },
            {
            "id": "894",
            "name": "Alvorada do Norte",
            "state_id": "9"
        },
            {
            "id": "895",
            "name": "Amaralina",
            "state_id": "9"
        },
            {
            "id": "896",
            "name": "Americano do Brasil",
            "state_id": "9"
        },
            {
            "id": "897",
            "name": "Amorinópolis",
            "state_id": "9"
        },
            {
            "id": "898",
            "name": "Anápolis",
            "state_id": "9"
        },
            {
            "id": "899",
            "name": "Anhanguera",
            "state_id": "9"
        },
            {
            "id": "900",
            "name": "Anicuns",
            "state_id": "9"
        },
            {
            "id": "901",
            "name": "Aparecida de Goiânia",
            "state_id": "9"
        },
            {
            "id": "902",
            "name": "Aparecida do Rio Doce",
            "state_id": "9"
        },
            {
            "id": "903",
            "name": "Aporé",
            "state_id": "9"
        },
            {
            "id": "904",
            "name": "Araçu",
            "state_id": "9"
        },
            {
            "id": "905",
            "name": "Aragarças",
            "state_id": "9"
        },
            {
            "id": "906",
            "name": "Aragoiânia",
            "state_id": "9"
        },
            {
            "id": "907",
            "name": "Araguapaz",
            "state_id": "9"
        },
            {
            "id": "908",
            "name": "Arenópolis",
            "state_id": "9"
        },
            {
            "id": "909",
            "name": "Aruanã",
            "state_id": "9"
        },
            {
            "id": "910",
            "name": "Aurilândia",
            "state_id": "9"
        },
            {
            "id": "911",
            "name": "Avelinópolis",
            "state_id": "9"
        },
            {
            "id": "912",
            "name": "Baliza",
            "state_id": "9"
        },
            {
            "id": "913",
            "name": "Barro Alto",
            "state_id": "9"
        },
            {
            "id": "914",
            "name": "Bela Vista de Goiás",
            "state_id": "9"
        },
            {
            "id": "915",
            "name": "Bom Jardim de Goiás",
            "state_id": "9"
        },
            {
            "id": "916",
            "name": "Bom Jesus de Goiás",
            "state_id": "9"
        },
            {
            "id": "917",
            "name": "Bonfinópolis",
            "state_id": "9"
        },
            {
            "id": "918",
            "name": "Bonópolis",
            "state_id": "9"
        },
            {
            "id": "919",
            "name": "Brazabrantes",
            "state_id": "9"
        },
            {
            "id": "920",
            "name": "Britânia",
            "state_id": "9"
        },
            {
            "id": "921",
            "name": "Buriti Alegre",
            "state_id": "9"
        },
            {
            "id": "922",
            "name": "Buriti de Goiás",
            "state_id": "9"
        },
            {
            "id": "923",
            "name": "Buritinópolis",
            "state_id": "9"
        },
            {
            "id": "924",
            "name": "Cabeceiras",
            "state_id": "9"
        },
            {
            "id": "925",
            "name": "Cachoeira Alta",
            "state_id": "9"
        },
            {
            "id": "926",
            "name": "Cachoeira de Goiás",
            "state_id": "9"
        },
            {
            "id": "927",
            "name": "Cachoeira Dourada",
            "state_id": "9"
        },
            {
            "id": "928",
            "name": "Caçu",
            "state_id": "9"
        },
            {
            "id": "929",
            "name": "Caiapônia",
            "state_id": "9"
        },
            {
            "id": "930",
            "name": "Caldas Novas",
            "state_id": "9"
        },
            {
            "id": "931",
            "name": "Caldazinha",
            "state_id": "9"
        },
            {
            "id": "932",
            "name": "Campestre de Goiás",
            "state_id": "9"
        },
            {
            "id": "933",
            "name": "Campinaçu",
            "state_id": "9"
        },
            {
            "id": "934",
            "name": "Campinorte",
            "state_id": "9"
        },
            {
            "id": "935",
            "name": "Campo Alegre de Goiás",
            "state_id": "9"
        },
            {
            "id": "936",
            "name": "Campo Limpo de Goiás",
            "state_id": "9"
        },
            {
            "id": "937",
            "name": "Campos Belos",
            "state_id": "9"
        },
            {
            "id": "938",
            "name": "Campos Verdes",
            "state_id": "9"
        },
            {
            "id": "939",
            "name": "Carmo do Rio Verde",
            "state_id": "9"
        },
            {
            "id": "940",
            "name": "Castelândia",
            "state_id": "9"
        },
            {
            "id": "941",
            "name": "Catalão",
            "state_id": "9"
        },
            {
            "id": "942",
            "name": "Caturaí",
            "state_id": "9"
        },
            {
            "id": "943",
            "name": "Cavalcante",
            "state_id": "9"
        },
            {
            "id": "944",
            "name": "Ceres",
            "state_id": "9"
        },
            {
            "id": "945",
            "name": "Cezarina",
            "state_id": "9"
        },
            {
            "id": "946",
            "name": "Chapadão do Céu",
            "state_id": "9"
        },
            {
            "id": "947",
            "name": "Cidade Ocidental",
            "state_id": "9"
        },
            {
            "id": "948",
            "name": "Cocalzinho de Goiás",
            "state_id": "9"
        },
            {
            "id": "949",
            "name": "Colinas do Sul",
            "state_id": "9"
        },
            {
            "id": "950",
            "name": "Córrego do Ouro",
            "state_id": "9"
        },
            {
            "id": "951",
            "name": "Corumbá de Goiás",
            "state_id": "9"
        },
            {
            "id": "952",
            "name": "Corumbaíba",
            "state_id": "9"
        },
            {
            "id": "953",
            "name": "Cristalina",
            "state_id": "9"
        },
            {
            "id": "954",
            "name": "Cristianópolis",
            "state_id": "9"
        },
            {
            "id": "955",
            "name": "Crixás",
            "state_id": "9"
        },
            {
            "id": "956",
            "name": "Cromínia",
            "state_id": "9"
        },
            {
            "id": "957",
            "name": "Cumari",
            "state_id": "9"
        },
            {
            "id": "958",
            "name": "Damianópolis",
            "state_id": "9"
        },
            {
            "id": "959",
            "name": "Damolândia",
            "state_id": "9"
        },
            {
            "id": "960",
            "name": "Davinópolis",
            "state_id": "9"
        },
            {
            "id": "961",
            "name": "Diorama",
            "state_id": "9"
        },
            {
            "id": "962",
            "name": "Divinópolis de Goiás",
            "state_id": "9"
        },
            {
            "id": "963",
            "name": "Doverlândia",
            "state_id": "9"
        },
            {
            "id": "964",
            "name": "Edealina",
            "state_id": "9"
        },
            {
            "id": "965",
            "name": "Edéia",
            "state_id": "9"
        },
            {
            "id": "966",
            "name": "Estrela do Norte",
            "state_id": "9"
        },
            {
            "id": "967",
            "name": "Faina",
            "state_id": "9"
        },
            {
            "id": "968",
            "name": "Fazenda Nova",
            "state_id": "9"
        },
            {
            "id": "969",
            "name": "Firminópolis",
            "state_id": "9"
        },
            {
            "id": "970",
            "name": "Flores de Goiás",
            "state_id": "9"
        },
            {
            "id": "971",
            "name": "Formosa",
            "state_id": "9"
        },
            {
            "id": "972",
            "name": "Formoso",
            "state_id": "9"
        },
            {
            "id": "973",
            "name": "Gameleira de Goiás",
            "state_id": "9"
        },
            {
            "id": "974",
            "name": "Goianápolis",
            "state_id": "9"
        },
            {
            "id": "975",
            "name": "Goiandira",
            "state_id": "9"
        },
            {
            "id": "976",
            "name": "Goianésia",
            "state_id": "9"
        },
            {
            "id": "977",
            "name": "Goiânia",
            "state_id": "9"
        },
            {
            "id": "978",
            "name": "Goianira",
            "state_id": "9"
        },
            {
            "id": "979",
            "name": "Goiás",
            "state_id": "9"
        },
            {
            "id": "980",
            "name": "Goiatuba",
            "state_id": "9"
        },
            {
            "id": "981",
            "name": "Gouvelândia",
            "state_id": "9"
        },
            {
            "id": "982",
            "name": "Guapó",
            "state_id": "9"
        },
            {
            "id": "983",
            "name": "Guaraíta",
            "state_id": "9"
        },
            {
            "id": "984",
            "name": "Guarani de Goiás",
            "state_id": "9"
        },
            {
            "id": "985",
            "name": "Guarinos",
            "state_id": "9"
        },
            {
            "id": "986",
            "name": "Heitoraí",
            "state_id": "9"
        },
            {
            "id": "987",
            "name": "Hidrolândia",
            "state_id": "9"
        },
            {
            "id": "988",
            "name": "Hidrolina",
            "state_id": "9"
        },
            {
            "id": "989",
            "name": "Iaciara",
            "state_id": "9"
        },
            {
            "id": "990",
            "name": "Inaciolândia",
            "state_id": "9"
        },
            {
            "id": "991",
            "name": "Indiara",
            "state_id": "9"
        },
            {
            "id": "992",
            "name": "Inhumas",
            "state_id": "9"
        },
            {
            "id": "993",
            "name": "Ipameri",
            "state_id": "9"
        },
            {
            "id": "994",
            "name": "Ipiranga de Goiás",
            "state_id": "9"
        },
            {
            "id": "995",
            "name": "Iporá",
            "state_id": "9"
        },
            {
            "id": "996",
            "name": "Israelândia",
            "state_id": "9"
        },
            {
            "id": "997",
            "name": "Itaberaí",
            "state_id": "9"
        },
            {
            "id": "998",
            "name": "Itaguari",
            "state_id": "9"
        },
            {
            "id": "999",
            "name": "Itaguaru",
            "state_id": "9"
        },
            {
            "id": "1000",
            "name": "Itajá",
            "state_id": "9"
        },
            {
            "id": "1001",
            "name": "Itapaci",
            "state_id": "9"
        },
            {
            "id": "1002",
            "name": "Itapirapuã",
            "state_id": "9"
        },
            {
            "id": "1003",
            "name": "Itapuranga",
            "state_id": "9"
        },
            {
            "id": "1004",
            "name": "Itarumã",
            "state_id": "9"
        },
            {
            "id": "1005",
            "name": "Itauçu",
            "state_id": "9"
        },
            {
            "id": "1006",
            "name": "Itumbiara",
            "state_id": "9"
        },
            {
            "id": "1007",
            "name": "Ivolândia",
            "state_id": "9"
        },
            {
            "id": "1008",
            "name": "Jandaia",
            "state_id": "9"
        },
            {
            "id": "1009",
            "name": "Jaraguá",
            "state_id": "9"
        },
            {
            "id": "1010",
            "name": "Jataí",
            "state_id": "9"
        },
            {
            "id": "1011",
            "name": "Jaupaci",
            "state_id": "9"
        },
            {
            "id": "1012",
            "name": "Jesúpolis",
            "state_id": "9"
        },
            {
            "id": "1013",
            "name": "Joviânia",
            "state_id": "9"
        },
            {
            "id": "1014",
            "name": "Jussara",
            "state_id": "9"
        },
            {
            "id": "1015",
            "name": "Lagoa Santa",
            "state_id": "9"
        },
            {
            "id": "1016",
            "name": "Leopoldo de Bulhões",
            "state_id": "9"
        },
            {
            "id": "1017",
            "name": "Luziânia",
            "state_id": "9"
        },
            {
            "id": "1018",
            "name": "Mairipotaba",
            "state_id": "9"
        },
            {
            "id": "1019",
            "name": "Mambaí",
            "state_id": "9"
        },
            {
            "id": "1020",
            "name": "Mara Rosa",
            "state_id": "9"
        },
            {
            "id": "1021",
            "name": "Marzagão",
            "state_id": "9"
        },
            {
            "id": "1022",
            "name": "Matrinchã",
            "state_id": "9"
        },
            {
            "id": "1023",
            "name": "Maurilândia",
            "state_id": "9"
        },
            {
            "id": "1024",
            "name": "Mimoso de Goiás",
            "state_id": "9"
        },
            {
            "id": "1025",
            "name": "Minaçu",
            "state_id": "9"
        },
            {
            "id": "1026",
            "name": "Mineiros",
            "state_id": "9"
        },
            {
            "id": "1027",
            "name": "Moiporá",
            "state_id": "9"
        },
            {
            "id": "1028",
            "name": "Monte Alegre de Goiás",
            "state_id": "9"
        },
            {
            "id": "1029",
            "name": "Montes Claros de Goiás",
            "state_id": "9"
        },
            {
            "id": "1030",
            "name": "Montividiu",
            "state_id": "9"
        },
            {
            "id": "1031",
            "name": "Montividiu do Norte",
            "state_id": "9"
        },
            {
            "id": "1032",
            "name": "Morrinhos",
            "state_id": "9"
        },
            {
            "id": "1033",
            "name": "Morro Agudo de Goiás",
            "state_id": "9"
        },
            {
            "id": "1034",
            "name": "Mossâmedes",
            "state_id": "9"
        },
            {
            "id": "1035",
            "name": "Mozarlândia",
            "state_id": "9"
        },
            {
            "id": "1036",
            "name": "Mundo Novo",
            "state_id": "9"
        },
            {
            "id": "1037",
            "name": "Mutunópolis",
            "state_id": "9"
        },
            {
            "id": "1038",
            "name": "Nazário",
            "state_id": "9"
        },
            {
            "id": "1039",
            "name": "Nerópolis",
            "state_id": "9"
        },
            {
            "id": "1040",
            "name": "Niquelândia",
            "state_id": "9"
        },
            {
            "id": "1041",
            "name": "Nova América",
            "state_id": "9"
        },
            {
            "id": "1042",
            "name": "Nova Aurora",
            "state_id": "9"
        },
            {
            "id": "1043",
            "name": "Nova Crixás",
            "state_id": "9"
        },
            {
            "id": "1044",
            "name": "Nova Glória",
            "state_id": "9"
        },
            {
            "id": "1045",
            "name": "Nova Iguaçu de Goiás",
            "state_id": "9"
        },
            {
            "id": "1046",
            "name": "Nova Roma",
            "state_id": "9"
        },
            {
            "id": "1047",
            "name": "Nova Veneza",
            "state_id": "9"
        },
            {
            "id": "1048",
            "name": "Novo Brasil",
            "state_id": "9"
        },
            {
            "id": "1049",
            "name": "Novo Gama",
            "state_id": "9"
        },
            {
            "id": "1050",
            "name": "Novo Planalto",
            "state_id": "9"
        },
            {
            "id": "1051",
            "name": "Orizona",
            "state_id": "9"
        },
            {
            "id": "1052",
            "name": "Ouro Verde de Goiás",
            "state_id": "9"
        },
            {
            "id": "1053",
            "name": "Ouvidor",
            "state_id": "9"
        },
            {
            "id": "1054",
            "name": "Padre Bernardo",
            "state_id": "9"
        },
            {
            "id": "1055",
            "name": "Palestina de Goiás",
            "state_id": "9"
        },
            {
            "id": "1056",
            "name": "Palmeiras de Goiás",
            "state_id": "9"
        },
            {
            "id": "1057",
            "name": "Palmelo",
            "state_id": "9"
        },
            {
            "id": "1058",
            "name": "Palminópolis",
            "state_id": "9"
        },
            {
            "id": "1059",
            "name": "Panamá",
            "state_id": "9"
        },
            {
            "id": "1060",
            "name": "Paranaiguara",
            "state_id": "9"
        },
            {
            "id": "1061",
            "name": "Paraúna",
            "state_id": "9"
        },
            {
            "id": "1062",
            "name": "Perolândia",
            "state_id": "9"
        },
            {
            "id": "1063",
            "name": "Petrolina de Goiás",
            "state_id": "9"
        },
            {
            "id": "1064",
            "name": "Pilar de Goiás",
            "state_id": "9"
        },
            {
            "id": "1065",
            "name": "Piracanjuba",
            "state_id": "9"
        },
            {
            "id": "1066",
            "name": "Piranhas",
            "state_id": "9"
        },
            {
            "id": "1067",
            "name": "Pirenópolis",
            "state_id": "9"
        },
            {
            "id": "1068",
            "name": "Pires do Rio",
            "state_id": "9"
        },
            {
            "id": "1069",
            "name": "Planaltina",
            "state_id": "9"
        },
            {
            "id": "1070",
            "name": "Pontalina",
            "state_id": "9"
        },
            {
            "id": "1071",
            "name": "Porangatu",
            "state_id": "9"
        },
            {
            "id": "1072",
            "name": "Porteirão",
            "state_id": "9"
        },
            {
            "id": "1073",
            "name": "Portelândia",
            "state_id": "9"
        },
            {
            "id": "1074",
            "name": "Posse",
            "state_id": "9"
        },
            {
            "id": "1075",
            "name": "Professor Jamil",
            "state_id": "9"
        },
            {
            "id": "1076",
            "name": "Quirinópolis",
            "state_id": "9"
        },
            {
            "id": "1077",
            "name": "Rialma",
            "state_id": "9"
        },
            {
            "id": "1078",
            "name": "Rianápolis",
            "state_id": "9"
        },
            {
            "id": "1079",
            "name": "Rio Quente",
            "state_id": "9"
        },
            {
            "id": "1080",
            "name": "Rio Verde",
            "state_id": "9"
        },
            {
            "id": "1081",
            "name": "Rubiataba",
            "state_id": "9"
        },
            {
            "id": "1082",
            "name": "Sanclerlândia",
            "state_id": "9"
        },
            {
            "id": "1083",
            "name": "Santa Bárbara de Goiás",
            "state_id": "9"
        },
            {
            "id": "1084",
            "name": "Santa Cruz de Goiás",
            "state_id": "9"
        },
            {
            "id": "1085",
            "name": "Santa Fé de Goiás",
            "state_id": "9"
        },
            {
            "id": "1086",
            "name": "Santa Helena de Goiás",
            "state_id": "9"
        },
            {
            "id": "1087",
            "name": "Santa Isabel",
            "state_id": "9"
        },
            {
            "id": "1088",
            "name": "Santa Rita do Araguaia",
            "state_id": "9"
        },
            {
            "id": "1089",
            "name": "Santa Rita do Novo Destino",
            "state_id": "9"
        },
            {
            "id": "1090",
            "name": "Santa Rosa de Goiás",
            "state_id": "9"
        },
            {
            "id": "1091",
            "name": "Santa Tereza de Goiás",
            "state_id": "9"
        },
            {
            "id": "1092",
            "name": "Santa Terezinha de Goiás",
            "state_id": "9"
        },
            {
            "id": "1093",
            "name": "Santo Antônio da Barra",
            "state_id": "9"
        },
            {
            "id": "1094",
            "name": "Santo Antônio de Goiás",
            "state_id": "9"
        },
            {
            "id": "1095",
            "name": "Santo Antônio do Descoberto",
            "state_id": "9"
        },
            {
            "id": "1096",
            "name": "São Domingos",
            "state_id": "9"
        },
            {
            "id": "1097",
            "name": "São Francisco de Goiás",
            "state_id": "9"
        },
            {
            "id": "1098",
            "name": "São João d`Aliança",
            "state_id": "9"
        },
            {
            "id": "1099",
            "name": "São João da Paraúna",
            "state_id": "9"
        },
            {
            "id": "1100",
            "name": "São Luís de Montes Belos",
            "state_id": "9"
        },
            {
            "id": "1101",
            "name": "São Luíz do Norte",
            "state_id": "9"
        },
            {
            "id": "1102",
            "name": "São Miguel do Araguaia",
            "state_id": "9"
        },
            {
            "id": "1103",
            "name": "São Miguel do Passa Quatro",
            "state_id": "9"
        },
            {
            "id": "1104",
            "name": "São Patrício",
            "state_id": "9"
        },
            {
            "id": "1105",
            "name": "São Simão",
            "state_id": "9"
        },
            {
            "id": "1106",
            "name": "Senador Canedo",
            "state_id": "9"
        },
            {
            "id": "1107",
            "name": "Serranópolis",
            "state_id": "9"
        },
            {
            "id": "1108",
            "name": "Silvânia",
            "state_id": "9"
        },
            {
            "id": "1109",
            "name": "Simolândia",
            "state_id": "9"
        },
            {
            "id": "1110",
            "name": "Sítio d`Abadia",
            "state_id": "9"
        },
            {
            "id": "1111",
            "name": "Taquaral de Goiás",
            "state_id": "9"
        },
            {
            "id": "1112",
            "name": "Teresina de Goiás",
            "state_id": "9"
        },
            {
            "id": "1113",
            "name": "Terezópolis de Goiás",
            "state_id": "9"
        },
            {
            "id": "1114",
            "name": "Três Ranchos",
            "state_id": "9"
        },
            {
            "id": "1115",
            "name": "Trindade",
            "state_id": "9"
        },
            {
            "id": "1116",
            "name": "Trombas",
            "state_id": "9"
        },
            {
            "id": "1117",
            "name": "Turvânia",
            "state_id": "9"
        },
            {
            "id": "1118",
            "name": "Turvelândia",
            "state_id": "9"
        },
            {
            "id": "1119",
            "name": "Uirapuru",
            "state_id": "9"
        },
            {
            "id": "1120",
            "name": "Uruaçu",
            "state_id": "9"
        },
            {
            "id": "1121",
            "name": "Uruana",
            "state_id": "9"
        },
            {
            "id": "1122",
            "name": "Urutaí",
            "state_id": "9"
        },
            {
            "id": "1123",
            "name": "Valparaíso de Goiás",
            "state_id": "9"
        },
            {
            "id": "1124",
            "name": "Varjão",
            "state_id": "9"
        },
            {
            "id": "1125",
            "name": "Vianópolis",
            "state_id": "9"
        },
            {
            "id": "1126",
            "name": "Vicentinópolis",
            "state_id": "9"
        },
            {
            "id": "1127",
            "name": "Vila Boa",
            "state_id": "9"
        },
            {
            "id": "1128",
            "name": "Vila Propício",
            "state_id": "9"
        },
            {
            "id": "1129",
            "name": "Açailândia",
            "state_id": "10"
        },
            {
            "id": "1130",
            "name": "Afonso Cunha",
            "state_id": "10"
        },
            {
            "id": "1131",
            "name": "Água Doce do Maranhão",
            "state_id": "10"
        },
            {
            "id": "1132",
            "name": "Alcântara",
            "state_id": "10"
        },
            {
            "id": "1133",
            "name": "Aldeias Altas",
            "state_id": "10"
        },
            {
            "id": "1134",
            "name": "Altamira do Maranhão",
            "state_id": "10"
        },
            {
            "id": "1135",
            "name": "Alto Alegre do Maranhão",
            "state_id": "10"
        },
            {
            "id": "1136",
            "name": "Alto Alegre do Pindaré",
            "state_id": "10"
        },
            {
            "id": "1137",
            "name": "Alto Parnaíba",
            "state_id": "10"
        },
            {
            "id": "1138",
            "name": "Amapá do Maranhão",
            "state_id": "10"
        },
            {
            "id": "1139",
            "name": "Amarante do Maranhão",
            "state_id": "10"
        },
            {
            "id": "1140",
            "name": "Anajatuba",
            "state_id": "10"
        },
            {
            "id": "1141",
            "name": "Anapurus",
            "state_id": "10"
        },
            {
            "id": "1142",
            "name": "Apicum-Açu",
            "state_id": "10"
        },
            {
            "id": "1143",
            "name": "Araguanã",
            "state_id": "10"
        },
            {
            "id": "1144",
            "name": "Araioses",
            "state_id": "10"
        },
            {
            "id": "1145",
            "name": "Arame",
            "state_id": "10"
        },
            {
            "id": "1146",
            "name": "Arari",
            "state_id": "10"
        },
            {
            "id": "1147",
            "name": "Axixá",
            "state_id": "10"
        },
            {
            "id": "1148",
            "name": "Bacabal",
            "state_id": "10"
        },
            {
            "id": "1149",
            "name": "Bacabeira",
            "state_id": "10"
        },
            {
            "id": "1150",
            "name": "Bacuri",
            "state_id": "10"
        },
            {
            "id": "1151",
            "name": "Bacurituba",
            "state_id": "10"
        },
            {
            "id": "1152",
            "name": "Balsas",
            "state_id": "10"
        },
            {
            "id": "1153",
            "name": "Barão de Grajaú",
            "state_id": "10"
        },
            {
            "id": "1154",
            "name": "Barra do Corda",
            "state_id": "10"
        },
            {
            "id": "1155",
            "name": "Barreirinhas",
            "state_id": "10"
        },
            {
            "id": "1156",
            "name": "Bela Vista do Maranhão",
            "state_id": "10"
        },
            {
            "id": "1157",
            "name": "Belágua",
            "state_id": "10"
        },
            {
            "id": "1158",
            "name": "Benedito Leite",
            "state_id": "10"
        },
            {
            "id": "1159",
            "name": "Bequimão",
            "state_id": "10"
        },
            {
            "id": "1160",
            "name": "Bernardo do Mearim",
            "state_id": "10"
        },
            {
            "id": "1161",
            "name": "Boa Vista do Gurupi",
            "state_id": "10"
        },
            {
            "id": "1162",
            "name": "Bom Jardim",
            "state_id": "10"
        },
            {
            "id": "1163",
            "name": "Bom Jesus das Selvas",
            "state_id": "10"
        },
            {
            "id": "1164",
            "name": "Bom Lugar",
            "state_id": "10"
        },
            {
            "id": "1165",
            "name": "Brejo",
            "state_id": "10"
        },
            {
            "id": "1166",
            "name": "Brejo de Areia",
            "state_id": "10"
        },
            {
            "id": "1167",
            "name": "Buriti",
            "state_id": "10"
        },
            {
            "id": "1168",
            "name": "Buriti Bravo",
            "state_id": "10"
        },
            {
            "id": "1169",
            "name": "Buriticupu",
            "state_id": "10"
        },
            {
            "id": "1170",
            "name": "Buritirana",
            "state_id": "10"
        },
            {
            "id": "1171",
            "name": "Cachoeira Grande",
            "state_id": "10"
        },
            {
            "id": "1172",
            "name": "Cajapió",
            "state_id": "10"
        },
            {
            "id": "1173",
            "name": "Cajari",
            "state_id": "10"
        },
            {
            "id": "1174",
            "name": "Campestre do Maranhão",
            "state_id": "10"
        },
            {
            "id": "1175",
            "name": "Cândido Mendes",
            "state_id": "10"
        },
            {
            "id": "1176",
            "name": "Cantanhede",
            "state_id": "10"
        },
            {
            "id": "1177",
            "name": "Capinzal do Norte",
            "state_id": "10"
        },
            {
            "id": "1178",
            "name": "Carolina",
            "state_id": "10"
        },
            {
            "id": "1179",
            "name": "Carutapera",
            "state_id": "10"
        },
            {
            "id": "1180",
            "name": "Caxias",
            "state_id": "10"
        },
            {
            "id": "1181",
            "name": "Cedral",
            "state_id": "10"
        },
            {
            "id": "1182",
            "name": "Central do Maranhão",
            "state_id": "10"
        },
            {
            "id": "1183",
            "name": "Centro do Guilherme",
            "state_id": "10"
        },
            {
            "id": "1184",
            "name": "Centro Novo do Maranhão",
            "state_id": "10"
        },
            {
            "id": "1185",
            "name": "Chapadinha",
            "state_id": "10"
        },
            {
            "id": "1186",
            "name": "Cidelândia",
            "state_id": "10"
        },
            {
            "id": "1187",
            "name": "Codó",
            "state_id": "10"
        },
            {
            "id": "1188",
            "name": "Coelho Neto",
            "state_id": "10"
        },
            {
            "id": "1189",
            "name": "Colinas",
            "state_id": "10"
        },
            {
            "id": "1190",
            "name": "Conceição do Lago-Açu",
            "state_id": "10"
        },
            {
            "id": "1191",
            "name": "Coroatá",
            "state_id": "10"
        },
            {
            "id": "1192",
            "name": "Cururupu",
            "state_id": "10"
        },
            {
            "id": "1193",
            "name": "Davinópolis",
            "state_id": "10"
        },
            {
            "id": "1194",
            "name": "Dom Pedro",
            "state_id": "10"
        },
            {
            "id": "1195",
            "name": "Duque Bacelar",
            "state_id": "10"
        },
            {
            "id": "1196",
            "name": "Esperantinópolis",
            "state_id": "10"
        },
            {
            "id": "1197",
            "name": "Estreito",
            "state_id": "10"
        },
            {
            "id": "1198",
            "name": "Feira Nova do Maranhão",
            "state_id": "10"
        },
            {
            "id": "1199",
            "name": "Fernando Falcão",
            "state_id": "10"
        },
            {
            "id": "1200",
            "name": "Formosa da Serra Negra",
            "state_id": "10"
        },
            {
            "id": "1201",
            "name": "Fortaleza dos Nogueiras",
            "state_id": "10"
        },
            {
            "id": "1202",
            "name": "Fortuna",
            "state_id": "10"
        },
            {
            "id": "1203",
            "name": "Godofredo Viana",
            "state_id": "10"
        },
            {
            "id": "1204",
            "name": "Gonçalves Dias",
            "state_id": "10"
        },
            {
            "id": "1205",
            "name": "Governador Archer",
            "state_id": "10"
        },
            {
            "id": "1206",
            "name": "Governador Edison Lobão",
            "state_id": "10"
        },
            {
            "id": "1207",
            "name": "Governador Eugênio Barros",
            "state_id": "10"
        },
            {
            "id": "1208",
            "name": "Governador Luiz Rocha",
            "state_id": "10"
        },
            {
            "id": "1209",
            "name": "Governador Newton Bello",
            "state_id": "10"
        },
            {
            "id": "1210",
            "name": "Governador Nunes Freire",
            "state_id": "10"
        },
            {
            "id": "1211",
            "name": "Graça Aranha",
            "state_id": "10"
        },
            {
            "id": "1212",
            "name": "Grajaú",
            "state_id": "10"
        },
            {
            "id": "1213",
            "name": "Guimarães",
            "state_id": "10"
        },
            {
            "id": "1214",
            "name": "Humberto de Campos",
            "state_id": "10"
        },
            {
            "id": "1215",
            "name": "Icatu",
            "state_id": "10"
        },
            {
            "id": "1216",
            "name": "Igarapé do Meio",
            "state_id": "10"
        },
            {
            "id": "1217",
            "name": "Igarapé Grande",
            "state_id": "10"
        },
            {
            "id": "1218",
            "name": "Imperatriz",
            "state_id": "10"
        },
            {
            "id": "1219",
            "name": "Itaipava do Grajaú",
            "state_id": "10"
        },
            {
            "id": "1220",
            "name": "Itapecuru Mirim",
            "state_id": "10"
        },
            {
            "id": "1221",
            "name": "Itinga do Maranhão",
            "state_id": "10"
        },
            {
            "id": "1222",
            "name": "Jatobá",
            "state_id": "10"
        },
            {
            "id": "1223",
            "name": "Jenipapo dos Vieiras",
            "state_id": "10"
        },
            {
            "id": "1224",
            "name": "João Lisboa",
            "state_id": "10"
        },
            {
            "id": "1225",
            "name": "Joselândia",
            "state_id": "10"
        },
            {
            "id": "1226",
            "name": "Junco do Maranhão",
            "state_id": "10"
        },
            {
            "id": "1227",
            "name": "Lago da Pedra",
            "state_id": "10"
        },
            {
            "id": "1228",
            "name": "Lago do Junco",
            "state_id": "10"
        },
            {
            "id": "1229",
            "name": "Lago dos Rodrigues",
            "state_id": "10"
        },
            {
            "id": "1230",
            "name": "Lago Verde",
            "state_id": "10"
        },
            {
            "id": "1231",
            "name": "Lagoa do Mato",
            "state_id": "10"
        },
            {
            "id": "1232",
            "name": "Lagoa Grande do Maranhão",
            "state_id": "10"
        },
            {
            "id": "1233",
            "name": "Lajeado Novo",
            "state_id": "10"
        },
            {
            "id": "1234",
            "name": "Lima Campos",
            "state_id": "10"
        },
            {
            "id": "1235",
            "name": "Loreto",
            "state_id": "10"
        },
            {
            "id": "1236",
            "name": "Luís Domingues",
            "state_id": "10"
        },
            {
            "id": "1237",
            "name": "Magalhães de Almeida",
            "state_id": "10"
        },
            {
            "id": "1238",
            "name": "Maracaçumé",
            "state_id": "10"
        },
            {
            "id": "1239",
            "name": "Marajá do Sena",
            "state_id": "10"
        },
            {
            "id": "1240",
            "name": "Maranhãozinho",
            "state_id": "10"
        },
            {
            "id": "1241",
            "name": "Mata Roma",
            "state_id": "10"
        },
            {
            "id": "1242",
            "name": "Matinha",
            "state_id": "10"
        },
            {
            "id": "1243",
            "name": "Matões",
            "state_id": "10"
        },
            {
            "id": "1244",
            "name": "Matões do Norte",
            "state_id": "10"
        },
            {
            "id": "1245",
            "name": "Milagres do Maranhão",
            "state_id": "10"
        },
            {
            "id": "1246",
            "name": "Mirador",
            "state_id": "10"
        },
            {
            "id": "1247",
            "name": "Miranda do Norte",
            "state_id": "10"
        },
            {
            "id": "1248",
            "name": "Mirinzal",
            "state_id": "10"
        },
            {
            "id": "1249",
            "name": "Monção",
            "state_id": "10"
        },
            {
            "id": "1250",
            "name": "Montes Altos",
            "state_id": "10"
        },
            {
            "id": "1251",
            "name": "Morros",
            "state_id": "10"
        },
            {
            "id": "1252",
            "name": "Nina Rodrigues",
            "state_id": "10"
        },
            {
            "id": "1253",
            "name": "Nova Colinas",
            "state_id": "10"
        },
            {
            "id": "1254",
            "name": "Nova Iorque",
            "state_id": "10"
        },
            {
            "id": "1255",
            "name": "Nova Olinda do Maranhão",
            "state_id": "10"
        },
            {
            "id": "1256",
            "name": "Olho d`Água das Cunhãs",
            "state_id": "10"
        },
            {
            "id": "1257",
            "name": "Olinda Nova do Maranhão",
            "state_id": "10"
        },
            {
            "id": "1258",
            "name": "Paço do Lumiar",
            "state_id": "10"
        },
            {
            "id": "1259",
            "name": "Palmeirândia",
            "state_id": "10"
        },
            {
            "id": "1260",
            "name": "Paraibano",
            "state_id": "10"
        },
            {
            "id": "1261",
            "name": "Parnarama",
            "state_id": "10"
        },
            {
            "id": "1262",
            "name": "Passagem Franca",
            "state_id": "10"
        },
            {
            "id": "1263",
            "name": "Pastos Bons",
            "state_id": "10"
        },
            {
            "id": "1264",
            "name": "Paulino Neves",
            "state_id": "10"
        },
            {
            "id": "1265",
            "name": "Paulo Ramos",
            "state_id": "10"
        },
            {
            "id": "1266",
            "name": "Pedreiras",
            "state_id": "10"
        },
            {
            "id": "1267",
            "name": "Pedro do Rosário",
            "state_id": "10"
        },
            {
            "id": "1268",
            "name": "Penalva",
            "state_id": "10"
        },
            {
            "id": "1269",
            "name": "Peri Mirim",
            "state_id": "10"
        },
            {
            "id": "1270",
            "name": "Peritoró",
            "state_id": "10"
        },
            {
            "id": "1271",
            "name": "Pindaré-Mirim",
            "state_id": "10"
        },
            {
            "id": "1272",
            "name": "Pinheiro",
            "state_id": "10"
        },
            {
            "id": "1273",
            "name": "Pio XII",
            "state_id": "10"
        },
            {
            "id": "1274",
            "name": "Pirapemas",
            "state_id": "10"
        },
            {
            "id": "1275",
            "name": "Poção de Pedras",
            "state_id": "10"
        },
            {
            "id": "1276",
            "name": "Porto Franco",
            "state_id": "10"
        },
            {
            "id": "1277",
            "name": "Porto Rico do Maranhão",
            "state_id": "10"
        },
            {
            "id": "1278",
            "name": "Presidente Dutra",
            "state_id": "10"
        },
            {
            "id": "1279",
            "name": "Presidente Juscelino",
            "state_id": "10"
        },
            {
            "id": "1280",
            "name": "Presidente Médici",
            "state_id": "10"
        },
            {
            "id": "1281",
            "name": "Presidente Sarney",
            "state_id": "10"
        },
            {
            "id": "1282",
            "name": "Presidente Vargas",
            "state_id": "10"
        },
            {
            "id": "1283",
            "name": "Primeira Cruz",
            "state_id": "10"
        },
            {
            "id": "1284",
            "name": "Raposa",
            "state_id": "10"
        },
            {
            "id": "1285",
            "name": "Riachão",
            "state_id": "10"
        },
            {
            "id": "1286",
            "name": "Ribamar Fiquene",
            "state_id": "10"
        },
            {
            "id": "1287",
            "name": "Rosário",
            "state_id": "10"
        },
            {
            "id": "1288",
            "name": "Sambaíba",
            "state_id": "10"
        },
            {
            "id": "1289",
            "name": "Santa Filomena do Maranhão",
            "state_id": "10"
        },
            {
            "id": "1290",
            "name": "Santa Helena",
            "state_id": "10"
        },
            {
            "id": "1291",
            "name": "Santa Inês",
            "state_id": "10"
        },
            {
            "id": "1292",
            "name": "Santa Luzia",
            "state_id": "10"
        },
            {
            "id": "1293",
            "name": "Santa Luzia do Paruá",
            "state_id": "10"
        },
            {
            "id": "1294",
            "name": "Santa Quitéria do Maranhão",
            "state_id": "10"
        },
            {
            "id": "1295",
            "name": "Santa Rita",
            "state_id": "10"
        },
            {
            "id": "1296",
            "name": "Santana do Maranhão",
            "state_id": "10"
        },
            {
            "id": "1297",
            "name": "Santo Amaro do Maranhão",
            "state_id": "10"
        },
            {
            "id": "1298",
            "name": "Santo Antônio dos Lopes",
            "state_id": "10"
        },
            {
            "id": "1299",
            "name": "São Benedito do Rio Preto",
            "state_id": "10"
        },
            {
            "id": "1300",
            "name": "São Bento",
            "state_id": "10"
        },
            {
            "id": "1301",
            "name": "São Bernardo",
            "state_id": "10"
        },
            {
            "id": "1302",
            "name": "São Domingos do Azeitão",
            "state_id": "10"
        },
            {
            "id": "1303",
            "name": "São Domingos do Maranhão",
            "state_id": "10"
        },
            {
            "id": "1304",
            "name": "São Félix de Balsas",
            "state_id": "10"
        },
            {
            "id": "1305",
            "name": "São Francisco do Brejão",
            "state_id": "10"
        },
            {
            "id": "1306",
            "name": "São Francisco do Maranhão",
            "state_id": "10"
        },
            {
            "id": "1307",
            "name": "São João Batista",
            "state_id": "10"
        },
            {
            "id": "1308",
            "name": "São João do Carú",
            "state_id": "10"
        },
            {
            "id": "1309",
            "name": "São João do Paraíso",
            "state_id": "10"
        },
            {
            "id": "1310",
            "name": "São João do Soter",
            "state_id": "10"
        },
            {
            "id": "1311",
            "name": "São João dos Patos",
            "state_id": "10"
        },
            {
            "id": "1312",
            "name": "São José de Ribamar",
            "state_id": "10"
        },
            {
            "id": "1313",
            "name": "São José dos Basílios",
            "state_id": "10"
        },
            {
            "id": "1314",
            "name": "São Luís",
            "state_id": "10"
        },
            {
            "id": "1315",
            "name": "São Luís Gonzaga do Maranhão",
            "state_id": "10"
        },
            {
            "id": "1316",
            "name": "São Mateus do Maranhão",
            "state_id": "10"
        },
            {
            "id": "1317",
            "name": "São Pedro da Água Branca",
            "state_id": "10"
        },
            {
            "id": "1318",
            "name": "São Pedro dos Crentes",
            "state_id": "10"
        },
            {
            "id": "1319",
            "name": "São Raimundo das Mangabeiras",
            "state_id": "10"
        },
            {
            "id": "1320",
            "name": "São Raimundo do Doca Bezerra",
            "state_id": "10"
        },
            {
            "id": "1321",
            "name": "São Roberto",
            "state_id": "10"
        },
            {
            "id": "1322",
            "name": "São Vicente Ferrer",
            "state_id": "10"
        },
            {
            "id": "1323",
            "name": "Satubinha",
            "state_id": "10"
        },
            {
            "id": "1324",
            "name": "Senador Alexandre Costa",
            "state_id": "10"
        },
            {
            "id": "1325",
            "name": "Senador La Rocque",
            "state_id": "10"
        },
            {
            "id": "1326",
            "name": "Serrano do Maranhão",
            "state_id": "10"
        },
            {
            "id": "1327",
            "name": "Sítio Novo",
            "state_id": "10"
        },
            {
            "id": "1328",
            "name": "Sucupira do Norte",
            "state_id": "10"
        },
            {
            "id": "1329",
            "name": "Sucupira do Riachão",
            "state_id": "10"
        },
            {
            "id": "1330",
            "name": "Tasso Fragoso",
            "state_id": "10"
        },
            {
            "id": "1331",
            "name": "Timbiras",
            "state_id": "10"
        },
            {
            "id": "1332",
            "name": "Timon",
            "state_id": "10"
        },
            {
            "id": "1333",
            "name": "Trizidela do Vale",
            "state_id": "10"
        },
            {
            "id": "1334",
            "name": "Tufilândia",
            "state_id": "10"
        },
            {
            "id": "1335",
            "name": "Tuntum",
            "state_id": "10"
        },
            {
            "id": "1336",
            "name": "Turiaçu",
            "state_id": "10"
        },
            {
            "id": "1337",
            "name": "Turilândia",
            "state_id": "10"
        },
            {
            "id": "1338",
            "name": "Tutóia",
            "state_id": "10"
        },
            {
            "id": "1339",
            "name": "Urbano Santos",
            "state_id": "10"
        },
            {
            "id": "1340",
            "name": "Vargem Grande",
            "state_id": "10"
        },
            {
            "id": "1341",
            "name": "Viana",
            "state_id": "10"
        },
            {
            "id": "1342",
            "name": "Vila Nova dos Martírios",
            "state_id": "10"
        },
            {
            "id": "1343",
            "name": "Vitória do Mearim",
            "state_id": "10"
        },
            {
            "id": "1344",
            "name": "Vitorino Freire",
            "state_id": "10"
        },
            {
            "id": "1345",
            "name": "Zé Doca",
            "state_id": "10"
        },
            {
            "id": "1346",
            "name": "Acorizal",
            "state_id": "13"
        },
            {
            "id": "1347",
            "name": "Água Boa",
            "state_id": "13"
        },
            {
            "id": "1348",
            "name": "Alta Floresta",
            "state_id": "13"
        },
            {
            "id": "1349",
            "name": "Alto Araguaia",
            "state_id": "13"
        },
            {
            "id": "1350",
            "name": "Alto Boa Vista",
            "state_id": "13"
        },
            {
            "id": "1351",
            "name": "Alto Garças",
            "state_id": "13"
        },
            {
            "id": "1352",
            "name": "Alto Paraguai",
            "state_id": "13"
        },
            {
            "id": "1353",
            "name": "Alto Taquari",
            "state_id": "13"
        },
            {
            "id": "1354",
            "name": "Apiacás",
            "state_id": "13"
        },
            {
            "id": "1355",
            "name": "Araguaiana",
            "state_id": "13"
        },
            {
            "id": "1356",
            "name": "Araguainha",
            "state_id": "13"
        },
            {
            "id": "1357",
            "name": "Araputanga",
            "state_id": "13"
        },
            {
            "id": "1358",
            "name": "Arenápolis",
            "state_id": "13"
        },
            {
            "id": "1359",
            "name": "Aripuanã",
            "state_id": "13"
        },
            {
            "id": "1360",
            "name": "Barão de Melgaço",
            "state_id": "13"
        },
            {
            "id": "1361",
            "name": "Barra do Bugres",
            "state_id": "13"
        },
            {
            "id": "1362",
            "name": "Barra do Garças",
            "state_id": "13"
        },
            {
            "id": "1363",
            "name": "Bom Jesus do Araguaia",
            "state_id": "13"
        },
            {
            "id": "1364",
            "name": "Brasnorte",
            "state_id": "13"
        },
            {
            "id": "1365",
            "name": "Cáceres",
            "state_id": "13"
        },
            {
            "id": "1366",
            "name": "Campinápolis",
            "state_id": "13"
        },
            {
            "id": "1367",
            "name": "Campo Novo do Parecis",
            "state_id": "13"
        },
            {
            "id": "1368",
            "name": "Campo Verde",
            "state_id": "13"
        },
            {
            "id": "1369",
            "name": "Campos de Júlio",
            "state_id": "13"
        },
            {
            "id": "1370",
            "name": "Canabrava do Norte",
            "state_id": "13"
        },
            {
            "id": "1371",
            "name": "Canarana",
            "state_id": "13"
        },
            {
            "id": "1372",
            "name": "Carlinda",
            "state_id": "13"
        },
            {
            "id": "1373",
            "name": "Castanheira",
            "state_id": "13"
        },
            {
            "id": "1374",
            "name": "Chapada dos Guimarães",
            "state_id": "13"
        },
            {
            "id": "1375",
            "name": "Cláudia",
            "state_id": "13"
        },
            {
            "id": "1376",
            "name": "Cocalinho",
            "state_id": "13"
        },
            {
            "id": "1377",
            "name": "Colíder",
            "state_id": "13"
        },
            {
            "id": "1378",
            "name": "Colniza",
            "state_id": "13"
        },
            {
            "id": "1379",
            "name": "Comodoro",
            "state_id": "13"
        },
            {
            "id": "1380",
            "name": "Confresa",
            "state_id": "13"
        },
            {
            "id": "1381",
            "name": "Conquista d`Oeste",
            "state_id": "13"
        },
            {
            "id": "1382",
            "name": "Cotriguaçu",
            "state_id": "13"
        },
            {
            "id": "1383",
            "name": "Cuiabá",
            "state_id": "13"
        },
            {
            "id": "1384",
            "name": "Curvelândia",
            "state_id": "13"
        },
            {
            "id": "1385",
            "name": "Curvelândia",
            "state_id": "13"
        },
            {
            "id": "1386",
            "name": "Denise",
            "state_id": "13"
        },
            {
            "id": "1387",
            "name": "Diamantino",
            "state_id": "13"
        },
            {
            "id": "1388",
            "name": "Dom Aquino",
            "state_id": "13"
        },
            {
            "id": "1389",
            "name": "Feliz Natal",
            "state_id": "13"
        },
            {
            "id": "1390",
            "name": "Figueirópolis d`Oeste",
            "state_id": "13"
        },
            {
            "id": "1391",
            "name": "Gaúcha do Norte",
            "state_id": "13"
        },
            {
            "id": "1392",
            "name": "General Carneiro",
            "state_id": "13"
        },
            {
            "id": "1393",
            "name": "Glória d`Oeste",
            "state_id": "13"
        },
            {
            "id": "1394",
            "name": "Guarantã do Norte",
            "state_id": "13"
        },
            {
            "id": "1395",
            "name": "Guiratinga",
            "state_id": "13"
        },
            {
            "id": "1396",
            "name": "Indiavaí",
            "state_id": "13"
        },
            {
            "id": "1397",
            "name": "Ipiranga do Norte",
            "state_id": "13"
        },
            {
            "id": "1398",
            "name": "Itanhangá",
            "state_id": "13"
        },
            {
            "id": "1399",
            "name": "Itaúba",
            "state_id": "13"
        },
            {
            "id": "1400",
            "name": "Itiquira",
            "state_id": "13"
        },
            {
            "id": "1401",
            "name": "Jaciara",
            "state_id": "13"
        },
            {
            "id": "1402",
            "name": "Jangada",
            "state_id": "13"
        },
            {
            "id": "1403",
            "name": "Jauru",
            "state_id": "13"
        },
            {
            "id": "1404",
            "name": "Juara",
            "state_id": "13"
        },
            {
            "id": "1405",
            "name": "Juína",
            "state_id": "13"
        },
            {
            "id": "1406",
            "name": "Juruena",
            "state_id": "13"
        },
            {
            "id": "1407",
            "name": "Juscimeira",
            "state_id": "13"
        },
            {
            "id": "1408",
            "name": "Lambari d`Oeste",
            "state_id": "13"
        },
            {
            "id": "1409",
            "name": "Lucas do Rio Verde",
            "state_id": "13"
        },
            {
            "id": "1410",
            "name": "Luciára",
            "state_id": "13"
        },
            {
            "id": "1411",
            "name": "Marcelândia",
            "state_id": "13"
        },
            {
            "id": "1412",
            "name": "Matupá",
            "state_id": "13"
        },
            {
            "id": "1413",
            "name": "Mirassol d`Oeste",
            "state_id": "13"
        },
            {
            "id": "1414",
            "name": "Nobres",
            "state_id": "13"
        },
            {
            "id": "1415",
            "name": "Nortelândia",
            "state_id": "13"
        },
            {
            "id": "1416",
            "name": "Nossa Senhora do Livramento",
            "state_id": "13"
        },
            {
            "id": "1417",
            "name": "Nova Bandeirantes",
            "state_id": "13"
        },
            {
            "id": "1418",
            "name": "Nova Brasilândia",
            "state_id": "13"
        },
            {
            "id": "1419",
            "name": "Nova Canaã do Norte",
            "state_id": "13"
        },
            {
            "id": "1420",
            "name": "Nova Guarita",
            "state_id": "13"
        },
            {
            "id": "1421",
            "name": "Nova Lacerda",
            "state_id": "13"
        },
            {
            "id": "1422",
            "name": "Nova Marilândia",
            "state_id": "13"
        },
            {
            "id": "1423",
            "name": "Nova Maringá",
            "state_id": "13"
        },
            {
            "id": "1424",
            "name": "Nova Monte verde",
            "state_id": "13"
        },
            {
            "id": "1425",
            "name": "Nova Mutum",
            "state_id": "13"
        },
            {
            "id": "1426",
            "name": "Nova Olímpia",
            "state_id": "13"
        },
            {
            "id": "1427",
            "name": "Nova Santa Helena",
            "state_id": "13"
        },
            {
            "id": "1428",
            "name": "Nova Ubiratã",
            "state_id": "13"
        },
            {
            "id": "1429",
            "name": "Nova Xavantina",
            "state_id": "13"
        },
            {
            "id": "1430",
            "name": "Novo Horizonte do Norte",
            "state_id": "13"
        },
            {
            "id": "1431",
            "name": "Novo Mundo",
            "state_id": "13"
        },
            {
            "id": "1432",
            "name": "Novo Santo Antônio",
            "state_id": "13"
        },
            {
            "id": "1433",
            "name": "Novo São Joaquim",
            "state_id": "13"
        },
            {
            "id": "1434",
            "name": "Paranaíta",
            "state_id": "13"
        },
            {
            "id": "1435",
            "name": "Paranatinga",
            "state_id": "13"
        },
            {
            "id": "1436",
            "name": "Pedra Preta",
            "state_id": "13"
        },
            {
            "id": "1437",
            "name": "Peixoto de Azevedo",
            "state_id": "13"
        },
            {
            "id": "1438",
            "name": "Planalto da Serra",
            "state_id": "13"
        },
            {
            "id": "1439",
            "name": "Poconé",
            "state_id": "13"
        },
            {
            "id": "1440",
            "name": "Pontal do Araguaia",
            "state_id": "13"
        },
            {
            "id": "1441",
            "name": "Ponte Branca",
            "state_id": "13"
        },
            {
            "id": "1442",
            "name": "Pontes e Lacerda",
            "state_id": "13"
        },
            {
            "id": "1443",
            "name": "Porto Alegre do Norte",
            "state_id": "13"
        },
            {
            "id": "1444",
            "name": "Porto dos Gaúchos",
            "state_id": "13"
        },
            {
            "id": "1445",
            "name": "Porto Esperidião",
            "state_id": "13"
        },
            {
            "id": "1446",
            "name": "Porto Estrela",
            "state_id": "13"
        },
            {
            "id": "1447",
            "name": "Poxoréo",
            "state_id": "13"
        },
            {
            "id": "1448",
            "name": "Primavera do Leste",
            "state_id": "13"
        },
            {
            "id": "1449",
            "name": "Querência",
            "state_id": "13"
        },
            {
            "id": "1450",
            "name": "Reserva do Cabaçal",
            "state_id": "13"
        },
            {
            "id": "1451",
            "name": "Ribeirão Cascalheira",
            "state_id": "13"
        },
            {
            "id": "1452",
            "name": "Ribeirãozinho",
            "state_id": "13"
        },
            {
            "id": "1453",
            "name": "Rio Branco",
            "state_id": "13"
        },
            {
            "id": "1454",
            "name": "Rondolândia",
            "state_id": "13"
        },
            {
            "id": "1455",
            "name": "Rondonópolis",
            "state_id": "13"
        },
            {
            "id": "1456",
            "name": "Rosário Oeste",
            "state_id": "13"
        },
            {
            "id": "1457",
            "name": "Salto do Céu",
            "state_id": "13"
        },
            {
            "id": "1458",
            "name": "Santa Carmem",
            "state_id": "13"
        },
            {
            "id": "1459",
            "name": "Santa Cruz do Xingu",
            "state_id": "13"
        },
            {
            "id": "1460",
            "name": "Santa Rita do Trivelato",
            "state_id": "13"
        },
            {
            "id": "1461",
            "name": "Santa Terezinha",
            "state_id": "13"
        },
            {
            "id": "1462",
            "name": "Santo Afonso",
            "state_id": "13"
        },
            {
            "id": "1463",
            "name": "Santo Antônio do Leste",
            "state_id": "13"
        },
            {
            "id": "1464",
            "name": "Santo Antônio do Leverger",
            "state_id": "13"
        },
            {
            "id": "1465",
            "name": "São Félix do Araguaia",
            "state_id": "13"
        },
            {
            "id": "1466",
            "name": "São José do Povo",
            "state_id": "13"
        },
            {
            "id": "1467",
            "name": "São José do Rio Claro",
            "state_id": "13"
        },
            {
            "id": "1468",
            "name": "São José do Xingu",
            "state_id": "13"
        },
            {
            "id": "1469",
            "name": "São José dos Quatro Marcos",
            "state_id": "13"
        },
            {
            "id": "1470",
            "name": "São Pedro da Cipa",
            "state_id": "13"
        },
            {
            "id": "1471",
            "name": "Sapezal",
            "state_id": "13"
        },
            {
            "id": "1472",
            "name": "Serra Nova Dourada",
            "state_id": "13"
        },
            {
            "id": "1473",
            "name": "Sinop",
            "state_id": "13"
        },
            {
            "id": "1474",
            "name": "Sorriso",
            "state_id": "13"
        },
            {
            "id": "1475",
            "name": "Tabaporã",
            "state_id": "13"
        },
            {
            "id": "1476",
            "name": "Tangará da Serra",
            "state_id": "13"
        },
            {
            "id": "1477",
            "name": "Tapurah",
            "state_id": "13"
        },
            {
            "id": "1478",
            "name": "Terra Nova do Norte",
            "state_id": "13"
        },
            {
            "id": "1479",
            "name": "Tesouro",
            "state_id": "13"
        },
            {
            "id": "1480",
            "name": "Torixoréu",
            "state_id": "13"
        },
            {
            "id": "1481",
            "name": "União do Sul",
            "state_id": "13"
        },
            {
            "id": "1482",
            "name": "Vale de São Domingos",
            "state_id": "13"
        },
            {
            "id": "1483",
            "name": "Várzea Grande",
            "state_id": "13"
        },
            {
            "id": "1484",
            "name": "Vera",
            "state_id": "13"
        },
            {
            "id": "1485",
            "name": "Vila Bela da Santíssima Trindade",
            "state_id": "13"
        },
            {
            "id": "1486",
            "name": "Vila Rica",
            "state_id": "13"
        },
            {
            "id": "1487",
            "name": "Água Clara",
            "state_id": "12"
        },
            {
            "id": "1488",
            "name": "Alcinópolis",
            "state_id": "12"
        },
            {
            "id": "1489",
            "name": "Amambaí",
            "state_id": "12"
        },
            {
            "id": "1490",
            "name": "Anastácio",
            "state_id": "12"
        },
            {
            "id": "1491",
            "name": "Anaurilândia",
            "state_id": "12"
        },
            {
            "id": "1492",
            "name": "Angélica",
            "state_id": "12"
        },
            {
            "id": "1493",
            "name": "Antônio João",
            "state_id": "12"
        },
            {
            "id": "1494",
            "name": "Aparecida do Taboado",
            "state_id": "12"
        },
            {
            "id": "1495",
            "name": "Aquidauana",
            "state_id": "12"
        },
            {
            "id": "1496",
            "name": "Aral Moreira",
            "state_id": "12"
        },
            {
            "id": "1497",
            "name": "Bandeirantes",
            "state_id": "12"
        },
            {
            "id": "1498",
            "name": "Bataguassu",
            "state_id": "12"
        },
            {
            "id": "1499",
            "name": "Bataiporã",
            "state_id": "12"
        },
            {
            "id": "1500",
            "name": "Bela Vista",
            "state_id": "12"
        },
            {
            "id": "1501",
            "name": "Bodoquena",
            "state_id": "12"
        },
            {
            "id": "1502",
            "name": "Bonito",
            "state_id": "12"
        },
            {
            "id": "1503",
            "name": "Brasilândia",
            "state_id": "12"
        },
            {
            "id": "1504",
            "name": "Caarapó",
            "state_id": "12"
        },
            {
            "id": "1505",
            "name": "Camapuã",
            "state_id": "12"
        },
            {
            "id": "1506",
            "name": "Campo Grande",
            "state_id": "12"
        },
            {
            "id": "1507",
            "name": "Caracol",
            "state_id": "12"
        },
            {
            "id": "1508",
            "name": "Cassilândia",
            "state_id": "12"
        },
            {
            "id": "1509",
            "name": "Chapadão do Sul",
            "state_id": "12"
        },
            {
            "id": "1510",
            "name": "Corguinho",
            "state_id": "12"
        },
            {
            "id": "1511",
            "name": "Coronel Sapucaia",
            "state_id": "12"
        },
            {
            "id": "1512",
            "name": "Corumbá",
            "state_id": "12"
        },
            {
            "id": "1513",
            "name": "Costa Rica",
            "state_id": "12"
        },
            {
            "id": "1514",
            "name": "Coxim",
            "state_id": "12"
        },
            {
            "id": "1515",
            "name": "Deodápolis",
            "state_id": "12"
        },
            {
            "id": "1516",
            "name": "Dois Irmãos do Buriti",
            "state_id": "12"
        },
            {
            "id": "1517",
            "name": "Douradina",
            "state_id": "12"
        },
            {
            "id": "1518",
            "name": "Dourados",
            "state_id": "12"
        },
            {
            "id": "1519",
            "name": "Eldorado",
            "state_id": "12"
        },
            {
            "id": "1520",
            "name": "Fátima do Sul",
            "state_id": "12"
        },
            {
            "id": "1521",
            "name": "Figueirão",
            "state_id": "12"
        },
            {
            "id": "1522",
            "name": "Glória de Dourados",
            "state_id": "12"
        },
            {
            "id": "1523",
            "name": "Guia Lopes da Laguna",
            "state_id": "12"
        },
            {
            "id": "1524",
            "name": "Iguatemi",
            "state_id": "12"
        },
            {
            "id": "1525",
            "name": "Inocência",
            "state_id": "12"
        },
            {
            "id": "1526",
            "name": "Itaporã",
            "state_id": "12"
        },
            {
            "id": "1527",
            "name": "Itaquiraí",
            "state_id": "12"
        },
            {
            "id": "1528",
            "name": "Ivinhema",
            "state_id": "12"
        },
            {
            "id": "1529",
            "name": "Japorã",
            "state_id": "12"
        },
            {
            "id": "1530",
            "name": "Jaraguari",
            "state_id": "12"
        },
            {
            "id": "1531",
            "name": "Jardim",
            "state_id": "12"
        },
            {
            "id": "1532",
            "name": "Jateí",
            "state_id": "12"
        },
            {
            "id": "1533",
            "name": "Juti",
            "state_id": "12"
        },
            {
            "id": "1534",
            "name": "Ladário",
            "state_id": "12"
        },
            {
            "id": "1535",
            "name": "Laguna Carapã",
            "state_id": "12"
        },
            {
            "id": "1536",
            "name": "Maracaju",
            "state_id": "12"
        },
            {
            "id": "1537",
            "name": "Miranda",
            "state_id": "12"
        },
            {
            "id": "1538",
            "name": "Mundo Novo",
            "state_id": "12"
        },
            {
            "id": "1539",
            "name": "Naviraí",
            "state_id": "12"
        },
            {
            "id": "1540",
            "name": "Nioaque",
            "state_id": "12"
        },
            {
            "id": "1541",
            "name": "Nova Alvorada do Sul",
            "state_id": "12"
        },
            {
            "id": "1542",
            "name": "Nova Andradina",
            "state_id": "12"
        },
            {
            "id": "1543",
            "name": "Novo Horizonte do Sul",
            "state_id": "12"
        },
            {
            "id": "1544",
            "name": "Paranaíba",
            "state_id": "12"
        },
            {
            "id": "1545",
            "name": "Paranhos",
            "state_id": "12"
        },
            {
            "id": "1546",
            "name": "Pedro Gomes",
            "state_id": "12"
        },
            {
            "id": "1547",
            "name": "Ponta Porã",
            "state_id": "12"
        },
            {
            "id": "1548",
            "name": "Porto Murtinho",
            "state_id": "12"
        },
            {
            "id": "1549",
            "name": "Ribas do Rio Pardo",
            "state_id": "12"
        },
            {
            "id": "1550",
            "name": "Rio Brilhante",
            "state_id": "12"
        },
            {
            "id": "1551",
            "name": "Rio Negro",
            "state_id": "12"
        },
            {
            "id": "1552",
            "name": "Rio Verde de Mato Grosso",
            "state_id": "12"
        },
            {
            "id": "1553",
            "name": "Rochedo",
            "state_id": "12"
        },
            {
            "id": "1554",
            "name": "Santa Rita do Pardo",
            "state_id": "12"
        },
            {
            "id": "1555",
            "name": "São Gabriel do Oeste",
            "state_id": "12"
        },
            {
            "id": "1556",
            "name": "Selvíria",
            "state_id": "12"
        },
            {
            "id": "1557",
            "name": "Sete Quedas",
            "state_id": "12"
        },
            {
            "id": "1558",
            "name": "Sidrolândia",
            "state_id": "12"
        },
            {
            "id": "1559",
            "name": "Sonora",
            "state_id": "12"
        },
            {
            "id": "1560",
            "name": "Tacuru",
            "state_id": "12"
        },
            {
            "id": "1561",
            "name": "Taquarussu",
            "state_id": "12"
        },
            {
            "id": "1562",
            "name": "Terenos",
            "state_id": "12"
        },
            {
            "id": "1563",
            "name": "Três Lagoas",
            "state_id": "12"
        },
            {
            "id": "1564",
            "name": "Vicentina",
            "state_id": "12"
        },
            {
            "id": "1565",
            "name": "Abadia dos Dourados",
            "state_id": "11"
        },
            {
            "id": "1566",
            "name": "Abaeté",
            "state_id": "11"
        },
            {
            "id": "1567",
            "name": "Abre Campo",
            "state_id": "11"
        },
            {
            "id": "1568",
            "name": "Acaiaca",
            "state_id": "11"
        },
            {
            "id": "1569",
            "name": "Açucena",
            "state_id": "11"
        },
            {
            "id": "1570",
            "name": "Água Boa",
            "state_id": "11"
        },
            {
            "id": "1571",
            "name": "Água Comprida",
            "state_id": "11"
        },
            {
            "id": "1572",
            "name": "Aguanil",
            "state_id": "11"
        },
            {
            "id": "1573",
            "name": "Águas Formosas",
            "state_id": "11"
        },
            {
            "id": "1574",
            "name": "Águas Vermelhas",
            "state_id": "11"
        },
            {
            "id": "1575",
            "name": "Aimorés",
            "state_id": "11"
        },
            {
            "id": "1576",
            "name": "Aiuruoca",
            "state_id": "11"
        },
            {
            "id": "1577",
            "name": "Alagoa",
            "state_id": "11"
        },
            {
            "id": "1578",
            "name": "Albertina",
            "state_id": "11"
        },
            {
            "id": "1579",
            "name": "Além Paraíba",
            "state_id": "11"
        },
            {
            "id": "1580",
            "name": "Alfenas",
            "state_id": "11"
        },
            {
            "id": "1581",
            "name": "Alfredo Vasconcelos",
            "state_id": "11"
        },
            {
            "id": "1582",
            "name": "Almenara",
            "state_id": "11"
        },
            {
            "id": "1583",
            "name": "Alpercata",
            "state_id": "11"
        },
            {
            "id": "1584",
            "name": "Alpinópolis",
            "state_id": "11"
        },
            {
            "id": "1585",
            "name": "Alterosa",
            "state_id": "11"
        },
            {
            "id": "1586",
            "name": "Alto Caparaó",
            "state_id": "11"
        },
            {
            "id": "1587",
            "name": "Alto Jequitibá",
            "state_id": "11"
        },
            {
            "id": "1588",
            "name": "Alto Rio Doce",
            "state_id": "11"
        },
            {
            "id": "1589",
            "name": "Alvarenga",
            "state_id": "11"
        },
            {
            "id": "1590",
            "name": "Alvinópolis",
            "state_id": "11"
        },
            {
            "id": "1591",
            "name": "Alvorada de Minas",
            "state_id": "11"
        },
            {
            "id": "1592",
            "name": "Amparo do Serra",
            "state_id": "11"
        },
            {
            "id": "1593",
            "name": "Andradas",
            "state_id": "11"
        },
            {
            "id": "1594",
            "name": "Andrelândia",
            "state_id": "11"
        },
            {
            "id": "1595",
            "name": "Angelândia",
            "state_id": "11"
        },
            {
            "id": "1596",
            "name": "Antônio Carlos",
            "state_id": "11"
        },
            {
            "id": "1597",
            "name": "Antônio Dias",
            "state_id": "11"
        },
            {
            "id": "1598",
            "name": "Antônio Prado de Minas",
            "state_id": "11"
        },
            {
            "id": "1599",
            "name": "Araçaí",
            "state_id": "11"
        },
            {
            "id": "1600",
            "name": "Aracitaba",
            "state_id": "11"
        },
            {
            "id": "1601",
            "name": "Araçuaí",
            "state_id": "11"
        },
            {
            "id": "1602",
            "name": "Araguari",
            "state_id": "11"
        },
            {
            "id": "1603",
            "name": "Arantina",
            "state_id": "11"
        },
            {
            "id": "1604",
            "name": "Araponga",
            "state_id": "11"
        },
            {
            "id": "1605",
            "name": "Araporã",
            "state_id": "11"
        },
            {
            "id": "1606",
            "name": "Arapuá",
            "state_id": "11"
        },
            {
            "id": "1607",
            "name": "Araújos",
            "state_id": "11"
        },
            {
            "id": "1608",
            "name": "Araxá",
            "state_id": "11"
        },
            {
            "id": "1609",
            "name": "Arceburgo",
            "state_id": "11"
        },
            {
            "id": "1610",
            "name": "Arcos",
            "state_id": "11"
        },
            {
            "id": "1611",
            "name": "Areado",
            "state_id": "11"
        },
            {
            "id": "1612",
            "name": "Argirita",
            "state_id": "11"
        },
            {
            "id": "1613",
            "name": "Aricanduva",
            "state_id": "11"
        },
            {
            "id": "1614",
            "name": "Arinos",
            "state_id": "11"
        },
            {
            "id": "1615",
            "name": "Astolfo Dutra",
            "state_id": "11"
        },
            {
            "id": "1616",
            "name": "Ataléia",
            "state_id": "11"
        },
            {
            "id": "1617",
            "name": "Augusto de Lima",
            "state_id": "11"
        },
            {
            "id": "1618",
            "name": "Baependi",
            "state_id": "11"
        },
            {
            "id": "1619",
            "name": "Baldim",
            "state_id": "11"
        },
            {
            "id": "1620",
            "name": "Bambuí",
            "state_id": "11"
        },
            {
            "id": "1621",
            "name": "Bandeira",
            "state_id": "11"
        },
            {
            "id": "1622",
            "name": "Bandeira do Sul",
            "state_id": "11"
        },
            {
            "id": "1623",
            "name": "Barão de Cocais",
            "state_id": "11"
        },
            {
            "id": "1624",
            "name": "Barão de Monte Alto",
            "state_id": "11"
        },
            {
            "id": "1625",
            "name": "Barbacena",
            "state_id": "11"
        },
            {
            "id": "1626",
            "name": "Barra Longa",
            "state_id": "11"
        },
            {
            "id": "1627",
            "name": "Barroso",
            "state_id": "11"
        },
            {
            "id": "1628",
            "name": "Bela Vista de Minas",
            "state_id": "11"
        },
            {
            "id": "1629",
            "name": "Belmiro Braga",
            "state_id": "11"
        },
            {
            "id": "1630",
            "name": "Belo Horizonte",
            "state_id": "11"
        },
            {
            "id": "1631",
            "name": "Belo Oriente",
            "state_id": "11"
        },
            {
            "id": "1632",
            "name": "Belo Vale",
            "state_id": "11"
        },
            {
            "id": "1633",
            "name": "Berilo",
            "state_id": "11"
        },
            {
            "id": "1634",
            "name": "Berizal",
            "state_id": "11"
        },
            {
            "id": "1635",
            "name": "Bertópolis",
            "state_id": "11"
        },
            {
            "id": "1636",
            "name": "Betim",
            "state_id": "11"
        },
            {
            "id": "1637",
            "name": "Bias Fortes",
            "state_id": "11"
        },
            {
            "id": "1638",
            "name": "Bicas",
            "state_id": "11"
        },
            {
            "id": "1639",
            "name": "Biquinhas",
            "state_id": "11"
        },
            {
            "id": "1640",
            "name": "Boa Esperança",
            "state_id": "11"
        },
            {
            "id": "1641",
            "name": "Bocaina de Minas",
            "state_id": "11"
        },
            {
            "id": "1642",
            "name": "Bocaiúva",
            "state_id": "11"
        },
            {
            "id": "1643",
            "name": "Bom Despacho",
            "state_id": "11"
        },
            {
            "id": "1644",
            "name": "Bom Jardim de Minas",
            "state_id": "11"
        },
            {
            "id": "1645",
            "name": "Bom Jesus da Penha",
            "state_id": "11"
        },
            {
            "id": "1646",
            "name": "Bom Jesus do Amparo",
            "state_id": "11"
        },
            {
            "id": "1647",
            "name": "Bom Jesus do Galho",
            "state_id": "11"
        },
            {
            "id": "1648",
            "name": "Bom Repouso",
            "state_id": "11"
        },
            {
            "id": "1649",
            "name": "Bom Sucesso",
            "state_id": "11"
        },
            {
            "id": "1650",
            "name": "Bonfim",
            "state_id": "11"
        },
            {
            "id": "1651",
            "name": "Bonfinópolis de Minas",
            "state_id": "11"
        },
            {
            "id": "1652",
            "name": "Bonito de Minas",
            "state_id": "11"
        },
            {
            "id": "1653",
            "name": "Borda da Mata",
            "state_id": "11"
        },
            {
            "id": "1654",
            "name": "Botelhos",
            "state_id": "11"
        },
            {
            "id": "1655",
            "name": "Botumirim",
            "state_id": "11"
        },
            {
            "id": "1656",
            "name": "Brás Pires",
            "state_id": "11"
        },
            {
            "id": "1657",
            "name": "Brasilândia de Minas",
            "state_id": "11"
        },
            {
            "id": "1658",
            "name": "Brasília de Minas",
            "state_id": "11"
        },
            {
            "id": "1659",
            "name": "Brasópolis",
            "state_id": "11"
        },
            {
            "id": "1660",
            "name": "Braúnas",
            "state_id": "11"
        },
            {
            "id": "1661",
            "name": "Brumadinho",
            "state_id": "11"
        },
            {
            "id": "1662",
            "name": "Bueno Brandão",
            "state_id": "11"
        },
            {
            "id": "1663",
            "name": "Buenópolis",
            "state_id": "11"
        },
            {
            "id": "1664",
            "name": "Bugre",
            "state_id": "11"
        },
            {
            "id": "1665",
            "name": "Buritis",
            "state_id": "11"
        },
            {
            "id": "1666",
            "name": "Buritizeiro",
            "state_id": "11"
        },
            {
            "id": "1667",
            "name": "Cabeceira Grande",
            "state_id": "11"
        },
            {
            "id": "1668",
            "name": "Cabo Verde",
            "state_id": "11"
        },
            {
            "id": "1669",
            "name": "Cachoeira da Prata",
            "state_id": "11"
        },
            {
            "id": "1670",
            "name": "Cachoeira de Minas",
            "state_id": "11"
        },
            {
            "id": "1671",
            "name": "Cachoeira de Pajeú",
            "state_id": "11"
        },
            {
            "id": "1672",
            "name": "Cachoeira Dourada",
            "state_id": "11"
        },
            {
            "id": "1673",
            "name": "Caetanópolis",
            "state_id": "11"
        },
            {
            "id": "1674",
            "name": "Caeté",
            "state_id": "11"
        },
            {
            "id": "1675",
            "name": "Caiana",
            "state_id": "11"
        },
            {
            "id": "1676",
            "name": "Cajuri",
            "state_id": "11"
        },
            {
            "id": "1677",
            "name": "Caldas",
            "state_id": "11"
        },
            {
            "id": "1678",
            "name": "Camacho",
            "state_id": "11"
        },
            {
            "id": "1679",
            "name": "Camanducaia",
            "state_id": "11"
        },
            {
            "id": "1680",
            "name": "Cambuí",
            "state_id": "11"
        },
            {
            "id": "1681",
            "name": "Cambuquira",
            "state_id": "11"
        },
            {
            "id": "1682",
            "name": "Campanário",
            "state_id": "11"
        },
            {
            "id": "1683",
            "name": "Campanha",
            "state_id": "11"
        },
            {
            "id": "1684",
            "name": "Campestre",
            "state_id": "11"
        },
            {
            "id": "1685",
            "name": "Campina Verde",
            "state_id": "11"
        },
            {
            "id": "1686",
            "name": "Campo Azul",
            "state_id": "11"
        },
            {
            "id": "1687",
            "name": "Campo Belo",
            "state_id": "11"
        },
            {
            "id": "1688",
            "name": "Campo do Meio",
            "state_id": "11"
        },
            {
            "id": "1689",
            "name": "Campo Florido",
            "state_id": "11"
        },
            {
            "id": "1690",
            "name": "Campos Altos",
            "state_id": "11"
        },
            {
            "id": "1691",
            "name": "Campos Gerais",
            "state_id": "11"
        },
            {
            "id": "1692",
            "name": "Cana Verde",
            "state_id": "11"
        },
            {
            "id": "1693",
            "name": "Canaã",
            "state_id": "11"
        },
            {
            "id": "1694",
            "name": "Canápolis",
            "state_id": "11"
        },
            {
            "id": "1695",
            "name": "Candeias",
            "state_id": "11"
        },
            {
            "id": "1696",
            "name": "Cantagalo",
            "state_id": "11"
        },
            {
            "id": "1697",
            "name": "Caparaó",
            "state_id": "11"
        },
            {
            "id": "1698",
            "name": "Capela Nova",
            "state_id": "11"
        },
            {
            "id": "1699",
            "name": "Capelinha",
            "state_id": "11"
        },
            {
            "id": "1700",
            "name": "Capetinga",
            "state_id": "11"
        },
            {
            "id": "1701",
            "name": "Capim Branco",
            "state_id": "11"
        },
            {
            "id": "1702",
            "name": "Capinópolis",
            "state_id": "11"
        },
            {
            "id": "1703",
            "name": "Capitão Andrade",
            "state_id": "11"
        },
            {
            "id": "1704",
            "name": "Capitão Enéas",
            "state_id": "11"
        },
            {
            "id": "1705",
            "name": "Capitólio",
            "state_id": "11"
        },
            {
            "id": "1706",
            "name": "Caputira",
            "state_id": "11"
        },
            {
            "id": "1707",
            "name": "Caraí",
            "state_id": "11"
        },
            {
            "id": "1708",
            "name": "Caranaíba",
            "state_id": "11"
        },
            {
            "id": "1709",
            "name": "Carandaí",
            "state_id": "11"
        },
            {
            "id": "1710",
            "name": "Carangola",
            "state_id": "11"
        },
            {
            "id": "1711",
            "name": "Caratinga",
            "state_id": "11"
        },
            {
            "id": "1712",
            "name": "Carbonita",
            "state_id": "11"
        },
            {
            "id": "1713",
            "name": "Careaçu",
            "state_id": "11"
        },
            {
            "id": "1714",
            "name": "Carlos Chagas",
            "state_id": "11"
        },
            {
            "id": "1715",
            "name": "Carmésia",
            "state_id": "11"
        },
            {
            "id": "1716",
            "name": "Carmo da Cachoeira",
            "state_id": "11"
        },
            {
            "id": "1717",
            "name": "Carmo da Mata",
            "state_id": "11"
        },
            {
            "id": "1718",
            "name": "Carmo de Minas",
            "state_id": "11"
        },
            {
            "id": "1719",
            "name": "Carmo do Cajuru",
            "state_id": "11"
        },
            {
            "id": "1720",
            "name": "Carmo do Paranaíba",
            "state_id": "11"
        },
            {
            "id": "1721",
            "name": "Carmo do Rio Claro",
            "state_id": "11"
        },
            {
            "id": "1722",
            "name": "Carmópolis de Minas",
            "state_id": "11"
        },
            {
            "id": "1723",
            "name": "Carneirinho",
            "state_id": "11"
        },
            {
            "id": "1724",
            "name": "Carrancas",
            "state_id": "11"
        },
            {
            "id": "1725",
            "name": "Carvalhópolis",
            "state_id": "11"
        },
            {
            "id": "1726",
            "name": "Carvalhos",
            "state_id": "11"
        },
            {
            "id": "1727",
            "name": "Casa Grande",
            "state_id": "11"
        },
            {
            "id": "1728",
            "name": "Cascalho Rico",
            "state_id": "11"
        },
            {
            "id": "1729",
            "name": "Cássia",
            "state_id": "11"
        },
            {
            "id": "1730",
            "name": "Cataguases",
            "state_id": "11"
        },
            {
            "id": "1731",
            "name": "Catas Altas",
            "state_id": "11"
        },
            {
            "id": "1732",
            "name": "Catas Altas da Noruega",
            "state_id": "11"
        },
            {
            "id": "1733",
            "name": "Catuji",
            "state_id": "11"
        },
            {
            "id": "1734",
            "name": "Catuti",
            "state_id": "11"
        },
            {
            "id": "1735",
            "name": "Caxambu",
            "state_id": "11"
        },
            {
            "id": "1736",
            "name": "Cedro do Abaeté",
            "state_id": "11"
        },
            {
            "id": "1737",
            "name": "Central de Minas",
            "state_id": "11"
        },
            {
            "id": "1738",
            "name": "Centralina",
            "state_id": "11"
        },
            {
            "id": "1739",
            "name": "Chácara",
            "state_id": "11"
        },
            {
            "id": "1740",
            "name": "Chalé",
            "state_id": "11"
        },
            {
            "id": "1741",
            "name": "Chapada do Norte",
            "state_id": "11"
        },
            {
            "id": "1742",
            "name": "Chapada Gaúcha",
            "state_id": "11"
        },
            {
            "id": "1743",
            "name": "Chiador",
            "state_id": "11"
        },
            {
            "id": "1744",
            "name": "Cipotânea",
            "state_id": "11"
        },
            {
            "id": "1745",
            "name": "Claraval",
            "state_id": "11"
        },
            {
            "id": "1746",
            "name": "Claro dos Poções",
            "state_id": "11"
        },
            {
            "id": "1747",
            "name": "Cláudio",
            "state_id": "11"
        },
            {
            "id": "1748",
            "name": "Coimbra",
            "state_id": "11"
        },
            {
            "id": "1749",
            "name": "Coluna",
            "state_id": "11"
        },
            {
            "id": "1750",
            "name": "Comendador Gomes",
            "state_id": "11"
        },
            {
            "id": "1751",
            "name": "Comercinho",
            "state_id": "11"
        },
            {
            "id": "1752",
            "name": "Conceição da Aparecida",
            "state_id": "11"
        },
            {
            "id": "1753",
            "name": "Conceição da Barra de Minas",
            "state_id": "11"
        },
            {
            "id": "1754",
            "name": "Conceição das Alagoas",
            "state_id": "11"
        },
            {
            "id": "1755",
            "name": "Conceição das Pedras",
            "state_id": "11"
        },
            {
            "id": "1756",
            "name": "Conceição de Ipanema",
            "state_id": "11"
        },
            {
            "id": "1757",
            "name": "Conceição do Mato Dentro",
            "state_id": "11"
        },
            {
            "id": "1758",
            "name": "Conceição do Pará",
            "state_id": "11"
        },
            {
            "id": "1759",
            "name": "Conceição do Rio Verde",
            "state_id": "11"
        },
            {
            "id": "1760",
            "name": "Conceição dos Ouros",
            "state_id": "11"
        },
            {
            "id": "1761",
            "name": "Cônego Marinho",
            "state_id": "11"
        },
            {
            "id": "1762",
            "name": "Confins",
            "state_id": "11"
        },
            {
            "id": "1763",
            "name": "Congonhal",
            "state_id": "11"
        },
            {
            "id": "1764",
            "name": "Congonhas",
            "state_id": "11"
        },
            {
            "id": "1765",
            "name": "Congonhas do Norte",
            "state_id": "11"
        },
            {
            "id": "1766",
            "name": "Conquista",
            "state_id": "11"
        },
            {
            "id": "1767",
            "name": "Conselheiro Lafaiete",
            "state_id": "11"
        },
            {
            "id": "1768",
            "name": "Conselheiro Pena",
            "state_id": "11"
        },
            {
            "id": "1769",
            "name": "Consolação",
            "state_id": "11"
        },
            {
            "id": "1770",
            "name": "Contagem",
            "state_id": "11"
        },
            {
            "id": "1771",
            "name": "Coqueiral",
            "state_id": "11"
        },
            {
            "id": "1772",
            "name": "Coração de Jesus",
            "state_id": "11"
        },
            {
            "id": "1773",
            "name": "Cordisburgo",
            "state_id": "11"
        },
            {
            "id": "1774",
            "name": "Cordislândia",
            "state_id": "11"
        },
            {
            "id": "1775",
            "name": "Corinto",
            "state_id": "11"
        },
            {
            "id": "1776",
            "name": "Coroaci",
            "state_id": "11"
        },
            {
            "id": "1777",
            "name": "Coromandel",
            "state_id": "11"
        },
            {
            "id": "1778",
            "name": "Coronel Fabriciano",
            "state_id": "11"
        },
            {
            "id": "1779",
            "name": "Coronel Murta",
            "state_id": "11"
        },
            {
            "id": "1780",
            "name": "Coronel Pacheco",
            "state_id": "11"
        },
            {
            "id": "1781",
            "name": "Coronel Xavier Chaves",
            "state_id": "11"
        },
            {
            "id": "1782",
            "name": "Córrego Danta",
            "state_id": "11"
        },
            {
            "id": "1783",
            "name": "Córrego do Bom Jesus",
            "state_id": "11"
        },
            {
            "id": "1784",
            "name": "Córrego Fundo",
            "state_id": "11"
        },
            {
            "id": "1785",
            "name": "Córrego Novo",
            "state_id": "11"
        },
            {
            "id": "1786",
            "name": "Couto de Magalhães de Minas",
            "state_id": "11"
        },
            {
            "id": "1787",
            "name": "Crisólita",
            "state_id": "11"
        },
            {
            "id": "1788",
            "name": "Cristais",
            "state_id": "11"
        },
            {
            "id": "1789",
            "name": "Cristália",
            "state_id": "11"
        },
            {
            "id": "1790",
            "name": "Cristiano Otoni",
            "state_id": "11"
        },
            {
            "id": "1791",
            "name": "Cristina",
            "state_id": "11"
        },
            {
            "id": "1792",
            "name": "Crucilândia",
            "state_id": "11"
        },
            {
            "id": "1793",
            "name": "Cruzeiro da Fortaleza",
            "state_id": "11"
        },
            {
            "id": "1794",
            "name": "Cruzília",
            "state_id": "11"
        },
            {
            "id": "1795",
            "name": "Cuparaque",
            "state_id": "11"
        },
            {
            "id": "1796",
            "name": "Curral de Dentro",
            "state_id": "11"
        },
            {
            "id": "1797",
            "name": "Curvelo",
            "state_id": "11"
        },
            {
            "id": "1798",
            "name": "Datas",
            "state_id": "11"
        },
            {
            "id": "1799",
            "name": "Delfim Moreira",
            "state_id": "11"
        },
            {
            "id": "1800",
            "name": "Delfinópolis",
            "state_id": "11"
        },
            {
            "id": "1801",
            "name": "Delta",
            "state_id": "11"
        },
            {
            "id": "1802",
            "name": "Descoberto",
            "state_id": "11"
        },
            {
            "id": "1803",
            "name": "Desterro de Entre Rios",
            "state_id": "11"
        },
            {
            "id": "1804",
            "name": "Desterro do Melo",
            "state_id": "11"
        },
            {
            "id": "1805",
            "name": "Diamantina",
            "state_id": "11"
        },
            {
            "id": "1806",
            "name": "Diogo de Vasconcelos",
            "state_id": "11"
        },
            {
            "id": "1807",
            "name": "Dionísio",
            "state_id": "11"
        },
            {
            "id": "1808",
            "name": "Divinésia",
            "state_id": "11"
        },
            {
            "id": "1809",
            "name": "Divino",
            "state_id": "11"
        },
            {
            "id": "1810",
            "name": "Divino das Laranjeiras",
            "state_id": "11"
        },
            {
            "id": "1811",
            "name": "Divinolândia de Minas",
            "state_id": "11"
        },
            {
            "id": "1812",
            "name": "Divinópolis",
            "state_id": "11"
        },
            {
            "id": "1813",
            "name": "Divisa Alegre",
            "state_id": "11"
        },
            {
            "id": "1814",
            "name": "Divisa Nova",
            "state_id": "11"
        },
            {
            "id": "1815",
            "name": "Divisópolis",
            "state_id": "11"
        },
            {
            "id": "1816",
            "name": "Dom Bosco",
            "state_id": "11"
        },
            {
            "id": "1817",
            "name": "Dom Cavati",
            "state_id": "11"
        },
            {
            "id": "1818",
            "name": "Dom Joaquim",
            "state_id": "11"
        },
            {
            "id": "1819",
            "name": "Dom Silvério",
            "state_id": "11"
        },
            {
            "id": "1820",
            "name": "Dom Viçoso",
            "state_id": "11"
        },
            {
            "id": "1821",
            "name": "Dona Eusébia",
            "state_id": "11"
        },
            {
            "id": "1822",
            "name": "Dores de Campos",
            "state_id": "11"
        },
            {
            "id": "1823",
            "name": "Dores de Guanhães",
            "state_id": "11"
        },
            {
            "id": "1824",
            "name": "Dores do Indaiá",
            "state_id": "11"
        },
            {
            "id": "1825",
            "name": "Dores do Turvo",
            "state_id": "11"
        },
            {
            "id": "1826",
            "name": "Doresópolis",
            "state_id": "11"
        },
            {
            "id": "1827",
            "name": "Douradoquara",
            "state_id": "11"
        },
            {
            "id": "1828",
            "name": "Durandé",
            "state_id": "11"
        },
            {
            "id": "1829",
            "name": "Elói Mendes",
            "state_id": "11"
        },
            {
            "id": "1830",
            "name": "Engenheiro Caldas",
            "state_id": "11"
        },
            {
            "id": "1831",
            "name": "Engenheiro Navarro",
            "state_id": "11"
        },
            {
            "id": "1832",
            "name": "Entre Folhas",
            "state_id": "11"
        },
            {
            "id": "1833",
            "name": "Entre Rios de Minas",
            "state_id": "11"
        },
            {
            "id": "1834",
            "name": "Ervália",
            "state_id": "11"
        },
            {
            "id": "1835",
            "name": "Esmeraldas",
            "state_id": "11"
        },
            {
            "id": "1836",
            "name": "Espera Feliz",
            "state_id": "11"
        },
            {
            "id": "1837",
            "name": "Espinosa",
            "state_id": "11"
        },
            {
            "id": "1838",
            "name": "Espírito Santo do Dourado",
            "state_id": "11"
        },
            {
            "id": "1839",
            "name": "Estiva",
            "state_id": "11"
        },
            {
            "id": "1840",
            "name": "Estrela Dalva",
            "state_id": "11"
        },
            {
            "id": "1841",
            "name": "Estrela do Indaiá",
            "state_id": "11"
        },
            {
            "id": "1842",
            "name": "Estrela do Sul",
            "state_id": "11"
        },
            {
            "id": "1843",
            "name": "Eugenópolis",
            "state_id": "11"
        },
            {
            "id": "1844",
            "name": "Ewbank da Câmara",
            "state_id": "11"
        },
            {
            "id": "1845",
            "name": "Extrema",
            "state_id": "11"
        },
            {
            "id": "1846",
            "name": "Fama",
            "state_id": "11"
        },
            {
            "id": "1847",
            "name": "Faria Lemos",
            "state_id": "11"
        },
            {
            "id": "1848",
            "name": "Felício dos Santos",
            "state_id": "11"
        },
            {
            "id": "1849",
            "name": "Felisburgo",
            "state_id": "11"
        },
            {
            "id": "1850",
            "name": "Felixlândia",
            "state_id": "11"
        },
            {
            "id": "1851",
            "name": "Fernandes Tourinho",
            "state_id": "11"
        },
            {
            "id": "1852",
            "name": "Ferros",
            "state_id": "11"
        },
            {
            "id": "1853",
            "name": "Fervedouro",
            "state_id": "11"
        },
            {
            "id": "1854",
            "name": "Florestal",
            "state_id": "11"
        },
            {
            "id": "1855",
            "name": "Formiga",
            "state_id": "11"
        },
            {
            "id": "1856",
            "name": "Formoso",
            "state_id": "11"
        },
            {
            "id": "1857",
            "name": "Fortaleza de Minas",
            "state_id": "11"
        },
            {
            "id": "1858",
            "name": "Fortuna de Minas",
            "state_id": "11"
        },
            {
            "id": "1859",
            "name": "Francisco Badaró",
            "state_id": "11"
        },
            {
            "id": "1860",
            "name": "Francisco Dumont",
            "state_id": "11"
        },
            {
            "id": "1861",
            "name": "Francisco Sá",
            "state_id": "11"
        },
            {
            "id": "1862",
            "name": "Franciscópolis",
            "state_id": "11"
        },
            {
            "id": "1863",
            "name": "Frei Gaspar",
            "state_id": "11"
        },
            {
            "id": "1864",
            "name": "Frei Inocêncio",
            "state_id": "11"
        },
            {
            "id": "1865",
            "name": "Frei Lagonegro",
            "state_id": "11"
        },
            {
            "id": "1866",
            "name": "Fronteira",
            "state_id": "11"
        },
            {
            "id": "1867",
            "name": "Fronteira dos Vales",
            "state_id": "11"
        },
            {
            "id": "1868",
            "name": "Fruta de Leite",
            "state_id": "11"
        },
            {
            "id": "1869",
            "name": "Frutal",
            "state_id": "11"
        },
            {
            "id": "1870",
            "name": "Funilândia",
            "state_id": "11"
        },
            {
            "id": "1871",
            "name": "Galiléia",
            "state_id": "11"
        },
            {
            "id": "1872",
            "name": "Gameleiras",
            "state_id": "11"
        },
            {
            "id": "1873",
            "name": "Glaucilândia",
            "state_id": "11"
        },
            {
            "id": "1874",
            "name": "Goiabeira",
            "state_id": "11"
        },
            {
            "id": "1875",
            "name": "Goianá",
            "state_id": "11"
        },
            {
            "id": "1876",
            "name": "Gonçalves",
            "state_id": "11"
        },
            {
            "id": "1877",
            "name": "Gonzaga",
            "state_id": "11"
        },
            {
            "id": "1878",
            "name": "Gouveia",
            "state_id": "11"
        },
            {
            "id": "1879",
            "name": "Governador Valadares",
            "state_id": "11"
        },
            {
            "id": "1880",
            "name": "Grão Mogol",
            "state_id": "11"
        },
            {
            "id": "1881",
            "name": "Grupiara",
            "state_id": "11"
        },
            {
            "id": "1882",
            "name": "Guanhães",
            "state_id": "11"
        },
            {
            "id": "1883",
            "name": "Guapé",
            "state_id": "11"
        },
            {
            "id": "1884",
            "name": "Guaraciaba",
            "state_id": "11"
        },
            {
            "id": "1885",
            "name": "Guaraciama",
            "state_id": "11"
        },
            {
            "id": "1886",
            "name": "Guaranésia",
            "state_id": "11"
        },
            {
            "id": "1887",
            "name": "Guarani",
            "state_id": "11"
        },
            {
            "id": "1888",
            "name": "Guarará",
            "state_id": "11"
        },
            {
            "id": "1889",
            "name": "Guarda-Mor",
            "state_id": "11"
        },
            {
            "id": "1890",
            "name": "Guaxupé",
            "state_id": "11"
        },
            {
            "id": "1891",
            "name": "Guidoval",
            "state_id": "11"
        },
            {
            "id": "1892",
            "name": "Guimarânia",
            "state_id": "11"
        },
            {
            "id": "1893",
            "name": "Guiricema",
            "state_id": "11"
        },
            {
            "id": "1894",
            "name": "Gurinhatã",
            "state_id": "11"
        },
            {
            "id": "1895",
            "name": "Heliodora",
            "state_id": "11"
        },
            {
            "id": "1896",
            "name": "Iapu",
            "state_id": "11"
        },
            {
            "id": "1897",
            "name": "Ibertioga",
            "state_id": "11"
        },
            {
            "id": "1898",
            "name": "Ibiá",
            "state_id": "11"
        },
            {
            "id": "1899",
            "name": "Ibiaí",
            "state_id": "11"
        },
            {
            "id": "1900",
            "name": "Ibiracatu",
            "state_id": "11"
        },
            {
            "id": "1901",
            "name": "Ibiraci",
            "state_id": "11"
        },
            {
            "id": "1902",
            "name": "Ibirité",
            "state_id": "11"
        },
            {
            "id": "1903",
            "name": "Ibitiúra de Minas",
            "state_id": "11"
        },
            {
            "id": "1904",
            "name": "Ibituruna",
            "state_id": "11"
        },
            {
            "id": "1905",
            "name": "Icaraí de Minas",
            "state_id": "11"
        },
            {
            "id": "1906",
            "name": "Igarapé",
            "state_id": "11"
        },
            {
            "id": "1907",
            "name": "Igaratinga",
            "state_id": "11"
        },
            {
            "id": "1908",
            "name": "Iguatama",
            "state_id": "11"
        },
            {
            "id": "1909",
            "name": "Ijaci",
            "state_id": "11"
        },
            {
            "id": "1910",
            "name": "Ilicínea",
            "state_id": "11"
        },
            {
            "id": "1911",
            "name": "Imbé de Minas",
            "state_id": "11"
        },
            {
            "id": "1912",
            "name": "Inconfidentes",
            "state_id": "11"
        },
            {
            "id": "1913",
            "name": "Indaiabira",
            "state_id": "11"
        },
            {
            "id": "1914",
            "name": "Indianópolis",
            "state_id": "11"
        },
            {
            "id": "1915",
            "name": "Ingaí",
            "state_id": "11"
        },
            {
            "id": "1916",
            "name": "Inhapim",
            "state_id": "11"
        },
            {
            "id": "1917",
            "name": "Inhaúma",
            "state_id": "11"
        },
            {
            "id": "1918",
            "name": "Inimutaba",
            "state_id": "11"
        },
            {
            "id": "1919",
            "name": "Ipaba",
            "state_id": "11"
        },
            {
            "id": "1920",
            "name": "Ipanema",
            "state_id": "11"
        },
            {
            "id": "1921",
            "name": "Ipatinga",
            "state_id": "11"
        },
            {
            "id": "1922",
            "name": "Ipiaçu",
            "state_id": "11"
        },
            {
            "id": "1923",
            "name": "Ipuiúna",
            "state_id": "11"
        },
            {
            "id": "1924",
            "name": "Iraí de Minas",
            "state_id": "11"
        },
            {
            "id": "1925",
            "name": "Itabira",
            "state_id": "11"
        },
            {
            "id": "1926",
            "name": "Itabirinha de Mantena",
            "state_id": "11"
        },
            {
            "id": "1927",
            "name": "Itabirito",
            "state_id": "11"
        },
            {
            "id": "1928",
            "name": "Itacambira",
            "state_id": "11"
        },
            {
            "id": "1929",
            "name": "Itacarambi",
            "state_id": "11"
        },
            {
            "id": "1930",
            "name": "Itaguara",
            "state_id": "11"
        },
            {
            "id": "1931",
            "name": "Itaipé",
            "state_id": "11"
        },
            {
            "id": "1932",
            "name": "Itajubá",
            "state_id": "11"
        },
            {
            "id": "1933",
            "name": "Itamarandiba",
            "state_id": "11"
        },
            {
            "id": "1934",
            "name": "Itamarati de Minas",
            "state_id": "11"
        },
            {
            "id": "1935",
            "name": "Itambacuri",
            "state_id": "11"
        },
            {
            "id": "1936",
            "name": "Itambé do Mato Dentro",
            "state_id": "11"
        },
            {
            "id": "1937",
            "name": "Itamogi",
            "state_id": "11"
        },
            {
            "id": "1938",
            "name": "Itamonte",
            "state_id": "11"
        },
            {
            "id": "1939",
            "name": "Itanhandu",
            "state_id": "11"
        },
            {
            "id": "1940",
            "name": "Itanhomi",
            "state_id": "11"
        },
            {
            "id": "1941",
            "name": "Itaobim",
            "state_id": "11"
        },
            {
            "id": "1942",
            "name": "Itapagipe",
            "state_id": "11"
        },
            {
            "id": "1943",
            "name": "Itapecerica",
            "state_id": "11"
        },
            {
            "id": "1944",
            "name": "Itapeva",
            "state_id": "11"
        },
            {
            "id": "1945",
            "name": "Itatiaiuçu",
            "state_id": "11"
        },
            {
            "id": "1946",
            "name": "Itaú de Minas",
            "state_id": "11"
        },
            {
            "id": "1947",
            "name": "Itaúna",
            "state_id": "11"
        },
            {
            "id": "1948",
            "name": "Itaverava",
            "state_id": "11"
        },
            {
            "id": "1949",
            "name": "Itinga",
            "state_id": "11"
        },
            {
            "id": "1950",
            "name": "Itueta",
            "state_id": "11"
        },
            {
            "id": "1951",
            "name": "Ituiutaba",
            "state_id": "11"
        },
            {
            "id": "1952",
            "name": "Itumirim",
            "state_id": "11"
        },
            {
            "id": "1953",
            "name": "Iturama",
            "state_id": "11"
        },
            {
            "id": "1954",
            "name": "Itutinga",
            "state_id": "11"
        },
            {
            "id": "1955",
            "name": "Jaboticatubas",
            "state_id": "11"
        },
            {
            "id": "1956",
            "name": "Jacinto",
            "state_id": "11"
        },
            {
            "id": "1957",
            "name": "Jacuí",
            "state_id": "11"
        },
            {
            "id": "1958",
            "name": "Jacutinga",
            "state_id": "11"
        },
            {
            "id": "1959",
            "name": "Jaguaraçu",
            "state_id": "11"
        },
            {
            "id": "1960",
            "name": "Jaíba",
            "state_id": "11"
        },
            {
            "id": "1961",
            "name": "Jampruca",
            "state_id": "11"
        },
            {
            "id": "1962",
            "name": "Janaúba",
            "state_id": "11"
        },
            {
            "id": "1963",
            "name": "Januária",
            "state_id": "11"
        },
            {
            "id": "1964",
            "name": "Japaraíba",
            "state_id": "11"
        },
            {
            "id": "1965",
            "name": "Japonvar",
            "state_id": "11"
        },
            {
            "id": "1966",
            "name": "Jeceaba",
            "state_id": "11"
        },
            {
            "id": "1967",
            "name": "Jenipapo de Minas",
            "state_id": "11"
        },
            {
            "id": "1968",
            "name": "Jequeri",
            "state_id": "11"
        },
            {
            "id": "1969",
            "name": "Jequitaí",
            "state_id": "11"
        },
            {
            "id": "1970",
            "name": "Jequitibá",
            "state_id": "11"
        },
            {
            "id": "1971",
            "name": "Jequitinhonha",
            "state_id": "11"
        },
            {
            "id": "1972",
            "name": "Jesuânia",
            "state_id": "11"
        },
            {
            "id": "1973",
            "name": "Joaíma",
            "state_id": "11"
        },
            {
            "id": "1974",
            "name": "Joanésia",
            "state_id": "11"
        },
            {
            "id": "1975",
            "name": "João Monlevade",
            "state_id": "11"
        },
            {
            "id": "1976",
            "name": "João Pinheiro",
            "state_id": "11"
        },
            {
            "id": "1977",
            "name": "Joaquim Felício",
            "state_id": "11"
        },
            {
            "id": "1978",
            "name": "Jordânia",
            "state_id": "11"
        },
            {
            "id": "1979",
            "name": "José Gonçalves de Minas",
            "state_id": "11"
        },
            {
            "id": "1980",
            "name": "José Raydan",
            "state_id": "11"
        },
            {
            "id": "1981",
            "name": "Josenópolis",
            "state_id": "11"
        },
            {
            "id": "1982",
            "name": "Juatuba",
            "state_id": "11"
        },
            {
            "id": "1983",
            "name": "Juiz de Fora",
            "state_id": "11"
        },
            {
            "id": "1984",
            "name": "Juramento",
            "state_id": "11"
        },
            {
            "id": "1985",
            "name": "Juruaia",
            "state_id": "11"
        },
            {
            "id": "1986",
            "name": "Juvenília",
            "state_id": "11"
        },
            {
            "id": "1987",
            "name": "Ladainha",
            "state_id": "11"
        },
            {
            "id": "1988",
            "name": "Lagamar",
            "state_id": "11"
        },
            {
            "id": "1989",
            "name": "Lagoa da Prata",
            "state_id": "11"
        },
            {
            "id": "1990",
            "name": "Lagoa dos Patos",
            "state_id": "11"
        },
            {
            "id": "1991",
            "name": "Lagoa Dourada",
            "state_id": "11"
        },
            {
            "id": "1992",
            "name": "Lagoa Formosa",
            "state_id": "11"
        },
            {
            "id": "1993",
            "name": "Lagoa Grande",
            "state_id": "11"
        },
            {
            "id": "1994",
            "name": "Lagoa Santa",
            "state_id": "11"
        },
            {
            "id": "1995",
            "name": "Lajinha",
            "state_id": "11"
        },
            {
            "id": "1996",
            "name": "Lambari",
            "state_id": "11"
        },
            {
            "id": "1997",
            "name": "Lamim",
            "state_id": "11"
        },
            {
            "id": "1998",
            "name": "Laranjal",
            "state_id": "11"
        },
            {
            "id": "1999",
            "name": "Lassance",
            "state_id": "11"
        },
            {
            "id": "2000",
            "name": "Lavras",
            "state_id": "11"
        },
            {
            "id": "2001",
            "name": "Leandro Ferreira",
            "state_id": "11"
        },
            {
            "id": "2002",
            "name": "Leme do Prado",
            "state_id": "11"
        },
            {
            "id": "2003",
            "name": "Leopoldina",
            "state_id": "11"
        },
            {
            "id": "2004",
            "name": "Liberdade",
            "state_id": "11"
        },
            {
            "id": "2005",
            "name": "Lima Duarte",
            "state_id": "11"
        },
            {
            "id": "2006",
            "name": "Limeira do Oeste",
            "state_id": "11"
        },
            {
            "id": "2007",
            "name": "Lontra",
            "state_id": "11"
        },
            {
            "id": "2008",
            "name": "Luisburgo",
            "state_id": "11"
        },
            {
            "id": "2009",
            "name": "Luislândia",
            "state_id": "11"
        },
            {
            "id": "2010",
            "name": "Luminárias",
            "state_id": "11"
        },
            {
            "id": "2011",
            "name": "Luz",
            "state_id": "11"
        },
            {
            "id": "2012",
            "name": "Machacalis",
            "state_id": "11"
        },
            {
            "id": "2013",
            "name": "Machado",
            "state_id": "11"
        },
            {
            "id": "2014",
            "name": "Madre de Deus de Minas",
            "state_id": "11"
        },
            {
            "id": "2015",
            "name": "Malacacheta",
            "state_id": "11"
        },
            {
            "id": "2016",
            "name": "Mamonas",
            "state_id": "11"
        },
            {
            "id": "2017",
            "name": "Manga",
            "state_id": "11"
        },
            {
            "id": "2018",
            "name": "Manhuaçu",
            "state_id": "11"
        },
            {
            "id": "2019",
            "name": "Manhumirim",
            "state_id": "11"
        },
            {
            "id": "2020",
            "name": "Mantena",
            "state_id": "11"
        },
            {
            "id": "2021",
            "name": "Mar de Espanha",
            "state_id": "11"
        },
            {
            "id": "2022",
            "name": "Maravilhas",
            "state_id": "11"
        },
            {
            "id": "2023",
            "name": "Maria da Fé",
            "state_id": "11"
        },
            {
            "id": "2024",
            "name": "Mariana",
            "state_id": "11"
        },
            {
            "id": "2025",
            "name": "Marilac",
            "state_id": "11"
        },
            {
            "id": "2026",
            "name": "Mário Campos",
            "state_id": "11"
        },
            {
            "id": "2027",
            "name": "Maripá de Minas",
            "state_id": "11"
        },
            {
            "id": "2028",
            "name": "Marliéria",
            "state_id": "11"
        },
            {
            "id": "2029",
            "name": "Marmelópolis",
            "state_id": "11"
        },
            {
            "id": "2030",
            "name": "Martinho Campos",
            "state_id": "11"
        },
            {
            "id": "2031",
            "name": "Martins Soares",
            "state_id": "11"
        },
            {
            "id": "2032",
            "name": "Mata Verde",
            "state_id": "11"
        },
            {
            "id": "2033",
            "name": "Materlândia",
            "state_id": "11"
        },
            {
            "id": "2034",
            "name": "Mateus Leme",
            "state_id": "11"
        },
            {
            "id": "2035",
            "name": "Mathias Lobato",
            "state_id": "11"
        },
            {
            "id": "2036",
            "name": "Matias Barbosa",
            "state_id": "11"
        },
            {
            "id": "2037",
            "name": "Matias Cardoso",
            "state_id": "11"
        },
            {
            "id": "2038",
            "name": "Matipó",
            "state_id": "11"
        },
            {
            "id": "2039",
            "name": "Mato Verde",
            "state_id": "11"
        },
            {
            "id": "2040",
            "name": "Matozinhos",
            "state_id": "11"
        },
            {
            "id": "2041",
            "name": "Matutina",
            "state_id": "11"
        },
            {
            "id": "2042",
            "name": "Medeiros",
            "state_id": "11"
        },
            {
            "id": "2043",
            "name": "Medina",
            "state_id": "11"
        },
            {
            "id": "2044",
            "name": "Mendes Pimentel",
            "state_id": "11"
        },
            {
            "id": "2045",
            "name": "Mercês",
            "state_id": "11"
        },
            {
            "id": "2046",
            "name": "Mesquita",
            "state_id": "11"
        },
            {
            "id": "2047",
            "name": "Minas Novas",
            "state_id": "11"
        },
            {
            "id": "2048",
            "name": "Minduri",
            "state_id": "11"
        },
            {
            "id": "2049",
            "name": "Mirabela",
            "state_id": "11"
        },
            {
            "id": "2050",
            "name": "Miradouro",
            "state_id": "11"
        },
            {
            "id": "2051",
            "name": "Miraí",
            "state_id": "11"
        },
            {
            "id": "2052",
            "name": "Miravânia",
            "state_id": "11"
        },
            {
            "id": "2053",
            "name": "Moeda",
            "state_id": "11"
        },
            {
            "id": "2054",
            "name": "Moema",
            "state_id": "11"
        },
            {
            "id": "2055",
            "name": "Monjolos",
            "state_id": "11"
        },
            {
            "id": "2056",
            "name": "Monsenhor Paulo",
            "state_id": "11"
        },
            {
            "id": "2057",
            "name": "Montalvânia",
            "state_id": "11"
        },
            {
            "id": "2058",
            "name": "Monte Alegre de Minas",
            "state_id": "11"
        },
            {
            "id": "2059",
            "name": "Monte Azul",
            "state_id": "11"
        },
            {
            "id": "2060",
            "name": "Monte Belo",
            "state_id": "11"
        },
            {
            "id": "2061",
            "name": "Monte Carmelo",
            "state_id": "11"
        },
            {
            "id": "2062",
            "name": "Monte Formoso",
            "state_id": "11"
        },
            {
            "id": "2063",
            "name": "Monte Santo de Minas",
            "state_id": "11"
        },
            {
            "id": "2064",
            "name": "Monte Sião",
            "state_id": "11"
        },
            {
            "id": "2065",
            "name": "Montes Claros",
            "state_id": "11"
        },
            {
            "id": "2066",
            "name": "Montezuma",
            "state_id": "11"
        },
            {
            "id": "2067",
            "name": "Morada Nova de Minas",
            "state_id": "11"
        },
            {
            "id": "2068",
            "name": "Morro da Garça",
            "state_id": "11"
        },
            {
            "id": "2069",
            "name": "Morro do Pilar",
            "state_id": "11"
        },
            {
            "id": "2070",
            "name": "Munhoz",
            "state_id": "11"
        },
            {
            "id": "2071",
            "name": "Muriaé",
            "state_id": "11"
        },
            {
            "id": "2072",
            "name": "Mutum",
            "state_id": "11"
        },
            {
            "id": "2073",
            "name": "Muzambinho",
            "state_id": "11"
        },
            {
            "id": "2074",
            "name": "Nacip Raydan",
            "state_id": "11"
        },
            {
            "id": "2075",
            "name": "Nanuque",
            "state_id": "11"
        },
            {
            "id": "2076",
            "name": "Naque",
            "state_id": "11"
        },
            {
            "id": "2077",
            "name": "Natalândia",
            "state_id": "11"
        },
            {
            "id": "2078",
            "name": "Natércia",
            "state_id": "11"
        },
            {
            "id": "2079",
            "name": "Nazareno",
            "state_id": "11"
        },
            {
            "id": "2080",
            "name": "Nepomuceno",
            "state_id": "11"
        },
            {
            "id": "2081",
            "name": "Ninheira",
            "state_id": "11"
        },
            {
            "id": "2082",
            "name": "Nova Belém",
            "state_id": "11"
        },
            {
            "id": "2083",
            "name": "Nova Era",
            "state_id": "11"
        },
            {
            "id": "2084",
            "name": "Nova Lima",
            "state_id": "11"
        },
            {
            "id": "2085",
            "name": "Nova Módica",
            "state_id": "11"
        },
            {
            "id": "2086",
            "name": "Nova Ponte",
            "state_id": "11"
        },
            {
            "id": "2087",
            "name": "Nova Porteirinha",
            "state_id": "11"
        },
            {
            "id": "2088",
            "name": "Nova Resende",
            "state_id": "11"
        },
            {
            "id": "2089",
            "name": "Nova Serrana",
            "state_id": "11"
        },
            {
            "id": "2090",
            "name": "Nova União",
            "state_id": "11"
        },
            {
            "id": "2091",
            "name": "Novo Cruzeiro",
            "state_id": "11"
        },
            {
            "id": "2092",
            "name": "Novo Oriente de Minas",
            "state_id": "11"
        },
            {
            "id": "2093",
            "name": "Novorizonte",
            "state_id": "11"
        },
            {
            "id": "2094",
            "name": "Olaria",
            "state_id": "11"
        },
            {
            "id": "2095",
            "name": "Olhos-d`Água",
            "state_id": "11"
        },
            {
            "id": "2096",
            "name": "Olímpio Noronha",
            "state_id": "11"
        },
            {
            "id": "2097",
            "name": "Oliveira",
            "state_id": "11"
        },
            {
            "id": "2098",
            "name": "Oliveira Fortes",
            "state_id": "11"
        },
            {
            "id": "2099",
            "name": "Onça de Pitangui",
            "state_id": "11"
        },
            {
            "id": "2100",
            "name": "Oratórios",
            "state_id": "11"
        },
            {
            "id": "2101",
            "name": "Orizânia",
            "state_id": "11"
        },
            {
            "id": "2102",
            "name": "Ouro Branco",
            "state_id": "11"
        },
            {
            "id": "2103",
            "name": "Ouro Fino",
            "state_id": "11"
        },
            {
            "id": "2104",
            "name": "Ouro Preto",
            "state_id": "11"
        },
            {
            "id": "2105",
            "name": "Ouro Verde de Minas",
            "state_id": "11"
        },
            {
            "id": "2106",
            "name": "Padre Carvalho",
            "state_id": "11"
        },
            {
            "id": "2107",
            "name": "Padre Paraíso",
            "state_id": "11"
        },
            {
            "id": "2108",
            "name": "Pai Pedro",
            "state_id": "11"
        },
            {
            "id": "2109",
            "name": "Paineiras",
            "state_id": "11"
        },
            {
            "id": "2110",
            "name": "Pains",
            "state_id": "11"
        },
            {
            "id": "2111",
            "name": "Paiva",
            "state_id": "11"
        },
            {
            "id": "2112",
            "name": "Palma",
            "state_id": "11"
        },
            {
            "id": "2113",
            "name": "Palmópolis",
            "state_id": "11"
        },
            {
            "id": "2114",
            "name": "Papagaios",
            "state_id": "11"
        },
            {
            "id": "2115",
            "name": "Pará de Minas",
            "state_id": "11"
        },
            {
            "id": "2116",
            "name": "Paracatu",
            "state_id": "11"
        },
            {
            "id": "2117",
            "name": "Paraguaçu",
            "state_id": "11"
        },
            {
            "id": "2118",
            "name": "Paraisópolis",
            "state_id": "11"
        },
            {
            "id": "2119",
            "name": "Paraopeba",
            "state_id": "11"
        },
            {
            "id": "2120",
            "name": "Passa Quatro",
            "state_id": "11"
        },
            {
            "id": "2121",
            "name": "Passa Tempo",
            "state_id": "11"
        },
            {
            "id": "2122",
            "name": "Passabém",
            "state_id": "11"
        },
            {
            "id": "2123",
            "name": "Passa-Vinte",
            "state_id": "11"
        },
            {
            "id": "2124",
            "name": "Passos",
            "state_id": "11"
        },
            {
            "id": "2125",
            "name": "Patis",
            "state_id": "11"
        },
            {
            "id": "2126",
            "name": "Patos de Minas",
            "state_id": "11"
        },
            {
            "id": "2127",
            "name": "Patrocínio",
            "state_id": "11"
        },
            {
            "id": "2128",
            "name": "Patrocínio do Muriaé",
            "state_id": "11"
        },
            {
            "id": "2129",
            "name": "Paula Cândido",
            "state_id": "11"
        },
            {
            "id": "2130",
            "name": "Paulistas",
            "state_id": "11"
        },
            {
            "id": "2131",
            "name": "Pavão",
            "state_id": "11"
        },
            {
            "id": "2132",
            "name": "Peçanha",
            "state_id": "11"
        },
            {
            "id": "2133",
            "name": "Pedra Azul",
            "state_id": "11"
        },
            {
            "id": "2134",
            "name": "Pedra Bonita",
            "state_id": "11"
        },
            {
            "id": "2135",
            "name": "Pedra do Anta",
            "state_id": "11"
        },
            {
            "id": "2136",
            "name": "Pedra do Indaiá",
            "state_id": "11"
        },
            {
            "id": "2137",
            "name": "Pedra Dourada",
            "state_id": "11"
        },
            {
            "id": "2138",
            "name": "Pedralva",
            "state_id": "11"
        },
            {
            "id": "2139",
            "name": "Pedras de Maria da Cruz",
            "state_id": "11"
        },
            {
            "id": "2140",
            "name": "Pedrinópolis",
            "state_id": "11"
        },
            {
            "id": "2141",
            "name": "Pedro Leopoldo",
            "state_id": "11"
        },
            {
            "id": "2142",
            "name": "Pedro Teixeira",
            "state_id": "11"
        },
            {
            "id": "2143",
            "name": "Pequeri",
            "state_id": "11"
        },
            {
            "id": "2144",
            "name": "Pequi",
            "state_id": "11"
        },
            {
            "id": "2145",
            "name": "Perdigão",
            "state_id": "11"
        },
            {
            "id": "2146",
            "name": "Perdizes",
            "state_id": "11"
        },
            {
            "id": "2147",
            "name": "Perdões",
            "state_id": "11"
        },
            {
            "id": "2148",
            "name": "Periquito",
            "state_id": "11"
        },
            {
            "id": "2149",
            "name": "Pescador",
            "state_id": "11"
        },
            {
            "id": "2150",
            "name": "Piau",
            "state_id": "11"
        },
            {
            "id": "2151",
            "name": "Piedade de Caratinga",
            "state_id": "11"
        },
            {
            "id": "2152",
            "name": "Piedade de Ponte Nova",
            "state_id": "11"
        },
            {
            "id": "2153",
            "name": "Piedade do Rio Grande",
            "state_id": "11"
        },
            {
            "id": "2154",
            "name": "Piedade dos Gerais",
            "state_id": "11"
        },
            {
            "id": "2155",
            "name": "Pimenta",
            "state_id": "11"
        },
            {
            "id": "2156",
            "name": "Pingo-d`Água",
            "state_id": "11"
        },
            {
            "id": "2157",
            "name": "Pintópolis",
            "state_id": "11"
        },
            {
            "id": "2158",
            "name": "Piracema",
            "state_id": "11"
        },
            {
            "id": "2159",
            "name": "Pirajuba",
            "state_id": "11"
        },
            {
            "id": "2160",
            "name": "Piranga",
            "state_id": "11"
        },
            {
            "id": "2161",
            "name": "Piranguçu",
            "state_id": "11"
        },
            {
            "id": "2162",
            "name": "Piranguinho",
            "state_id": "11"
        },
            {
            "id": "2163",
            "name": "Pirapetinga",
            "state_id": "11"
        },
            {
            "id": "2164",
            "name": "Pirapora",
            "state_id": "11"
        },
            {
            "id": "2165",
            "name": "Piraúba",
            "state_id": "11"
        },
            {
            "id": "2166",
            "name": "Pitangui",
            "state_id": "11"
        },
            {
            "id": "2167",
            "name": "Piumhi",
            "state_id": "11"
        },
            {
            "id": "2168",
            "name": "Planura",
            "state_id": "11"
        },
            {
            "id": "2169",
            "name": "Poço Fundo",
            "state_id": "11"
        },
            {
            "id": "2170",
            "name": "Poços de Caldas",
            "state_id": "11"
        },
            {
            "id": "2171",
            "name": "Pocrane",
            "state_id": "11"
        },
            {
            "id": "2172",
            "name": "Pompéu",
            "state_id": "11"
        },
            {
            "id": "2173",
            "name": "Ponte Nova",
            "state_id": "11"
        },
            {
            "id": "2174",
            "name": "Ponto Chique",
            "state_id": "11"
        },
            {
            "id": "2175",
            "name": "Ponto dos Volantes",
            "state_id": "11"
        },
            {
            "id": "2176",
            "name": "Porteirinha",
            "state_id": "11"
        },
            {
            "id": "2177",
            "name": "Porto Firme",
            "state_id": "11"
        },
            {
            "id": "2178",
            "name": "Poté",
            "state_id": "11"
        },
            {
            "id": "2179",
            "name": "Pouso Alegre",
            "state_id": "11"
        },
            {
            "id": "2180",
            "name": "Pouso Alto",
            "state_id": "11"
        },
            {
            "id": "2181",
            "name": "Prados",
            "state_id": "11"
        },
            {
            "id": "2182",
            "name": "Prata",
            "state_id": "11"
        },
            {
            "id": "2183",
            "name": "Pratápolis",
            "state_id": "11"
        },
            {
            "id": "2184",
            "name": "Pratinha",
            "state_id": "11"
        },
            {
            "id": "2185",
            "name": "Presidente Bernardes",
            "state_id": "11"
        },
            {
            "id": "2186",
            "name": "Presidente Juscelino",
            "state_id": "11"
        },
            {
            "id": "2187",
            "name": "Presidente Kubitschek",
            "state_id": "11"
        },
            {
            "id": "2188",
            "name": "Presidente Olegário",
            "state_id": "11"
        },
            {
            "id": "2189",
            "name": "Prudente de Morais",
            "state_id": "11"
        },
            {
            "id": "2190",
            "name": "Quartel Geral",
            "state_id": "11"
        },
            {
            "id": "2191",
            "name": "Queluzito",
            "state_id": "11"
        },
            {
            "id": "2192",
            "name": "Raposos",
            "state_id": "11"
        },
            {
            "id": "2193",
            "name": "Raul Soares",
            "state_id": "11"
        },
            {
            "id": "2194",
            "name": "Recreio",
            "state_id": "11"
        },
            {
            "id": "2195",
            "name": "Reduto",
            "state_id": "11"
        },
            {
            "id": "2196",
            "name": "Resende Costa",
            "state_id": "11"
        },
            {
            "id": "2197",
            "name": "Resplendor",
            "state_id": "11"
        },
            {
            "id": "2198",
            "name": "Ressaquinha",
            "state_id": "11"
        },
            {
            "id": "2199",
            "name": "Riachinho",
            "state_id": "11"
        },
            {
            "id": "2200",
            "name": "Riacho dos Machados",
            "state_id": "11"
        },
            {
            "id": "2201",
            "name": "Ribeirão das Neves",
            "state_id": "11"
        },
            {
            "id": "2202",
            "name": "Ribeirão Vermelho",
            "state_id": "11"
        },
            {
            "id": "2203",
            "name": "Rio Acima",
            "state_id": "11"
        },
            {
            "id": "2204",
            "name": "Rio Casca",
            "state_id": "11"
        },
            {
            "id": "2205",
            "name": "Rio do Prado",
            "state_id": "11"
        },
            {
            "id": "2206",
            "name": "Rio Doce",
            "state_id": "11"
        },
            {
            "id": "2207",
            "name": "Rio Espera",
            "state_id": "11"
        },
            {
            "id": "2208",
            "name": "Rio Manso",
            "state_id": "11"
        },
            {
            "id": "2209",
            "name": "Rio Novo",
            "state_id": "11"
        },
            {
            "id": "2210",
            "name": "Rio Paranaíba",
            "state_id": "11"
        },
            {
            "id": "2211",
            "name": "Rio Pardo de Minas",
            "state_id": "11"
        },
            {
            "id": "2212",
            "name": "Rio Piracicaba",
            "state_id": "11"
        },
            {
            "id": "2213",
            "name": "Rio Pomba",
            "state_id": "11"
        },
            {
            "id": "2214",
            "name": "Rio Preto",
            "state_id": "11"
        },
            {
            "id": "2215",
            "name": "Rio Vermelho",
            "state_id": "11"
        },
            {
            "id": "2216",
            "name": "Ritápolis",
            "state_id": "11"
        },
            {
            "id": "2217",
            "name": "Rochedo de Minas",
            "state_id": "11"
        },
            {
            "id": "2218",
            "name": "Rodeiro",
            "state_id": "11"
        },
            {
            "id": "2219",
            "name": "Romaria",
            "state_id": "11"
        },
            {
            "id": "2220",
            "name": "Rosário da Limeira",
            "state_id": "11"
        },
            {
            "id": "2221",
            "name": "Rubelita",
            "state_id": "11"
        },
            {
            "id": "2222",
            "name": "Rubim",
            "state_id": "11"
        },
            {
            "id": "2223",
            "name": "Sabará",
            "state_id": "11"
        },
            {
            "id": "2224",
            "name": "Sabinópolis",
            "state_id": "11"
        },
            {
            "id": "2225",
            "name": "Sacramento",
            "state_id": "11"
        },
            {
            "id": "2226",
            "name": "Salinas",
            "state_id": "11"
        },
            {
            "id": "2227",
            "name": "Salto da Divisa",
            "state_id": "11"
        },
            {
            "id": "2228",
            "name": "Santa Bárbara",
            "state_id": "11"
        },
            {
            "id": "2229",
            "name": "Santa Bárbara do Leste",
            "state_id": "11"
        },
            {
            "id": "2230",
            "name": "Santa Bárbara do Monte Verde",
            "state_id": "11"
        },
            {
            "id": "2231",
            "name": "Santa Bárbara do Tugúrio",
            "state_id": "11"
        },
            {
            "id": "2232",
            "name": "Santa Cruz de Minas",
            "state_id": "11"
        },
            {
            "id": "2233",
            "name": "Santa Cruz de Salinas",
            "state_id": "11"
        },
            {
            "id": "2234",
            "name": "Santa Cruz do Escalvado",
            "state_id": "11"
        },
            {
            "id": "2235",
            "name": "Santa Efigênia de Minas",
            "state_id": "11"
        },
            {
            "id": "2236",
            "name": "Santa Fé de Minas",
            "state_id": "11"
        },
            {
            "id": "2237",
            "name": "Santa Helena de Minas",
            "state_id": "11"
        },
            {
            "id": "2238",
            "name": "Santa Juliana",
            "state_id": "11"
        },
            {
            "id": "2239",
            "name": "Santa Luzia",
            "state_id": "11"
        },
            {
            "id": "2240",
            "name": "Santa Margarida",
            "state_id": "11"
        },
            {
            "id": "2241",
            "name": "Santa Maria de Itabira",
            "state_id": "11"
        },
            {
            "id": "2242",
            "name": "Santa Maria do Salto",
            "state_id": "11"
        },
            {
            "id": "2243",
            "name": "Santa Maria do Suaçuí",
            "state_id": "11"
        },
            {
            "id": "2244",
            "name": "Santa Rita de Caldas",
            "state_id": "11"
        },
            {
            "id": "2245",
            "name": "Santa Rita de Ibitipoca",
            "state_id": "11"
        },
            {
            "id": "2246",
            "name": "Santa Rita de Jacutinga",
            "state_id": "11"
        },
            {
            "id": "2247",
            "name": "Santa Rita de Minas",
            "state_id": "11"
        },
            {
            "id": "2248",
            "name": "Santa Rita do Itueto",
            "state_id": "11"
        },
            {
            "id": "2249",
            "name": "Santa Rita do Sapucaí",
            "state_id": "11"
        },
            {
            "id": "2250",
            "name": "Santa Rosa da Serra",
            "state_id": "11"
        },
            {
            "id": "2251",
            "name": "Santa Vitória",
            "state_id": "11"
        },
            {
            "id": "2252",
            "name": "Santana da Vargem",
            "state_id": "11"
        },
            {
            "id": "2253",
            "name": "Santana de Cataguases",
            "state_id": "11"
        },
            {
            "id": "2254",
            "name": "Santana de Pirapama",
            "state_id": "11"
        },
            {
            "id": "2255",
            "name": "Santana do Deserto",
            "state_id": "11"
        },
            {
            "id": "2256",
            "name": "Santana do Garambéu",
            "state_id": "11"
        },
            {
            "id": "2257",
            "name": "Santana do Jacaré",
            "state_id": "11"
        },
            {
            "id": "2258",
            "name": "Santana do Manhuaçu",
            "state_id": "11"
        },
            {
            "id": "2259",
            "name": "Santana do Paraíso",
            "state_id": "11"
        },
            {
            "id": "2260",
            "name": "Santana do Riacho",
            "state_id": "11"
        },
            {
            "id": "2261",
            "name": "Santana dos Montes",
            "state_id": "11"
        },
            {
            "id": "2262",
            "name": "Santo Antônio do Amparo",
            "state_id": "11"
        },
            {
            "id": "2263",
            "name": "Santo Antônio do Aventureiro",
            "state_id": "11"
        },
            {
            "id": "2264",
            "name": "Santo Antônio do Grama",
            "state_id": "11"
        },
            {
            "id": "2265",
            "name": "Santo Antônio do Itambé",
            "state_id": "11"
        },
            {
            "id": "2266",
            "name": "Santo Antônio do Jacinto",
            "state_id": "11"
        },
            {
            "id": "2267",
            "name": "Santo Antônio do Monte",
            "state_id": "11"
        },
            {
            "id": "2268",
            "name": "Santo Antônio do Retiro",
            "state_id": "11"
        },
            {
            "id": "2269",
            "name": "Santo Antônio do Rio Abaixo",
            "state_id": "11"
        },
            {
            "id": "2270",
            "name": "Santo Hipólito",
            "state_id": "11"
        },
            {
            "id": "2271",
            "name": "Santos Dumont",
            "state_id": "11"
        },
            {
            "id": "2272",
            "name": "São Bento Abade",
            "state_id": "11"
        },
            {
            "id": "2273",
            "name": "São Brás do Suaçuí",
            "state_id": "11"
        },
            {
            "id": "2274",
            "name": "São Domingos das Dores",
            "state_id": "11"
        },
            {
            "id": "2275",
            "name": "São Domingos do Prata",
            "state_id": "11"
        },
            {
            "id": "2276",
            "name": "São Félix de Minas",
            "state_id": "11"
        },
            {
            "id": "2277",
            "name": "São Francisco",
            "state_id": "11"
        },
            {
            "id": "2278",
            "name": "São Francisco de Paula",
            "state_id": "11"
        },
            {
            "id": "2279",
            "name": "São Francisco de Sales",
            "state_id": "11"
        },
            {
            "id": "2280",
            "name": "São Francisco do Glória",
            "state_id": "11"
        },
            {
            "id": "2281",
            "name": "São Geraldo",
            "state_id": "11"
        },
            {
            "id": "2282",
            "name": "São Geraldo da Piedade",
            "state_id": "11"
        },
            {
            "id": "2283",
            "name": "São Geraldo do Baixio",
            "state_id": "11"
        },
            {
            "id": "2284",
            "name": "São Gonçalo do Abaeté",
            "state_id": "11"
        },
            {
            "id": "2285",
            "name": "São Gonçalo do Pará",
            "state_id": "11"
        },
            {
            "id": "2286",
            "name": "São Gonçalo do Rio Abaixo",
            "state_id": "11"
        },
            {
            "id": "2287",
            "name": "São Gonçalo do Rio Preto",
            "state_id": "11"
        },
            {
            "id": "2288",
            "name": "São Gonçalo do Sapucaí",
            "state_id": "11"
        },
            {
            "id": "2289",
            "name": "São Gotardo",
            "state_id": "11"
        },
            {
            "id": "2290",
            "name": "São João Batista do Glória",
            "state_id": "11"
        },
            {
            "id": "2291",
            "name": "São João da Lagoa",
            "state_id": "11"
        },
            {
            "id": "2292",
            "name": "São João da Mata",
            "state_id": "11"
        },
            {
            "id": "2293",
            "name": "São João da Ponte",
            "state_id": "11"
        },
            {
            "id": "2294",
            "name": "São João das Missões",
            "state_id": "11"
        },
            {
            "id": "2295",
            "name": "São João del Rei",
            "state_id": "11"
        },
            {
            "id": "2296",
            "name": "São João do Manhuaçu",
            "state_id": "11"
        },
            {
            "id": "2297",
            "name": "São João do Manteninha",
            "state_id": "11"
        },
            {
            "id": "2298",
            "name": "São João do Oriente",
            "state_id": "11"
        },
            {
            "id": "2299",
            "name": "São João do Pacuí",
            "state_id": "11"
        },
            {
            "id": "2300",
            "name": "São João do Paraíso",
            "state_id": "11"
        },
            {
            "id": "2301",
            "name": "São João Evangelista",
            "state_id": "11"
        },
            {
            "id": "2302",
            "name": "São João Nepomuceno",
            "state_id": "11"
        },
            {
            "id": "2303",
            "name": "São Joaquim de Bicas",
            "state_id": "11"
        },
            {
            "id": "2304",
            "name": "São José da Barra",
            "state_id": "11"
        },
            {
            "id": "2305",
            "name": "São José da Lapa",
            "state_id": "11"
        },
            {
            "id": "2306",
            "name": "São José da Safira",
            "state_id": "11"
        },
            {
            "id": "2307",
            "name": "São José da Varginha",
            "state_id": "11"
        },
            {
            "id": "2308",
            "name": "São José do Alegre",
            "state_id": "11"
        },
            {
            "id": "2309",
            "name": "São José do Divino",
            "state_id": "11"
        },
            {
            "id": "2310",
            "name": "São José do Goiabal",
            "state_id": "11"
        },
            {
            "id": "2311",
            "name": "São José do Jacuri",
            "state_id": "11"
        },
            {
            "id": "2312",
            "name": "São José do Mantimento",
            "state_id": "11"
        },
            {
            "id": "2313",
            "name": "São Lourenço",
            "state_id": "11"
        },
            {
            "id": "2314",
            "name": "São Miguel do Anta",
            "state_id": "11"
        },
            {
            "id": "2315",
            "name": "São Pedro da União",
            "state_id": "11"
        },
            {
            "id": "2316",
            "name": "São Pedro do Suaçuí",
            "state_id": "11"
        },
            {
            "id": "2317",
            "name": "São Pedro dos Ferros",
            "state_id": "11"
        },
            {
            "id": "2318",
            "name": "São Romão",
            "state_id": "11"
        },
            {
            "id": "2319",
            "name": "São Roque de Minas",
            "state_id": "11"
        },
            {
            "id": "2320",
            "name": "São Sebastião da Bela Vista",
            "state_id": "11"
        },
            {
            "id": "2321",
            "name": "São Sebastião da Vargem Alegre",
            "state_id": "11"
        },
            {
            "id": "2322",
            "name": "São Sebastião do Anta",
            "state_id": "11"
        },
            {
            "id": "2323",
            "name": "São Sebastião do Maranhão",
            "state_id": "11"
        },
            {
            "id": "2324",
            "name": "São Sebastião do Oeste",
            "state_id": "11"
        },
            {
            "id": "2325",
            "name": "São Sebastião do Paraíso",
            "state_id": "11"
        },
            {
            "id": "2326",
            "name": "São Sebastião do Rio Preto",
            "state_id": "11"
        },
            {
            "id": "2327",
            "name": "São Sebastião do Rio Verde",
            "state_id": "11"
        },
            {
            "id": "2328",
            "name": "São Thomé das Letras",
            "state_id": "11"
        },
            {
            "id": "2329",
            "name": "São Tiago",
            "state_id": "11"
        },
            {
            "id": "2330",
            "name": "São Tomás de Aquino",
            "state_id": "11"
        },
            {
            "id": "2331",
            "name": "São Vicente de Minas",
            "state_id": "11"
        },
            {
            "id": "2332",
            "name": "Sapucaí-Mirim",
            "state_id": "11"
        },
            {
            "id": "2333",
            "name": "Sardoá",
            "state_id": "11"
        },
            {
            "id": "2334",
            "name": "Sarzedo",
            "state_id": "11"
        },
            {
            "id": "2335",
            "name": "Sem-Peixe",
            "state_id": "11"
        },
            {
            "id": "2336",
            "name": "Senador Amaral",
            "state_id": "11"
        },
            {
            "id": "2337",
            "name": "Senador Cortes",
            "state_id": "11"
        },
            {
            "id": "2338",
            "name": "Senador Firmino",
            "state_id": "11"
        },
            {
            "id": "2339",
            "name": "Senador José Bento",
            "state_id": "11"
        },
            {
            "id": "2340",
            "name": "Senador Modestino Gonçalves",
            "state_id": "11"
        },
            {
            "id": "2341",
            "name": "Senhora de Oliveira",
            "state_id": "11"
        },
            {
            "id": "2342",
            "name": "Senhora do Porto",
            "state_id": "11"
        },
            {
            "id": "2343",
            "name": "Senhora dos Remédios",
            "state_id": "11"
        },
            {
            "id": "2344",
            "name": "Sericita",
            "state_id": "11"
        },
            {
            "id": "2345",
            "name": "Seritinga",
            "state_id": "11"
        },
            {
            "id": "2346",
            "name": "Serra Azul de Minas",
            "state_id": "11"
        },
            {
            "id": "2347",
            "name": "Serra da Saudade",
            "state_id": "11"
        },
            {
            "id": "2348",
            "name": "Serra do Salitre",
            "state_id": "11"
        },
            {
            "id": "2349",
            "name": "Serra dos Aimorés",
            "state_id": "11"
        },
            {
            "id": "2350",
            "name": "Serrania",
            "state_id": "11"
        },
            {
            "id": "2351",
            "name": "Serranópolis de Minas",
            "state_id": "11"
        },
            {
            "id": "2352",
            "name": "Serranos",
            "state_id": "11"
        },
            {
            "id": "2353",
            "name": "Serro",
            "state_id": "11"
        },
            {
            "id": "2354",
            "name": "Sete Lagoas",
            "state_id": "11"
        },
            {
            "id": "2355",
            "name": "Setubinha",
            "state_id": "11"
        },
            {
            "id": "2356",
            "name": "Silveirânia",
            "state_id": "11"
        },
            {
            "id": "2357",
            "name": "Silvianópolis",
            "state_id": "11"
        },
            {
            "id": "2358",
            "name": "Simão Pereira",
            "state_id": "11"
        },
            {
            "id": "2359",
            "name": "Simonésia",
            "state_id": "11"
        },
            {
            "id": "2360",
            "name": "Sobrália",
            "state_id": "11"
        },
            {
            "id": "2361",
            "name": "Soledade de Minas",
            "state_id": "11"
        },
            {
            "id": "2362",
            "name": "Tabuleiro",
            "state_id": "11"
        },
            {
            "id": "2363",
            "name": "Taiobeiras",
            "state_id": "11"
        },
            {
            "id": "2364",
            "name": "Taparuba",
            "state_id": "11"
        },
            {
            "id": "2365",
            "name": "Tapira",
            "state_id": "11"
        },
            {
            "id": "2366",
            "name": "Tapiraí",
            "state_id": "11"
        },
            {
            "id": "2367",
            "name": "Taquaraçu de Minas",
            "state_id": "11"
        },
            {
            "id": "2368",
            "name": "Tarumirim",
            "state_id": "11"
        },
            {
            "id": "2369",
            "name": "Teixeiras",
            "state_id": "11"
        },
            {
            "id": "2370",
            "name": "Teófilo Otoni",
            "state_id": "11"
        },
            {
            "id": "2371",
            "name": "Timóteo",
            "state_id": "11"
        },
            {
            "id": "2372",
            "name": "Tiradentes",
            "state_id": "11"
        },
            {
            "id": "2373",
            "name": "Tiros",
            "state_id": "11"
        },
            {
            "id": "2374",
            "name": "Tocantins",
            "state_id": "11"
        },
            {
            "id": "2375",
            "name": "Tocos do Moji",
            "state_id": "11"
        },
            {
            "id": "2376",
            "name": "Toledo",
            "state_id": "11"
        },
            {
            "id": "2377",
            "name": "Tombos",
            "state_id": "11"
        },
            {
            "id": "2378",
            "name": "Três Corações",
            "state_id": "11"
        },
            {
            "id": "2379",
            "name": "Três Marias",
            "state_id": "11"
        },
            {
            "id": "2380",
            "name": "Três Pontas",
            "state_id": "11"
        },
            {
            "id": "2381",
            "name": "Tumiritinga",
            "state_id": "11"
        },
            {
            "id": "2382",
            "name": "Tupaciguara",
            "state_id": "11"
        },
            {
            "id": "2383",
            "name": "Turmalina",
            "state_id": "11"
        },
            {
            "id": "2384",
            "name": "Turvolândia",
            "state_id": "11"
        },
            {
            "id": "2385",
            "name": "Ubá",
            "state_id": "11"
        },
            {
            "id": "2386",
            "name": "Ubaí",
            "state_id": "11"
        },
            {
            "id": "2387",
            "name": "Ubaporanga",
            "state_id": "11"
        },
            {
            "id": "2388",
            "name": "Uberaba",
            "state_id": "11"
        },
            {
            "id": "2389",
            "name": "Uberlândia",
            "state_id": "11"
        },
            {
            "id": "2390",
            "name": "Umburatiba",
            "state_id": "11"
        },
            {
            "id": "2391",
            "name": "Unaí",
            "state_id": "11"
        },
            {
            "id": "2392",
            "name": "União de Minas",
            "state_id": "11"
        },
            {
            "id": "2393",
            "name": "Uruana de Minas",
            "state_id": "11"
        },
            {
            "id": "2394",
            "name": "Urucânia",
            "state_id": "11"
        },
            {
            "id": "2395",
            "name": "Urucuia",
            "state_id": "11"
        },
            {
            "id": "2396",
            "name": "Vargem Alegre",
            "state_id": "11"
        },
            {
            "id": "2397",
            "name": "Vargem Bonita",
            "state_id": "11"
        },
            {
            "id": "2398",
            "name": "Vargem Grande do Rio Pardo",
            "state_id": "11"
        },
            {
            "id": "2399",
            "name": "Varginha",
            "state_id": "11"
        },
            {
            "id": "2400",
            "name": "Varjão de Minas",
            "state_id": "11"
        },
            {
            "id": "2401",
            "name": "Várzea da Palma",
            "state_id": "11"
        },
            {
            "id": "2402",
            "name": "Varzelândia",
            "state_id": "11"
        },
            {
            "id": "2403",
            "name": "Vazante",
            "state_id": "11"
        },
            {
            "id": "2404",
            "name": "Verdelândia",
            "state_id": "11"
        },
            {
            "id": "2405",
            "name": "Veredinha",
            "state_id": "11"
        },
            {
            "id": "2406",
            "name": "Veríssimo",
            "state_id": "11"
        },
            {
            "id": "2407",
            "name": "Vermelho Novo",
            "state_id": "11"
        },
            {
            "id": "2408",
            "name": "Vespasiano",
            "state_id": "11"
        },
            {
            "id": "2409",
            "name": "Viçosa",
            "state_id": "11"
        },
            {
            "id": "2410",
            "name": "Vieiras",
            "state_id": "11"
        },
            {
            "id": "2411",
            "name": "Virgem da Lapa",
            "state_id": "11"
        },
            {
            "id": "2412",
            "name": "Virgínia",
            "state_id": "11"
        },
            {
            "id": "2413",
            "name": "Virginópolis",
            "state_id": "11"
        },
            {
            "id": "2414",
            "name": "Virgolândia",
            "state_id": "11"
        },
            {
            "id": "2415",
            "name": "Visconde do Rio Branco",
            "state_id": "11"
        },
            {
            "id": "2416",
            "name": "Volta Grande",
            "state_id": "11"
        },
            {
            "id": "2417",
            "name": "Wenceslau Braz",
            "state_id": "11"
        },
            {
            "id": "2418",
            "name": "Abaetetuba",
            "state_id": "14"
        },
            {
            "id": "2419",
            "name": "Abel Figueiredo",
            "state_id": "14"
        },
            {
            "id": "2420",
            "name": "Acará",
            "state_id": "14"
        },
            {
            "id": "2421",
            "name": "Afuá",
            "state_id": "14"
        },
            {
            "id": "2422",
            "name": "Água Azul do Norte",
            "state_id": "14"
        },
            {
            "id": "2423",
            "name": "Alenquer",
            "state_id": "14"
        },
            {
            "id": "2424",
            "name": "Almeirim",
            "state_id": "14"
        },
            {
            "id": "2425",
            "name": "Altamira",
            "state_id": "14"
        },
            {
            "id": "2426",
            "name": "Anajás",
            "state_id": "14"
        },
            {
            "id": "2427",
            "name": "Ananindeua",
            "state_id": "14"
        },
            {
            "id": "2428",
            "name": "Anapu",
            "state_id": "14"
        },
            {
            "id": "2429",
            "name": "Augusto Corrêa",
            "state_id": "14"
        },
            {
            "id": "2430",
            "name": "Aurora do Pará",
            "state_id": "14"
        },
            {
            "id": "2431",
            "name": "Aveiro",
            "state_id": "14"
        },
            {
            "id": "2432",
            "name": "Bagre",
            "state_id": "14"
        },
            {
            "id": "2433",
            "name": "Baião",
            "state_id": "14"
        },
            {
            "id": "2434",
            "name": "Bannach",
            "state_id": "14"
        },
            {
            "id": "2435",
            "name": "Barcarena",
            "state_id": "14"
        },
            {
            "id": "2436",
            "name": "Belém",
            "state_id": "14"
        },
            {
            "id": "2437",
            "name": "Belterra",
            "state_id": "14"
        },
            {
            "id": "2438",
            "name": "Benevides",
            "state_id": "14"
        },
            {
            "id": "2439",
            "name": "Bom Jesus do Tocantins",
            "state_id": "14"
        },
            {
            "id": "2440",
            "name": "Bonito",
            "state_id": "14"
        },
            {
            "id": "2441",
            "name": "Bragança",
            "state_id": "14"
        },
            {
            "id": "2442",
            "name": "Brasil Novo",
            "state_id": "14"
        },
            {
            "id": "2443",
            "name": "Brejo Grande do Araguaia",
            "state_id": "14"
        },
            {
            "id": "2444",
            "name": "Breu Branco",
            "state_id": "14"
        },
            {
            "id": "2445",
            "name": "Breves",
            "state_id": "14"
        },
            {
            "id": "2446",
            "name": "Bujaru",
            "state_id": "14"
        },
            {
            "id": "2447",
            "name": "Cachoeira do Arari",
            "state_id": "14"
        },
            {
            "id": "2448",
            "name": "Cachoeira do Piriá",
            "state_id": "14"
        },
            {
            "id": "2449",
            "name": "Cametá",
            "state_id": "14"
        },
            {
            "id": "2450",
            "name": "Canaã dos Carajás",
            "state_id": "14"
        },
            {
            "id": "2451",
            "name": "Capanema",
            "state_id": "14"
        },
            {
            "id": "2452",
            "name": "Capitão Poço",
            "state_id": "14"
        },
            {
            "id": "2453",
            "name": "Castanhal",
            "state_id": "14"
        },
            {
            "id": "2454",
            "name": "Chaves",
            "state_id": "14"
        },
            {
            "id": "2455",
            "name": "Colares",
            "state_id": "14"
        },
            {
            "id": "2456",
            "name": "Conceição do Araguaia",
            "state_id": "14"
        },
            {
            "id": "2457",
            "name": "Concórdia do Pará",
            "state_id": "14"
        },
            {
            "id": "2458",
            "name": "Cumaru do Norte",
            "state_id": "14"
        },
            {
            "id": "2459",
            "name": "Curionópolis",
            "state_id": "14"
        },
            {
            "id": "2460",
            "name": "Curralinho",
            "state_id": "14"
        },
            {
            "id": "2461",
            "name": "Curuá",
            "state_id": "14"
        },
            {
            "id": "2462",
            "name": "Curuçá",
            "state_id": "14"
        },
            {
            "id": "2463",
            "name": "Dom Eliseu",
            "state_id": "14"
        },
            {
            "id": "2464",
            "name": "Eldorado dos Carajás",
            "state_id": "14"
        },
            {
            "id": "2465",
            "name": "Faro",
            "state_id": "14"
        },
            {
            "id": "2466",
            "name": "Floresta do Araguaia",
            "state_id": "14"
        },
            {
            "id": "2467",
            "name": "Garrafão do Norte",
            "state_id": "14"
        },
            {
            "id": "2468",
            "name": "Goianésia do Pará",
            "state_id": "14"
        },
            {
            "id": "2469",
            "name": "Gurupá",
            "state_id": "14"
        },
            {
            "id": "2470",
            "name": "Igarapé-Açu",
            "state_id": "14"
        },
            {
            "id": "2471",
            "name": "Igarapé-Miri",
            "state_id": "14"
        },
            {
            "id": "2472",
            "name": "Inhangapi",
            "state_id": "14"
        },
            {
            "id": "2473",
            "name": "Ipixuna do Pará",
            "state_id": "14"
        },
            {
            "id": "2474",
            "name": "Irituia",
            "state_id": "14"
        },
            {
            "id": "2475",
            "name": "Itaituba",
            "state_id": "14"
        },
            {
            "id": "2476",
            "name": "Itupiranga",
            "state_id": "14"
        },
            {
            "id": "2477",
            "name": "Jacareacanga",
            "state_id": "14"
        },
            {
            "id": "2478",
            "name": "Jacundá",
            "state_id": "14"
        },
            {
            "id": "2479",
            "name": "Juruti",
            "state_id": "14"
        },
            {
            "id": "2480",
            "name": "Limoeiro do Ajuru",
            "state_id": "14"
        },
            {
            "id": "2481",
            "name": "Mãe do Rio",
            "state_id": "14"
        },
            {
            "id": "2482",
            "name": "Magalhães Barata",
            "state_id": "14"
        },
            {
            "id": "2483",
            "name": "Marabá",
            "state_id": "14"
        },
            {
            "id": "2484",
            "name": "Maracanã",
            "state_id": "14"
        },
            {
            "id": "2485",
            "name": "Marapanim",
            "state_id": "14"
        },
            {
            "id": "2486",
            "name": "Marituba",
            "state_id": "14"
        },
            {
            "id": "2487",
            "name": "Medicilândia",
            "state_id": "14"
        },
            {
            "id": "2488",
            "name": "Melgaço",
            "state_id": "14"
        },
            {
            "id": "2489",
            "name": "Mocajuba",
            "state_id": "14"
        },
            {
            "id": "2490",
            "name": "Moju",
            "state_id": "14"
        },
            {
            "id": "2491",
            "name": "Monte Alegre",
            "state_id": "14"
        },
            {
            "id": "2492",
            "name": "Muaná",
            "state_id": "14"
        },
            {
            "id": "2493",
            "name": "Nova Esperança do Piriá",
            "state_id": "14"
        },
            {
            "id": "2494",
            "name": "Nova Ipixuna",
            "state_id": "14"
        },
            {
            "id": "2495",
            "name": "Nova Timboteua",
            "state_id": "14"
        },
            {
            "id": "2496",
            "name": "Novo Progresso",
            "state_id": "14"
        },
            {
            "id": "2497",
            "name": "Novo Repartimento",
            "state_id": "14"
        },
            {
            "id": "2498",
            "name": "Óbidos",
            "state_id": "14"
        },
            {
            "id": "2499",
            "name": "Oeiras do Pará",
            "state_id": "14"
        },
            {
            "id": "2500",
            "name": "Oriximiná",
            "state_id": "14"
        },
            {
            "id": "2501",
            "name": "Ourém",
            "state_id": "14"
        },
            {
            "id": "2502",
            "name": "Ourilândia do Norte",
            "state_id": "14"
        },
            {
            "id": "2503",
            "name": "Pacajá",
            "state_id": "14"
        },
            {
            "id": "2504",
            "name": "Palestina do Pará",
            "state_id": "14"
        },
            {
            "id": "2505",
            "name": "Paragominas",
            "state_id": "14"
        },
            {
            "id": "2506",
            "name": "Parauapebas",
            "state_id": "14"
        },
            {
            "id": "2507",
            "name": "Pau d`Arco",
            "state_id": "14"
        },
            {
            "id": "2508",
            "name": "Peixe-Boi",
            "state_id": "14"
        },
            {
            "id": "2509",
            "name": "Piçarra",
            "state_id": "14"
        },
            {
            "id": "2510",
            "name": "Placas",
            "state_id": "14"
        },
            {
            "id": "2511",
            "name": "Ponta de Pedras",
            "state_id": "14"
        },
            {
            "id": "2512",
            "name": "Portel",
            "state_id": "14"
        },
            {
            "id": "2513",
            "name": "Porto de Moz",
            "state_id": "14"
        },
            {
            "id": "2514",
            "name": "Prainha",
            "state_id": "14"
        },
            {
            "id": "2515",
            "name": "Primavera",
            "state_id": "14"
        },
            {
            "id": "2516",
            "name": "Quatipuru",
            "state_id": "14"
        },
            {
            "id": "2517",
            "name": "Redenção",
            "state_id": "14"
        },
            {
            "id": "2518",
            "name": "Rio Maria",
            "state_id": "14"
        },
            {
            "id": "2519",
            "name": "Rondon do Pará",
            "state_id": "14"
        },
            {
            "id": "2520",
            "name": "Rurópolis",
            "state_id": "14"
        },
            {
            "id": "2521",
            "name": "Salinópolis",
            "state_id": "14"
        },
            {
            "id": "2522",
            "name": "Salvaterra",
            "state_id": "14"
        },
            {
            "id": "2523",
            "name": "Santa Bárbara do Pará",
            "state_id": "14"
        },
            {
            "id": "2524",
            "name": "Santa Cruz do Arari",
            "state_id": "14"
        },
            {
            "id": "2525",
            "name": "Santa Isabel do Pará",
            "state_id": "14"
        },
            {
            "id": "2526",
            "name": "Santa Luzia do Pará",
            "state_id": "14"
        },
            {
            "id": "2527",
            "name": "Santa Maria das Barreiras",
            "state_id": "14"
        },
            {
            "id": "2528",
            "name": "Santa Maria do Pará",
            "state_id": "14"
        },
            {
            "id": "2529",
            "name": "Santana do Araguaia",
            "state_id": "14"
        },
            {
            "id": "2530",
            "name": "Santarém",
            "state_id": "14"
        },
            {
            "id": "2531",
            "name": "Santarém Novo",
            "state_id": "14"
        },
            {
            "id": "2532",
            "name": "Santo Antônio do Tauá",
            "state_id": "14"
        },
            {
            "id": "2533",
            "name": "São Caetano de Odivelas",
            "state_id": "14"
        },
            {
            "id": "2534",
            "name": "São Domingos do Araguaia",
            "state_id": "14"
        },
            {
            "id": "2535",
            "name": "São Domingos do Capim",
            "state_id": "14"
        },
            {
            "id": "2536",
            "name": "São Félix do Xingu",
            "state_id": "14"
        },
            {
            "id": "2537",
            "name": "São Francisco do Pará",
            "state_id": "14"
        },
            {
            "id": "2538",
            "name": "São Geraldo do Araguaia",
            "state_id": "14"
        },
            {
            "id": "2539",
            "name": "São João da Ponta",
            "state_id": "14"
        },
            {
            "id": "2540",
            "name": "São João de Pirabas",
            "state_id": "14"
        },
            {
            "id": "2541",
            "name": "São João do Araguaia",
            "state_id": "14"
        },
            {
            "id": "2542",
            "name": "São Miguel do Guamá",
            "state_id": "14"
        },
            {
            "id": "2543",
            "name": "São Sebastião da Boa Vista",
            "state_id": "14"
        },
            {
            "id": "2544",
            "name": "Sapucaia",
            "state_id": "14"
        },
            {
            "id": "2545",
            "name": "Senador José Porfírio",
            "state_id": "14"
        },
            {
            "id": "2546",
            "name": "Soure",
            "state_id": "14"
        },
            {
            "id": "2547",
            "name": "Tailândia",
            "state_id": "14"
        },
            {
            "id": "2548",
            "name": "Terra Alta",
            "state_id": "14"
        },
            {
            "id": "2549",
            "name": "Terra Santa",
            "state_id": "14"
        },
            {
            "id": "2550",
            "name": "Tomé-Açu",
            "state_id": "14"
        },
            {
            "id": "2551",
            "name": "Tracuateua",
            "state_id": "14"
        },
            {
            "id": "2552",
            "name": "Trairão",
            "state_id": "14"
        },
            {
            "id": "2553",
            "name": "Tucumã",
            "state_id": "14"
        },
            {
            "id": "2554",
            "name": "Tucuruí",
            "state_id": "14"
        },
            {
            "id": "2555",
            "name": "Ulianópolis",
            "state_id": "14"
        },
            {
            "id": "2556",
            "name": "Uruará",
            "state_id": "14"
        },
            {
            "id": "2557",
            "name": "Vigia",
            "state_id": "14"
        },
            {
            "id": "2558",
            "name": "Viseu",
            "state_id": "14"
        },
            {
            "id": "2559",
            "name": "Vitória do Xingu",
            "state_id": "14"
        },
            {
            "id": "2560",
            "name": "Xinguara",
            "state_id": "14"
        },
            {
            "id": "2561",
            "name": "Água Branca",
            "state_id": "15"
        },
            {
            "id": "2562",
            "name": "Aguiar",
            "state_id": "15"
        },
            {
            "id": "2563",
            "name": "Alagoa Grande",
            "state_id": "15"
        },
            {
            "id": "2564",
            "name": "Alagoa Nova",
            "state_id": "15"
        },
            {
            "id": "2565",
            "name": "Alagoinha",
            "state_id": "15"
        },
            {
            "id": "2566",
            "name": "Alcantil",
            "state_id": "15"
        },
            {
            "id": "2567",
            "name": "Algodão de Jandaíra",
            "state_id": "15"
        },
            {
            "id": "2568",
            "name": "Alhandra",
            "state_id": "15"
        },
            {
            "id": "2569",
            "name": "Amparo",
            "state_id": "15"
        },
            {
            "id": "2570",
            "name": "Aparecida",
            "state_id": "15"
        },
            {
            "id": "2571",
            "name": "Araçagi",
            "state_id": "15"
        },
            {
            "id": "2572",
            "name": "Arara",
            "state_id": "15"
        },
            {
            "id": "2573",
            "name": "Araruna",
            "state_id": "15"
        },
            {
            "id": "2574",
            "name": "Areia",
            "state_id": "15"
        },
            {
            "id": "2575",
            "name": "Areia de Baraúnas",
            "state_id": "15"
        },
            {
            "id": "2576",
            "name": "Areial",
            "state_id": "15"
        },
            {
            "id": "2577",
            "name": "Aroeiras",
            "state_id": "15"
        },
            {
            "id": "2578",
            "name": "Assunção",
            "state_id": "15"
        },
            {
            "id": "2579",
            "name": "Baía da Traição",
            "state_id": "15"
        },
            {
            "id": "2580",
            "name": "Bananeiras",
            "state_id": "15"
        },
            {
            "id": "2581",
            "name": "Baraúna",
            "state_id": "15"
        },
            {
            "id": "2582",
            "name": "Barra de Santa Rosa",
            "state_id": "15"
        },
            {
            "id": "2583",
            "name": "Barra de Santana",
            "state_id": "15"
        },
            {
            "id": "2584",
            "name": "Barra de São Miguel",
            "state_id": "15"
        },
            {
            "id": "2585",
            "name": "Bayeux",
            "state_id": "15"
        },
            {
            "id": "2586",
            "name": "Belém",
            "state_id": "15"
        },
            {
            "id": "2587",
            "name": "Belém do Brejo do Cruz",
            "state_id": "15"
        },
            {
            "id": "2588",
            "name": "Bernardino Batista",
            "state_id": "15"
        },
            {
            "id": "2589",
            "name": "Boa Ventura",
            "state_id": "15"
        },
            {
            "id": "2590",
            "name": "Boa Vista",
            "state_id": "15"
        },
            {
            "id": "2591",
            "name": "Bom Jesus",
            "state_id": "15"
        },
            {
            "id": "2592",
            "name": "Bom Sucesso",
            "state_id": "15"
        },
            {
            "id": "2593",
            "name": "Bonito de Santa Fé",
            "state_id": "15"
        },
            {
            "id": "2594",
            "name": "Boqueirão",
            "state_id": "15"
        },
            {
            "id": "2595",
            "name": "Borborema",
            "state_id": "15"
        },
            {
            "id": "2596",
            "name": "Brejo do Cruz",
            "state_id": "15"
        },
            {
            "id": "2597",
            "name": "Brejo dos Santos",
            "state_id": "15"
        },
            {
            "id": "2598",
            "name": "Caaporã",
            "state_id": "15"
        },
            {
            "id": "2599",
            "name": "Cabaceiras",
            "state_id": "15"
        },
            {
            "id": "2600",
            "name": "Cabedelo",
            "state_id": "15"
        },
            {
            "id": "2601",
            "name": "Cachoeira dos Índios",
            "state_id": "15"
        },
            {
            "id": "2602",
            "name": "Cacimba de Areia",
            "state_id": "15"
        },
            {
            "id": "2603",
            "name": "Cacimba de Dentro",
            "state_id": "15"
        },
            {
            "id": "2604",
            "name": "Cacimbas",
            "state_id": "15"
        },
            {
            "id": "2605",
            "name": "Caiçara",
            "state_id": "15"
        },
            {
            "id": "2606",
            "name": "Cajazeiras",
            "state_id": "15"
        },
            {
            "id": "2607",
            "name": "Cajazeirinhas",
            "state_id": "15"
        },
            {
            "id": "2608",
            "name": "Caldas Brandão",
            "state_id": "15"
        },
            {
            "id": "2609",
            "name": "Camalaú",
            "state_id": "15"
        },
            {
            "id": "2610",
            "name": "Campina Grande",
            "state_id": "15"
        },
            {
            "id": "2611",
            "name": "Campo de Santana",
            "state_id": "15"
        },
            {
            "id": "2612",
            "name": "Capim",
            "state_id": "15"
        },
            {
            "id": "2613",
            "name": "Caraúbas",
            "state_id": "15"
        },
            {
            "id": "2614",
            "name": "Carrapateira",
            "state_id": "15"
        },
            {
            "id": "2615",
            "name": "Casserengue",
            "state_id": "15"
        },
            {
            "id": "2616",
            "name": "Catingueira",
            "state_id": "15"
        },
            {
            "id": "2617",
            "name": "Catolé do Rocha",
            "state_id": "15"
        },
            {
            "id": "2618",
            "name": "Caturité",
            "state_id": "15"
        },
            {
            "id": "2619",
            "name": "Conceição",
            "state_id": "15"
        },
            {
            "id": "2620",
            "name": "Condado",
            "state_id": "15"
        },
            {
            "id": "2621",
            "name": "Conde",
            "state_id": "15"
        },
            {
            "id": "2622",
            "name": "Congo",
            "state_id": "15"
        },
            {
            "id": "2623",
            "name": "Coremas",
            "state_id": "15"
        },
            {
            "id": "2624",
            "name": "Coxixola",
            "state_id": "15"
        },
            {
            "id": "2625",
            "name": "Cruz do Espírito Santo",
            "state_id": "15"
        },
            {
            "id": "2626",
            "name": "Cubati",
            "state_id": "15"
        },
            {
            "id": "2627",
            "name": "Cuité",
            "state_id": "15"
        },
            {
            "id": "2628",
            "name": "Cuité de Mamanguape",
            "state_id": "15"
        },
            {
            "id": "2629",
            "name": "Cuitegi",
            "state_id": "15"
        },
            {
            "id": "2630",
            "name": "Curral de Cima",
            "state_id": "15"
        },
            {
            "id": "2631",
            "name": "Curral Velho",
            "state_id": "15"
        },
            {
            "id": "2632",
            "name": "Damião",
            "state_id": "15"
        },
            {
            "id": "2633",
            "name": "Desterro",
            "state_id": "15"
        },
            {
            "id": "2634",
            "name": "Diamante",
            "state_id": "15"
        },
            {
            "id": "2635",
            "name": "Dona Inês",
            "state_id": "15"
        },
            {
            "id": "2636",
            "name": "Duas Estradas",
            "state_id": "15"
        },
            {
            "id": "2637",
            "name": "Emas",
            "state_id": "15"
        },
            {
            "id": "2638",
            "name": "Esperança",
            "state_id": "15"
        },
            {
            "id": "2639",
            "name": "Fagundes",
            "state_id": "15"
        },
            {
            "id": "2640",
            "name": "Frei Martinho",
            "state_id": "15"
        },
            {
            "id": "2641",
            "name": "Gado Bravo",
            "state_id": "15"
        },
            {
            "id": "2642",
            "name": "Guarabira",
            "state_id": "15"
        },
            {
            "id": "2643",
            "name": "Gurinhém",
            "state_id": "15"
        },
            {
            "id": "2644",
            "name": "Gurjão",
            "state_id": "15"
        },
            {
            "id": "2645",
            "name": "Ibiara",
            "state_id": "15"
        },
            {
            "id": "2646",
            "name": "Igaracy",
            "state_id": "15"
        },
            {
            "id": "2647",
            "name": "Imaculada",
            "state_id": "15"
        },
            {
            "id": "2648",
            "name": "Ingá",
            "state_id": "15"
        },
            {
            "id": "2649",
            "name": "Itabaiana",
            "state_id": "15"
        },
            {
            "id": "2650",
            "name": "Itaporanga",
            "state_id": "15"
        },
            {
            "id": "2651",
            "name": "Itapororoca",
            "state_id": "15"
        },
            {
            "id": "2652",
            "name": "Itatuba",
            "state_id": "15"
        },
            {
            "id": "2653",
            "name": "Jacaraú",
            "state_id": "15"
        },
            {
            "id": "2654",
            "name": "Jericó",
            "state_id": "15"
        },
            {
            "id": "2655",
            "name": "João Pessoa",
            "state_id": "15"
        },
            {
            "id": "2656",
            "name": "Juarez Távora",
            "state_id": "15"
        },
            {
            "id": "2657",
            "name": "Juazeirinho",
            "state_id": "15"
        },
            {
            "id": "2658",
            "name": "Junco do Seridó",
            "state_id": "15"
        },
            {
            "id": "2659",
            "name": "Juripiranga",
            "state_id": "15"
        },
            {
            "id": "2660",
            "name": "Juru",
            "state_id": "15"
        },
            {
            "id": "2661",
            "name": "Lagoa",
            "state_id": "15"
        },
            {
            "id": "2662",
            "name": "Lagoa de Dentro",
            "state_id": "15"
        },
            {
            "id": "2663",
            "name": "Lagoa Seca",
            "state_id": "15"
        },
            {
            "id": "2664",
            "name": "Lastro",
            "state_id": "15"
        },
            {
            "id": "2665",
            "name": "Livramento",
            "state_id": "15"
        },
            {
            "id": "2666",
            "name": "Logradouro",
            "state_id": "15"
        },
            {
            "id": "2667",
            "name": "Lucena",
            "state_id": "15"
        },
            {
            "id": "2668",
            "name": "Mãe d`Água",
            "state_id": "15"
        },
            {
            "id": "2669",
            "name": "Malta",
            "state_id": "15"
        },
            {
            "id": "2670",
            "name": "Mamanguape",
            "state_id": "15"
        },
            {
            "id": "2671",
            "name": "Manaíra",
            "state_id": "15"
        },
            {
            "id": "2672",
            "name": "Marcação",
            "state_id": "15"
        },
            {
            "id": "2673",
            "name": "Mari",
            "state_id": "15"
        },
            {
            "id": "2674",
            "name": "Marizópolis",
            "state_id": "15"
        },
            {
            "id": "2675",
            "name": "Massaranduba",
            "state_id": "15"
        },
            {
            "id": "2676",
            "name": "Mataraca",
            "state_id": "15"
        },
            {
            "id": "2677",
            "name": "Matinhas",
            "state_id": "15"
        },
            {
            "id": "2678",
            "name": "Mato Grosso",
            "state_id": "15"
        },
            {
            "id": "2679",
            "name": "Maturéia",
            "state_id": "15"
        },
            {
            "id": "2680",
            "name": "Mogeiro",
            "state_id": "15"
        },
            {
            "id": "2681",
            "name": "Montadas",
            "state_id": "15"
        },
            {
            "id": "2682",
            "name": "Monte Horebe",
            "state_id": "15"
        },
            {
            "id": "2683",
            "name": "Monteiro",
            "state_id": "15"
        },
            {
            "id": "2684",
            "name": "Mulungu",
            "state_id": "15"
        },
            {
            "id": "2685",
            "name": "Natuba",
            "state_id": "15"
        },
            {
            "id": "2686",
            "name": "Nazarezinho",
            "state_id": "15"
        },
            {
            "id": "2687",
            "name": "Nova Floresta",
            "state_id": "15"
        },
            {
            "id": "2688",
            "name": "Nova Olinda",
            "state_id": "15"
        },
            {
            "id": "2689",
            "name": "Nova Palmeira",
            "state_id": "15"
        },
            {
            "id": "2690",
            "name": "Olho d`Água",
            "state_id": "15"
        },
            {
            "id": "2691",
            "name": "Olivedos",
            "state_id": "15"
        },
            {
            "id": "2692",
            "name": "Ouro Velho",
            "state_id": "15"
        },
            {
            "id": "2693",
            "name": "Parari",
            "state_id": "15"
        },
            {
            "id": "2694",
            "name": "Passagem",
            "state_id": "15"
        },
            {
            "id": "2695",
            "name": "Patos",
            "state_id": "15"
        },
            {
            "id": "2696",
            "name": "Paulista",
            "state_id": "15"
        },
            {
            "id": "2697",
            "name": "Pedra Branca",
            "state_id": "15"
        },
            {
            "id": "2698",
            "name": "Pedra Lavrada",
            "state_id": "15"
        },
            {
            "id": "2699",
            "name": "Pedras de Fogo",
            "state_id": "15"
        },
            {
            "id": "2700",
            "name": "Pedro Régis",
            "state_id": "15"
        },
            {
            "id": "2701",
            "name": "Piancó",
            "state_id": "15"
        },
            {
            "id": "2702",
            "name": "Picuí",
            "state_id": "15"
        },
            {
            "id": "2703",
            "name": "Pilar",
            "state_id": "15"
        },
            {
            "id": "2704",
            "name": "Pilões",
            "state_id": "15"
        },
            {
            "id": "2705",
            "name": "Pilõezinhos",
            "state_id": "15"
        },
            {
            "id": "2706",
            "name": "Pirpirituba",
            "state_id": "15"
        },
            {
            "id": "2707",
            "name": "Pitimbu",
            "state_id": "15"
        },
            {
            "id": "2708",
            "name": "Pocinhos",
            "state_id": "15"
        },
            {
            "id": "2709",
            "name": "Poço Dantas",
            "state_id": "15"
        },
            {
            "id": "2710",
            "name": "Poço de José de Moura",
            "state_id": "15"
        },
            {
            "id": "2711",
            "name": "Pombal",
            "state_id": "15"
        },
            {
            "id": "2712",
            "name": "Prata",
            "state_id": "15"
        },
            {
            "id": "2713",
            "name": "Princesa Isabel",
            "state_id": "15"
        },
            {
            "id": "2714",
            "name": "Puxinanã",
            "state_id": "15"
        },
            {
            "id": "2715",
            "name": "Queimadas",
            "state_id": "15"
        },
            {
            "id": "2716",
            "name": "Quixabá",
            "state_id": "15"
        },
            {
            "id": "2717",
            "name": "Remígio",
            "state_id": "15"
        },
            {
            "id": "2718",
            "name": "Riachão",
            "state_id": "15"
        },
            {
            "id": "2719",
            "name": "Riachão do Bacamarte",
            "state_id": "15"
        },
            {
            "id": "2720",
            "name": "Riachão do Poço",
            "state_id": "15"
        },
            {
            "id": "2721",
            "name": "Riacho de Santo Antônio",
            "state_id": "15"
        },
            {
            "id": "2722",
            "name": "Riacho dos Cavalos",
            "state_id": "15"
        },
            {
            "id": "2723",
            "name": "Rio Tinto",
            "state_id": "15"
        },
            {
            "id": "2724",
            "name": "Salgadinho",
            "state_id": "15"
        },
            {
            "id": "2725",
            "name": "Salgado de São Félix",
            "state_id": "15"
        },
            {
            "id": "2726",
            "name": "Santa Cecília",
            "state_id": "15"
        },
            {
            "id": "2727",
            "name": "Santa Cruz",
            "state_id": "15"
        },
            {
            "id": "2728",
            "name": "Santa Helena",
            "state_id": "15"
        },
            {
            "id": "2729",
            "name": "Santa Inês",
            "state_id": "15"
        },
            {
            "id": "2730",
            "name": "Santa Luzia",
            "state_id": "15"
        },
            {
            "id": "2731",
            "name": "Santa Rita",
            "state_id": "15"
        },
            {
            "id": "2732",
            "name": "Santa Teresinha",
            "state_id": "15"
        },
            {
            "id": "2733",
            "name": "Santana de Mangueira",
            "state_id": "15"
        },
            {
            "id": "2734",
            "name": "Santana dos Garrotes",
            "state_id": "15"
        },
            {
            "id": "2735",
            "name": "Santarém",
            "state_id": "15"
        },
            {
            "id": "2736",
            "name": "Santo André",
            "state_id": "15"
        },
            {
            "id": "2737",
            "name": "São Bentinho",
            "state_id": "15"
        },
            {
            "id": "2738",
            "name": "São Bento",
            "state_id": "15"
        },
            {
            "id": "2739",
            "name": "São Domingos de Pombal",
            "state_id": "15"
        },
            {
            "id": "2740",
            "name": "São Domingos do Cariri",
            "state_id": "15"
        },
            {
            "id": "2741",
            "name": "São Francisco",
            "state_id": "15"
        },
            {
            "id": "2742",
            "name": "São João do Cariri",
            "state_id": "15"
        },
            {
            "id": "2743",
            "name": "São João do Rio do Peixe",
            "state_id": "15"
        },
            {
            "id": "2744",
            "name": "São João do Tigre",
            "state_id": "15"
        },
            {
            "id": "2745",
            "name": "São José da Lagoa Tapada",
            "state_id": "15"
        },
            {
            "id": "2746",
            "name": "São José de Caiana",
            "state_id": "15"
        },
            {
            "id": "2747",
            "name": "São José de Espinharas",
            "state_id": "15"
        },
            {
            "id": "2748",
            "name": "São José de Piranhas",
            "state_id": "15"
        },
            {
            "id": "2749",
            "name": "São José de Princesa",
            "state_id": "15"
        },
            {
            "id": "2750",
            "name": "São José do Bonfim",
            "state_id": "15"
        },
            {
            "id": "2751",
            "name": "São José do Brejo do Cruz",
            "state_id": "15"
        },
            {
            "id": "2752",
            "name": "São José do Sabugi",
            "state_id": "15"
        },
            {
            "id": "2753",
            "name": "São José dos Cordeiros",
            "state_id": "15"
        },
            {
            "id": "2754",
            "name": "São José dos Ramos",
            "state_id": "15"
        },
            {
            "id": "2755",
            "name": "São Mamede",
            "state_id": "15"
        },
            {
            "id": "2756",
            "name": "São Miguel de Taipu",
            "state_id": "15"
        },
            {
            "id": "2757",
            "name": "São Sebastião de Lagoa de Roça",
            "state_id": "15"
        },
            {
            "id": "2758",
            "name": "São Sebastião do Umbuzeiro",
            "state_id": "15"
        },
            {
            "id": "2759",
            "name": "Sapé",
            "state_id": "15"
        },
            {
            "id": "2760",
            "name": "Seridó",
            "state_id": "15"
        },
            {
            "id": "2761",
            "name": "Serra Branca",
            "state_id": "15"
        },
            {
            "id": "2762",
            "name": "Serra da Raiz",
            "state_id": "15"
        },
            {
            "id": "2763",
            "name": "Serra Grande",
            "state_id": "15"
        },
            {
            "id": "2764",
            "name": "Serra Redonda",
            "state_id": "15"
        },
            {
            "id": "2765",
            "name": "Serraria",
            "state_id": "15"
        },
            {
            "id": "2766",
            "name": "Sertãozinho",
            "state_id": "15"
        },
            {
            "id": "2767",
            "name": "Sobrado",
            "state_id": "15"
        },
            {
            "id": "2768",
            "name": "Solânea",
            "state_id": "15"
        },
            {
            "id": "2769",
            "name": "Soledade",
            "state_id": "15"
        },
            {
            "id": "2770",
            "name": "Sossêgo",
            "state_id": "15"
        },
            {
            "id": "2771",
            "name": "Sousa",
            "state_id": "15"
        },
            {
            "id": "2772",
            "name": "Sumé",
            "state_id": "15"
        },
            {
            "id": "2773",
            "name": "Taperoá",
            "state_id": "15"
        },
            {
            "id": "2774",
            "name": "Tavares",
            "state_id": "15"
        },
            {
            "id": "2775",
            "name": "Teixeira",
            "state_id": "15"
        },
            {
            "id": "2776",
            "name": "Tenório",
            "state_id": "15"
        },
            {
            "id": "2777",
            "name": "Triunfo",
            "state_id": "15"
        },
            {
            "id": "2778",
            "name": "Uiraúna",
            "state_id": "15"
        },
            {
            "id": "2779",
            "name": "Umbuzeiro",
            "state_id": "15"
        },
            {
            "id": "2780",
            "name": "Várzea",
            "state_id": "15"
        },
            {
            "id": "2781",
            "name": "Vieirópolis",
            "state_id": "15"
        },
            {
            "id": "2782",
            "name": "Vista Serrana",
            "state_id": "15"
        },
            {
            "id": "2783",
            "name": "Zabelê",
            "state_id": "15"
        },
            {
            "id": "2784",
            "name": "Abatiá",
            "state_id": "18"
        },
            {
            "id": "2785",
            "name": "Adrianópolis",
            "state_id": "18"
        },
            {
            "id": "2786",
            "name": "Agudos do Sul",
            "state_id": "18"
        },
            {
            "id": "2787",
            "name": "Almirante Tamandaré",
            "state_id": "18"
        },
            {
            "id": "2788",
            "name": "Altamira do Paraná",
            "state_id": "18"
        },
            {
            "id": "2789",
            "name": "Alto Paraíso",
            "state_id": "18"
        },
            {
            "id": "2790",
            "name": "Alto Paraná",
            "state_id": "18"
        },
            {
            "id": "2791",
            "name": "Alto Piquiri",
            "state_id": "18"
        },
            {
            "id": "2792",
            "name": "Altônia",
            "state_id": "18"
        },
            {
            "id": "2793",
            "name": "Alvorada do Sul",
            "state_id": "18"
        },
            {
            "id": "2794",
            "name": "Amaporã",
            "state_id": "18"
        },
            {
            "id": "2795",
            "name": "Ampére",
            "state_id": "18"
        },
            {
            "id": "2796",
            "name": "Anahy",
            "state_id": "18"
        },
            {
            "id": "2797",
            "name": "Andirá",
            "state_id": "18"
        },
            {
            "id": "2798",
            "name": "Ângulo",
            "state_id": "18"
        },
            {
            "id": "2799",
            "name": "Antonina",
            "state_id": "18"
        },
            {
            "id": "2800",
            "name": "Antônio Olinto",
            "state_id": "18"
        },
            {
            "id": "2801",
            "name": "Apucarana",
            "state_id": "18"
        },
            {
            "id": "2802",
            "name": "Arapongas",
            "state_id": "18"
        },
            {
            "id": "2803",
            "name": "Arapoti",
            "state_id": "18"
        },
            {
            "id": "2804",
            "name": "Arapuã",
            "state_id": "18"
        },
            {
            "id": "2805",
            "name": "Araruna",
            "state_id": "18"
        },
            {
            "id": "2806",
            "name": "Araucária",
            "state_id": "18"
        },
            {
            "id": "2807",
            "name": "Ariranha do Ivaí",
            "state_id": "18"
        },
            {
            "id": "2808",
            "name": "Assaí",
            "state_id": "18"
        },
            {
            "id": "2809",
            "name": "Assis Chateaubriand",
            "state_id": "18"
        },
            {
            "id": "2810",
            "name": "Astorga",
            "state_id": "18"
        },
            {
            "id": "2811",
            "name": "Atalaia",
            "state_id": "18"
        },
            {
            "id": "2812",
            "name": "Balsa Nova",
            "state_id": "18"
        },
            {
            "id": "2813",
            "name": "Bandeirantes",
            "state_id": "18"
        },
            {
            "id": "2814",
            "name": "Barbosa Ferraz",
            "state_id": "18"
        },
            {
            "id": "2815",
            "name": "Barra do Jacaré",
            "state_id": "18"
        },
            {
            "id": "2816",
            "name": "Barracão",
            "state_id": "18"
        },
            {
            "id": "2817",
            "name": "Bela Vista da Caroba",
            "state_id": "18"
        },
            {
            "id": "2818",
            "name": "Bela Vista do Paraíso",
            "state_id": "18"
        },
            {
            "id": "2819",
            "name": "Bituruna",
            "state_id": "18"
        },
            {
            "id": "2820",
            "name": "Boa Esperança",
            "state_id": "18"
        },
            {
            "id": "2821",
            "name": "Boa Esperança do Iguaçu",
            "state_id": "18"
        },
            {
            "id": "2822",
            "name": "Boa Ventura de São Roque",
            "state_id": "18"
        },
            {
            "id": "2823",
            "name": "Boa Vista da Aparecida",
            "state_id": "18"
        },
            {
            "id": "2824",
            "name": "Bocaiúva do Sul",
            "state_id": "18"
        },
            {
            "id": "2825",
            "name": "Bom Jesus do Sul",
            "state_id": "18"
        },
            {
            "id": "2826",
            "name": "Bom Sucesso",
            "state_id": "18"
        },
            {
            "id": "2827",
            "name": "Bom Sucesso do Sul",
            "state_id": "18"
        },
            {
            "id": "2828",
            "name": "Borrazópolis",
            "state_id": "18"
        },
            {
            "id": "2829",
            "name": "Braganey",
            "state_id": "18"
        },
            {
            "id": "2830",
            "name": "Brasilândia do Sul",
            "state_id": "18"
        },
            {
            "id": "2831",
            "name": "Cafeara",
            "state_id": "18"
        },
            {
            "id": "2832",
            "name": "Cafelândia",
            "state_id": "18"
        },
            {
            "id": "2833",
            "name": "Cafezal do Sul",
            "state_id": "18"
        },
            {
            "id": "2834",
            "name": "Califórnia",
            "state_id": "18"
        },
            {
            "id": "2835",
            "name": "Cambará",
            "state_id": "18"
        },
            {
            "id": "2836",
            "name": "Cambé",
            "state_id": "18"
        },
            {
            "id": "2837",
            "name": "Cambira",
            "state_id": "18"
        },
            {
            "id": "2838",
            "name": "Campina da Lagoa",
            "state_id": "18"
        },
            {
            "id": "2839",
            "name": "Campina do Simão",
            "state_id": "18"
        },
            {
            "id": "2840",
            "name": "Campina Grande do Sul",
            "state_id": "18"
        },
            {
            "id": "2841",
            "name": "Campo Bonito",
            "state_id": "18"
        },
            {
            "id": "2842",
            "name": "Campo do Tenente",
            "state_id": "18"
        },
            {
            "id": "2843",
            "name": "Campo Largo",
            "state_id": "18"
        },
            {
            "id": "2844",
            "name": "Campo Magro",
            "state_id": "18"
        },
            {
            "id": "2845",
            "name": "Campo Mourão",
            "state_id": "18"
        },
            {
            "id": "2846",
            "name": "Cândido de Abreu",
            "state_id": "18"
        },
            {
            "id": "2847",
            "name": "Candói",
            "state_id": "18"
        },
            {
            "id": "2848",
            "name": "Cantagalo",
            "state_id": "18"
        },
            {
            "id": "2849",
            "name": "Capanema",
            "state_id": "18"
        },
            {
            "id": "2850",
            "name": "Capitão Leônidas Marques",
            "state_id": "18"
        },
            {
            "id": "2851",
            "name": "Carambeí",
            "state_id": "18"
        },
            {
            "id": "2852",
            "name": "Carlópolis",
            "state_id": "18"
        },
            {
            "id": "2853",
            "name": "Cascavel",
            "state_id": "18"
        },
            {
            "id": "2854",
            "name": "Castro",
            "state_id": "18"
        },
            {
            "id": "2855",
            "name": "Catanduvas",
            "state_id": "18"
        },
            {
            "id": "2856",
            "name": "Centenário do Sul",
            "state_id": "18"
        },
            {
            "id": "2857",
            "name": "Cerro Azul",
            "state_id": "18"
        },
            {
            "id": "2858",
            "name": "Céu Azul",
            "state_id": "18"
        },
            {
            "id": "2859",
            "name": "Chopinzinho",
            "state_id": "18"
        },
            {
            "id": "2860",
            "name": "Cianorte",
            "state_id": "18"
        },
            {
            "id": "2861",
            "name": "Cidade Gaúcha",
            "state_id": "18"
        },
            {
            "id": "2862",
            "name": "Clevelândia",
            "state_id": "18"
        },
            {
            "id": "2863",
            "name": "Colombo",
            "state_id": "18"
        },
            {
            "id": "2864",
            "name": "Colorado",
            "state_id": "18"
        },
            {
            "id": "2865",
            "name": "Congonhinhas",
            "state_id": "18"
        },
            {
            "id": "2866",
            "name": "Conselheiro Mairinck",
            "state_id": "18"
        },
            {
            "id": "2867",
            "name": "Contenda",
            "state_id": "18"
        },
            {
            "id": "2868",
            "name": "Corbélia",
            "state_id": "18"
        },
            {
            "id": "2869",
            "name": "Cornélio Procópio",
            "state_id": "18"
        },
            {
            "id": "2870",
            "name": "Coronel Domingos Soares",
            "state_id": "18"
        },
            {
            "id": "2871",
            "name": "Coronel Vivida",
            "state_id": "18"
        },
            {
            "id": "2872",
            "name": "Corumbataí do Sul",
            "state_id": "18"
        },
            {
            "id": "2873",
            "name": "Cruz Machado",
            "state_id": "18"
        },
            {
            "id": "2874",
            "name": "Cruzeiro do Iguaçu",
            "state_id": "18"
        },
            {
            "id": "2875",
            "name": "Cruzeiro do Oeste",
            "state_id": "18"
        },
            {
            "id": "2876",
            "name": "Cruzeiro do Sul",
            "state_id": "18"
        },
            {
            "id": "2877",
            "name": "Cruzmaltina",
            "state_id": "18"
        },
            {
            "id": "2878",
            "name": "Curitiba",
            "state_id": "18"
        },
            {
            "id": "2879",
            "name": "Curiúva",
            "state_id": "18"
        },
            {
            "id": "2880",
            "name": "Diamante d`Oeste",
            "state_id": "18"
        },
            {
            "id": "2881",
            "name": "Diamante do Norte",
            "state_id": "18"
        },
            {
            "id": "2882",
            "name": "Diamante do Sul",
            "state_id": "18"
        },
            {
            "id": "2883",
            "name": "Dois Vizinhos",
            "state_id": "18"
        },
            {
            "id": "2884",
            "name": "Douradina",
            "state_id": "18"
        },
            {
            "id": "2885",
            "name": "Doutor Camargo",
            "state_id": "18"
        },
            {
            "id": "2886",
            "name": "Doutor Ulysses",
            "state_id": "18"
        },
            {
            "id": "2887",
            "name": "Enéas Marques",
            "state_id": "18"
        },
            {
            "id": "2888",
            "name": "Engenheiro Beltrão",
            "state_id": "18"
        },
            {
            "id": "2889",
            "name": "Entre Rios do Oeste",
            "state_id": "18"
        },
            {
            "id": "2890",
            "name": "Esperança Nova",
            "state_id": "18"
        },
            {
            "id": "2891",
            "name": "Espigão Alto do Iguaçu",
            "state_id": "18"
        },
            {
            "id": "2892",
            "name": "Farol",
            "state_id": "18"
        },
            {
            "id": "2893",
            "name": "Faxinal",
            "state_id": "18"
        },
            {
            "id": "2894",
            "name": "Fazenda Rio Grande",
            "state_id": "18"
        },
            {
            "id": "2895",
            "name": "Fênix",
            "state_id": "18"
        },
            {
            "id": "2896",
            "name": "Fernandes Pinheiro",
            "state_id": "18"
        },
            {
            "id": "2897",
            "name": "Figueira",
            "state_id": "18"
        },
            {
            "id": "2898",
            "name": "Flor da Serra do Sul",
            "state_id": "18"
        },
            {
            "id": "2899",
            "name": "Floraí",
            "state_id": "18"
        },
            {
            "id": "2900",
            "name": "Floresta",
            "state_id": "18"
        },
            {
            "id": "2901",
            "name": "Florestópolis",
            "state_id": "18"
        },
            {
            "id": "2902",
            "name": "Flórida",
            "state_id": "18"
        },
            {
            "id": "2903",
            "name": "Formosa do Oeste",
            "state_id": "18"
        },
            {
            "id": "2904",
            "name": "Foz do Iguaçu",
            "state_id": "18"
        },
            {
            "id": "2905",
            "name": "Foz do Jordão",
            "state_id": "18"
        },
            {
            "id": "2906",
            "name": "Francisco Alves",
            "state_id": "18"
        },
            {
            "id": "2907",
            "name": "Francisco Beltrão",
            "state_id": "18"
        },
            {
            "id": "2908",
            "name": "General Carneiro",
            "state_id": "18"
        },
            {
            "id": "2909",
            "name": "Godoy Moreira",
            "state_id": "18"
        },
            {
            "id": "2910",
            "name": "Goioerê",
            "state_id": "18"
        },
            {
            "id": "2911",
            "name": "Goioxim",
            "state_id": "18"
        },
            {
            "id": "2912",
            "name": "Grandes Rios",
            "state_id": "18"
        },
            {
            "id": "2913",
            "name": "Guaíra",
            "state_id": "18"
        },
            {
            "id": "2914",
            "name": "Guairaçá",
            "state_id": "18"
        },
            {
            "id": "2915",
            "name": "Guamiranga",
            "state_id": "18"
        },
            {
            "id": "2916",
            "name": "Guapirama",
            "state_id": "18"
        },
            {
            "id": "2917",
            "name": "Guaporema",
            "state_id": "18"
        },
            {
            "id": "2918",
            "name": "Guaraci",
            "state_id": "18"
        },
            {
            "id": "2919",
            "name": "Guaraniaçu",
            "state_id": "18"
        },
            {
            "id": "2920",
            "name": "Guarapuava",
            "state_id": "18"
        },
            {
            "id": "2921",
            "name": "Guaraqueçaba",
            "state_id": "18"
        },
            {
            "id": "2922",
            "name": "Guaratuba",
            "state_id": "18"
        },
            {
            "id": "2923",
            "name": "Honório Serpa",
            "state_id": "18"
        },
            {
            "id": "2924",
            "name": "Ibaiti",
            "state_id": "18"
        },
            {
            "id": "2925",
            "name": "Ibema",
            "state_id": "18"
        },
            {
            "id": "2926",
            "name": "Ibiporã",
            "state_id": "18"
        },
            {
            "id": "2927",
            "name": "Icaraíma",
            "state_id": "18"
        },
            {
            "id": "2928",
            "name": "Iguaraçu",
            "state_id": "18"
        },
            {
            "id": "2929",
            "name": "Iguatu",
            "state_id": "18"
        },
            {
            "id": "2930",
            "name": "Imbaú",
            "state_id": "18"
        },
            {
            "id": "2931",
            "name": "Imbituva",
            "state_id": "18"
        },
            {
            "id": "2932",
            "name": "Inácio Martins",
            "state_id": "18"
        },
            {
            "id": "2933",
            "name": "Inajá",
            "state_id": "18"
        },
            {
            "id": "2934",
            "name": "Indianópolis",
            "state_id": "18"
        },
            {
            "id": "2935",
            "name": "Ipiranga",
            "state_id": "18"
        },
            {
            "id": "2936",
            "name": "Iporã",
            "state_id": "18"
        },
            {
            "id": "2937",
            "name": "Iracema do Oeste",
            "state_id": "18"
        },
            {
            "id": "2938",
            "name": "Irati",
            "state_id": "18"
        },
            {
            "id": "2939",
            "name": "Iretama",
            "state_id": "18"
        },
            {
            "id": "2940",
            "name": "Itaguajé",
            "state_id": "18"
        },
            {
            "id": "2941",
            "name": "Itaipulândia",
            "state_id": "18"
        },
            {
            "id": "2942",
            "name": "Itambaracá",
            "state_id": "18"
        },
            {
            "id": "2943",
            "name": "Itambé",
            "state_id": "18"
        },
            {
            "id": "2944",
            "name": "Itapejara d`Oeste",
            "state_id": "18"
        },
            {
            "id": "2945",
            "name": "Itaperuçu",
            "state_id": "18"
        },
            {
            "id": "2946",
            "name": "Itaúna do Sul",
            "state_id": "18"
        },
            {
            "id": "2947",
            "name": "Ivaí",
            "state_id": "18"
        },
            {
            "id": "2948",
            "name": "Ivaiporã",
            "state_id": "18"
        },
            {
            "id": "2949",
            "name": "Ivaté",
            "state_id": "18"
        },
            {
            "id": "2950",
            "name": "Ivatuba",
            "state_id": "18"
        },
            {
            "id": "2951",
            "name": "Jaboti",
            "state_id": "18"
        },
            {
            "id": "2952",
            "name": "Jacarezinho",
            "state_id": "18"
        },
            {
            "id": "2953",
            "name": "Jaguapitã",
            "state_id": "18"
        },
            {
            "id": "2954",
            "name": "Jaguariaíva",
            "state_id": "18"
        },
            {
            "id": "2955",
            "name": "Jandaia do Sul",
            "state_id": "18"
        },
            {
            "id": "2956",
            "name": "Janiópolis",
            "state_id": "18"
        },
            {
            "id": "2957",
            "name": "Japira",
            "state_id": "18"
        },
            {
            "id": "2958",
            "name": "Japurá",
            "state_id": "18"
        },
            {
            "id": "2959",
            "name": "Jardim Alegre",
            "state_id": "18"
        },
            {
            "id": "2960",
            "name": "Jardim Olinda",
            "state_id": "18"
        },
            {
            "id": "2961",
            "name": "Jataizinho",
            "state_id": "18"
        },
            {
            "id": "2962",
            "name": "Jesuítas",
            "state_id": "18"
        },
            {
            "id": "2963",
            "name": "Joaquim Távora",
            "state_id": "18"
        },
            {
            "id": "2964",
            "name": "Jundiaí do Sul",
            "state_id": "18"
        },
            {
            "id": "2965",
            "name": "Juranda",
            "state_id": "18"
        },
            {
            "id": "2966",
            "name": "Jussara",
            "state_id": "18"
        },
            {
            "id": "2967",
            "name": "Kaloré",
            "state_id": "18"
        },
            {
            "id": "2968",
            "name": "Lapa",
            "state_id": "18"
        },
            {
            "id": "2969",
            "name": "Laranjal",
            "state_id": "18"
        },
            {
            "id": "2970",
            "name": "Laranjeiras do Sul",
            "state_id": "18"
        },
            {
            "id": "2971",
            "name": "Leópolis",
            "state_id": "18"
        },
            {
            "id": "2972",
            "name": "Lidianópolis",
            "state_id": "18"
        },
            {
            "id": "2973",
            "name": "Lindoeste",
            "state_id": "18"
        },
            {
            "id": "2974",
            "name": "Loanda",
            "state_id": "18"
        },
            {
            "id": "2975",
            "name": "Lobato",
            "state_id": "18"
        },
            {
            "id": "2976",
            "name": "Londrina",
            "state_id": "18"
        },
            {
            "id": "2977",
            "name": "Luiziana",
            "state_id": "18"
        },
            {
            "id": "2978",
            "name": "Lunardelli",
            "state_id": "18"
        },
            {
            "id": "2979",
            "name": "Lupionópolis",
            "state_id": "18"
        },
            {
            "id": "2980",
            "name": "Mallet",
            "state_id": "18"
        },
            {
            "id": "2981",
            "name": "Mamborê",
            "state_id": "18"
        },
            {
            "id": "2982",
            "name": "Mandaguaçu",
            "state_id": "18"
        },
            {
            "id": "2983",
            "name": "Mandaguari",
            "state_id": "18"
        },
            {
            "id": "2984",
            "name": "Mandirituba",
            "state_id": "18"
        },
            {
            "id": "2985",
            "name": "Manfrinópolis",
            "state_id": "18"
        },
            {
            "id": "2986",
            "name": "Mangueirinha",
            "state_id": "18"
        },
            {
            "id": "2987",
            "name": "Manoel Ribas",
            "state_id": "18"
        },
            {
            "id": "2988",
            "name": "Marechal Cândido Rondon",
            "state_id": "18"
        },
            {
            "id": "2989",
            "name": "Maria Helena",
            "state_id": "18"
        },
            {
            "id": "2990",
            "name": "Marialva",
            "state_id": "18"
        },
            {
            "id": "2991",
            "name": "Marilândia do Sul",
            "state_id": "18"
        },
            {
            "id": "2992",
            "name": "Marilena",
            "state_id": "18"
        },
            {
            "id": "2993",
            "name": "Mariluz",
            "state_id": "18"
        },
            {
            "id": "2994",
            "name": "Maringá",
            "state_id": "18"
        },
            {
            "id": "2995",
            "name": "Mariópolis",
            "state_id": "18"
        },
            {
            "id": "2996",
            "name": "Maripá",
            "state_id": "18"
        },
            {
            "id": "2997",
            "name": "Marmeleiro",
            "state_id": "18"
        },
            {
            "id": "2998",
            "name": "Marquinho",
            "state_id": "18"
        },
            {
            "id": "2999",
            "name": "Marumbi",
            "state_id": "18"
        },
            {
            "id": "3000",
            "name": "Matelândia",
            "state_id": "18"
        },
            {
            "id": "3001",
            "name": "Matinhos",
            "state_id": "18"
        },
            {
            "id": "3002",
            "name": "Mato Rico",
            "state_id": "18"
        },
            {
            "id": "3003",
            "name": "Mauá da Serra",
            "state_id": "18"
        },
            {
            "id": "3004",
            "name": "Medianeira",
            "state_id": "18"
        },
            {
            "id": "3005",
            "name": "Mercedes",
            "state_id": "18"
        },
            {
            "id": "3006",
            "name": "Mirador",
            "state_id": "18"
        },
            {
            "id": "3007",
            "name": "Miraselva",
            "state_id": "18"
        },
            {
            "id": "3008",
            "name": "Missal",
            "state_id": "18"
        },
            {
            "id": "3009",
            "name": "Moreira Sales",
            "state_id": "18"
        },
            {
            "id": "3010",
            "name": "Morretes",
            "state_id": "18"
        },
            {
            "id": "3011",
            "name": "Munhoz de Melo",
            "state_id": "18"
        },
            {
            "id": "3012",
            "name": "Nossa Senhora das Graças",
            "state_id": "18"
        },
            {
            "id": "3013",
            "name": "Nova Aliança do Ivaí",
            "state_id": "18"
        },
            {
            "id": "3014",
            "name": "Nova América da Colina",
            "state_id": "18"
        },
            {
            "id": "3015",
            "name": "Nova Aurora",
            "state_id": "18"
        },
            {
            "id": "3016",
            "name": "Nova Cantu",
            "state_id": "18"
        },
            {
            "id": "3017",
            "name": "Nova Esperança",
            "state_id": "18"
        },
            {
            "id": "3018",
            "name": "Nova Esperança do Sudoeste",
            "state_id": "18"
        },
            {
            "id": "3019",
            "name": "Nova Fátima",
            "state_id": "18"
        },
            {
            "id": "3020",
            "name": "Nova Laranjeiras",
            "state_id": "18"
        },
            {
            "id": "3021",
            "name": "Nova Londrina",
            "state_id": "18"
        },
            {
            "id": "3022",
            "name": "Nova Olímpia",
            "state_id": "18"
        },
            {
            "id": "3023",
            "name": "Nova Prata do Iguaçu",
            "state_id": "18"
        },
            {
            "id": "3024",
            "name": "Nova Santa Bárbara",
            "state_id": "18"
        },
            {
            "id": "3025",
            "name": "Nova Santa Rosa",
            "state_id": "18"
        },
            {
            "id": "3026",
            "name": "Nova Tebas",
            "state_id": "18"
        },
            {
            "id": "3027",
            "name": "Novo Itacolomi",
            "state_id": "18"
        },
            {
            "id": "3028",
            "name": "Ortigueira",
            "state_id": "18"
        },
            {
            "id": "3029",
            "name": "Ourizona",
            "state_id": "18"
        },
            {
            "id": "3030",
            "name": "Ouro Verde do Oeste",
            "state_id": "18"
        },
            {
            "id": "3031",
            "name": "Paiçandu",
            "state_id": "18"
        },
            {
            "id": "3032",
            "name": "Palmas",
            "state_id": "18"
        },
            {
            "id": "3033",
            "name": "Palmeira",
            "state_id": "18"
        },
            {
            "id": "3034",
            "name": "Palmital",
            "state_id": "18"
        },
            {
            "id": "3035",
            "name": "Palotina",
            "state_id": "18"
        },
            {
            "id": "3036",
            "name": "Paraíso do Norte",
            "state_id": "18"
        },
            {
            "id": "3037",
            "name": "Paranacity",
            "state_id": "18"
        },
            {
            "id": "3038",
            "name": "Paranaguá",
            "state_id": "18"
        },
            {
            "id": "3039",
            "name": "Paranapoema",
            "state_id": "18"
        },
            {
            "id": "3040",
            "name": "Paranavaí",
            "state_id": "18"
        },
            {
            "id": "3041",
            "name": "Pato Bragado",
            "state_id": "18"
        },
            {
            "id": "3042",
            "name": "Pato Branco",
            "state_id": "18"
        },
            {
            "id": "3043",
            "name": "Paula Freitas",
            "state_id": "18"
        },
            {
            "id": "3044",
            "name": "Paulo Frontin",
            "state_id": "18"
        },
            {
            "id": "3045",
            "name": "Peabiru",
            "state_id": "18"
        },
            {
            "id": "3046",
            "name": "Perobal",
            "state_id": "18"
        },
            {
            "id": "3047",
            "name": "Pérola",
            "state_id": "18"
        },
            {
            "id": "3048",
            "name": "Pérola d`Oeste",
            "state_id": "18"
        },
            {
            "id": "3049",
            "name": "Piên",
            "state_id": "18"
        },
            {
            "id": "3050",
            "name": "Pinhais",
            "state_id": "18"
        },
            {
            "id": "3051",
            "name": "Pinhal de São Bento",
            "state_id": "18"
        },
            {
            "id": "3052",
            "name": "Pinhalão",
            "state_id": "18"
        },
            {
            "id": "3053",
            "name": "Pinhão",
            "state_id": "18"
        },
            {
            "id": "3054",
            "name": "Piraí do Sul",
            "state_id": "18"
        },
            {
            "id": "3055",
            "name": "Piraquara",
            "state_id": "18"
        },
            {
            "id": "3056",
            "name": "Pitanga",
            "state_id": "18"
        },
            {
            "id": "3057",
            "name": "Pitangueiras",
            "state_id": "18"
        },
            {
            "id": "3058",
            "name": "Planaltina do Paraná",
            "state_id": "18"
        },
            {
            "id": "3059",
            "name": "Planalto",
            "state_id": "18"
        },
            {
            "id": "3060",
            "name": "Ponta Grossa",
            "state_id": "18"
        },
            {
            "id": "3061",
            "name": "Pontal do Paraná",
            "state_id": "18"
        },
            {
            "id": "3062",
            "name": "Porecatu",
            "state_id": "18"
        },
            {
            "id": "3063",
            "name": "Porto Amazonas",
            "state_id": "18"
        },
            {
            "id": "3064",
            "name": "Porto Barreiro",
            "state_id": "18"
        },
            {
            "id": "3065",
            "name": "Porto Rico",
            "state_id": "18"
        },
            {
            "id": "3066",
            "name": "Porto Vitória",
            "state_id": "18"
        },
            {
            "id": "3067",
            "name": "Prado Ferreira",
            "state_id": "18"
        },
            {
            "id": "3068",
            "name": "Pranchita",
            "state_id": "18"
        },
            {
            "id": "3069",
            "name": "Presidente Castelo Branco",
            "state_id": "18"
        },
            {
            "id": "3070",
            "name": "Primeiro de Maio",
            "state_id": "18"
        },
            {
            "id": "3071",
            "name": "Prudentópolis",
            "state_id": "18"
        },
            {
            "id": "3072",
            "name": "Quarto Centenário",
            "state_id": "18"
        },
            {
            "id": "3073",
            "name": "Quatiguá",
            "state_id": "18"
        },
            {
            "id": "3074",
            "name": "Quatro Barras",
            "state_id": "18"
        },
            {
            "id": "3075",
            "name": "Quatro Pontes",
            "state_id": "18"
        },
            {
            "id": "3076",
            "name": "Quedas do Iguaçu",
            "state_id": "18"
        },
            {
            "id": "3077",
            "name": "Querência do Norte",
            "state_id": "18"
        },
            {
            "id": "3078",
            "name": "Quinta do Sol",
            "state_id": "18"
        },
            {
            "id": "3079",
            "name": "Quitandinha",
            "state_id": "18"
        },
            {
            "id": "3080",
            "name": "Ramilândia",
            "state_id": "18"
        },
            {
            "id": "3081",
            "name": "Rancho Alegre",
            "state_id": "18"
        },
            {
            "id": "3082",
            "name": "Rancho Alegre d`Oeste",
            "state_id": "18"
        },
            {
            "id": "3083",
            "name": "Realeza",
            "state_id": "18"
        },
            {
            "id": "3084",
            "name": "Rebouças",
            "state_id": "18"
        },
            {
            "id": "3085",
            "name": "Renascença",
            "state_id": "18"
        },
            {
            "id": "3086",
            "name": "Reserva",
            "state_id": "18"
        },
            {
            "id": "3087",
            "name": "Reserva do Iguaçu",
            "state_id": "18"
        },
            {
            "id": "3088",
            "name": "Ribeirão Claro",
            "state_id": "18"
        },
            {
            "id": "3089",
            "name": "Ribeirão do Pinhal",
            "state_id": "18"
        },
            {
            "id": "3090",
            "name": "Rio Azul",
            "state_id": "18"
        },
            {
            "id": "3091",
            "name": "Rio Bom",
            "state_id": "18"
        },
            {
            "id": "3092",
            "name": "Rio Bonito do Iguaçu",
            "state_id": "18"
        },
            {
            "id": "3093",
            "name": "Rio Branco do Ivaí",
            "state_id": "18"
        },
            {
            "id": "3094",
            "name": "Rio Branco do Sul",
            "state_id": "18"
        },
            {
            "id": "3095",
            "name": "Rio Negro",
            "state_id": "18"
        },
            {
            "id": "3096",
            "name": "Rolândia",
            "state_id": "18"
        },
            {
            "id": "3097",
            "name": "Roncador",
            "state_id": "18"
        },
            {
            "id": "3098",
            "name": "Rondon",
            "state_id": "18"
        },
            {
            "id": "3099",
            "name": "Rosário do Ivaí",
            "state_id": "18"
        },
            {
            "id": "3100",
            "name": "Sabáudia",
            "state_id": "18"
        },
            {
            "id": "3101",
            "name": "Salgado Filho",
            "state_id": "18"
        },
            {
            "id": "3102",
            "name": "Salto do Itararé",
            "state_id": "18"
        },
            {
            "id": "3103",
            "name": "Salto do Lontra",
            "state_id": "18"
        },
            {
            "id": "3104",
            "name": "Santa Amélia",
            "state_id": "18"
        },
            {
            "id": "3105",
            "name": "Santa Cecília do Pavão",
            "state_id": "18"
        },
            {
            "id": "3106",
            "name": "Santa Cruz de Monte Castelo",
            "state_id": "18"
        },
            {
            "id": "3107",
            "name": "Santa Fé",
            "state_id": "18"
        },
            {
            "id": "3108",
            "name": "Santa Helena",
            "state_id": "18"
        },
            {
            "id": "3109",
            "name": "Santa Inês",
            "state_id": "18"
        },
            {
            "id": "3110",
            "name": "Santa Isabel do Ivaí",
            "state_id": "18"
        },
            {
            "id": "3111",
            "name": "Santa Izabel do Oeste",
            "state_id": "18"
        },
            {
            "id": "3112",
            "name": "Santa Lúcia",
            "state_id": "18"
        },
            {
            "id": "3113",
            "name": "Santa Maria do Oeste",
            "state_id": "18"
        },
            {
            "id": "3114",
            "name": "Santa Mariana",
            "state_id": "18"
        },
            {
            "id": "3115",
            "name": "Santa Mônica",
            "state_id": "18"
        },
            {
            "id": "3116",
            "name": "Santa Tereza do Oeste",
            "state_id": "18"
        },
            {
            "id": "3117",
            "name": "Santa Terezinha de Itaipu",
            "state_id": "18"
        },
            {
            "id": "3118",
            "name": "Santana do Itararé",
            "state_id": "18"
        },
            {
            "id": "3119",
            "name": "Santo Antônio da Platina",
            "state_id": "18"
        },
            {
            "id": "3120",
            "name": "Santo Antônio do Caiuá",
            "state_id": "18"
        },
            {
            "id": "3121",
            "name": "Santo Antônio do Paraíso",
            "state_id": "18"
        },
            {
            "id": "3122",
            "name": "Santo Antônio do Sudoeste",
            "state_id": "18"
        },
            {
            "id": "3123",
            "name": "Santo Inácio",
            "state_id": "18"
        },
            {
            "id": "3124",
            "name": "São Carlos do Ivaí",
            "state_id": "18"
        },
            {
            "id": "3125",
            "name": "São Jerônimo da Serra",
            "state_id": "18"
        },
            {
            "id": "3126",
            "name": "São João",
            "state_id": "18"
        },
            {
            "id": "3127",
            "name": "São João do Caiuá",
            "state_id": "18"
        },
            {
            "id": "3128",
            "name": "São João do Ivaí",
            "state_id": "18"
        },
            {
            "id": "3129",
            "name": "São João do Triunfo",
            "state_id": "18"
        },
            {
            "id": "3130",
            "name": "São Jorge d`Oeste",
            "state_id": "18"
        },
            {
            "id": "3131",
            "name": "São Jorge do Ivaí",
            "state_id": "18"
        },
            {
            "id": "3132",
            "name": "São Jorge do Patrocínio",
            "state_id": "18"
        },
            {
            "id": "3133",
            "name": "São José da Boa Vista",
            "state_id": "18"
        },
            {
            "id": "3134",
            "name": "São José das Palmeiras",
            "state_id": "18"
        },
            {
            "id": "3135",
            "name": "São José dos Pinhais",
            "state_id": "18"
        },
            {
            "id": "3136",
            "name": "São Manoel do Paraná",
            "state_id": "18"
        },
            {
            "id": "3137",
            "name": "São Mateus do Sul",
            "state_id": "18"
        },
            {
            "id": "3138",
            "name": "São Miguel do Iguaçu",
            "state_id": "18"
        },
            {
            "id": "3139",
            "name": "São Pedro do Iguaçu",
            "state_id": "18"
        },
            {
            "id": "3140",
            "name": "São Pedro do Ivaí",
            "state_id": "18"
        },
            {
            "id": "3141",
            "name": "São Pedro do Paraná",
            "state_id": "18"
        },
            {
            "id": "3142",
            "name": "São Sebastião da Amoreira",
            "state_id": "18"
        },
            {
            "id": "3143",
            "name": "São Tomé",
            "state_id": "18"
        },
            {
            "id": "3144",
            "name": "Sapopema",
            "state_id": "18"
        },
            {
            "id": "3145",
            "name": "Sarandi",
            "state_id": "18"
        },
            {
            "id": "3146",
            "name": "Saudade do Iguaçu",
            "state_id": "18"
        },
            {
            "id": "3147",
            "name": "Sengés",
            "state_id": "18"
        },
            {
            "id": "3148",
            "name": "Serranópolis do Iguaçu",
            "state_id": "18"
        },
            {
            "id": "3149",
            "name": "Sertaneja",
            "state_id": "18"
        },
            {
            "id": "3150",
            "name": "Sertanópolis",
            "state_id": "18"
        },
            {
            "id": "3151",
            "name": "Siqueira Campos",
            "state_id": "18"
        },
            {
            "id": "3152",
            "name": "Sulina",
            "state_id": "18"
        },
            {
            "id": "3153",
            "name": "Tamarana",
            "state_id": "18"
        },
            {
            "id": "3154",
            "name": "Tamboara",
            "state_id": "18"
        },
            {
            "id": "3155",
            "name": "Tapejara",
            "state_id": "18"
        },
            {
            "id": "3156",
            "name": "Tapira",
            "state_id": "18"
        },
            {
            "id": "3157",
            "name": "Teixeira Soares",
            "state_id": "18"
        },
            {
            "id": "3158",
            "name": "Telêmaco Borba",
            "state_id": "18"
        },
            {
            "id": "3159",
            "name": "Terra Boa",
            "state_id": "18"
        },
            {
            "id": "3160",
            "name": "Terra Rica",
            "state_id": "18"
        },
            {
            "id": "3161",
            "name": "Terra Roxa",
            "state_id": "18"
        },
            {
            "id": "3162",
            "name": "Tibagi",
            "state_id": "18"
        },
            {
            "id": "3163",
            "name": "Tijucas do Sul",
            "state_id": "18"
        },
            {
            "id": "3164",
            "name": "Toledo",
            "state_id": "18"
        },
            {
            "id": "3165",
            "name": "Tomazina",
            "state_id": "18"
        },
            {
            "id": "3166",
            "name": "Três Barras do Paraná",
            "state_id": "18"
        },
            {
            "id": "3167",
            "name": "Tunas do Paraná",
            "state_id": "18"
        },
            {
            "id": "3168",
            "name": "Tuneiras do Oeste",
            "state_id": "18"
        },
            {
            "id": "3169",
            "name": "Tupãssi",
            "state_id": "18"
        },
            {
            "id": "3170",
            "name": "Turvo",
            "state_id": "18"
        },
            {
            "id": "3171",
            "name": "Ubiratã",
            "state_id": "18"
        },
            {
            "id": "3172",
            "name": "Umuarama",
            "state_id": "18"
        },
            {
            "id": "3173",
            "name": "União da Vitória",
            "state_id": "18"
        },
            {
            "id": "3174",
            "name": "Uniflor",
            "state_id": "18"
        },
            {
            "id": "3175",
            "name": "Uraí",
            "state_id": "18"
        },
            {
            "id": "3176",
            "name": "Ventania",
            "state_id": "18"
        },
            {
            "id": "3177",
            "name": "Vera Cruz do Oeste",
            "state_id": "18"
        },
            {
            "id": "3178",
            "name": "Verê",
            "state_id": "18"
        },
            {
            "id": "3179",
            "name": "Virmond",
            "state_id": "18"
        },
            {
            "id": "3180",
            "name": "Vitorino",
            "state_id": "18"
        },
            {
            "id": "3181",
            "name": "Wenceslau Braz",
            "state_id": "18"
        },
            {
            "id": "3182",
            "name": "Xambrê",
            "state_id": "18"
        },
            {
            "id": "3183",
            "name": "Abreu e Lima",
            "state_id": "16"
        },
            {
            "id": "3184",
            "name": "Afogados da Ingazeira",
            "state_id": "16"
        },
            {
            "id": "3185",
            "name": "Afrânio",
            "state_id": "16"
        },
            {
            "id": "3186",
            "name": "Agrestina",
            "state_id": "16"
        },
            {
            "id": "3187",
            "name": "Água Preta",
            "state_id": "16"
        },
            {
            "id": "3188",
            "name": "Águas Belas",
            "state_id": "16"
        },
            {
            "id": "3189",
            "name": "Alagoinha",
            "state_id": "16"
        },
            {
            "id": "3190",
            "name": "Aliança",
            "state_id": "16"
        },
            {
            "id": "3191",
            "name": "Altinho",
            "state_id": "16"
        },
            {
            "id": "3192",
            "name": "Amaraji",
            "state_id": "16"
        },
            {
            "id": "3193",
            "name": "Angelim",
            "state_id": "16"
        },
            {
            "id": "3194",
            "name": "Araçoiaba",
            "state_id": "16"
        },
            {
            "id": "3195",
            "name": "Araripina",
            "state_id": "16"
        },
            {
            "id": "3196",
            "name": "Arcoverde",
            "state_id": "16"
        },
            {
            "id": "3197",
            "name": "Barra de Guabiraba",
            "state_id": "16"
        },
            {
            "id": "3198",
            "name": "Barreiros",
            "state_id": "16"
        },
            {
            "id": "3199",
            "name": "Belém de Maria",
            "state_id": "16"
        },
            {
            "id": "3200",
            "name": "Belém de São Francisco",
            "state_id": "16"
        },
            {
            "id": "3201",
            "name": "Belo Jardim",
            "state_id": "16"
        },
            {
            "id": "3202",
            "name": "Betânia",
            "state_id": "16"
        },
            {
            "id": "3203",
            "name": "Bezerros",
            "state_id": "16"
        },
            {
            "id": "3204",
            "name": "Bodocó",
            "state_id": "16"
        },
            {
            "id": "3205",
            "name": "Bom Conselho",
            "state_id": "16"
        },
            {
            "id": "3206",
            "name": "Bom Jardim",
            "state_id": "16"
        },
            {
            "id": "3207",
            "name": "Bonito",
            "state_id": "16"
        },
            {
            "id": "3208",
            "name": "Brejão",
            "state_id": "16"
        },
            {
            "id": "3209",
            "name": "Brejinho",
            "state_id": "16"
        },
            {
            "id": "3210",
            "name": "Brejo da Madre de Deus",
            "state_id": "16"
        },
            {
            "id": "3211",
            "name": "Buenos Aires",
            "state_id": "16"
        },
            {
            "id": "3212",
            "name": "Buíque",
            "state_id": "16"
        },
            {
            "id": "3213",
            "name": "Cabo de Santo Agostinho",
            "state_id": "16"
        },
            {
            "id": "3214",
            "name": "Cabrobó",
            "state_id": "16"
        },
            {
            "id": "3215",
            "name": "Cachoeirinha",
            "state_id": "16"
        },
            {
            "id": "3216",
            "name": "Caetés",
            "state_id": "16"
        },
            {
            "id": "3217",
            "name": "Calçado",
            "state_id": "16"
        },
            {
            "id": "3218",
            "name": "Calumbi",
            "state_id": "16"
        },
            {
            "id": "3219",
            "name": "Camaragibe",
            "state_id": "16"
        },
            {
            "id": "3220",
            "name": "Camocim de São Félix",
            "state_id": "16"
        },
            {
            "id": "3221",
            "name": "Camutanga",
            "state_id": "16"
        },
            {
            "id": "3222",
            "name": "Canhotinho",
            "state_id": "16"
        },
            {
            "id": "3223",
            "name": "Capoeiras",
            "state_id": "16"
        },
            {
            "id": "3224",
            "name": "Carnaíba",
            "state_id": "16"
        },
            {
            "id": "3225",
            "name": "Carnaubeira da Penha",
            "state_id": "16"
        },
            {
            "id": "3226",
            "name": "Carpina",
            "state_id": "16"
        },
            {
            "id": "3227",
            "name": "Caruaru",
            "state_id": "16"
        },
            {
            "id": "3228",
            "name": "Casinhas",
            "state_id": "16"
        },
            {
            "id": "3229",
            "name": "Catende",
            "state_id": "16"
        },
            {
            "id": "3230",
            "name": "Cedro",
            "state_id": "16"
        },
            {
            "id": "3231",
            "name": "Chã de Alegria",
            "state_id": "16"
        },
            {
            "id": "3232",
            "name": "Chã Grande",
            "state_id": "16"
        },
            {
            "id": "3233",
            "name": "Condado",
            "state_id": "16"
        },
            {
            "id": "3234",
            "name": "Correntes",
            "state_id": "16"
        },
            {
            "id": "3235",
            "name": "Cortês",
            "state_id": "16"
        },
            {
            "id": "3236",
            "name": "Cumaru",
            "state_id": "16"
        },
            {
            "id": "3237",
            "name": "Cupira",
            "state_id": "16"
        },
            {
            "id": "3238",
            "name": "Custódia",
            "state_id": "16"
        },
            {
            "id": "3239",
            "name": "Dormentes",
            "state_id": "16"
        },
            {
            "id": "3240",
            "name": "Escada",
            "state_id": "16"
        },
            {
            "id": "3241",
            "name": "Exu",
            "state_id": "16"
        },
            {
            "id": "3242",
            "name": "Feira Nova",
            "state_id": "16"
        },
            {
            "id": "3243",
            "name": "Fernando de Noronha",
            "state_id": "16"
        },
            {
            "id": "3244",
            "name": "Ferreiros",
            "state_id": "16"
        },
            {
            "id": "3245",
            "name": "Flores",
            "state_id": "16"
        },
            {
            "id": "3246",
            "name": "Floresta",
            "state_id": "16"
        },
            {
            "id": "3247",
            "name": "Frei Miguelinho",
            "state_id": "16"
        },
            {
            "id": "3248",
            "name": "Gameleira",
            "state_id": "16"
        },
            {
            "id": "3249",
            "name": "Garanhuns",
            "state_id": "16"
        },
            {
            "id": "3250",
            "name": "Glória do Goitá",
            "state_id": "16"
        },
            {
            "id": "3251",
            "name": "Goiana",
            "state_id": "16"
        },
            {
            "id": "3252",
            "name": "Granito",
            "state_id": "16"
        },
            {
            "id": "3253",
            "name": "Gravatá",
            "state_id": "16"
        },
            {
            "id": "3254",
            "name": "Iati",
            "state_id": "16"
        },
            {
            "id": "3255",
            "name": "Ibimirim",
            "state_id": "16"
        },
            {
            "id": "3256",
            "name": "Ibirajuba",
            "state_id": "16"
        },
            {
            "id": "3257",
            "name": "Igarassu",
            "state_id": "16"
        },
            {
            "id": "3258",
            "name": "Iguaraci",
            "state_id": "16"
        },
            {
            "id": "3259",
            "name": "Ilha de Itamaracá",
            "state_id": "16"
        },
            {
            "id": "3260",
            "name": "Inajá",
            "state_id": "16"
        },
            {
            "id": "3261",
            "name": "Ingazeira",
            "state_id": "16"
        },
            {
            "id": "3262",
            "name": "Ipojuca",
            "state_id": "16"
        },
            {
            "id": "3263",
            "name": "Ipubi",
            "state_id": "16"
        },
            {
            "id": "3264",
            "name": "Itacuruba",
            "state_id": "16"
        },
            {
            "id": "3265",
            "name": "Itaíba",
            "state_id": "16"
        },
            {
            "id": "3266",
            "name": "Itambé",
            "state_id": "16"
        },
            {
            "id": "3267",
            "name": "Itapetim",
            "state_id": "16"
        },
            {
            "id": "3268",
            "name": "Itapissuma",
            "state_id": "16"
        },
            {
            "id": "3269",
            "name": "Itaquitinga",
            "state_id": "16"
        },
            {
            "id": "3270",
            "name": "Jaboatão dos Guararapes",
            "state_id": "16"
        },
            {
            "id": "3271",
            "name": "Jaqueira",
            "state_id": "16"
        },
            {
            "id": "3272",
            "name": "Jataúba",
            "state_id": "16"
        },
            {
            "id": "3273",
            "name": "Jatobá",
            "state_id": "16"
        },
            {
            "id": "3274",
            "name": "João Alfredo",
            "state_id": "16"
        },
            {
            "id": "3275",
            "name": "Joaquim Nabuco",
            "state_id": "16"
        },
            {
            "id": "3276",
            "name": "Jucati",
            "state_id": "16"
        },
            {
            "id": "3277",
            "name": "Jupi",
            "state_id": "16"
        },
            {
            "id": "3278",
            "name": "Jurema",
            "state_id": "16"
        },
            {
            "id": "3279",
            "name": "Lagoa do Carro",
            "state_id": "16"
        },
            {
            "id": "3280",
            "name": "Lagoa do Itaenga",
            "state_id": "16"
        },
            {
            "id": "3281",
            "name": "Lagoa do Ouro",
            "state_id": "16"
        },
            {
            "id": "3282",
            "name": "Lagoa dos Gatos",
            "state_id": "16"
        },
            {
            "id": "3283",
            "name": "Lagoa Grande",
            "state_id": "16"
        },
            {
            "id": "3284",
            "name": "Lajedo",
            "state_id": "16"
        },
            {
            "id": "3285",
            "name": "Limoeiro",
            "state_id": "16"
        },
            {
            "id": "3286",
            "name": "Macaparana",
            "state_id": "16"
        },
            {
            "id": "3287",
            "name": "Machados",
            "state_id": "16"
        },
            {
            "id": "3288",
            "name": "Manari",
            "state_id": "16"
        },
            {
            "id": "3289",
            "name": "Maraial",
            "state_id": "16"
        },
            {
            "id": "3290",
            "name": "Mirandiba",
            "state_id": "16"
        },
            {
            "id": "3291",
            "name": "Moreilândia",
            "state_id": "16"
        },
            {
            "id": "3292",
            "name": "Moreno",
            "state_id": "16"
        },
            {
            "id": "3293",
            "name": "Nazaré da Mata",
            "state_id": "16"
        },
            {
            "id": "3294",
            "name": "Olinda",
            "state_id": "16"
        },
            {
            "id": "3295",
            "name": "Orobó",
            "state_id": "16"
        },
            {
            "id": "3296",
            "name": "Orocó",
            "state_id": "16"
        },
            {
            "id": "3297",
            "name": "Ouricuri",
            "state_id": "16"
        },
            {
            "id": "3298",
            "name": "Palmares",
            "state_id": "16"
        },
            {
            "id": "3299",
            "name": "Palmeirina",
            "state_id": "16"
        },
            {
            "id": "3300",
            "name": "Panelas",
            "state_id": "16"
        },
            {
            "id": "3301",
            "name": "Paranatama",
            "state_id": "16"
        },
            {
            "id": "3302",
            "name": "Parnamirim",
            "state_id": "16"
        },
            {
            "id": "3303",
            "name": "Passira",
            "state_id": "16"
        },
            {
            "id": "3304",
            "name": "Paudalho",
            "state_id": "16"
        },
            {
            "id": "3305",
            "name": "Paulista",
            "state_id": "16"
        },
            {
            "id": "3306",
            "name": "Pedra",
            "state_id": "16"
        },
            {
            "id": "3307",
            "name": "Pesqueira",
            "state_id": "16"
        },
            {
            "id": "3308",
            "name": "Petrolândia",
            "state_id": "16"
        },
            {
            "id": "3309",
            "name": "Petrolina",
            "state_id": "16"
        },
            {
            "id": "3310",
            "name": "Poção",
            "state_id": "16"
        },
            {
            "id": "3311",
            "name": "Pombos",
            "state_id": "16"
        },
            {
            "id": "3312",
            "name": "Primavera",
            "state_id": "16"
        },
            {
            "id": "3313",
            "name": "Quipapá",
            "state_id": "16"
        },
            {
            "id": "3314",
            "name": "Quixaba",
            "state_id": "16"
        },
            {
            "id": "3315",
            "name": "Recife",
            "state_id": "16"
        },
            {
            "id": "3316",
            "name": "Riacho das Almas",
            "state_id": "16"
        },
            {
            "id": "3317",
            "name": "Ribeirão",
            "state_id": "16"
        },
            {
            "id": "3318",
            "name": "Rio Formoso",
            "state_id": "16"
        },
            {
            "id": "3319",
            "name": "Sairé",
            "state_id": "16"
        },
            {
            "id": "3320",
            "name": "Salgadinho",
            "state_id": "16"
        },
            {
            "id": "3321",
            "name": "Salgueiro",
            "state_id": "16"
        },
            {
            "id": "3322",
            "name": "Saloá",
            "state_id": "16"
        },
            {
            "id": "3323",
            "name": "Sanharó",
            "state_id": "16"
        },
            {
            "id": "3324",
            "name": "Santa Cruz",
            "state_id": "16"
        },
            {
            "id": "3325",
            "name": "Santa Cruz da Baixa Verde",
            "state_id": "16"
        },
            {
            "id": "3326",
            "name": "Santa Cruz do Capibaribe",
            "state_id": "16"
        },
            {
            "id": "3327",
            "name": "Santa Filomena",
            "state_id": "16"
        },
            {
            "id": "3328",
            "name": "Santa Maria da Boa Vista",
            "state_id": "16"
        },
            {
            "id": "3329",
            "name": "Santa Maria do Cambucá",
            "state_id": "16"
        },
            {
            "id": "3330",
            "name": "Santa Terezinha",
            "state_id": "16"
        },
            {
            "id": "3331",
            "name": "São Benedito do Sul",
            "state_id": "16"
        },
            {
            "id": "3332",
            "name": "São Bento do Una",
            "state_id": "16"
        },
            {
            "id": "3333",
            "name": "São Caitano",
            "state_id": "16"
        },
            {
            "id": "3334",
            "name": "São João",
            "state_id": "16"
        },
            {
            "id": "3335",
            "name": "São Joaquim do Monte",
            "state_id": "16"
        },
            {
            "id": "3336",
            "name": "São José da Coroa Grande",
            "state_id": "16"
        },
            {
            "id": "3337",
            "name": "São José do Belmonte",
            "state_id": "16"
        },
            {
            "id": "3338",
            "name": "São José do Egito",
            "state_id": "16"
        },
            {
            "id": "3339",
            "name": "São Lourenço da Mata",
            "state_id": "16"
        },
            {
            "id": "3340",
            "name": "São Vicente Ferrer",
            "state_id": "16"
        },
            {
            "id": "3341",
            "name": "Serra Talhada",
            "state_id": "16"
        },
            {
            "id": "3342",
            "name": "Serrita",
            "state_id": "16"
        },
            {
            "id": "3343",
            "name": "Sertânia",
            "state_id": "16"
        },
            {
            "id": "3344",
            "name": "Sirinhaém",
            "state_id": "16"
        },
            {
            "id": "3345",
            "name": "Solidão",
            "state_id": "16"
        },
            {
            "id": "3346",
            "name": "Surubim",
            "state_id": "16"
        },
            {
            "id": "3347",
            "name": "Tabira",
            "state_id": "16"
        },
            {
            "id": "3348",
            "name": "Tacaimbó",
            "state_id": "16"
        },
            {
            "id": "3349",
            "name": "Tacaratu",
            "state_id": "16"
        },
            {
            "id": "3350",
            "name": "Tamandaré",
            "state_id": "16"
        },
            {
            "id": "3351",
            "name": "Taquaritinga do Norte",
            "state_id": "16"
        },
            {
            "id": "3352",
            "name": "Terezinha",
            "state_id": "16"
        },
            {
            "id": "3353",
            "name": "Terra Nova",
            "state_id": "16"
        },
            {
            "id": "3354",
            "name": "Timbaúba",
            "state_id": "16"
        },
            {
            "id": "3355",
            "name": "Toritama",
            "state_id": "16"
        },
            {
            "id": "3356",
            "name": "Tracunhaém",
            "state_id": "16"
        },
            {
            "id": "3357",
            "name": "Trindade",
            "state_id": "16"
        },
            {
            "id": "3358",
            "name": "Triunfo",
            "state_id": "16"
        },
            {
            "id": "3359",
            "name": "Tupanatinga",
            "state_id": "16"
        },
            {
            "id": "3360",
            "name": "Tuparetama",
            "state_id": "16"
        },
            {
            "id": "3361",
            "name": "Venturosa",
            "state_id": "16"
        },
            {
            "id": "3362",
            "name": "Verdejante",
            "state_id": "16"
        },
            {
            "id": "3363",
            "name": "Vertente do Lério",
            "state_id": "16"
        },
            {
            "id": "3364",
            "name": "Vertentes",
            "state_id": "16"
        },
            {
            "id": "3365",
            "name": "Vicência",
            "state_id": "16"
        },
            {
            "id": "3366",
            "name": "Vitória de Santo Antão",
            "state_id": "16"
        },
            {
            "id": "3367",
            "name": "Xexéu",
            "state_id": "16"
        },
            {
            "id": "3368",
            "name": "Acauã",
            "state_id": "17"
        },
            {
            "id": "3369",
            "name": "Agricolândia",
            "state_id": "17"
        },
            {
            "id": "3370",
            "name": "Água Branca",
            "state_id": "17"
        },
            {
            "id": "3371",
            "name": "Alagoinha do Piauí",
            "state_id": "17"
        },
            {
            "id": "3372",
            "name": "Alegrete do Piauí",
            "state_id": "17"
        },
            {
            "id": "3373",
            "name": "Alto Longá",
            "state_id": "17"
        },
            {
            "id": "3374",
            "name": "Altos",
            "state_id": "17"
        },
            {
            "id": "3375",
            "name": "Alvorada do Gurguéia",
            "state_id": "17"
        },
            {
            "id": "3376",
            "name": "Amarante",
            "state_id": "17"
        },
            {
            "id": "3377",
            "name": "Angical do Piauí",
            "state_id": "17"
        },
            {
            "id": "3378",
            "name": "Anísio de Abreu",
            "state_id": "17"
        },
            {
            "id": "3379",
            "name": "Antônio Almeida",
            "state_id": "17"
        },
            {
            "id": "3380",
            "name": "Aroazes",
            "state_id": "17"
        },
            {
            "id": "3381",
            "name": "Aroeiras do Itaim",
            "state_id": "17"
        },
            {
            "id": "3382",
            "name": "Arraial",
            "state_id": "17"
        },
            {
            "id": "3383",
            "name": "Assunção do Piauí",
            "state_id": "17"
        },
            {
            "id": "3384",
            "name": "Avelino Lopes",
            "state_id": "17"
        },
            {
            "id": "3385",
            "name": "Baixa Grande do Ribeiro",
            "state_id": "17"
        },
            {
            "id": "3386",
            "name": "Barra d`Alcântara",
            "state_id": "17"
        },
            {
            "id": "3387",
            "name": "Barras",
            "state_id": "17"
        },
            {
            "id": "3388",
            "name": "Barreiras do Piauí",
            "state_id": "17"
        },
            {
            "id": "3389",
            "name": "Barro Duro",
            "state_id": "17"
        },
            {
            "id": "3390",
            "name": "Batalha",
            "state_id": "17"
        },
            {
            "id": "3391",
            "name": "Bela Vista do Piauí",
            "state_id": "17"
        },
            {
            "id": "3392",
            "name": "Belém do Piauí",
            "state_id": "17"
        },
            {
            "id": "3393",
            "name": "Beneditinos",
            "state_id": "17"
        },
            {
            "id": "3394",
            "name": "Bertolínia",
            "state_id": "17"
        },
            {
            "id": "3395",
            "name": "Betânia do Piauí",
            "state_id": "17"
        },
            {
            "id": "3396",
            "name": "Boa Hora",
            "state_id": "17"
        },
            {
            "id": "3397",
            "name": "Bocaina",
            "state_id": "17"
        },
            {
            "id": "3398",
            "name": "Bom Jesus",
            "state_id": "17"
        },
            {
            "id": "3399",
            "name": "Bom Princípio do Piauí",
            "state_id": "17"
        },
            {
            "id": "3400",
            "name": "Bonfim do Piauí",
            "state_id": "17"
        },
            {
            "id": "3401",
            "name": "Boqueirão do Piauí",
            "state_id": "17"
        },
            {
            "id": "3402",
            "name": "Brasileira",
            "state_id": "17"
        },
            {
            "id": "3403",
            "name": "Brejo do Piauí",
            "state_id": "17"
        },
            {
            "id": "3404",
            "name": "Buriti dos Lopes",
            "state_id": "17"
        },
            {
            "id": "3405",
            "name": "Buriti dos Montes",
            "state_id": "17"
        },
            {
            "id": "3406",
            "name": "Cabeceiras do Piauí",
            "state_id": "17"
        },
            {
            "id": "3407",
            "name": "Cajazeiras do Piauí",
            "state_id": "17"
        },
            {
            "id": "3408",
            "name": "Cajueiro da Praia",
            "state_id": "17"
        },
            {
            "id": "3409",
            "name": "Caldeirão Grande do Piauí",
            "state_id": "17"
        },
            {
            "id": "3410",
            "name": "Campinas do Piauí",
            "state_id": "17"
        },
            {
            "id": "3411",
            "name": "Campo Alegre do Fidalgo",
            "state_id": "17"
        },
            {
            "id": "3412",
            "name": "Campo Grande do Piauí",
            "state_id": "17"
        },
            {
            "id": "3413",
            "name": "Campo Largo do Piauí",
            "state_id": "17"
        },
            {
            "id": "3414",
            "name": "Campo Maior",
            "state_id": "17"
        },
            {
            "id": "3415",
            "name": "Canavieira",
            "state_id": "17"
        },
            {
            "id": "3416",
            "name": "Canto do Buriti",
            "state_id": "17"
        },
            {
            "id": "3417",
            "name": "Capitão de Campos",
            "state_id": "17"
        },
            {
            "id": "3418",
            "name": "Capitão Gervásio Oliveira",
            "state_id": "17"
        },
            {
            "id": "3419",
            "name": "Caracol",
            "state_id": "17"
        },
            {
            "id": "3420",
            "name": "Caraúbas do Piauí",
            "state_id": "17"
        },
            {
            "id": "3421",
            "name": "Caridade do Piauí",
            "state_id": "17"
        },
            {
            "id": "3422",
            "name": "Castelo do Piauí",
            "state_id": "17"
        },
            {
            "id": "3423",
            "name": "Caxingó",
            "state_id": "17"
        },
            {
            "id": "3424",
            "name": "Cocal",
            "state_id": "17"
        },
            {
            "id": "3425",
            "name": "Cocal de Telha",
            "state_id": "17"
        },
            {
            "id": "3426",
            "name": "Cocal dos Alves",
            "state_id": "17"
        },
            {
            "id": "3427",
            "name": "Coivaras",
            "state_id": "17"
        },
            {
            "id": "3428",
            "name": "Colônia do Gurguéia",
            "state_id": "17"
        },
            {
            "id": "3429",
            "name": "Colônia do Piauí",
            "state_id": "17"
        },
            {
            "id": "3430",
            "name": "Conceição do Canindé",
            "state_id": "17"
        },
            {
            "id": "3431",
            "name": "Coronel José Dias",
            "state_id": "17"
        },
            {
            "id": "3432",
            "name": "Corrente",
            "state_id": "17"
        },
            {
            "id": "3433",
            "name": "Cristalândia do Piauí",
            "state_id": "17"
        },
            {
            "id": "3434",
            "name": "Cristino Castro",
            "state_id": "17"
        },
            {
            "id": "3435",
            "name": "Curimatá",
            "state_id": "17"
        },
            {
            "id": "3436",
            "name": "Currais",
            "state_id": "17"
        },
            {
            "id": "3437",
            "name": "Curral Novo do Piauí",
            "state_id": "17"
        },
            {
            "id": "3438",
            "name": "Curralinhos",
            "state_id": "17"
        },
            {
            "id": "3439",
            "name": "Demerval Lobão",
            "state_id": "17"
        },
            {
            "id": "3440",
            "name": "Dirceu Arcoverde",
            "state_id": "17"
        },
            {
            "id": "3441",
            "name": "Dom Expedito Lopes",
            "state_id": "17"
        },
            {
            "id": "3442",
            "name": "Dom Inocêncio",
            "state_id": "17"
        },
            {
            "id": "3443",
            "name": "Domingos Mourão",
            "state_id": "17"
        },
            {
            "id": "3444",
            "name": "Elesbão Veloso",
            "state_id": "17"
        },
            {
            "id": "3445",
            "name": "Eliseu Martins",
            "state_id": "17"
        },
            {
            "id": "3446",
            "name": "Esperantina",
            "state_id": "17"
        },
            {
            "id": "3447",
            "name": "Fartura do Piauí",
            "state_id": "17"
        },
            {
            "id": "3448",
            "name": "Flores do Piauí",
            "state_id": "17"
        },
            {
            "id": "3449",
            "name": "Floresta do Piauí",
            "state_id": "17"
        },
            {
            "id": "3450",
            "name": "Floriano",
            "state_id": "17"
        },
            {
            "id": "3451",
            "name": "Francinópolis",
            "state_id": "17"
        },
            {
            "id": "3452",
            "name": "Francisco Ayres",
            "state_id": "17"
        },
            {
            "id": "3453",
            "name": "Francisco Macedo",
            "state_id": "17"
        },
            {
            "id": "3454",
            "name": "Francisco Santos",
            "state_id": "17"
        },
            {
            "id": "3455",
            "name": "Fronteiras",
            "state_id": "17"
        },
            {
            "id": "3456",
            "name": "Geminiano",
            "state_id": "17"
        },
            {
            "id": "3457",
            "name": "Gilbués",
            "state_id": "17"
        },
            {
            "id": "3458",
            "name": "Guadalupe",
            "state_id": "17"
        },
            {
            "id": "3459",
            "name": "Guaribas",
            "state_id": "17"
        },
            {
            "id": "3460",
            "name": "Hugo Napoleão",
            "state_id": "17"
        },
            {
            "id": "3461",
            "name": "Ilha Grande",
            "state_id": "17"
        },
            {
            "id": "3462",
            "name": "Inhuma",
            "state_id": "17"
        },
            {
            "id": "3463",
            "name": "Ipiranga do Piauí",
            "state_id": "17"
        },
            {
            "id": "3464",
            "name": "Isaías Coelho",
            "state_id": "17"
        },
            {
            "id": "3465",
            "name": "Itainópolis",
            "state_id": "17"
        },
            {
            "id": "3466",
            "name": "Itaueira",
            "state_id": "17"
        },
            {
            "id": "3467",
            "name": "Jacobina do Piauí",
            "state_id": "17"
        },
            {
            "id": "3468",
            "name": "Jaicós",
            "state_id": "17"
        },
            {
            "id": "3469",
            "name": "Jardim do Mulato",
            "state_id": "17"
        },
            {
            "id": "3470",
            "name": "Jatobá do Piauí",
            "state_id": "17"
        },
            {
            "id": "3471",
            "name": "Jerumenha",
            "state_id": "17"
        },
            {
            "id": "3472",
            "name": "João Costa",
            "state_id": "17"
        },
            {
            "id": "3473",
            "name": "Joaquim Pires",
            "state_id": "17"
        },
            {
            "id": "3474",
            "name": "Joca Marques",
            "state_id": "17"
        },
            {
            "id": "3475",
            "name": "José de Freitas",
            "state_id": "17"
        },
            {
            "id": "3476",
            "name": "Juazeiro do Piauí",
            "state_id": "17"
        },
            {
            "id": "3477",
            "name": "Júlio Borges",
            "state_id": "17"
        },
            {
            "id": "3478",
            "name": "Jurema",
            "state_id": "17"
        },
            {
            "id": "3479",
            "name": "Lagoa Alegre",
            "state_id": "17"
        },
            {
            "id": "3480",
            "name": "Lagoa de São Francisco",
            "state_id": "17"
        },
            {
            "id": "3481",
            "name": "Lagoa do Barro do Piauí",
            "state_id": "17"
        },
            {
            "id": "3482",
            "name": "Lagoa do Piauí",
            "state_id": "17"
        },
            {
            "id": "3483",
            "name": "Lagoa do Sítio",
            "state_id": "17"
        },
            {
            "id": "3484",
            "name": "Lagoinha do Piauí",
            "state_id": "17"
        },
            {
            "id": "3485",
            "name": "Landri Sales",
            "state_id": "17"
        },
            {
            "id": "3486",
            "name": "Luís Correia",
            "state_id": "17"
        },
            {
            "id": "3487",
            "name": "Luzilândia",
            "state_id": "17"
        },
            {
            "id": "3488",
            "name": "Madeiro",
            "state_id": "17"
        },
            {
            "id": "3489",
            "name": "Manoel Emídio",
            "state_id": "17"
        },
            {
            "id": "3490",
            "name": "Marcolândia",
            "state_id": "17"
        },
            {
            "id": "3491",
            "name": "Marcos Parente",
            "state_id": "17"
        },
            {
            "id": "3492",
            "name": "Massapê do Piauí",
            "state_id": "17"
        },
            {
            "id": "3493",
            "name": "Matias Olímpio",
            "state_id": "17"
        },
            {
            "id": "3494",
            "name": "Miguel Alves",
            "state_id": "17"
        },
            {
            "id": "3495",
            "name": "Miguel Leão",
            "state_id": "17"
        },
            {
            "id": "3496",
            "name": "Milton Brandão",
            "state_id": "17"
        },
            {
            "id": "3497",
            "name": "Monsenhor Gil",
            "state_id": "17"
        },
            {
            "id": "3498",
            "name": "Monsenhor Hipólito",
            "state_id": "17"
        },
            {
            "id": "3499",
            "name": "Monte Alegre do Piauí",
            "state_id": "17"
        },
            {
            "id": "3500",
            "name": "Morro Cabeça no Tempo",
            "state_id": "17"
        },
            {
            "id": "3501",
            "name": "Morro do Chapéu do Piauí",
            "state_id": "17"
        },
            {
            "id": "3502",
            "name": "Murici dos Portelas",
            "state_id": "17"
        },
            {
            "id": "3503",
            "name": "Nazaré do Piauí",
            "state_id": "17"
        },
            {
            "id": "3504",
            "name": "Nossa Senhora de Nazaré",
            "state_id": "17"
        },
            {
            "id": "3505",
            "name": "Nossa Senhora dos Remédios",
            "state_id": "17"
        },
            {
            "id": "3506",
            "name": "Nova Santa Rita",
            "state_id": "17"
        },
            {
            "id": "3507",
            "name": "Novo Oriente do Piauí",
            "state_id": "17"
        },
            {
            "id": "3508",
            "name": "Novo Santo Antônio",
            "state_id": "17"
        },
            {
            "id": "3509",
            "name": "Oeiras",
            "state_id": "17"
        },
            {
            "id": "3510",
            "name": "Olho d`Água do Piauí",
            "state_id": "17"
        },
            {
            "id": "3511",
            "name": "Padre Marcos",
            "state_id": "17"
        },
            {
            "id": "3512",
            "name": "Paes Landim",
            "state_id": "17"
        },
            {
            "id": "3513",
            "name": "Pajeú do Piauí",
            "state_id": "17"
        },
            {
            "id": "3514",
            "name": "Palmeira do Piauí",
            "state_id": "17"
        },
            {
            "id": "3515",
            "name": "Palmeirais",
            "state_id": "17"
        },
            {
            "id": "3516",
            "name": "Paquetá",
            "state_id": "17"
        },
            {
            "id": "3517",
            "name": "Parnaguá",
            "state_id": "17"
        },
            {
            "id": "3518",
            "name": "Parnaíba",
            "state_id": "17"
        },
            {
            "id": "3519",
            "name": "Passagem Franca do Piauí",
            "state_id": "17"
        },
            {
            "id": "3520",
            "name": "Patos do Piauí",
            "state_id": "17"
        },
            {
            "id": "3521",
            "name": "Pau d`Arco do Piauí",
            "state_id": "17"
        },
            {
            "id": "3522",
            "name": "Paulistana",
            "state_id": "17"
        },
            {
            "id": "3523",
            "name": "Pavussu",
            "state_id": "17"
        },
            {
            "id": "3524",
            "name": "Pedro II",
            "state_id": "17"
        },
            {
            "id": "3525",
            "name": "Pedro Laurentino",
            "state_id": "17"
        },
            {
            "id": "3526",
            "name": "Picos",
            "state_id": "17"
        },
            {
            "id": "3527",
            "name": "Pimenteiras",
            "state_id": "17"
        },
            {
            "id": "3528",
            "name": "Pio IX",
            "state_id": "17"
        },
            {
            "id": "3529",
            "name": "Piracuruca",
            "state_id": "17"
        },
            {
            "id": "3530",
            "name": "Piripiri",
            "state_id": "17"
        },
            {
            "id": "3531",
            "name": "Porto",
            "state_id": "17"
        },
            {
            "id": "3532",
            "name": "Porto Alegre do Piauí",
            "state_id": "17"
        },
            {
            "id": "3533",
            "name": "Prata do Piauí",
            "state_id": "17"
        },
            {
            "id": "3534",
            "name": "Queimada Nova",
            "state_id": "17"
        },
            {
            "id": "3535",
            "name": "Redenção do Gurguéia",
            "state_id": "17"
        },
            {
            "id": "3536",
            "name": "Regeneração",
            "state_id": "17"
        },
            {
            "id": "3537",
            "name": "Riacho Frio",
            "state_id": "17"
        },
            {
            "id": "3538",
            "name": "Ribeira do Piauí",
            "state_id": "17"
        },
            {
            "id": "3539",
            "name": "Ribeiro Gonçalves",
            "state_id": "17"
        },
            {
            "id": "3540",
            "name": "Rio Grande do Piauí",
            "state_id": "17"
        },
            {
            "id": "3541",
            "name": "Santa Cruz do Piauí",
            "state_id": "17"
        },
            {
            "id": "3542",
            "name": "Santa Cruz dos Milagres",
            "state_id": "17"
        },
            {
            "id": "3543",
            "name": "Santa Filomena",
            "state_id": "17"
        },
            {
            "id": "3544",
            "name": "Santa Luz",
            "state_id": "17"
        },
            {
            "id": "3545",
            "name": "Santa Rosa do Piauí",
            "state_id": "17"
        },
            {
            "id": "3546",
            "name": "Santana do Piauí",
            "state_id": "17"
        },
            {
            "id": "3547",
            "name": "Santo Antônio de Lisboa",
            "state_id": "17"
        },
            {
            "id": "3548",
            "name": "Santo Antônio dos Milagres",
            "state_id": "17"
        },
            {
            "id": "3549",
            "name": "Santo Inácio do Piauí",
            "state_id": "17"
        },
            {
            "id": "3550",
            "name": "São Braz do Piauí",
            "state_id": "17"
        },
            {
            "id": "3551",
            "name": "São Félix do Piauí",
            "state_id": "17"
        },
            {
            "id": "3552",
            "name": "São Francisco de Assis do Piauí",
            "state_id": "17"
        },
            {
            "id": "3553",
            "name": "São Francisco do Piauí",
            "state_id": "17"
        },
            {
            "id": "3554",
            "name": "São Gonçalo do Gurguéia",
            "state_id": "17"
        },
            {
            "id": "3555",
            "name": "São Gonçalo do Piauí",
            "state_id": "17"
        },
            {
            "id": "3556",
            "name": "São João da Canabrava",
            "state_id": "17"
        },
            {
            "id": "3557",
            "name": "São João da Fronteira",
            "state_id": "17"
        },
            {
            "id": "3558",
            "name": "São João da Serra",
            "state_id": "17"
        },
            {
            "id": "3559",
            "name": "São João da Varjota",
            "state_id": "17"
        },
            {
            "id": "3560",
            "name": "São João do Arraial",
            "state_id": "17"
        },
            {
            "id": "3561",
            "name": "São João do Piauí",
            "state_id": "17"
        },
            {
            "id": "3562",
            "name": "São José do Divino",
            "state_id": "17"
        },
            {
            "id": "3563",
            "name": "São José do Peixe",
            "state_id": "17"
        },
            {
            "id": "3564",
            "name": "São José do Piauí",
            "state_id": "17"
        },
            {
            "id": "3565",
            "name": "São Julião",
            "state_id": "17"
        },
            {
            "id": "3566",
            "name": "São Lourenço do Piauí",
            "state_id": "17"
        },
            {
            "id": "3567",
            "name": "São Luis do Piauí",
            "state_id": "17"
        },
            {
            "id": "3568",
            "name": "São Miguel da Baixa Grande",
            "state_id": "17"
        },
            {
            "id": "3569",
            "name": "São Miguel do Fidalgo",
            "state_id": "17"
        },
            {
            "id": "3570",
            "name": "São Miguel do Tapuio",
            "state_id": "17"
        },
            {
            "id": "3571",
            "name": "São Pedro do Piauí",
            "state_id": "17"
        },
            {
            "id": "3572",
            "name": "São Raimundo Nonato",
            "state_id": "17"
        },
            {
            "id": "3573",
            "name": "Sebastião Barros",
            "state_id": "17"
        },
            {
            "id": "3574",
            "name": "Sebastião Leal",
            "state_id": "17"
        },
            {
            "id": "3575",
            "name": "Sigefredo Pacheco",
            "state_id": "17"
        },
            {
            "id": "3576",
            "name": "Simões",
            "state_id": "17"
        },
            {
            "id": "3577",
            "name": "Simplício Mendes",
            "state_id": "17"
        },
            {
            "id": "3578",
            "name": "Socorro do Piauí",
            "state_id": "17"
        },
            {
            "id": "3579",
            "name": "Sussuapara",
            "state_id": "17"
        },
            {
            "id": "3580",
            "name": "Tamboril do Piauí",
            "state_id": "17"
        },
            {
            "id": "3581",
            "name": "Tanque do Piauí",
            "state_id": "17"
        },
            {
            "id": "3582",
            "name": "Teresina",
            "state_id": "17"
        },
            {
            "id": "3583",
            "name": "União",
            "state_id": "17"
        },
            {
            "id": "3584",
            "name": "Uruçuí",
            "state_id": "17"
        },
            {
            "id": "3585",
            "name": "Valença do Piauí",
            "state_id": "17"
        },
            {
            "id": "3586",
            "name": "Várzea Branca",
            "state_id": "17"
        },
            {
            "id": "3587",
            "name": "Várzea Grande",
            "state_id": "17"
        },
            {
            "id": "3588",
            "name": "Vera Mendes",
            "state_id": "17"
        },
            {
            "id": "3589",
            "name": "Vila Nova do Piauí",
            "state_id": "17"
        },
            {
            "id": "3590",
            "name": "Wall Ferraz",
            "state_id": "17"
        },
            {
            "id": "3591",
            "name": "Angra dos Reis",
            "state_id": "19"
        },
            {
            "id": "3592",
            "name": "Aperibé",
            "state_id": "19"
        },
            {
            "id": "3593",
            "name": "Araruama",
            "state_id": "19"
        },
            {
            "id": "3594",
            "name": "Areal",
            "state_id": "19"
        },
            {
            "id": "3595",
            "name": "Armação dos Búzios",
            "state_id": "19"
        },
            {
            "id": "3596",
            "name": "Arraial do Cabo",
            "state_id": "19"
        },
            {
            "id": "3597",
            "name": "Barra do Piraí",
            "state_id": "19"
        },
            {
            "id": "3598",
            "name": "Barra Mansa",
            "state_id": "19"
        },
            {
            "id": "3599",
            "name": "Belford Roxo",
            "state_id": "19"
        },
            {
            "id": "3600",
            "name": "Bom Jardim",
            "state_id": "19"
        },
            {
            "id": "3601",
            "name": "Bom Jesus do Itabapoana",
            "state_id": "19"
        },
            {
            "id": "3602",
            "name": "Cabo Frio",
            "state_id": "19"
        },
            {
            "id": "3603",
            "name": "Cachoeiras de Macacu",
            "state_id": "19"
        },
            {
            "id": "3604",
            "name": "Cambuci",
            "state_id": "19"
        },
            {
            "id": "3605",
            "name": "Campos dos Goytacazes",
            "state_id": "19"
        },
            {
            "id": "3606",
            "name": "Cantagalo",
            "state_id": "19"
        },
            {
            "id": "3607",
            "name": "Carapebus",
            "state_id": "19"
        },
            {
            "id": "3608",
            "name": "Cardoso Moreira",
            "state_id": "19"
        },
            {
            "id": "3609",
            "name": "Carmo",
            "state_id": "19"
        },
            {
            "id": "3610",
            "name": "Casimiro de Abreu",
            "state_id": "19"
        },
            {
            "id": "3611",
            "name": "Comendador Levy Gasparian",
            "state_id": "19"
        },
            {
            "id": "3612",
            "name": "Conceição de Macabu",
            "state_id": "19"
        },
            {
            "id": "3613",
            "name": "Cordeiro",
            "state_id": "19"
        },
            {
            "id": "3614",
            "name": "Duas Barras",
            "state_id": "19"
        },
            {
            "id": "3615",
            "name": "Duque de Caxias",
            "state_id": "19"
        },
            {
            "id": "3616",
            "name": "Engenheiro Paulo de Frontin",
            "state_id": "19"
        },
            {
            "id": "3617",
            "name": "Guapimirim",
            "state_id": "19"
        },
            {
            "id": "3618",
            "name": "Iguaba Grande",
            "state_id": "19"
        },
            {
            "id": "3619",
            "name": "Itaboraí",
            "state_id": "19"
        },
            {
            "id": "3620",
            "name": "Itaguaí",
            "state_id": "19"
        },
            {
            "id": "3621",
            "name": "Italva",
            "state_id": "19"
        },
            {
            "id": "3622",
            "name": "Itaocara",
            "state_id": "19"
        },
            {
            "id": "3623",
            "name": "Itaperuna",
            "state_id": "19"
        },
            {
            "id": "3624",
            "name": "Itatiaia",
            "state_id": "19"
        },
            {
            "id": "3625",
            "name": "Japeri",
            "state_id": "19"
        },
            {
            "id": "3626",
            "name": "Laje do Muriaé",
            "state_id": "19"
        },
            {
            "id": "3627",
            "name": "Macaé",
            "state_id": "19"
        },
            {
            "id": "3628",
            "name": "Macuco",
            "state_id": "19"
        },
            {
            "id": "3629",
            "name": "Magé",
            "state_id": "19"
        },
            {
            "id": "3630",
            "name": "Mangaratiba",
            "state_id": "19"
        },
            {
            "id": "3631",
            "name": "Maricá",
            "state_id": "19"
        },
            {
            "id": "3632",
            "name": "Mendes",
            "state_id": "19"
        },
            {
            "id": "3633",
            "name": "Mesquita",
            "state_id": "19"
        },
            {
            "id": "3634",
            "name": "Miguel Pereira",
            "state_id": "19"
        },
            {
            "id": "3635",
            "name": "Miracema",
            "state_id": "19"
        },
            {
            "id": "3636",
            "name": "Natividade",
            "state_id": "19"
        },
            {
            "id": "3637",
            "name": "Nilópolis",
            "state_id": "19"
        },
            {
            "id": "3638",
            "name": "Niterói",
            "state_id": "19"
        },
            {
            "id": "3639",
            "name": "Nova Friburgo",
            "state_id": "19"
        },
            {
            "id": "3640",
            "name": "Nova Iguaçu",
            "state_id": "19"
        },
            {
            "id": "3641",
            "name": "Paracambi",
            "state_id": "19"
        },
            {
            "id": "3642",
            "name": "Paraíba do Sul",
            "state_id": "19"
        },
            {
            "id": "3643",
            "name": "Parati",
            "state_id": "19"
        },
            {
            "id": "3644",
            "name": "Paty do Alferes",
            "state_id": "19"
        },
            {
            "id": "3645",
            "name": "Petrópolis",
            "state_id": "19"
        },
            {
            "id": "3646",
            "name": "Pinheiral",
            "state_id": "19"
        },
            {
            "id": "3647",
            "name": "Piraí",
            "state_id": "19"
        },
            {
            "id": "3648",
            "name": "Porciúncula",
            "state_id": "19"
        },
            {
            "id": "3649",
            "name": "Porto Real",
            "state_id": "19"
        },
            {
            "id": "3650",
            "name": "Quatis",
            "state_id": "19"
        },
            {
            "id": "3651",
            "name": "Queimados",
            "state_id": "19"
        },
            {
            "id": "3652",
            "name": "Quissamã",
            "state_id": "19"
        },
            {
            "id": "3653",
            "name": "Resende",
            "state_id": "19"
        },
            {
            "id": "3654",
            "name": "Rio Bonito",
            "state_id": "19"
        },
            {
            "id": "3655",
            "name": "Rio Claro",
            "state_id": "19"
        },
            {
            "id": "3656",
            "name": "Rio das Flores",
            "state_id": "19"
        },
            {
            "id": "3657",
            "name": "Rio das Ostras",
            "state_id": "19"
        },
            {
            "id": "3658",
            "name": "Rio de Janeiro",
            "state_id": "19"
        },
            {
            "id": "3659",
            "name": "Santa Maria Madalena",
            "state_id": "19"
        },
            {
            "id": "3660",
            "name": "Santo Antônio de Pádua",
            "state_id": "19"
        },
            {
            "id": "3661",
            "name": "São Fidélis",
            "state_id": "19"
        },
            {
            "id": "3662",
            "name": "São Francisco de Itabapoana",
            "state_id": "19"
        },
            {
            "id": "3663",
            "name": "São Gonçalo",
            "state_id": "19"
        },
            {
            "id": "3664",
            "name": "São João da Barra",
            "state_id": "19"
        },
            {
            "id": "3665",
            "name": "São João de Meriti",
            "state_id": "19"
        },
            {
            "id": "3666",
            "name": "São José de Ubá",
            "state_id": "19"
        },
            {
            "id": "3667",
            "name": "São José do Vale do Rio Pret",
            "state_id": "19"
        },
            {
            "id": "3668",
            "name": "São Pedro da Aldeia",
            "state_id": "19"
        },
            {
            "id": "3669",
            "name": "São Sebastião do Alto",
            "state_id": "19"
        },
            {
            "id": "3670",
            "name": "Sapucaia",
            "state_id": "19"
        },
            {
            "id": "3671",
            "name": "Saquarema",
            "state_id": "19"
        },
            {
            "id": "3672",
            "name": "Seropédica",
            "state_id": "19"
        },
            {
            "id": "3673",
            "name": "Silva Jardim",
            "state_id": "19"
        },
            {
            "id": "3674",
            "name": "Sumidouro",
            "state_id": "19"
        },
            {
            "id": "3675",
            "name": "Tanguá",
            "state_id": "19"
        },
            {
            "id": "3676",
            "name": "Teresópolis",
            "state_id": "19"
        },
            {
            "id": "3677",
            "name": "Trajano de Morais",
            "state_id": "19"
        },
            {
            "id": "3678",
            "name": "Três Rios",
            "state_id": "19"
        },
            {
            "id": "3679",
            "name": "Valença",
            "state_id": "19"
        },
            {
            "id": "3680",
            "name": "Varre-Sai",
            "state_id": "19"
        },
            {
            "id": "3681",
            "name": "Vassouras",
            "state_id": "19"
        },
            {
            "id": "3682",
            "name": "Volta Redonda",
            "state_id": "19"
        },
            {
            "id": "3683",
            "name": "Acari",
            "state_id": "20"
        },
            {
            "id": "3684",
            "name": "Açu",
            "state_id": "20"
        },
            {
            "id": "3685",
            "name": "Afonso Bezerra",
            "state_id": "20"
        },
            {
            "id": "3686",
            "name": "Água Nova",
            "state_id": "20"
        },
            {
            "id": "3687",
            "name": "Alexandria",
            "state_id": "20"
        },
            {
            "id": "3688",
            "name": "Almino Afonso",
            "state_id": "20"
        },
            {
            "id": "3689",
            "name": "Alto do Rodrigues",
            "state_id": "20"
        },
            {
            "id": "3690",
            "name": "Angicos",
            "state_id": "20"
        },
            {
            "id": "3691",
            "name": "Antônio Martins",
            "state_id": "20"
        },
            {
            "id": "3692",
            "name": "Apodi",
            "state_id": "20"
        },
            {
            "id": "3693",
            "name": "Areia Branca",
            "state_id": "20"
        },
            {
            "id": "3694",
            "name": "Arês",
            "state_id": "20"
        },
            {
            "id": "3695",
            "name": "Augusto Severo",
            "state_id": "20"
        },
            {
            "id": "3696",
            "name": "Baía Formosa",
            "state_id": "20"
        },
            {
            "id": "3697",
            "name": "Baraúna",
            "state_id": "20"
        },
            {
            "id": "3698",
            "name": "Barcelona",
            "state_id": "20"
        },
            {
            "id": "3699",
            "name": "Bento Fernandes",
            "state_id": "20"
        },
            {
            "id": "3700",
            "name": "Bodó",
            "state_id": "20"
        },
            {
            "id": "3701",
            "name": "Bom Jesus",
            "state_id": "20"
        },
            {
            "id": "3702",
            "name": "Brejinho",
            "state_id": "20"
        },
            {
            "id": "3703",
            "name": "Caiçara do Norte",
            "state_id": "20"
        },
            {
            "id": "3704",
            "name": "Caiçara do Rio do Vento",
            "state_id": "20"
        },
            {
            "id": "3705",
            "name": "Caicó",
            "state_id": "20"
        },
            {
            "id": "3706",
            "name": "Campo Redondo",
            "state_id": "20"
        },
            {
            "id": "3707",
            "name": "Canguaretama",
            "state_id": "20"
        },
            {
            "id": "3708",
            "name": "Caraúbas",
            "state_id": "20"
        },
            {
            "id": "3709",
            "name": "Carnaúba dos Dantas",
            "state_id": "20"
        },
            {
            "id": "3710",
            "name": "Carnaubais",
            "state_id": "20"
        },
            {
            "id": "3711",
            "name": "Ceará-Mirim",
            "state_id": "20"
        },
            {
            "id": "3712",
            "name": "Cerro Corá",
            "state_id": "20"
        },
            {
            "id": "3713",
            "name": "Coronel Ezequiel",
            "state_id": "20"
        },
            {
            "id": "3714",
            "name": "Coronel João Pessoa",
            "state_id": "20"
        },
            {
            "id": "3715",
            "name": "Cruzeta",
            "state_id": "20"
        },
            {
            "id": "3716",
            "name": "Currais Novos",
            "state_id": "20"
        },
            {
            "id": "3717",
            "name": "Doutor Severiano",
            "state_id": "20"
        },
            {
            "id": "3718",
            "name": "Encanto",
            "state_id": "20"
        },
            {
            "id": "3719",
            "name": "Equador",
            "state_id": "20"
        },
            {
            "id": "3720",
            "name": "Espírito Santo",
            "state_id": "20"
        },
            {
            "id": "3721",
            "name": "Extremoz",
            "state_id": "20"
        },
            {
            "id": "3722",
            "name": "Felipe Guerra",
            "state_id": "20"
        },
            {
            "id": "3723",
            "name": "Fernando Pedroza",
            "state_id": "20"
        },
            {
            "id": "3724",
            "name": "Florânia",
            "state_id": "20"
        },
            {
            "id": "3725",
            "name": "Francisco Dantas",
            "state_id": "20"
        },
            {
            "id": "3726",
            "name": "Frutuoso Gomes",
            "state_id": "20"
        },
            {
            "id": "3727",
            "name": "Galinhos",
            "state_id": "20"
        },
            {
            "id": "3728",
            "name": "Goianinha",
            "state_id": "20"
        },
            {
            "id": "3729",
            "name": "Governador Dix-Sept Rosado",
            "state_id": "20"
        },
            {
            "id": "3730",
            "name": "Grossos",
            "state_id": "20"
        },
            {
            "id": "3731",
            "name": "Guamaré",
            "state_id": "20"
        },
            {
            "id": "3732",
            "name": "Ielmo Marinho",
            "state_id": "20"
        },
            {
            "id": "3733",
            "name": "Ipanguaçu",
            "state_id": "20"
        },
            {
            "id": "3734",
            "name": "Ipueira",
            "state_id": "20"
        },
            {
            "id": "3735",
            "name": "Itajá",
            "state_id": "20"
        },
            {
            "id": "3736",
            "name": "Itaú",
            "state_id": "20"
        },
            {
            "id": "3737",
            "name": "Jaçanã",
            "state_id": "20"
        },
            {
            "id": "3738",
            "name": "Jandaíra",
            "state_id": "20"
        },
            {
            "id": "3739",
            "name": "Janduís",
            "state_id": "20"
        },
            {
            "id": "3740",
            "name": "Januário Cicco",
            "state_id": "20"
        },
            {
            "id": "3741",
            "name": "Japi",
            "state_id": "20"
        },
            {
            "id": "3742",
            "name": "Jardim de Angicos",
            "state_id": "20"
        },
            {
            "id": "3743",
            "name": "Jardim de Piranhas",
            "state_id": "20"
        },
            {
            "id": "3744",
            "name": "Jardim do Seridó",
            "state_id": "20"
        },
            {
            "id": "3745",
            "name": "João Câmara",
            "state_id": "20"
        },
            {
            "id": "3746",
            "name": "João Dias",
            "state_id": "20"
        },
            {
            "id": "3747",
            "name": "José da Penha",
            "state_id": "20"
        },
            {
            "id": "3748",
            "name": "Jucurutu",
            "state_id": "20"
        },
            {
            "id": "3749",
            "name": "Jundiá",
            "state_id": "20"
        },
            {
            "id": "3750",
            "name": "Lagoa d`Anta",
            "state_id": "20"
        },
            {
            "id": "3751",
            "name": "Lagoa de Pedras",
            "state_id": "20"
        },
            {
            "id": "3752",
            "name": "Lagoa de Velhos",
            "state_id": "20"
        },
            {
            "id": "3753",
            "name": "Lagoa Nova",
            "state_id": "20"
        },
            {
            "id": "3754",
            "name": "Lagoa Salgada",
            "state_id": "20"
        },
            {
            "id": "3755",
            "name": "Lajes",
            "state_id": "20"
        },
            {
            "id": "3756",
            "name": "Lajes Pintadas",
            "state_id": "20"
        },
            {
            "id": "3757",
            "name": "Lucrécia",
            "state_id": "20"
        },
            {
            "id": "3758",
            "name": "Luís Gomes",
            "state_id": "20"
        },
            {
            "id": "3759",
            "name": "Macaíba",
            "state_id": "20"
        },
            {
            "id": "3760",
            "name": "Macau",
            "state_id": "20"
        },
            {
            "id": "3761",
            "name": "Major Sales",
            "state_id": "20"
        },
            {
            "id": "3762",
            "name": "Marcelino Vieira",
            "state_id": "20"
        },
            {
            "id": "3763",
            "name": "Martins",
            "state_id": "20"
        },
            {
            "id": "3764",
            "name": "Maxaranguape",
            "state_id": "20"
        },
            {
            "id": "3765",
            "name": "Messias Targino",
            "state_id": "20"
        },
            {
            "id": "3766",
            "name": "Montanhas",
            "state_id": "20"
        },
            {
            "id": "3767",
            "name": "Monte Alegre",
            "state_id": "20"
        },
            {
            "id": "3768",
            "name": "Monte das Gameleiras",
            "state_id": "20"
        },
            {
            "id": "3769",
            "name": "Mossoró",
            "state_id": "20"
        },
            {
            "id": "3770",
            "name": "Natal",
            "state_id": "20"
        },
            {
            "id": "3771",
            "name": "Nísia Floresta",
            "state_id": "20"
        },
            {
            "id": "3772",
            "name": "Nova Cruz",
            "state_id": "20"
        },
            {
            "id": "3773",
            "name": "Olho-d`Água do Borges",
            "state_id": "20"
        },
            {
            "id": "3774",
            "name": "Ouro Branco",
            "state_id": "20"
        },
            {
            "id": "3775",
            "name": "Paraná",
            "state_id": "20"
        },
            {
            "id": "3776",
            "name": "Paraú",
            "state_id": "20"
        },
            {
            "id": "3777",
            "name": "Parazinho",
            "state_id": "20"
        },
            {
            "id": "3778",
            "name": "Parelhas",
            "state_id": "20"
        },
            {
            "id": "3779",
            "name": "Parnamirim",
            "state_id": "20"
        },
            {
            "id": "3780",
            "name": "Passa e Fica",
            "state_id": "20"
        },
            {
            "id": "3781",
            "name": "Passagem",
            "state_id": "20"
        },
            {
            "id": "3782",
            "name": "Patu",
            "state_id": "20"
        },
            {
            "id": "3783",
            "name": "Pau dos Ferros",
            "state_id": "20"
        },
            {
            "id": "3784",
            "name": "Pedra Grande",
            "state_id": "20"
        },
            {
            "id": "3785",
            "name": "Pedra Preta",
            "state_id": "20"
        },
            {
            "id": "3786",
            "name": "Pedro Avelino",
            "state_id": "20"
        },
            {
            "id": "3787",
            "name": "Pedro Velho",
            "state_id": "20"
        },
            {
            "id": "3788",
            "name": "Pendências",
            "state_id": "20"
        },
            {
            "id": "3789",
            "name": "Pilões",
            "state_id": "20"
        },
            {
            "id": "3790",
            "name": "Poço Branco",
            "state_id": "20"
        },
            {
            "id": "3791",
            "name": "Portalegre",
            "state_id": "20"
        },
            {
            "id": "3792",
            "name": "Porto do Mangue",
            "state_id": "20"
        },
            {
            "id": "3793",
            "name": "Presidente Juscelino",
            "state_id": "20"
        },
            {
            "id": "3794",
            "name": "Pureza",
            "state_id": "20"
        },
            {
            "id": "3795",
            "name": "Rafael Fernandes",
            "state_id": "20"
        },
            {
            "id": "3796",
            "name": "Rafael Godeiro",
            "state_id": "20"
        },
            {
            "id": "3797",
            "name": "Riacho da Cruz",
            "state_id": "20"
        },
            {
            "id": "3798",
            "name": "Riacho de Santana",
            "state_id": "20"
        },
            {
            "id": "3799",
            "name": "Riachuelo",
            "state_id": "20"
        },
            {
            "id": "3800",
            "name": "Rio do Fogo",
            "state_id": "20"
        },
            {
            "id": "3801",
            "name": "Rodolfo Fernandes",
            "state_id": "20"
        },
            {
            "id": "3802",
            "name": "Ruy Barbosa",
            "state_id": "20"
        },
            {
            "id": "3803",
            "name": "Santa Cruz",
            "state_id": "20"
        },
            {
            "id": "3804",
            "name": "Santa Maria",
            "state_id": "20"
        },
            {
            "id": "3805",
            "name": "Santana do Matos",
            "state_id": "20"
        },
            {
            "id": "3806",
            "name": "Santana do Seridó",
            "state_id": "20"
        },
            {
            "id": "3807",
            "name": "Santo Antônio",
            "state_id": "20"
        },
            {
            "id": "3808",
            "name": "São Bento do Norte",
            "state_id": "20"
        },
            {
            "id": "3809",
            "name": "São Bento do Trairí",
            "state_id": "20"
        },
            {
            "id": "3810",
            "name": "São Fernando",
            "state_id": "20"
        },
            {
            "id": "3811",
            "name": "São Francisco do Oeste",
            "state_id": "20"
        },
            {
            "id": "3812",
            "name": "São Gonçalo do Amarante",
            "state_id": "20"
        },
            {
            "id": "3813",
            "name": "São João do Sabugi",
            "state_id": "20"
        },
            {
            "id": "3814",
            "name": "São José de Mipibu",
            "state_id": "20"
        },
            {
            "id": "3815",
            "name": "São José do Campestre",
            "state_id": "20"
        },
            {
            "id": "3816",
            "name": "São José do Seridó",
            "state_id": "20"
        },
            {
            "id": "3817",
            "name": "São Miguel",
            "state_id": "20"
        },
            {
            "id": "3818",
            "name": "São Miguel do Gostoso",
            "state_id": "20"
        },
            {
            "id": "3819",
            "name": "São Paulo do Potengi",
            "state_id": "20"
        },
            {
            "id": "3820",
            "name": "São Pedro",
            "state_id": "20"
        },
            {
            "id": "3821",
            "name": "São Rafael",
            "state_id": "20"
        },
            {
            "id": "3822",
            "name": "São Tomé",
            "state_id": "20"
        },
            {
            "id": "3823",
            "name": "São Vicente",
            "state_id": "20"
        },
            {
            "id": "3824",
            "name": "Senador Elói de Souza",
            "state_id": "20"
        },
            {
            "id": "3825",
            "name": "Senador Georgino Avelino",
            "state_id": "20"
        },
            {
            "id": "3826",
            "name": "Serra de São Bento",
            "state_id": "20"
        },
            {
            "id": "3827",
            "name": "Serra do Mel",
            "state_id": "20"
        },
            {
            "id": "3828",
            "name": "Serra Negra do Norte",
            "state_id": "20"
        },
            {
            "id": "3829",
            "name": "Serrinha",
            "state_id": "20"
        },
            {
            "id": "3830",
            "name": "Serrinha dos Pintos",
            "state_id": "20"
        },
            {
            "id": "3831",
            "name": "Severiano Melo",
            "state_id": "20"
        },
            {
            "id": "3832",
            "name": "Sítio Novo",
            "state_id": "20"
        },
            {
            "id": "3833",
            "name": "Taboleiro Grande",
            "state_id": "20"
        },
            {
            "id": "3834",
            "name": "Taipu",
            "state_id": "20"
        },
            {
            "id": "3835",
            "name": "Tangará",
            "state_id": "20"
        },
            {
            "id": "3836",
            "name": "Tenente Ananias",
            "state_id": "20"
        },
            {
            "id": "3837",
            "name": "Tenente Laurentino Cruz",
            "state_id": "20"
        },
            {
            "id": "3838",
            "name": "Tibau",
            "state_id": "20"
        },
            {
            "id": "3839",
            "name": "Tibau do Sul",
            "state_id": "20"
        },
            {
            "id": "3840",
            "name": "Timbaúba dos Batistas",
            "state_id": "20"
        },
            {
            "id": "3841",
            "name": "Touros",
            "state_id": "20"
        },
            {
            "id": "3842",
            "name": "Triunfo Potiguar",
            "state_id": "20"
        },
            {
            "id": "3843",
            "name": "Umarizal",
            "state_id": "20"
        },
            {
            "id": "3844",
            "name": "Upanema",
            "state_id": "20"
        },
            {
            "id": "3845",
            "name": "Várzea",
            "state_id": "20"
        },
            {
            "id": "3846",
            "name": "Venha-Ver",
            "state_id": "20"
        },
            {
            "id": "3847",
            "name": "Vera Cruz",
            "state_id": "20"
        },
            {
            "id": "3848",
            "name": "Viçosa",
            "state_id": "20"
        },
            {
            "id": "3849",
            "name": "Vila Flor",
            "state_id": "20"
        },
            {
            "id": "3850",
            "name": "Aceguá",
            "state_id": "23"
        },
            {
            "id": "3851",
            "name": "Água Santa",
            "state_id": "23"
        },
            {
            "id": "3852",
            "name": "Agudo",
            "state_id": "23"
        },
            {
            "id": "3853",
            "name": "Ajuricaba",
            "state_id": "23"
        },
            {
            "id": "3854",
            "name": "Alecrim",
            "state_id": "23"
        },
            {
            "id": "3855",
            "name": "Alegrete",
            "state_id": "23"
        },
            {
            "id": "3856",
            "name": "Alegria",
            "state_id": "23"
        },
            {
            "id": "3857",
            "name": "Almirante Tamandaré do Sul",
            "state_id": "23"
        },
            {
            "id": "3858",
            "name": "Alpestre",
            "state_id": "23"
        },
            {
            "id": "3859",
            "name": "Alto Alegre",
            "state_id": "23"
        },
            {
            "id": "3860",
            "name": "Alto Feliz",
            "state_id": "23"
        },
            {
            "id": "3861",
            "name": "Alvorada",
            "state_id": "23"
        },
            {
            "id": "3862",
            "name": "Amaral Ferrador",
            "state_id": "23"
        },
            {
            "id": "3863",
            "name": "Ametista do Sul",
            "state_id": "23"
        },
            {
            "id": "3864",
            "name": "André da Rocha",
            "state_id": "23"
        },
            {
            "id": "3865",
            "name": "Anta Gorda",
            "state_id": "23"
        },
            {
            "id": "3866",
            "name": "Antônio Prado",
            "state_id": "23"
        },
            {
            "id": "3867",
            "name": "Arambaré",
            "state_id": "23"
        },
            {
            "id": "3868",
            "name": "Araricá",
            "state_id": "23"
        },
            {
            "id": "3869",
            "name": "Aratiba",
            "state_id": "23"
        },
            {
            "id": "3870",
            "name": "Arroio do Meio",
            "state_id": "23"
        },
            {
            "id": "3871",
            "name": "Arroio do Padre",
            "state_id": "23"
        },
            {
            "id": "3872",
            "name": "Arroio do Sal",
            "state_id": "23"
        },
            {
            "id": "3873",
            "name": "Arroio do Tigre",
            "state_id": "23"
        },
            {
            "id": "3874",
            "name": "Arroio dos Ratos",
            "state_id": "23"
        },
            {
            "id": "3875",
            "name": "Arroio Grande",
            "state_id": "23"
        },
            {
            "id": "3876",
            "name": "Arvorezinha",
            "state_id": "23"
        },
            {
            "id": "3877",
            "name": "Augusto Pestana",
            "state_id": "23"
        },
            {
            "id": "3878",
            "name": "Áurea",
            "state_id": "23"
        },
            {
            "id": "3879",
            "name": "Bagé",
            "state_id": "23"
        },
            {
            "id": "3880",
            "name": "Balneário Pinhal",
            "state_id": "23"
        },
            {
            "id": "3881",
            "name": "Barão",
            "state_id": "23"
        },
            {
            "id": "3882",
            "name": "Barão de Cotegipe",
            "state_id": "23"
        },
            {
            "id": "3883",
            "name": "Barão do Triunfo",
            "state_id": "23"
        },
            {
            "id": "3884",
            "name": "Barra do Guarita",
            "state_id": "23"
        },
            {
            "id": "3885",
            "name": "Barra do Quaraí",
            "state_id": "23"
        },
            {
            "id": "3886",
            "name": "Barra do Ribeiro",
            "state_id": "23"
        },
            {
            "id": "3887",
            "name": "Barra do Rio Azul",
            "state_id": "23"
        },
            {
            "id": "3888",
            "name": "Barra Funda",
            "state_id": "23"
        },
            {
            "id": "3889",
            "name": "Barracão",
            "state_id": "23"
        },
            {
            "id": "3890",
            "name": "Barros Cassal",
            "state_id": "23"
        },
            {
            "id": "3891",
            "name": "Benjamin Constant do Sul",
            "state_id": "23"
        },
            {
            "id": "3892",
            "name": "Bento Gonçalves",
            "state_id": "23"
        },
            {
            "id": "3893",
            "name": "Boa Vista das Missões",
            "state_id": "23"
        },
            {
            "id": "3894",
            "name": "Boa Vista do Buricá",
            "state_id": "23"
        },
            {
            "id": "3895",
            "name": "Boa Vista do Cadeado",
            "state_id": "23"
        },
            {
            "id": "3896",
            "name": "Boa Vista do Incra",
            "state_id": "23"
        },
            {
            "id": "3897",
            "name": "Boa Vista do Sul",
            "state_id": "23"
        },
            {
            "id": "3898",
            "name": "Bom Jesus",
            "state_id": "23"
        },
            {
            "id": "3899",
            "name": "Bom Princípio",
            "state_id": "23"
        },
            {
            "id": "3900",
            "name": "Bom Progresso",
            "state_id": "23"
        },
            {
            "id": "3901",
            "name": "Bom Retiro do Sul",
            "state_id": "23"
        },
            {
            "id": "3902",
            "name": "Boqueirão do Leão",
            "state_id": "23"
        },
            {
            "id": "3903",
            "name": "Bossoroca",
            "state_id": "23"
        },
            {
            "id": "3904",
            "name": "Bozano",
            "state_id": "23"
        },
            {
            "id": "3905",
            "name": "Braga",
            "state_id": "23"
        },
            {
            "id": "3906",
            "name": "Brochier",
            "state_id": "23"
        },
            {
            "id": "3907",
            "name": "Butiá",
            "state_id": "23"
        },
            {
            "id": "3908",
            "name": "Caçapava do Sul",
            "state_id": "23"
        },
            {
            "id": "3909",
            "name": "Cacequi",
            "state_id": "23"
        },
            {
            "id": "3910",
            "name": "Cachoeira do Sul",
            "state_id": "23"
        },
            {
            "id": "3911",
            "name": "Cachoeirinha",
            "state_id": "23"
        },
            {
            "id": "3912",
            "name": "Cacique Doble",
            "state_id": "23"
        },
            {
            "id": "3913",
            "name": "Caibaté",
            "state_id": "23"
        },
            {
            "id": "3914",
            "name": "Caiçara",
            "state_id": "23"
        },
            {
            "id": "3915",
            "name": "Camaquã",
            "state_id": "23"
        },
            {
            "id": "3916",
            "name": "Camargo",
            "state_id": "23"
        },
            {
            "id": "3917",
            "name": "Cambará do Sul",
            "state_id": "23"
        },
            {
            "id": "3918",
            "name": "Campestre da Serra",
            "state_id": "23"
        },
            {
            "id": "3919",
            "name": "Campina das Missões",
            "state_id": "23"
        },
            {
            "id": "3920",
            "name": "Campinas do Sul",
            "state_id": "23"
        },
            {
            "id": "3921",
            "name": "Campo Bom",
            "state_id": "23"
        },
            {
            "id": "3922",
            "name": "Campo Novo",
            "state_id": "23"
        },
            {
            "id": "3923",
            "name": "Campos Borges",
            "state_id": "23"
        },
            {
            "id": "3924",
            "name": "Candelária",
            "state_id": "23"
        },
            {
            "id": "3925",
            "name": "Cândido Godói",
            "state_id": "23"
        },
            {
            "id": "3926",
            "name": "Candiota",
            "state_id": "23"
        },
            {
            "id": "3927",
            "name": "Canela",
            "state_id": "23"
        },
            {
            "id": "3928",
            "name": "Canguçu",
            "state_id": "23"
        },
            {
            "id": "3929",
            "name": "Canoas",
            "state_id": "23"
        },
            {
            "id": "3930",
            "name": "Canudos do Vale",
            "state_id": "23"
        },
            {
            "id": "3931",
            "name": "Capão Bonito do Sul",
            "state_id": "23"
        },
            {
            "id": "3932",
            "name": "Capão da Canoa",
            "state_id": "23"
        },
            {
            "id": "3933",
            "name": "Capão do Cipó",
            "state_id": "23"
        },
            {
            "id": "3934",
            "name": "Capão do Leão",
            "state_id": "23"
        },
            {
            "id": "3935",
            "name": "Capela de Santana",
            "state_id": "23"
        },
            {
            "id": "3936",
            "name": "Capitão",
            "state_id": "23"
        },
            {
            "id": "3937",
            "name": "Capivari do Sul",
            "state_id": "23"
        },
            {
            "id": "3938",
            "name": "Caraá",
            "state_id": "23"
        },
            {
            "id": "3939",
            "name": "Carazinho",
            "state_id": "23"
        },
            {
            "id": "3940",
            "name": "Carlos Barbosa",
            "state_id": "23"
        },
            {
            "id": "3941",
            "name": "Carlos Gomes",
            "state_id": "23"
        },
            {
            "id": "3942",
            "name": "Casca",
            "state_id": "23"
        },
            {
            "id": "3943",
            "name": "Caseiros",
            "state_id": "23"
        },
            {
            "id": "3944",
            "name": "Catuípe",
            "state_id": "23"
        },
            {
            "id": "3945",
            "name": "Caxias do Sul",
            "state_id": "23"
        },
            {
            "id": "3946",
            "name": "Centenário",
            "state_id": "23"
        },
            {
            "id": "3947",
            "name": "Cerrito",
            "state_id": "23"
        },
            {
            "id": "3948",
            "name": "Cerro Branco",
            "state_id": "23"
        },
            {
            "id": "3949",
            "name": "Cerro Grande",
            "state_id": "23"
        },
            {
            "id": "3950",
            "name": "Cerro Grande do Sul",
            "state_id": "23"
        },
            {
            "id": "3951",
            "name": "Cerro Largo",
            "state_id": "23"
        },
            {
            "id": "3952",
            "name": "Chapada",
            "state_id": "23"
        },
            {
            "id": "3953",
            "name": "Charqueadas",
            "state_id": "23"
        },
            {
            "id": "3954",
            "name": "Charrua",
            "state_id": "23"
        },
            {
            "id": "3955",
            "name": "Chiapeta",
            "state_id": "23"
        },
            {
            "id": "3956",
            "name": "Chuí",
            "state_id": "23"
        },
            {
            "id": "3957",
            "name": "Chuvisca",
            "state_id": "23"
        },
            {
            "id": "3958",
            "name": "Cidreira",
            "state_id": "23"
        },
            {
            "id": "3959",
            "name": "Ciríaco",
            "state_id": "23"
        },
            {
            "id": "3960",
            "name": "Colinas",
            "state_id": "23"
        },
            {
            "id": "3961",
            "name": "Colorado",
            "state_id": "23"
        },
            {
            "id": "3962",
            "name": "Condor",
            "state_id": "23"
        },
            {
            "id": "3963",
            "name": "Constantina",
            "state_id": "23"
        },
            {
            "id": "3964",
            "name": "Coqueiro Baixo",
            "state_id": "23"
        },
            {
            "id": "3965",
            "name": "Coqueiros do Sul",
            "state_id": "23"
        },
            {
            "id": "3966",
            "name": "Coronel Barros",
            "state_id": "23"
        },
            {
            "id": "3967",
            "name": "Coronel Bicaco",
            "state_id": "23"
        },
            {
            "id": "3968",
            "name": "Coronel Pilar",
            "state_id": "23"
        },
            {
            "id": "3969",
            "name": "Cotiporã",
            "state_id": "23"
        },
            {
            "id": "3970",
            "name": "Coxilha",
            "state_id": "23"
        },
            {
            "id": "3971",
            "name": "Crissiumal",
            "state_id": "23"
        },
            {
            "id": "3972",
            "name": "Cristal",
            "state_id": "23"
        },
            {
            "id": "3973",
            "name": "Cristal do Sul",
            "state_id": "23"
        },
            {
            "id": "3974",
            "name": "Cruz Alta",
            "state_id": "23"
        },
            {
            "id": "3975",
            "name": "Cruzaltense",
            "state_id": "23"
        },
            {
            "id": "3976",
            "name": "Cruzeiro do Sul",
            "state_id": "23"
        },
            {
            "id": "3977",
            "name": "David Canabarro",
            "state_id": "23"
        },
            {
            "id": "3978",
            "name": "Derrubadas",
            "state_id": "23"
        },
            {
            "id": "3979",
            "name": "Dezesseis de Novembro",
            "state_id": "23"
        },
            {
            "id": "3980",
            "name": "Dilermando de Aguiar",
            "state_id": "23"
        },
            {
            "id": "3981",
            "name": "Dois Irmãos",
            "state_id": "23"
        },
            {
            "id": "3982",
            "name": "Dois Irmãos das Missões",
            "state_id": "23"
        },
            {
            "id": "3983",
            "name": "Dois Lajeados",
            "state_id": "23"
        },
            {
            "id": "3984",
            "name": "Dom Feliciano",
            "state_id": "23"
        },
            {
            "id": "3985",
            "name": "Dom Pedrito",
            "state_id": "23"
        },
            {
            "id": "3986",
            "name": "Dom Pedro de Alcântara",
            "state_id": "23"
        },
            {
            "id": "3987",
            "name": "Dona Francisca",
            "state_id": "23"
        },
            {
            "id": "3988",
            "name": "Doutor Maurício Cardoso",
            "state_id": "23"
        },
            {
            "id": "3989",
            "name": "Doutor Ricardo",
            "state_id": "23"
        },
            {
            "id": "3990",
            "name": "Eldorado do Sul",
            "state_id": "23"
        },
            {
            "id": "3991",
            "name": "Encantado",
            "state_id": "23"
        },
            {
            "id": "3992",
            "name": "Encruzilhada do Sul",
            "state_id": "23"
        },
            {
            "id": "3993",
            "name": "Engenho Velho",
            "state_id": "23"
        },
            {
            "id": "3994",
            "name": "Entre Rios do Sul",
            "state_id": "23"
        },
            {
            "id": "3995",
            "name": "Entre-Ijuís",
            "state_id": "23"
        },
            {
            "id": "3996",
            "name": "Erebango",
            "state_id": "23"
        },
            {
            "id": "3997",
            "name": "Erechim",
            "state_id": "23"
        },
            {
            "id": "3998",
            "name": "Ernestina",
            "state_id": "23"
        },
            {
            "id": "3999",
            "name": "Erval Grande",
            "state_id": "23"
        },
            {
            "id": "4000",
            "name": "Erval Seco",
            "state_id": "23"
        },
            {
            "id": "4001",
            "name": "Esmeralda",
            "state_id": "23"
        },
            {
            "id": "4002",
            "name": "Esperança do Sul",
            "state_id": "23"
        },
            {
            "id": "4003",
            "name": "Espumoso",
            "state_id": "23"
        },
            {
            "id": "4004",
            "name": "Estação",
            "state_id": "23"
        },
            {
            "id": "4005",
            "name": "Estância Velha",
            "state_id": "23"
        },
            {
            "id": "4006",
            "name": "Esteio",
            "state_id": "23"
        },
            {
            "id": "4007",
            "name": "Estrela",
            "state_id": "23"
        },
            {
            "id": "4008",
            "name": "Estrela Velha",
            "state_id": "23"
        },
            {
            "id": "4009",
            "name": "Eugênio de Castro",
            "state_id": "23"
        },
            {
            "id": "4010",
            "name": "Fagundes Varela",
            "state_id": "23"
        },
            {
            "id": "4011",
            "name": "Farroupilha",
            "state_id": "23"
        },
            {
            "id": "4012",
            "name": "Faxinal do Soturno",
            "state_id": "23"
        },
            {
            "id": "4013",
            "name": "Faxinalzinho",
            "state_id": "23"
        },
            {
            "id": "4014",
            "name": "Fazenda Vilanova",
            "state_id": "23"
        },
            {
            "id": "4015",
            "name": "Feliz",
            "state_id": "23"
        },
            {
            "id": "4016",
            "name": "Flores da Cunha",
            "state_id": "23"
        },
            {
            "id": "4017",
            "name": "Floriano Peixoto",
            "state_id": "23"
        },
            {
            "id": "4018",
            "name": "Fontoura Xavier",
            "state_id": "23"
        },
            {
            "id": "4019",
            "name": "Formigueiro",
            "state_id": "23"
        },
            {
            "id": "4020",
            "name": "Forquetinha",
            "state_id": "23"
        },
            {
            "id": "4021",
            "name": "Fortaleza dos Valos",
            "state_id": "23"
        },
            {
            "id": "4022",
            "name": "Frederico Westphalen",
            "state_id": "23"
        },
            {
            "id": "4023",
            "name": "Garibaldi",
            "state_id": "23"
        },
            {
            "id": "4024",
            "name": "Garruchos",
            "state_id": "23"
        },
            {
            "id": "4025",
            "name": "Gaurama",
            "state_id": "23"
        },
            {
            "id": "4026",
            "name": "General Câmara",
            "state_id": "23"
        },
            {
            "id": "4027",
            "name": "Gentil",
            "state_id": "23"
        },
            {
            "id": "4028",
            "name": "Getúlio Vargas",
            "state_id": "23"
        },
            {
            "id": "4029",
            "name": "Giruá",
            "state_id": "23"
        },
            {
            "id": "4030",
            "name": "Glorinha",
            "state_id": "23"
        },
            {
            "id": "4031",
            "name": "Gramado",
            "state_id": "23"
        },
            {
            "id": "4032",
            "name": "Gramado dos Loureiros",
            "state_id": "23"
        },
            {
            "id": "4033",
            "name": "Gramado Xavier",
            "state_id": "23"
        },
            {
            "id": "4034",
            "name": "Gravataí",
            "state_id": "23"
        },
            {
            "id": "4035",
            "name": "Guabiju",
            "state_id": "23"
        },
            {
            "id": "4036",
            "name": "Guaíba",
            "state_id": "23"
        },
            {
            "id": "4037",
            "name": "Guaporé",
            "state_id": "23"
        },
            {
            "id": "4038",
            "name": "Guarani das Missões",
            "state_id": "23"
        },
            {
            "id": "4039",
            "name": "Harmonia",
            "state_id": "23"
        },
            {
            "id": "4040",
            "name": "Herval",
            "state_id": "23"
        },
            {
            "id": "4041",
            "name": "Herveiras",
            "state_id": "23"
        },
            {
            "id": "4042",
            "name": "Horizontina",
            "state_id": "23"
        },
            {
            "id": "4043",
            "name": "Hulha Negra",
            "state_id": "23"
        },
            {
            "id": "4044",
            "name": "Humaitá",
            "state_id": "23"
        },
            {
            "id": "4045",
            "name": "Ibarama",
            "state_id": "23"
        },
            {
            "id": "4046",
            "name": "Ibiaçá",
            "state_id": "23"
        },
            {
            "id": "4047",
            "name": "Ibiraiaras",
            "state_id": "23"
        },
            {
            "id": "4048",
            "name": "Ibirapuitã",
            "state_id": "23"
        },
            {
            "id": "4049",
            "name": "Ibirubá",
            "state_id": "23"
        },
            {
            "id": "4050",
            "name": "Igrejinha",
            "state_id": "23"
        },
            {
            "id": "4051",
            "name": "Ijuí",
            "state_id": "23"
        },
            {
            "id": "4052",
            "name": "Ilópolis",
            "state_id": "23"
        },
            {
            "id": "4053",
            "name": "Imbé",
            "state_id": "23"
        },
            {
            "id": "4054",
            "name": "Imigrante",
            "state_id": "23"
        },
            {
            "id": "4055",
            "name": "Independência",
            "state_id": "23"
        },
            {
            "id": "4056",
            "name": "Inhacorá",
            "state_id": "23"
        },
            {
            "id": "4057",
            "name": "Ipê",
            "state_id": "23"
        },
            {
            "id": "4058",
            "name": "Ipiranga do Sul",
            "state_id": "23"
        },
            {
            "id": "4059",
            "name": "Iraí",
            "state_id": "23"
        },
            {
            "id": "4060",
            "name": "Itaara",
            "state_id": "23"
        },
            {
            "id": "4061",
            "name": "Itacurubi",
            "state_id": "23"
        },
            {
            "id": "4062",
            "name": "Itapuca",
            "state_id": "23"
        },
            {
            "id": "4063",
            "name": "Itaqui",
            "state_id": "23"
        },
            {
            "id": "4064",
            "name": "Itati",
            "state_id": "23"
        },
            {
            "id": "4065",
            "name": "Itatiba do Sul",
            "state_id": "23"
        },
            {
            "id": "4066",
            "name": "Ivorá",
            "state_id": "23"
        },
            {
            "id": "4067",
            "name": "Ivoti",
            "state_id": "23"
        },
            {
            "id": "4068",
            "name": "Jaboticaba",
            "state_id": "23"
        },
            {
            "id": "4069",
            "name": "Jacuizinho",
            "state_id": "23"
        },
            {
            "id": "4070",
            "name": "Jacutinga",
            "state_id": "23"
        },
            {
            "id": "4071",
            "name": "Jaguarão",
            "state_id": "23"
        },
            {
            "id": "4072",
            "name": "Jaguari",
            "state_id": "23"
        },
            {
            "id": "4073",
            "name": "Jaquirana",
            "state_id": "23"
        },
            {
            "id": "4074",
            "name": "Jari",
            "state_id": "23"
        },
            {
            "id": "4075",
            "name": "Jóia",
            "state_id": "23"
        },
            {
            "id": "4076",
            "name": "Júlio de Castilhos",
            "state_id": "23"
        },
            {
            "id": "4077",
            "name": "Lagoa Bonita do Sul",
            "state_id": "23"
        },
            {
            "id": "4078",
            "name": "Lagoa dos Três Cantos",
            "state_id": "23"
        },
            {
            "id": "4079",
            "name": "Lagoa Vermelha",
            "state_id": "23"
        },
            {
            "id": "4080",
            "name": "Lagoão",
            "state_id": "23"
        },
            {
            "id": "4081",
            "name": "Lajeado",
            "state_id": "23"
        },
            {
            "id": "4082",
            "name": "Lajeado do Bugre",
            "state_id": "23"
        },
            {
            "id": "4083",
            "name": "Lavras do Sul",
            "state_id": "23"
        },
            {
            "id": "4084",
            "name": "Liberato Salzano",
            "state_id": "23"
        },
            {
            "id": "4085",
            "name": "Lindolfo Collor",
            "state_id": "23"
        },
            {
            "id": "4086",
            "name": "Linha Nova",
            "state_id": "23"
        },
            {
            "id": "4087",
            "name": "Maçambara",
            "state_id": "23"
        },
            {
            "id": "4088",
            "name": "Machadinho",
            "state_id": "23"
        },
            {
            "id": "4089",
            "name": "Mampituba",
            "state_id": "23"
        },
            {
            "id": "4090",
            "name": "Manoel Viana",
            "state_id": "23"
        },
            {
            "id": "4091",
            "name": "Maquiné",
            "state_id": "23"
        },
            {
            "id": "4092",
            "name": "Maratá",
            "state_id": "23"
        },
            {
            "id": "4093",
            "name": "Marau",
            "state_id": "23"
        },
            {
            "id": "4094",
            "name": "Marcelino Ramos",
            "state_id": "23"
        },
            {
            "id": "4095",
            "name": "Mariana Pimentel",
            "state_id": "23"
        },
            {
            "id": "4096",
            "name": "Mariano Moro",
            "state_id": "23"
        },
            {
            "id": "4097",
            "name": "Marques de Souza",
            "state_id": "23"
        },
            {
            "id": "4098",
            "name": "Mata",
            "state_id": "23"
        },
            {
            "id": "4099",
            "name": "Mato Castelhano",
            "state_id": "23"
        },
            {
            "id": "4100",
            "name": "Mato Leitão",
            "state_id": "23"
        },
            {
            "id": "4101",
            "name": "Mato Queimado",
            "state_id": "23"
        },
            {
            "id": "4102",
            "name": "Maximiliano de Almeida",
            "state_id": "23"
        },
            {
            "id": "4103",
            "name": "Minas do Leão",
            "state_id": "23"
        },
            {
            "id": "4104",
            "name": "Miraguaí",
            "state_id": "23"
        },
            {
            "id": "4105",
            "name": "Montauri",
            "state_id": "23"
        },
            {
            "id": "4106",
            "name": "Monte Alegre dos Campos",
            "state_id": "23"
        },
            {
            "id": "4107",
            "name": "Monte Belo do Sul",
            "state_id": "23"
        },
            {
            "id": "4108",
            "name": "Montenegro",
            "state_id": "23"
        },
            {
            "id": "4109",
            "name": "Mormaço",
            "state_id": "23"
        },
            {
            "id": "4110",
            "name": "Morrinhos do Sul",
            "state_id": "23"
        },
            {
            "id": "4111",
            "name": "Morro Redondo",
            "state_id": "23"
        },
            {
            "id": "4112",
            "name": "Morro Reuter",
            "state_id": "23"
        },
            {
            "id": "4113",
            "name": "Mostardas",
            "state_id": "23"
        },
            {
            "id": "4114",
            "name": "Muçum",
            "state_id": "23"
        },
            {
            "id": "4115",
            "name": "Muitos Capões",
            "state_id": "23"
        },
            {
            "id": "4116",
            "name": "Muliterno",
            "state_id": "23"
        },
            {
            "id": "4117",
            "name": "Não-Me-Toque",
            "state_id": "23"
        },
            {
            "id": "4118",
            "name": "Nicolau Vergueiro",
            "state_id": "23"
        },
            {
            "id": "4119",
            "name": "Nonoai",
            "state_id": "23"
        },
            {
            "id": "4120",
            "name": "Nova Alvorada",
            "state_id": "23"
        },
            {
            "id": "4121",
            "name": "Nova Araçá",
            "state_id": "23"
        },
            {
            "id": "4122",
            "name": "Nova Bassano",
            "state_id": "23"
        },
            {
            "id": "4123",
            "name": "Nova Boa Vista",
            "state_id": "23"
        },
            {
            "id": "4124",
            "name": "Nova Bréscia",
            "state_id": "23"
        },
            {
            "id": "4125",
            "name": "Nova Candelária",
            "state_id": "23"
        },
            {
            "id": "4126",
            "name": "Nova Esperança do Sul",
            "state_id": "23"
        },
            {
            "id": "4127",
            "name": "Nova Hartz",
            "state_id": "23"
        },
            {
            "id": "4128",
            "name": "Nova Pádua",
            "state_id": "23"
        },
            {
            "id": "4129",
            "name": "Nova Palma",
            "state_id": "23"
        },
            {
            "id": "4130",
            "name": "Nova Petrópolis",
            "state_id": "23"
        },
            {
            "id": "4131",
            "name": "Nova Prata",
            "state_id": "23"
        },
            {
            "id": "4132",
            "name": "Nova Ramada",
            "state_id": "23"
        },
            {
            "id": "4133",
            "name": "Nova Roma do Sul",
            "state_id": "23"
        },
            {
            "id": "4134",
            "name": "Nova Santa Rita",
            "state_id": "23"
        },
            {
            "id": "4135",
            "name": "Novo Barreiro",
            "state_id": "23"
        },
            {
            "id": "4136",
            "name": "Novo Cabrais",
            "state_id": "23"
        },
            {
            "id": "4137",
            "name": "Novo Hamburgo",
            "state_id": "23"
        },
            {
            "id": "4138",
            "name": "Novo Machado",
            "state_id": "23"
        },
            {
            "id": "4139",
            "name": "Novo Tiradentes",
            "state_id": "23"
        },
            {
            "id": "4140",
            "name": "Novo Xingu",
            "state_id": "23"
        },
            {
            "id": "4141",
            "name": "Osório",
            "state_id": "23"
        },
            {
            "id": "4142",
            "name": "Paim Filho",
            "state_id": "23"
        },
            {
            "id": "4143",
            "name": "Palmares do Sul",
            "state_id": "23"
        },
            {
            "id": "4144",
            "name": "Palmeira das Missões",
            "state_id": "23"
        },
            {
            "id": "4145",
            "name": "Palmitinho",
            "state_id": "23"
        },
            {
            "id": "4146",
            "name": "Panambi",
            "state_id": "23"
        },
            {
            "id": "4147",
            "name": "Pantano Grande",
            "state_id": "23"
        },
            {
            "id": "4148",
            "name": "Paraí",
            "state_id": "23"
        },
            {
            "id": "4149",
            "name": "Paraíso do Sul",
            "state_id": "23"
        },
            {
            "id": "4150",
            "name": "Pareci Novo",
            "state_id": "23"
        },
            {
            "id": "4151",
            "name": "Parobé",
            "state_id": "23"
        },
            {
            "id": "4152",
            "name": "Passa Sete",
            "state_id": "23"
        },
            {
            "id": "4153",
            "name": "Passo do Sobrado",
            "state_id": "23"
        },
            {
            "id": "4154",
            "name": "Passo Fundo",
            "state_id": "23"
        },
            {
            "id": "4155",
            "name": "Paulo Bento",
            "state_id": "23"
        },
            {
            "id": "4156",
            "name": "Paverama",
            "state_id": "23"
        },
            {
            "id": "4157",
            "name": "Pedras Altas",
            "state_id": "23"
        },
            {
            "id": "4158",
            "name": "Pedro Osório",
            "state_id": "23"
        },
            {
            "id": "4159",
            "name": "Pejuçara",
            "state_id": "23"
        },
            {
            "id": "4160",
            "name": "Pelotas",
            "state_id": "23"
        },
            {
            "id": "4161",
            "name": "Picada Café",
            "state_id": "23"
        },
            {
            "id": "4162",
            "name": "Pinhal",
            "state_id": "23"
        },
            {
            "id": "4163",
            "name": "Pinhal da Serra",
            "state_id": "23"
        },
            {
            "id": "4164",
            "name": "Pinhal Grande",
            "state_id": "23"
        },
            {
            "id": "4165",
            "name": "Pinheirinho do Vale",
            "state_id": "23"
        },
            {
            "id": "4166",
            "name": "Pinheiro Machado",
            "state_id": "23"
        },
            {
            "id": "4167",
            "name": "Pirapó",
            "state_id": "23"
        },
            {
            "id": "4168",
            "name": "Piratini",
            "state_id": "23"
        },
            {
            "id": "4169",
            "name": "Planalto",
            "state_id": "23"
        },
            {
            "id": "4170",
            "name": "Poço das Antas",
            "state_id": "23"
        },
            {
            "id": "4171",
            "name": "Pontão",
            "state_id": "23"
        },
            {
            "id": "4172",
            "name": "Ponte Preta",
            "state_id": "23"
        },
            {
            "id": "4173",
            "name": "Portão",
            "state_id": "23"
        },
            {
            "id": "4174",
            "name": "Porto Alegre",
            "state_id": "23"
        },
            {
            "id": "4175",
            "name": "Porto Lucena",
            "state_id": "23"
        },
            {
            "id": "4176",
            "name": "Porto Mauá",
            "state_id": "23"
        },
            {
            "id": "4177",
            "name": "Porto Vera Cruz",
            "state_id": "23"
        },
            {
            "id": "4178",
            "name": "Porto Xavier",
            "state_id": "23"
        },
            {
            "id": "4179",
            "name": "Pouso Novo",
            "state_id": "23"
        },
            {
            "id": "4180",
            "name": "Presidente Lucena",
            "state_id": "23"
        },
            {
            "id": "4181",
            "name": "Progresso",
            "state_id": "23"
        },
            {
            "id": "4182",
            "name": "Protásio Alves",
            "state_id": "23"
        },
            {
            "id": "4183",
            "name": "Putinga",
            "state_id": "23"
        },
            {
            "id": "4184",
            "name": "Quaraí",
            "state_id": "23"
        },
            {
            "id": "4185",
            "name": "Quatro Irmãos",
            "state_id": "23"
        },
            {
            "id": "4186",
            "name": "Quevedos",
            "state_id": "23"
        },
            {
            "id": "4187",
            "name": "Quinze de Novembro",
            "state_id": "23"
        },
            {
            "id": "4188",
            "name": "Redentora",
            "state_id": "23"
        },
            {
            "id": "4189",
            "name": "Relvado",
            "state_id": "23"
        },
            {
            "id": "4190",
            "name": "Restinga Seca",
            "state_id": "23"
        },
            {
            "id": "4191",
            "name": "Rio dos Índios",
            "state_id": "23"
        },
            {
            "id": "4192",
            "name": "Rio Grande",
            "state_id": "23"
        },
            {
            "id": "4193",
            "name": "Rio Pardo",
            "state_id": "23"
        },
            {
            "id": "4194",
            "name": "Riozinho",
            "state_id": "23"
        },
            {
            "id": "4195",
            "name": "Roca Sales",
            "state_id": "23"
        },
            {
            "id": "4196",
            "name": "Rodeio Bonito",
            "state_id": "23"
        },
            {
            "id": "4197",
            "name": "Rolador",
            "state_id": "23"
        },
            {
            "id": "4198",
            "name": "Rolante",
            "state_id": "23"
        },
            {
            "id": "4199",
            "name": "Ronda Alta",
            "state_id": "23"
        },
            {
            "id": "4200",
            "name": "Rondinha",
            "state_id": "23"
        },
            {
            "id": "4201",
            "name": "Roque Gonzales",
            "state_id": "23"
        },
            {
            "id": "4202",
            "name": "Rosário do Sul",
            "state_id": "23"
        },
            {
            "id": "4203",
            "name": "Sagrada Família",
            "state_id": "23"
        },
            {
            "id": "4204",
            "name": "Saldanha Marinho",
            "state_id": "23"
        },
            {
            "id": "4205",
            "name": "Salto do Jacuí",
            "state_id": "23"
        },
            {
            "id": "4206",
            "name": "Salvador das Missões",
            "state_id": "23"
        },
            {
            "id": "4207",
            "name": "Salvador do Sul",
            "state_id": "23"
        },
            {
            "id": "4208",
            "name": "Sananduva",
            "state_id": "23"
        },
            {
            "id": "4209",
            "name": "Santa Bárbara do Sul",
            "state_id": "23"
        },
            {
            "id": "4210",
            "name": "Santa Cecília do Sul",
            "state_id": "23"
        },
            {
            "id": "4211",
            "name": "Santa Clara do Sul",
            "state_id": "23"
        },
            {
            "id": "4212",
            "name": "Santa Cruz do Sul",
            "state_id": "23"
        },
            {
            "id": "4213",
            "name": "Santa Margarida do Sul",
            "state_id": "23"
        },
            {
            "id": "4214",
            "name": "Santa Maria",
            "state_id": "23"
        },
            {
            "id": "4215",
            "name": "Santa Maria do Herval",
            "state_id": "23"
        },
            {
            "id": "4216",
            "name": "Santa Rosa",
            "state_id": "23"
        },
            {
            "id": "4217",
            "name": "Santa Tereza",
            "state_id": "23"
        },
            {
            "id": "4218",
            "name": "Santa Vitória do Palmar",
            "state_id": "23"
        },
            {
            "id": "4219",
            "name": "Santana da Boa Vista",
            "state_id": "23"
        },
            {
            "id": "4220",
            "name": "Santana do Livramento",
            "state_id": "23"
        },
            {
            "id": "4221",
            "name": "Santiago",
            "state_id": "23"
        },
            {
            "id": "4222",
            "name": "Santo Ângelo",
            "state_id": "23"
        },
            {
            "id": "4223",
            "name": "Santo Antônio da Patrulha",
            "state_id": "23"
        },
            {
            "id": "4224",
            "name": "Santo Antônio das Missões",
            "state_id": "23"
        },
            {
            "id": "4225",
            "name": "Santo Antônio do Palma",
            "state_id": "23"
        },
            {
            "id": "4226",
            "name": "Santo Antônio do Planalto",
            "state_id": "23"
        },
            {
            "id": "4227",
            "name": "Santo Augusto",
            "state_id": "23"
        },
            {
            "id": "4228",
            "name": "Santo Cristo",
            "state_id": "23"
        },
            {
            "id": "4229",
            "name": "Santo Expedito do Sul",
            "state_id": "23"
        },
            {
            "id": "4230",
            "name": "São Borja",
            "state_id": "23"
        },
            {
            "id": "4231",
            "name": "São Domingos do Sul",
            "state_id": "23"
        },
            {
            "id": "4232",
            "name": "São Francisco de Assis",
            "state_id": "23"
        },
            {
            "id": "4233",
            "name": "São Francisco de Paula",
            "state_id": "23"
        },
            {
            "id": "4234",
            "name": "São Gabriel",
            "state_id": "23"
        },
            {
            "id": "4235",
            "name": "São Jerônimo",
            "state_id": "23"
        },
            {
            "id": "4236",
            "name": "São João da Urtiga",
            "state_id": "23"
        },
            {
            "id": "4237",
            "name": "São João do Polêsine",
            "state_id": "23"
        },
            {
            "id": "4238",
            "name": "São Jorge",
            "state_id": "23"
        },
            {
            "id": "4239",
            "name": "São José das Missões",
            "state_id": "23"
        },
            {
            "id": "4240",
            "name": "São José do Herval",
            "state_id": "23"
        },
            {
            "id": "4241",
            "name": "São José do Hortêncio",
            "state_id": "23"
        },
            {
            "id": "4242",
            "name": "São José do Inhacorá",
            "state_id": "23"
        },
            {
            "id": "4243",
            "name": "São José do Norte",
            "state_id": "23"
        },
            {
            "id": "4244",
            "name": "São José do Ouro",
            "state_id": "23"
        },
            {
            "id": "4245",
            "name": "São José do Sul",
            "state_id": "23"
        },
            {
            "id": "4246",
            "name": "São José dos Ausentes",
            "state_id": "23"
        },
            {
            "id": "4247",
            "name": "São Leopoldo",
            "state_id": "23"
        },
            {
            "id": "4248",
            "name": "São Lourenço do Sul",
            "state_id": "23"
        },
            {
            "id": "4249",
            "name": "São Luiz Gonzaga",
            "state_id": "23"
        },
            {
            "id": "4250",
            "name": "São Marcos",
            "state_id": "23"
        },
            {
            "id": "4251",
            "name": "São Martinho",
            "state_id": "23"
        },
            {
            "id": "4252",
            "name": "São Martinho da Serra",
            "state_id": "23"
        },
            {
            "id": "4253",
            "name": "São Miguel das Missões",
            "state_id": "23"
        },
            {
            "id": "4254",
            "name": "São Nicolau",
            "state_id": "23"
        },
            {
            "id": "4255",
            "name": "São Paulo das Missões",
            "state_id": "23"
        },
            {
            "id": "4256",
            "name": "São Pedro da Serra",
            "state_id": "23"
        },
            {
            "id": "4257",
            "name": "São Pedro das Missões",
            "state_id": "23"
        },
            {
            "id": "4258",
            "name": "São Pedro do Butiá",
            "state_id": "23"
        },
            {
            "id": "4259",
            "name": "São Pedro do Sul",
            "state_id": "23"
        },
            {
            "id": "4260",
            "name": "São Sebastião do Caí",
            "state_id": "23"
        },
            {
            "id": "4261",
            "name": "São Sepé",
            "state_id": "23"
        },
            {
            "id": "4262",
            "name": "São Valentim",
            "state_id": "23"
        },
            {
            "id": "4263",
            "name": "São Valentim do Sul",
            "state_id": "23"
        },
            {
            "id": "4264",
            "name": "São Valério do Sul",
            "state_id": "23"
        },
            {
            "id": "4265",
            "name": "São Vendelino",
            "state_id": "23"
        },
            {
            "id": "4266",
            "name": "São Vicente do Sul",
            "state_id": "23"
        },
            {
            "id": "4267",
            "name": "Sapiranga",
            "state_id": "23"
        },
            {
            "id": "4268",
            "name": "Sapucaia do Sul",
            "state_id": "23"
        },
            {
            "id": "4269",
            "name": "Sarandi",
            "state_id": "23"
        },
            {
            "id": "4270",
            "name": "Seberi",
            "state_id": "23"
        },
            {
            "id": "4271",
            "name": "Sede Nova",
            "state_id": "23"
        },
            {
            "id": "4272",
            "name": "Segredo",
            "state_id": "23"
        },
            {
            "id": "4273",
            "name": "Selbach",
            "state_id": "23"
        },
            {
            "id": "4274",
            "name": "Senador Salgado Filho",
            "state_id": "23"
        },
            {
            "id": "4275",
            "name": "Sentinela do Sul",
            "state_id": "23"
        },
            {
            "id": "4276",
            "name": "Serafina Corrêa",
            "state_id": "23"
        },
            {
            "id": "4277",
            "name": "Sério",
            "state_id": "23"
        },
            {
            "id": "4278",
            "name": "Sertão",
            "state_id": "23"
        },
            {
            "id": "4279",
            "name": "Sertão Santana",
            "state_id": "23"
        },
            {
            "id": "4280",
            "name": "Sete de Setembro",
            "state_id": "23"
        },
            {
            "id": "4281",
            "name": "Severiano de Almeida",
            "state_id": "23"
        },
            {
            "id": "4282",
            "name": "Silveira Martins",
            "state_id": "23"
        },
            {
            "id": "4283",
            "name": "Sinimbu",
            "state_id": "23"
        },
            {
            "id": "4284",
            "name": "Sobradinho",
            "state_id": "23"
        },
            {
            "id": "4285",
            "name": "Soledade",
            "state_id": "23"
        },
            {
            "id": "4286",
            "name": "Tabaí",
            "state_id": "23"
        },
            {
            "id": "4287",
            "name": "Tapejara",
            "state_id": "23"
        },
            {
            "id": "4288",
            "name": "Tapera",
            "state_id": "23"
        },
            {
            "id": "4289",
            "name": "Tapes",
            "state_id": "23"
        },
            {
            "id": "4290",
            "name": "Taquara",
            "state_id": "23"
        },
            {
            "id": "4291",
            "name": "Taquari",
            "state_id": "23"
        },
            {
            "id": "4292",
            "name": "Taquaruçu do Sul",
            "state_id": "23"
        },
            {
            "id": "4293",
            "name": "Tavares",
            "state_id": "23"
        },
            {
            "id": "4294",
            "name": "Tenente Portela",
            "state_id": "23"
        },
            {
            "id": "4295",
            "name": "Terra de Areia",
            "state_id": "23"
        },
            {
            "id": "4296",
            "name": "Teutônia",
            "state_id": "23"
        },
            {
            "id": "4297",
            "name": "Tio Hugo",
            "state_id": "23"
        },
            {
            "id": "4298",
            "name": "Tiradentes do Sul",
            "state_id": "23"
        },
            {
            "id": "4299",
            "name": "Toropi",
            "state_id": "23"
        },
            {
            "id": "4300",
            "name": "Torres",
            "state_id": "23"
        },
            {
            "id": "4301",
            "name": "Tramandaí",
            "state_id": "23"
        },
            {
            "id": "4302",
            "name": "Travesseiro",
            "state_id": "23"
        },
            {
            "id": "4303",
            "name": "Três Arroios",
            "state_id": "23"
        },
            {
            "id": "4304",
            "name": "Três Cachoeiras",
            "state_id": "23"
        },
            {
            "id": "4305",
            "name": "Três Coroas",
            "state_id": "23"
        },
            {
            "id": "4306",
            "name": "Três de Maio",
            "state_id": "23"
        },
            {
            "id": "4307",
            "name": "Três Forquilhas",
            "state_id": "23"
        },
            {
            "id": "4308",
            "name": "Três Palmeiras",
            "state_id": "23"
        },
            {
            "id": "4309",
            "name": "Três Passos",
            "state_id": "23"
        },
            {
            "id": "4310",
            "name": "Trindade do Sul",
            "state_id": "23"
        },
            {
            "id": "4311",
            "name": "Triunfo",
            "state_id": "23"
        },
            {
            "id": "4312",
            "name": "Tucunduva",
            "state_id": "23"
        },
            {
            "id": "4313",
            "name": "Tunas",
            "state_id": "23"
        },
            {
            "id": "4314",
            "name": "Tupanci do Sul",
            "state_id": "23"
        },
            {
            "id": "4315",
            "name": "Tupanciretã",
            "state_id": "23"
        },
            {
            "id": "4316",
            "name": "Tupandi",
            "state_id": "23"
        },
            {
            "id": "4317",
            "name": "Tuparendi",
            "state_id": "23"
        },
            {
            "id": "4318",
            "name": "Turuçu",
            "state_id": "23"
        },
            {
            "id": "4319",
            "name": "Ubiretama",
            "state_id": "23"
        },
            {
            "id": "4320",
            "name": "União da Serra",
            "state_id": "23"
        },
            {
            "id": "4321",
            "name": "Unistalda",
            "state_id": "23"
        },
            {
            "id": "4322",
            "name": "Uruguaiana",
            "state_id": "23"
        },
            {
            "id": "4323",
            "name": "Vacaria",
            "state_id": "23"
        },
            {
            "id": "4324",
            "name": "Vale do Sol",
            "state_id": "23"
        },
            {
            "id": "4325",
            "name": "Vale Real",
            "state_id": "23"
        },
            {
            "id": "4326",
            "name": "Vale Verde",
            "state_id": "23"
        },
            {
            "id": "4327",
            "name": "Vanini",
            "state_id": "23"
        },
            {
            "id": "4328",
            "name": "Venâncio Aires",
            "state_id": "23"
        },
            {
            "id": "4329",
            "name": "Vera Cruz",
            "state_id": "23"
        },
            {
            "id": "4330",
            "name": "Veranópolis",
            "state_id": "23"
        },
            {
            "id": "4331",
            "name": "Vespasiano Corrêa",
            "state_id": "23"
        },
            {
            "id": "4332",
            "name": "Viadutos",
            "state_id": "23"
        },
            {
            "id": "4333",
            "name": "Viamão",
            "state_id": "23"
        },
            {
            "id": "4334",
            "name": "Vicente Dutra",
            "state_id": "23"
        },
            {
            "id": "4335",
            "name": "Victor Graeff",
            "state_id": "23"
        },
            {
            "id": "4336",
            "name": "Vila Flores",
            "state_id": "23"
        },
            {
            "id": "4337",
            "name": "Vila Lângaro",
            "state_id": "23"
        },
            {
            "id": "4338",
            "name": "Vila Maria",
            "state_id": "23"
        },
            {
            "id": "4339",
            "name": "Vila Nova do Sul",
            "state_id": "23"
        },
            {
            "id": "4340",
            "name": "Vista Alegre",
            "state_id": "23"
        },
            {
            "id": "4341",
            "name": "Vista Alegre do Prata",
            "state_id": "23"
        },
            {
            "id": "4342",
            "name": "Vista Gaúcha",
            "state_id": "23"
        },
            {
            "id": "4343",
            "name": "Vitória das Missões",
            "state_id": "23"
        },
            {
            "id": "4344",
            "name": "Westfália",
            "state_id": "23"
        },
            {
            "id": "4345",
            "name": "Xangri-lá",
            "state_id": "23"
        },
            {
            "id": "4346",
            "name": "Alta Floresta d`Oeste",
            "state_id": "21"
        },
            {
            "id": "4347",
            "name": "Alto Alegre dos Parecis",
            "state_id": "21"
        },
            {
            "id": "4348",
            "name": "Alto Paraíso",
            "state_id": "21"
        },
            {
            "id": "4349",
            "name": "Alvorada d`Oeste",
            "state_id": "21"
        },
            {
            "id": "4350",
            "name": "Ariquemes",
            "state_id": "21"
        },
            {
            "id": "4351",
            "name": "Buritis",
            "state_id": "21"
        },
            {
            "id": "4352",
            "name": "Cabixi",
            "state_id": "21"
        },
            {
            "id": "4353",
            "name": "Cacaulândia",
            "state_id": "21"
        },
            {
            "id": "4354",
            "name": "Cacoal",
            "state_id": "21"
        },
            {
            "id": "4355",
            "name": "Campo Novo de Rondônia",
            "state_id": "21"
        },
            {
            "id": "4356",
            "name": "Candeias do Jamari",
            "state_id": "21"
        },
            {
            "id": "4357",
            "name": "Castanheiras",
            "state_id": "21"
        },
            {
            "id": "4358",
            "name": "Cerejeiras",
            "state_id": "21"
        },
            {
            "id": "4359",
            "name": "Chupinguaia",
            "state_id": "21"
        },
            {
            "id": "4360",
            "name": "Colorado do Oeste",
            "state_id": "21"
        },
            {
            "id": "4361",
            "name": "Corumbiara",
            "state_id": "21"
        },
            {
            "id": "4362",
            "name": "Costa Marques",
            "state_id": "21"
        },
            {
            "id": "4363",
            "name": "Cujubim",
            "state_id": "21"
        },
            {
            "id": "4364",
            "name": "Espigão d`Oeste",
            "state_id": "21"
        },
            {
            "id": "4365",
            "name": "Governador Jorge Teixeira",
            "state_id": "21"
        },
            {
            "id": "4366",
            "name": "Guajará-Mirim",
            "state_id": "21"
        },
            {
            "id": "4367",
            "name": "Itapuã do Oeste",
            "state_id": "21"
        },
            {
            "id": "4368",
            "name": "Jaru",
            "state_id": "21"
        },
            {
            "id": "4369",
            "name": "Ji-Paraná",
            "state_id": "21"
        },
            {
            "id": "4370",
            "name": "Machadinho d`Oeste",
            "state_id": "21"
        },
            {
            "id": "4371",
            "name": "Ministro Andreazza",
            "state_id": "21"
        },
            {
            "id": "4372",
            "name": "Mirante da Serra",
            "state_id": "21"
        },
            {
            "id": "4373",
            "name": "Monte Negro",
            "state_id": "21"
        },
            {
            "id": "4374",
            "name": "Nova Brasilândia d`Oeste",
            "state_id": "21"
        },
            {
            "id": "4375",
            "name": "Nova Mamoré",
            "state_id": "21"
        },
            {
            "id": "4376",
            "name": "Nova União",
            "state_id": "21"
        },
            {
            "id": "4377",
            "name": "Novo Horizonte do Oeste",
            "state_id": "21"
        },
            {
            "id": "4378",
            "name": "Ouro Preto do Oeste",
            "state_id": "21"
        },
            {
            "id": "4379",
            "name": "Parecis",
            "state_id": "21"
        },
            {
            "id": "4380",
            "name": "Pimenta Bueno",
            "state_id": "21"
        },
            {
            "id": "4381",
            "name": "Pimenteiras do Oeste",
            "state_id": "21"
        },
            {
            "id": "4382",
            "name": "Porto Velho",
            "state_id": "21"
        },
            {
            "id": "4383",
            "name": "Presidente Médici",
            "state_id": "21"
        },
            {
            "id": "4384",
            "name": "Primavera de Rondônia",
            "state_id": "21"
        },
            {
            "id": "4385",
            "name": "Rio Crespo",
            "state_id": "21"
        },
            {
            "id": "4386",
            "name": "Rolim de Moura",
            "state_id": "21"
        },
            {
            "id": "4387",
            "name": "Santa Luzia d`Oeste",
            "state_id": "21"
        },
            {
            "id": "4388",
            "name": "São Felipe d`Oeste",
            "state_id": "21"
        },
            {
            "id": "4389",
            "name": "São Francisco do Guaporé",
            "state_id": "21"
        },
            {
            "id": "4390",
            "name": "São Miguel do Guaporé",
            "state_id": "21"
        },
            {
            "id": "4391",
            "name": "Seringueiras",
            "state_id": "21"
        },
            {
            "id": "4392",
            "name": "Teixeirópolis",
            "state_id": "21"
        },
            {
            "id": "4393",
            "name": "Theobroma",
            "state_id": "21"
        },
            {
            "id": "4394",
            "name": "Urupá",
            "state_id": "21"
        },
            {
            "id": "4395",
            "name": "Vale do Anari",
            "state_id": "21"
        },
            {
            "id": "4396",
            "name": "Vale do Paraíso",
            "state_id": "21"
        },
            {
            "id": "4397",
            "name": "Vilhena",
            "state_id": "21"
        },
            {
            "id": "4398",
            "name": "Alto Alegre",
            "state_id": "22"
        },
            {
            "id": "4399",
            "name": "Amajari",
            "state_id": "22"
        },
            {
            "id": "4400",
            "name": "Boa Vista",
            "state_id": "22"
        },
            {
            "id": "4401",
            "name": "Bonfim",
            "state_id": "22"
        },
            {
            "id": "4402",
            "name": "Cantá",
            "state_id": "22"
        },
            {
            "id": "4403",
            "name": "Caracaraí",
            "state_id": "22"
        },
            {
            "id": "4404",
            "name": "Caroebe",
            "state_id": "22"
        },
            {
            "id": "4405",
            "name": "Iracema",
            "state_id": "22"
        },
            {
            "id": "4406",
            "name": "Mucajaí",
            "state_id": "22"
        },
            {
            "id": "4407",
            "name": "Normandia",
            "state_id": "22"
        },
            {
            "id": "4408",
            "name": "Pacaraima",
            "state_id": "22"
        },
            {
            "id": "4409",
            "name": "Rorainópolis",
            "state_id": "22"
        },
            {
            "id": "4410",
            "name": "São João da Baliza",
            "state_id": "22"
        },
            {
            "id": "4411",
            "name": "São Luiz",
            "state_id": "22"
        },
            {
            "id": "4412",
            "name": "Uiramutã",
            "state_id": "22"
        },
            {
            "id": "4413",
            "name": "Abdon Batista",
            "state_id": "24"
        },
            {
            "id": "4414",
            "name": "Abelardo Luz",
            "state_id": "24"
        },
            {
            "id": "4415",
            "name": "Agrolândia",
            "state_id": "24"
        },
            {
            "id": "4416",
            "name": "Agronômica",
            "state_id": "24"
        },
            {
            "id": "4417",
            "name": "Água Doce",
            "state_id": "24"
        },
            {
            "id": "4418",
            "name": "Águas de Chapecó",
            "state_id": "24"
        },
            {
            "id": "4419",
            "name": "Águas Frias",
            "state_id": "24"
        },
            {
            "id": "4420",
            "name": "Águas Mornas",
            "state_id": "24"
        },
            {
            "id": "4421",
            "name": "Alfredo Wagner",
            "state_id": "24"
        },
            {
            "id": "4422",
            "name": "Alto Bela Vista",
            "state_id": "24"
        },
            {
            "id": "4423",
            "name": "Anchieta",
            "state_id": "24"
        },
            {
            "id": "4424",
            "name": "Angelina",
            "state_id": "24"
        },
            {
            "id": "4425",
            "name": "Anita Garibaldi",
            "state_id": "24"
        },
            {
            "id": "4426",
            "name": "Anitápolis",
            "state_id": "24"
        },
            {
            "id": "4427",
            "name": "Antônio Carlos",
            "state_id": "24"
        },
            {
            "id": "4428",
            "name": "Apiúna",
            "state_id": "24"
        },
            {
            "id": "4429",
            "name": "Arabutã",
            "state_id": "24"
        },
            {
            "id": "4430",
            "name": "Araquari",
            "state_id": "24"
        },
            {
            "id": "4431",
            "name": "Araranguá",
            "state_id": "24"
        },
            {
            "id": "4432",
            "name": "Armazém",
            "state_id": "24"
        },
            {
            "id": "4433",
            "name": "Arroio Trinta",
            "state_id": "24"
        },
            {
            "id": "4434",
            "name": "Arvoredo",
            "state_id": "24"
        },
            {
            "id": "4435",
            "name": "Ascurra",
            "state_id": "24"
        },
            {
            "id": "4436",
            "name": "Atalanta",
            "state_id": "24"
        },
            {
            "id": "4437",
            "name": "Aurora",
            "state_id": "24"
        },
            {
            "id": "4438",
            "name": "Balneário Arroio do Silva",
            "state_id": "24"
        },
            {
            "id": "4439",
            "name": "Balneário Barra do Sul",
            "state_id": "24"
        },
            {
            "id": "4440",
            "name": "Balneário Camboriú",
            "state_id": "24"
        },
            {
            "id": "4441",
            "name": "Balneário Gaivota",
            "state_id": "24"
        },
            {
            "id": "4442",
            "name": "Bandeirante",
            "state_id": "24"
        },
            {
            "id": "4443",
            "name": "Barra Bonita",
            "state_id": "24"
        },
            {
            "id": "4444",
            "name": "Barra Velha",
            "state_id": "24"
        },
            {
            "id": "4445",
            "name": "Bela Vista do Toldo",
            "state_id": "24"
        },
            {
            "id": "4446",
            "name": "Belmonte",
            "state_id": "24"
        },
            {
            "id": "4447",
            "name": "Benedito Novo",
            "state_id": "24"
        },
            {
            "id": "4448",
            "name": "Biguaçu",
            "state_id": "24"
        },
            {
            "id": "4449",
            "name": "Blumenau",
            "state_id": "24"
        },
            {
            "id": "4450",
            "name": "Bocaina do Sul",
            "state_id": "24"
        },
            {
            "id": "4451",
            "name": "Bom Jardim da Serra",
            "state_id": "24"
        },
            {
            "id": "4452",
            "name": "Bom Jesus",
            "state_id": "24"
        },
            {
            "id": "4453",
            "name": "Bom Jesus do Oeste",
            "state_id": "24"
        },
            {
            "id": "4454",
            "name": "Bom Retiro",
            "state_id": "24"
        },
            {
            "id": "4455",
            "name": "Bombinhas",
            "state_id": "24"
        },
            {
            "id": "4456",
            "name": "Botuverá",
            "state_id": "24"
        },
            {
            "id": "4457",
            "name": "Braço do Norte",
            "state_id": "24"
        },
            {
            "id": "4458",
            "name": "Braço do Trombudo",
            "state_id": "24"
        },
            {
            "id": "4459",
            "name": "Brunópolis",
            "state_id": "24"
        },
            {
            "id": "4460",
            "name": "Brusque",
            "state_id": "24"
        },
            {
            "id": "4461",
            "name": "Caçador",
            "state_id": "24"
        },
            {
            "id": "4462",
            "name": "Caibi",
            "state_id": "24"
        },
            {
            "id": "4463",
            "name": "Calmon",
            "state_id": "24"
        },
            {
            "id": "4464",
            "name": "Camboriú",
            "state_id": "24"
        },
            {
            "id": "4465",
            "name": "Campo Alegre",
            "state_id": "24"
        },
            {
            "id": "4466",
            "name": "Campo Belo do Sul",
            "state_id": "24"
        },
            {
            "id": "4467",
            "name": "Campo Erê",
            "state_id": "24"
        },
            {
            "id": "4468",
            "name": "Campos Novos",
            "state_id": "24"
        },
            {
            "id": "4469",
            "name": "Canelinha",
            "state_id": "24"
        },
            {
            "id": "4470",
            "name": "Canoinhas",
            "state_id": "24"
        },
            {
            "id": "4471",
            "name": "Capão Alto",
            "state_id": "24"
        },
            {
            "id": "4472",
            "name": "Capinzal",
            "state_id": "24"
        },
            {
            "id": "4473",
            "name": "Capivari de Baixo",
            "state_id": "24"
        },
            {
            "id": "4474",
            "name": "Catanduvas",
            "state_id": "24"
        },
            {
            "id": "4475",
            "name": "Caxambu do Sul",
            "state_id": "24"
        },
            {
            "id": "4476",
            "name": "Celso Ramos",
            "state_id": "24"
        },
            {
            "id": "4477",
            "name": "Cerro Negro",
            "state_id": "24"
        },
            {
            "id": "4478",
            "name": "Chapadão do Lageado",
            "state_id": "24"
        },
            {
            "id": "4479",
            "name": "Chapecó",
            "state_id": "24"
        },
            {
            "id": "4480",
            "name": "Cocal do Sul",
            "state_id": "24"
        },
            {
            "id": "4481",
            "name": "Concórdia",
            "state_id": "24"
        },
            {
            "id": "4482",
            "name": "Cordilheira Alta",
            "state_id": "24"
        },
            {
            "id": "4483",
            "name": "Coronel Freitas",
            "state_id": "24"
        },
            {
            "id": "4484",
            "name": "Coronel Martins",
            "state_id": "24"
        },
            {
            "id": "4485",
            "name": "Correia Pinto",
            "state_id": "24"
        },
            {
            "id": "4486",
            "name": "Corupá",
            "state_id": "24"
        },
            {
            "id": "4487",
            "name": "Criciúma",
            "state_id": "24"
        },
            {
            "id": "4488",
            "name": "Cunha Porã",
            "state_id": "24"
        },
            {
            "id": "4489",
            "name": "Cunhataí",
            "state_id": "24"
        },
            {
            "id": "4490",
            "name": "Curitibanos",
            "state_id": "24"
        },
            {
            "id": "4491",
            "name": "Descanso",
            "state_id": "24"
        },
            {
            "id": "4492",
            "name": "Dionísio Cerqueira",
            "state_id": "24"
        },
            {
            "id": "4493",
            "name": "Dona Emma",
            "state_id": "24"
        },
            {
            "id": "4494",
            "name": "Doutor Pedrinho",
            "state_id": "24"
        },
            {
            "id": "4495",
            "name": "Entre Rios",
            "state_id": "24"
        },
            {
            "id": "4496",
            "name": "Ermo",
            "state_id": "24"
        },
            {
            "id": "4497",
            "name": "Erval Velho",
            "state_id": "24"
        },
            {
            "id": "4498",
            "name": "Faxinal dos Guedes",
            "state_id": "24"
        },
            {
            "id": "4499",
            "name": "Flor do Sertão",
            "state_id": "24"
        },
            {
            "id": "4500",
            "name": "Florianópolis",
            "state_id": "24"
        },
            {
            "id": "4501",
            "name": "Formosa do Sul",
            "state_id": "24"
        },
            {
            "id": "4502",
            "name": "Forquilhinha",
            "state_id": "24"
        },
            {
            "id": "4503",
            "name": "Fraiburgo",
            "state_id": "24"
        },
            {
            "id": "4504",
            "name": "Frei Rogério",
            "state_id": "24"
        },
            {
            "id": "4505",
            "name": "Galvão",
            "state_id": "24"
        },
            {
            "id": "4506",
            "name": "Garopaba",
            "state_id": "24"
        },
            {
            "id": "4507",
            "name": "Garuva",
            "state_id": "24"
        },
            {
            "id": "4508",
            "name": "Gaspar",
            "state_id": "24"
        },
            {
            "id": "4509",
            "name": "Governador Celso Ramos",
            "state_id": "24"
        },
            {
            "id": "4510",
            "name": "Grão Pará",
            "state_id": "24"
        },
            {
            "id": "4511",
            "name": "Gravatal",
            "state_id": "24"
        },
            {
            "id": "4512",
            "name": "Guabiruba",
            "state_id": "24"
        },
            {
            "id": "4513",
            "name": "Guaraciaba",
            "state_id": "24"
        },
            {
            "id": "4514",
            "name": "Guaramirim",
            "state_id": "24"
        },
            {
            "id": "4515",
            "name": "Guarujá do Sul",
            "state_id": "24"
        },
            {
            "id": "4516",
            "name": "Guatambú",
            "state_id": "24"
        },
            {
            "id": "4517",
            "name": "Herval d`Oeste",
            "state_id": "24"
        },
            {
            "id": "4518",
            "name": "Ibiam",
            "state_id": "24"
        },
            {
            "id": "4519",
            "name": "Ibicaré",
            "state_id": "24"
        },
            {
            "id": "4520",
            "name": "Ibirama",
            "state_id": "24"
        },
            {
            "id": "4521",
            "name": "Içara",
            "state_id": "24"
        },
            {
            "id": "4522",
            "name": "Ilhota",
            "state_id": "24"
        },
            {
            "id": "4523",
            "name": "Imaruí",
            "state_id": "24"
        },
            {
            "id": "4524",
            "name": "Imbituba",
            "state_id": "24"
        },
            {
            "id": "4525",
            "name": "Imbuia",
            "state_id": "24"
        },
            {
            "id": "4526",
            "name": "Indaial",
            "state_id": "24"
        },
            {
            "id": "4527",
            "name": "Iomerê",
            "state_id": "24"
        },
            {
            "id": "4528",
            "name": "Ipira",
            "state_id": "24"
        },
            {
            "id": "4529",
            "name": "Iporã do Oeste",
            "state_id": "24"
        },
            {
            "id": "4530",
            "name": "Ipuaçu",
            "state_id": "24"
        },
            {
            "id": "4531",
            "name": "Ipumirim",
            "state_id": "24"
        },
            {
            "id": "4532",
            "name": "Iraceminha",
            "state_id": "24"
        },
            {
            "id": "4533",
            "name": "Irani",
            "state_id": "24"
        },
            {
            "id": "4534",
            "name": "Irati",
            "state_id": "24"
        },
            {
            "id": "4535",
            "name": "Irineópolis",
            "state_id": "24"
        },
            {
            "id": "4536",
            "name": "Itá",
            "state_id": "24"
        },
            {
            "id": "4537",
            "name": "Itaiópolis",
            "state_id": "24"
        },
            {
            "id": "4538",
            "name": "Itajaí",
            "state_id": "24"
        },
            {
            "id": "4539",
            "name": "Itapema",
            "state_id": "24"
        },
            {
            "id": "4540",
            "name": "Itapiranga",
            "state_id": "24"
        },
            {
            "id": "4541",
            "name": "Itapoá",
            "state_id": "24"
        },
            {
            "id": "4542",
            "name": "Ituporanga",
            "state_id": "24"
        },
            {
            "id": "4543",
            "name": "Jaborá",
            "state_id": "24"
        },
            {
            "id": "4544",
            "name": "Jacinto Machado",
            "state_id": "24"
        },
            {
            "id": "4545",
            "name": "Jaguaruna",
            "state_id": "24"
        },
            {
            "id": "4546",
            "name": "Jaraguá do Sul",
            "state_id": "24"
        },
            {
            "id": "4547",
            "name": "Jardinópolis",
            "state_id": "24"
        },
            {
            "id": "4548",
            "name": "Joaçaba",
            "state_id": "24"
        },
            {
            "id": "4549",
            "name": "Joinville",
            "state_id": "24"
        },
            {
            "id": "4550",
            "name": "José Boiteux",
            "state_id": "24"
        },
            {
            "id": "4551",
            "name": "Jupiá",
            "state_id": "24"
        },
            {
            "id": "4552",
            "name": "Lacerdópolis",
            "state_id": "24"
        },
            {
            "id": "4553",
            "name": "Lages",
            "state_id": "24"
        },
            {
            "id": "4554",
            "name": "Laguna",
            "state_id": "24"
        },
            {
            "id": "4555",
            "name": "Lajeado Grande",
            "state_id": "24"
        },
            {
            "id": "4556",
            "name": "Laurentino",
            "state_id": "24"
        },
            {
            "id": "4557",
            "name": "Lauro Muller",
            "state_id": "24"
        },
            {
            "id": "4558",
            "name": "Lebon Régis",
            "state_id": "24"
        },
            {
            "id": "4559",
            "name": "Leoberto Leal",
            "state_id": "24"
        },
            {
            "id": "4560",
            "name": "Lindóia do Sul",
            "state_id": "24"
        },
            {
            "id": "4561",
            "name": "Lontras",
            "state_id": "24"
        },
            {
            "id": "4562",
            "name": "Luiz Alves",
            "state_id": "24"
        },
            {
            "id": "4563",
            "name": "Luzerna",
            "state_id": "24"
        },
            {
            "id": "4564",
            "name": "Macieira",
            "state_id": "24"
        },
            {
            "id": "4565",
            "name": "Mafra",
            "state_id": "24"
        },
            {
            "id": "4566",
            "name": "Major Gercino",
            "state_id": "24"
        },
            {
            "id": "4567",
            "name": "Major Vieira",
            "state_id": "24"
        },
            {
            "id": "4568",
            "name": "Maracajá",
            "state_id": "24"
        },
            {
            "id": "4569",
            "name": "Maravilha",
            "state_id": "24"
        },
            {
            "id": "4570",
            "name": "Marema",
            "state_id": "24"
        },
            {
            "id": "4571",
            "name": "Massaranduba",
            "state_id": "24"
        },
            {
            "id": "4572",
            "name": "Matos Costa",
            "state_id": "24"
        },
            {
            "id": "4573",
            "name": "Meleiro",
            "state_id": "24"
        },
            {
            "id": "4574",
            "name": "Mirim Doce",
            "state_id": "24"
        },
            {
            "id": "4575",
            "name": "Modelo",
            "state_id": "24"
        },
            {
            "id": "4576",
            "name": "Mondaí",
            "state_id": "24"
        },
            {
            "id": "4577",
            "name": "Monte Carlo",
            "state_id": "24"
        },
            {
            "id": "4578",
            "name": "Monte Castelo",
            "state_id": "24"
        },
            {
            "id": "4579",
            "name": "Morro da Fumaça",
            "state_id": "24"
        },
            {
            "id": "4580",
            "name": "Morro Grande",
            "state_id": "24"
        },
            {
            "id": "4581",
            "name": "Navegantes",
            "state_id": "24"
        },
            {
            "id": "4582",
            "name": "Nova Erechim",
            "state_id": "24"
        },
            {
            "id": "4583",
            "name": "Nova Itaberaba",
            "state_id": "24"
        },
            {
            "id": "4584",
            "name": "Nova Trento",
            "state_id": "24"
        },
            {
            "id": "4585",
            "name": "Nova Veneza",
            "state_id": "24"
        },
            {
            "id": "4586",
            "name": "Novo Horizonte",
            "state_id": "24"
        },
            {
            "id": "4587",
            "name": "Orleans",
            "state_id": "24"
        },
            {
            "id": "4588",
            "name": "Otacílio Costa",
            "state_id": "24"
        },
            {
            "id": "4589",
            "name": "Ouro",
            "state_id": "24"
        },
            {
            "id": "4590",
            "name": "Ouro Verde",
            "state_id": "24"
        },
            {
            "id": "4591",
            "name": "Paial",
            "state_id": "24"
        },
            {
            "id": "4592",
            "name": "Painel",
            "state_id": "24"
        },
            {
            "id": "4593",
            "name": "Palhoça",
            "state_id": "24"
        },
            {
            "id": "4594",
            "name": "Palma Sola",
            "state_id": "24"
        },
            {
            "id": "4595",
            "name": "Palmeira",
            "state_id": "24"
        },
            {
            "id": "4596",
            "name": "Palmitos",
            "state_id": "24"
        },
            {
            "id": "4597",
            "name": "Papanduva",
            "state_id": "24"
        },
            {
            "id": "4598",
            "name": "Paraíso",
            "state_id": "24"
        },
            {
            "id": "4599",
            "name": "Passo de Torres",
            "state_id": "24"
        },
            {
            "id": "4600",
            "name": "Passos Maia",
            "state_id": "24"
        },
            {
            "id": "4601",
            "name": "Paulo Lopes",
            "state_id": "24"
        },
            {
            "id": "4602",
            "name": "Pedras Grandes",
            "state_id": "24"
        },
            {
            "id": "4603",
            "name": "Penha",
            "state_id": "24"
        },
            {
            "id": "4604",
            "name": "Peritiba",
            "state_id": "24"
        },
            {
            "id": "4605",
            "name": "Petrolândia",
            "state_id": "24"
        },
            {
            "id": "4606",
            "name": "Piçarras",
            "state_id": "24"
        },
            {
            "id": "4607",
            "name": "Pinhalzinho",
            "state_id": "24"
        },
            {
            "id": "4608",
            "name": "Pinheiro Preto",
            "state_id": "24"
        },
            {
            "id": "4609",
            "name": "Piratuba",
            "state_id": "24"
        },
            {
            "id": "4610",
            "name": "Planalto Alegre",
            "state_id": "24"
        },
            {
            "id": "4611",
            "name": "Pomerode",
            "state_id": "24"
        },
            {
            "id": "4612",
            "name": "Ponte Alta",
            "state_id": "24"
        },
            {
            "id": "4613",
            "name": "Ponte Alta do Norte",
            "state_id": "24"
        },
            {
            "id": "4614",
            "name": "Ponte Serrada",
            "state_id": "24"
        },
            {
            "id": "4615",
            "name": "Porto Belo",
            "state_id": "24"
        },
            {
            "id": "4616",
            "name": "Porto União",
            "state_id": "24"
        },
            {
            "id": "4617",
            "name": "Pouso Redondo",
            "state_id": "24"
        },
            {
            "id": "4618",
            "name": "Praia Grande",
            "state_id": "24"
        },
            {
            "id": "4619",
            "name": "Presidente Castelo Branco",
            "state_id": "24"
        },
            {
            "id": "4620",
            "name": "Presidente Getúlio",
            "state_id": "24"
        },
            {
            "id": "4621",
            "name": "Presidente Nereu",
            "state_id": "24"
        },
            {
            "id": "4622",
            "name": "Princesa",
            "state_id": "24"
        },
            {
            "id": "4623",
            "name": "Quilombo",
            "state_id": "24"
        },
            {
            "id": "4624",
            "name": "Rancho Queimado",
            "state_id": "24"
        },
            {
            "id": "4625",
            "name": "Rio das Antas",
            "state_id": "24"
        },
            {
            "id": "4626",
            "name": "Rio do Campo",
            "state_id": "24"
        },
            {
            "id": "4627",
            "name": "Rio do Oeste",
            "state_id": "24"
        },
            {
            "id": "4628",
            "name": "Rio do Sul",
            "state_id": "24"
        },
            {
            "id": "4629",
            "name": "Rio dos Cedros",
            "state_id": "24"
        },
            {
            "id": "4630",
            "name": "Rio Fortuna",
            "state_id": "24"
        },
            {
            "id": "4631",
            "name": "Rio Negrinho",
            "state_id": "24"
        },
            {
            "id": "4632",
            "name": "Rio Rufino",
            "state_id": "24"
        },
            {
            "id": "4633",
            "name": "Riqueza",
            "state_id": "24"
        },
            {
            "id": "4634",
            "name": "Rodeio",
            "state_id": "24"
        },
            {
            "id": "4635",
            "name": "Romelândia",
            "state_id": "24"
        },
            {
            "id": "4636",
            "name": "Salete",
            "state_id": "24"
        },
            {
            "id": "4637",
            "name": "Saltinho",
            "state_id": "24"
        },
            {
            "id": "4638",
            "name": "Salto Veloso",
            "state_id": "24"
        },
            {
            "id": "4639",
            "name": "Sangão",
            "state_id": "24"
        },
            {
            "id": "4640",
            "name": "Santa Cecília",
            "state_id": "24"
        },
            {
            "id": "4641",
            "name": "Santa Helena",
            "state_id": "24"
        },
            {
            "id": "4642",
            "name": "Santa Rosa de Lima",
            "state_id": "24"
        },
            {
            "id": "4643",
            "name": "Santa Rosa do Sul",
            "state_id": "24"
        },
            {
            "id": "4644",
            "name": "Santa Terezinha",
            "state_id": "24"
        },
            {
            "id": "4645",
            "name": "Santa Terezinha do Progresso",
            "state_id": "24"
        },
            {
            "id": "4646",
            "name": "Santiago do Sul",
            "state_id": "24"
        },
            {
            "id": "4647",
            "name": "Santo Amaro da Imperatriz",
            "state_id": "24"
        },
            {
            "id": "4648",
            "name": "São Bento do Sul",
            "state_id": "24"
        },
            {
            "id": "4649",
            "name": "São Bernardino",
            "state_id": "24"
        },
            {
            "id": "4650",
            "name": "São Bonifácio",
            "state_id": "24"
        },
            {
            "id": "4651",
            "name": "São Carlos",
            "state_id": "24"
        },
            {
            "id": "4652",
            "name": "São Cristóvão do Sul",
            "state_id": "24"
        },
            {
            "id": "4653",
            "name": "São Domingos",
            "state_id": "24"
        },
            {
            "id": "4654",
            "name": "São Francisco do Sul",
            "state_id": "24"
        },
            {
            "id": "4655",
            "name": "São João Batista",
            "state_id": "24"
        },
            {
            "id": "4656",
            "name": "São João do Itaperiú",
            "state_id": "24"
        },
            {
            "id": "4657",
            "name": "São João do Oeste",
            "state_id": "24"
        },
            {
            "id": "4658",
            "name": "São João do Sul",
            "state_id": "24"
        },
            {
            "id": "4659",
            "name": "São Joaquim",
            "state_id": "24"
        },
            {
            "id": "4660",
            "name": "São José",
            "state_id": "24"
        },
            {
            "id": "4661",
            "name": "São José do Cedro",
            "state_id": "24"
        },
            {
            "id": "4662",
            "name": "São José do Cerrito",
            "state_id": "24"
        },
            {
            "id": "4663",
            "name": "São Lourenço do Oeste",
            "state_id": "24"
        },
            {
            "id": "4664",
            "name": "São Ludgero",
            "state_id": "24"
        },
            {
            "id": "4665",
            "name": "São Martinho",
            "state_id": "24"
        },
            {
            "id": "4666",
            "name": "São Miguel da Boa Vista",
            "state_id": "24"
        },
            {
            "id": "4667",
            "name": "São Miguel do Oeste",
            "state_id": "24"
        },
            {
            "id": "4668",
            "name": "São Pedro de Alcântara",
            "state_id": "24"
        },
            {
            "id": "4669",
            "name": "Saudades",
            "state_id": "24"
        },
            {
            "id": "4670",
            "name": "Schroeder",
            "state_id": "24"
        },
            {
            "id": "4671",
            "name": "Seara",
            "state_id": "24"
        },
            {
            "id": "4672",
            "name": "Serra Alta",
            "state_id": "24"
        },
            {
            "id": "4673",
            "name": "Siderópolis",
            "state_id": "24"
        },
            {
            "id": "4674",
            "name": "Sombrio",
            "state_id": "24"
        },
            {
            "id": "4675",
            "name": "Sul Brasil",
            "state_id": "24"
        },
            {
            "id": "4676",
            "name": "Taió",
            "state_id": "24"
        },
            {
            "id": "4677",
            "name": "Tangará",
            "state_id": "24"
        },
            {
            "id": "4678",
            "name": "Tigrinhos",
            "state_id": "24"
        },
            {
            "id": "4679",
            "name": "Tijucas",
            "state_id": "24"
        },
            {
            "id": "4680",
            "name": "Timbé do Sul",
            "state_id": "24"
        },
            {
            "id": "4681",
            "name": "Timbó",
            "state_id": "24"
        },
            {
            "id": "4682",
            "name": "Timbó Grande",
            "state_id": "24"
        },
            {
            "id": "4683",
            "name": "Três Barras",
            "state_id": "24"
        },
            {
            "id": "4684",
            "name": "Treviso",
            "state_id": "24"
        },
            {
            "id": "4685",
            "name": "Treze de Maio",
            "state_id": "24"
        },
            {
            "id": "4686",
            "name": "Treze Tílias",
            "state_id": "24"
        },
            {
            "id": "4687",
            "name": "Trombudo Central",
            "state_id": "24"
        },
            {
            "id": "4688",
            "name": "Tubarão",
            "state_id": "24"
        },
            {
            "id": "4689",
            "name": "Tunápolis",
            "state_id": "24"
        },
            {
            "id": "4690",
            "name": "Turvo",
            "state_id": "24"
        },
            {
            "id": "4691",
            "name": "União do Oeste",
            "state_id": "24"
        },
            {
            "id": "4692",
            "name": "Urubici",
            "state_id": "24"
        },
            {
            "id": "4693",
            "name": "Urupema",
            "state_id": "24"
        },
            {
            "id": "4694",
            "name": "Urussanga",
            "state_id": "24"
        },
            {
            "id": "4695",
            "name": "Vargeão",
            "state_id": "24"
        },
            {
            "id": "4696",
            "name": "Vargem",
            "state_id": "24"
        },
            {
            "id": "4697",
            "name": "Vargem Bonita",
            "state_id": "24"
        },
            {
            "id": "4698",
            "name": "Vidal Ramos",
            "state_id": "24"
        },
            {
            "id": "4699",
            "name": "Videira",
            "state_id": "24"
        },
            {
            "id": "4700",
            "name": "Vitor Meireles",
            "state_id": "24"
        },
            {
            "id": "4701",
            "name": "Witmarsum",
            "state_id": "24"
        },
            {
            "id": "4702",
            "name": "Xanxerê",
            "state_id": "24"
        },
            {
            "id": "4703",
            "name": "Xavantina",
            "state_id": "24"
        },
            {
            "id": "4704",
            "name": "Xaxim",
            "state_id": "24"
        },
            {
            "id": "4705",
            "name": "Zortéa",
            "state_id": "24"
        },
            {
            "id": "4706",
            "name": "Adamantina",
            "state_id": "26"
        },
            {
            "id": "4707",
            "name": "Adolfo",
            "state_id": "26"
        },
            {
            "id": "4708",
            "name": "Aguaí",
            "state_id": "26"
        },
            {
            "id": "4709",
            "name": "Águas da Prata",
            "state_id": "26"
        },
            {
            "id": "4710",
            "name": "Águas de Lindóia",
            "state_id": "26"
        },
            {
            "id": "4711",
            "name": "Águas de Santa Bárbara",
            "state_id": "26"
        },
            {
            "id": "4712",
            "name": "Águas de São Pedro",
            "state_id": "26"
        },
            {
            "id": "4713",
            "name": "Agudos",
            "state_id": "26"
        },
            {
            "id": "4714",
            "name": "Alambari",
            "state_id": "26"
        },
            {
            "id": "4715",
            "name": "Alfredo Marcondes",
            "state_id": "26"
        },
            {
            "id": "4716",
            "name": "Altair",
            "state_id": "26"
        },
            {
            "id": "4717",
            "name": "Altinópolis",
            "state_id": "26"
        },
            {
            "id": "4718",
            "name": "Alto Alegre",
            "state_id": "26"
        },
            {
            "id": "4719",
            "name": "Alumínio",
            "state_id": "26"
        },
            {
            "id": "4720",
            "name": "Álvares Florence",
            "state_id": "26"
        },
            {
            "id": "4721",
            "name": "Álvares Machado",
            "state_id": "26"
        },
            {
            "id": "4722",
            "name": "Álvaro de Carvalho",
            "state_id": "26"
        },
            {
            "id": "4723",
            "name": "Alvinlândia",
            "state_id": "26"
        },
            {
            "id": "4724",
            "name": "Americana",
            "state_id": "26"
        },
            {
            "id": "4725",
            "name": "Américo Brasiliense",
            "state_id": "26"
        },
            {
            "id": "4726",
            "name": "Américo de Campos",
            "state_id": "26"
        },
            {
            "id": "4727",
            "name": "Amparo",
            "state_id": "26"
        },
            {
            "id": "4728",
            "name": "Analândia",
            "state_id": "26"
        },
            {
            "id": "4729",
            "name": "Andradina",
            "state_id": "26"
        },
            {
            "id": "4730",
            "name": "Angatuba",
            "state_id": "26"
        },
            {
            "id": "4731",
            "name": "Anhembi",
            "state_id": "26"
        },
            {
            "id": "4732",
            "name": "Anhumas",
            "state_id": "26"
        },
            {
            "id": "4733",
            "name": "Aparecida",
            "state_id": "26"
        },
            {
            "id": "4734",
            "name": "Aparecida d`Oeste",
            "state_id": "26"
        },
            {
            "id": "4735",
            "name": "Apiaí",
            "state_id": "26"
        },
            {
            "id": "4736",
            "name": "Araçariguama",
            "state_id": "26"
        },
            {
            "id": "4737",
            "name": "Araçatuba",
            "state_id": "26"
        },
            {
            "id": "4738",
            "name": "Araçoiaba da Serra",
            "state_id": "26"
        },
            {
            "id": "4739",
            "name": "Aramina",
            "state_id": "26"
        },
            {
            "id": "4740",
            "name": "Arandu",
            "state_id": "26"
        },
            {
            "id": "4741",
            "name": "Arapeí",
            "state_id": "26"
        },
            {
            "id": "4742",
            "name": "Araraquara",
            "state_id": "26"
        },
            {
            "id": "4743",
            "name": "Araras",
            "state_id": "26"
        },
            {
            "id": "4744",
            "name": "Arco-Íris",
            "state_id": "26"
        },
            {
            "id": "4745",
            "name": "Arealva",
            "state_id": "26"
        },
            {
            "id": "4746",
            "name": "Areias",
            "state_id": "26"
        },
            {
            "id": "4747",
            "name": "Areiópolis",
            "state_id": "26"
        },
            {
            "id": "4748",
            "name": "Ariranha",
            "state_id": "26"
        },
            {
            "id": "4749",
            "name": "Artur Nogueira",
            "state_id": "26"
        },
            {
            "id": "4750",
            "name": "Arujá",
            "state_id": "26"
        },
            {
            "id": "4751",
            "name": "Aspásia",
            "state_id": "26"
        },
            {
            "id": "4752",
            "name": "Assis",
            "state_id": "26"
        },
            {
            "id": "4753",
            "name": "Atibaia",
            "state_id": "26"
        },
            {
            "id": "4754",
            "name": "Auriflama",
            "state_id": "26"
        },
            {
            "id": "4755",
            "name": "Avaí",
            "state_id": "26"
        },
            {
            "id": "4756",
            "name": "Avanhandava",
            "state_id": "26"
        },
            {
            "id": "4757",
            "name": "Avaré",
            "state_id": "26"
        },
            {
            "id": "4758",
            "name": "Bady Bassitt",
            "state_id": "26"
        },
            {
            "id": "4759",
            "name": "Balbinos",
            "state_id": "26"
        },
            {
            "id": "4760",
            "name": "Bálsamo",
            "state_id": "26"
        },
            {
            "id": "4761",
            "name": "Bananal",
            "state_id": "26"
        },
            {
            "id": "4762",
            "name": "Barão de Antonina",
            "state_id": "26"
        },
            {
            "id": "4763",
            "name": "Barbosa",
            "state_id": "26"
        },
            {
            "id": "4764",
            "name": "Bariri",
            "state_id": "26"
        },
            {
            "id": "4765",
            "name": "Barra Bonita",
            "state_id": "26"
        },
            {
            "id": "4766",
            "name": "Barra do Chapéu",
            "state_id": "26"
        },
            {
            "id": "4767",
            "name": "Barra do Turvo",
            "state_id": "26"
        },
            {
            "id": "4768",
            "name": "Barretos",
            "state_id": "26"
        },
            {
            "id": "4769",
            "name": "Barrinha",
            "state_id": "26"
        },
            {
            "id": "4770",
            "name": "Barueri",
            "state_id": "26"
        },
            {
            "id": "4771",
            "name": "Bastos",
            "state_id": "26"
        },
            {
            "id": "4772",
            "name": "Batatais",
            "state_id": "26"
        },
            {
            "id": "4773",
            "name": "Bauru",
            "state_id": "26"
        },
            {
            "id": "4774",
            "name": "Bebedouro",
            "state_id": "26"
        },
            {
            "id": "4775",
            "name": "Bento de Abreu",
            "state_id": "26"
        },
            {
            "id": "4776",
            "name": "Bernardino de Campos",
            "state_id": "26"
        },
            {
            "id": "4777",
            "name": "Bertioga",
            "state_id": "26"
        },
            {
            "id": "4778",
            "name": "Bilac",
            "state_id": "26"
        },
            {
            "id": "4779",
            "name": "Birigui",
            "state_id": "26"
        },
            {
            "id": "4780",
            "name": "Biritiba-Mirim",
            "state_id": "26"
        },
            {
            "id": "4781",
            "name": "Boa Esperança do Sul",
            "state_id": "26"
        },
            {
            "id": "4782",
            "name": "Bocaina",
            "state_id": "26"
        },
            {
            "id": "4783",
            "name": "Bofete",
            "state_id": "26"
        },
            {
            "id": "4784",
            "name": "Boituva",
            "state_id": "26"
        },
            {
            "id": "4785",
            "name": "Bom Jesus dos Perdões",
            "state_id": "26"
        },
            {
            "id": "4786",
            "name": "Bom Sucesso de Itararé",
            "state_id": "26"
        },
            {
            "id": "4787",
            "name": "Borá",
            "state_id": "26"
        },
            {
            "id": "4788",
            "name": "Boracéia",
            "state_id": "26"
        },
            {
            "id": "4789",
            "name": "Borborema",
            "state_id": "26"
        },
            {
            "id": "4790",
            "name": "Borebi",
            "state_id": "26"
        },
            {
            "id": "4791",
            "name": "Botucatu",
            "state_id": "26"
        },
            {
            "id": "4792",
            "name": "Bragança Paulista",
            "state_id": "26"
        },
            {
            "id": "4793",
            "name": "Braúna",
            "state_id": "26"
        },
            {
            "id": "4794",
            "name": "Brejo Alegre",
            "state_id": "26"
        },
            {
            "id": "4795",
            "name": "Brodowski",
            "state_id": "26"
        },
            {
            "id": "4796",
            "name": "Brotas",
            "state_id": "26"
        },
            {
            "id": "4797",
            "name": "Buri",
            "state_id": "26"
        },
            {
            "id": "4798",
            "name": "Buritama",
            "state_id": "26"
        },
            {
            "id": "4799",
            "name": "Buritizal",
            "state_id": "26"
        },
            {
            "id": "4800",
            "name": "Cabrália Paulista",
            "state_id": "26"
        },
            {
            "id": "4801",
            "name": "Cabreúva",
            "state_id": "26"
        },
            {
            "id": "4802",
            "name": "Caçapava",
            "state_id": "26"
        },
            {
            "id": "4803",
            "name": "Cachoeira Paulista",
            "state_id": "26"
        },
            {
            "id": "4804",
            "name": "Caconde",
            "state_id": "26"
        },
            {
            "id": "4805",
            "name": "Cafelândia",
            "state_id": "26"
        },
            {
            "id": "4806",
            "name": "Caiabu",
            "state_id": "26"
        },
            {
            "id": "4807",
            "name": "Caieiras",
            "state_id": "26"
        },
            {
            "id": "4808",
            "name": "Caiuá",
            "state_id": "26"
        },
            {
            "id": "4809",
            "name": "Cajamar",
            "state_id": "26"
        },
            {
            "id": "4810",
            "name": "Cajati",
            "state_id": "26"
        },
            {
            "id": "4811",
            "name": "Cajobi",
            "state_id": "26"
        },
            {
            "id": "4812",
            "name": "Cajuru",
            "state_id": "26"
        },
            {
            "id": "4813",
            "name": "Campina do Monte Alegre",
            "state_id": "26"
        },
            {
            "id": "4814",
            "name": "Campinas",
            "state_id": "26"
        },
            {
            "id": "4815",
            "name": "Campo Limpo Paulista",
            "state_id": "26"
        },
            {
            "id": "4816",
            "name": "Campos do Jordão",
            "state_id": "26"
        },
            {
            "id": "4817",
            "name": "Campos Novos Paulista",
            "state_id": "26"
        },
            {
            "id": "4818",
            "name": "Cananéia",
            "state_id": "26"
        },
            {
            "id": "4819",
            "name": "Canas",
            "state_id": "26"
        },
            {
            "id": "4820",
            "name": "Cândido Mota",
            "state_id": "26"
        },
            {
            "id": "4821",
            "name": "Cândido Rodrigues",
            "state_id": "26"
        },
            {
            "id": "4822",
            "name": "Canitar",
            "state_id": "26"
        },
            {
            "id": "4823",
            "name": "Capão Bonito",
            "state_id": "26"
        },
            {
            "id": "4824",
            "name": "Capela do Alto",
            "state_id": "26"
        },
            {
            "id": "4825",
            "name": "Capivari",
            "state_id": "26"
        },
            {
            "id": "4826",
            "name": "Caraguatatuba",
            "state_id": "26"
        },
            {
            "id": "4827",
            "name": "Carapicuíba",
            "state_id": "26"
        },
            {
            "id": "4828",
            "name": "Cardoso",
            "state_id": "26"
        },
            {
            "id": "4829",
            "name": "Casa Branca",
            "state_id": "26"
        },
            {
            "id": "4830",
            "name": "Cássia dos Coqueiros",
            "state_id": "26"
        },
            {
            "id": "4831",
            "name": "Castilho",
            "state_id": "26"
        },
            {
            "id": "4832",
            "name": "Catanduva",
            "state_id": "26"
        },
            {
            "id": "4833",
            "name": "Catiguá",
            "state_id": "26"
        },
            {
            "id": "4834",
            "name": "Cedral",
            "state_id": "26"
        },
            {
            "id": "4835",
            "name": "Cerqueira César",
            "state_id": "26"
        },
            {
            "id": "4836",
            "name": "Cerquilho",
            "state_id": "26"
        },
            {
            "id": "4837",
            "name": "Cesário Lange",
            "state_id": "26"
        },
            {
            "id": "4838",
            "name": "Charqueada",
            "state_id": "26"
        },
            {
            "id": "4839",
            "name": "Chavantes",
            "state_id": "26"
        },
            {
            "id": "4840",
            "name": "Clementina",
            "state_id": "26"
        },
            {
            "id": "4841",
            "name": "Colina",
            "state_id": "26"
        },
            {
            "id": "4842",
            "name": "Colômbia",
            "state_id": "26"
        },
            {
            "id": "4843",
            "name": "Conchal",
            "state_id": "26"
        },
            {
            "id": "4844",
            "name": "Conchas",
            "state_id": "26"
        },
            {
            "id": "4845",
            "name": "Cordeirópolis",
            "state_id": "26"
        },
            {
            "id": "4846",
            "name": "Coroados",
            "state_id": "26"
        },
            {
            "id": "4847",
            "name": "Coronel Macedo",
            "state_id": "26"
        },
            {
            "id": "4848",
            "name": "Corumbataí",
            "state_id": "26"
        },
            {
            "id": "4849",
            "name": "Cosmópolis",
            "state_id": "26"
        },
            {
            "id": "4850",
            "name": "Cosmorama",
            "state_id": "26"
        },
            {
            "id": "4851",
            "name": "Cotia",
            "state_id": "26"
        },
            {
            "id": "4852",
            "name": "Cravinhos",
            "state_id": "26"
        },
            {
            "id": "4853",
            "name": "Cristais Paulista",
            "state_id": "26"
        },
            {
            "id": "4854",
            "name": "Cruzália",
            "state_id": "26"
        },
            {
            "id": "4855",
            "name": "Cruzeiro",
            "state_id": "26"
        },
            {
            "id": "4856",
            "name": "Cubatão",
            "state_id": "26"
        },
            {
            "id": "4857",
            "name": "Cunha",
            "state_id": "26"
        },
            {
            "id": "4858",
            "name": "Descalvado",
            "state_id": "26"
        },
            {
            "id": "4859",
            "name": "Diadema",
            "state_id": "26"
        },
            {
            "id": "4860",
            "name": "Dirce Reis",
            "state_id": "26"
        },
            {
            "id": "4861",
            "name": "Divinolândia",
            "state_id": "26"
        },
            {
            "id": "4862",
            "name": "Dobrada",
            "state_id": "26"
        },
            {
            "id": "4863",
            "name": "Dois Córregos",
            "state_id": "26"
        },
            {
            "id": "4864",
            "name": "Dolcinópolis",
            "state_id": "26"
        },
            {
            "id": "4865",
            "name": "Dourado",
            "state_id": "26"
        },
            {
            "id": "4866",
            "name": "Dracena",
            "state_id": "26"
        },
            {
            "id": "4867",
            "name": "Duartina",
            "state_id": "26"
        },
            {
            "id": "4868",
            "name": "Dumont",
            "state_id": "26"
        },
            {
            "id": "4869",
            "name": "Echaporã",
            "state_id": "26"
        },
            {
            "id": "4870",
            "name": "Eldorado",
            "state_id": "26"
        },
            {
            "id": "4871",
            "name": "Elias Fausto",
            "state_id": "26"
        },
            {
            "id": "4872",
            "name": "Elisiário",
            "state_id": "26"
        },
            {
            "id": "4873",
            "name": "Embaúba",
            "state_id": "26"
        },
            {
            "id": "4874",
            "name": "Embu",
            "state_id": "26"
        },
            {
            "id": "4875",
            "name": "Embu-Guaçu",
            "state_id": "26"
        },
            {
            "id": "4876",
            "name": "Emilianópolis",
            "state_id": "26"
        },
            {
            "id": "4877",
            "name": "Engenheiro Coelho",
            "state_id": "26"
        },
            {
            "id": "4878",
            "name": "Espírito Santo do Pinhal",
            "state_id": "26"
        },
            {
            "id": "4879",
            "name": "Espírito Santo do Turvo",
            "state_id": "26"
        },
            {
            "id": "4880",
            "name": "Estiva Gerbi",
            "state_id": "26"
        },
            {
            "id": "4881",
            "name": "Estrela d`Oeste",
            "state_id": "26"
        },
            {
            "id": "4882",
            "name": "Estrela do Norte",
            "state_id": "26"
        },
            {
            "id": "4883",
            "name": "Euclides da Cunha Paulista",
            "state_id": "26"
        },
            {
            "id": "4884",
            "name": "Fartura",
            "state_id": "26"
        },
            {
            "id": "4885",
            "name": "Fernando Prestes",
            "state_id": "26"
        },
            {
            "id": "4886",
            "name": "Fernandópolis",
            "state_id": "26"
        },
            {
            "id": "4887",
            "name": "Fernão",
            "state_id": "26"
        },
            {
            "id": "4888",
            "name": "Ferraz de Vasconcelos",
            "state_id": "26"
        },
            {
            "id": "4889",
            "name": "Flora Rica",
            "state_id": "26"
        },
            {
            "id": "4890",
            "name": "Floreal",
            "state_id": "26"
        },
            {
            "id": "4891",
            "name": "Flórida Paulista",
            "state_id": "26"
        },
            {
            "id": "4892",
            "name": "Florínea",
            "state_id": "26"
        },
            {
            "id": "4893",
            "name": "Franca",
            "state_id": "26"
        },
            {
            "id": "4894",
            "name": "Francisco Morato",
            "state_id": "26"
        },
            {
            "id": "4895",
            "name": "Franco da Rocha",
            "state_id": "26"
        },
            {
            "id": "4896",
            "name": "Gabriel Monteiro",
            "state_id": "26"
        },
            {
            "id": "4897",
            "name": "Gália",
            "state_id": "26"
        },
            {
            "id": "4898",
            "name": "Garça",
            "state_id": "26"
        },
            {
            "id": "4899",
            "name": "Gastão Vidigal",
            "state_id": "26"
        },
            {
            "id": "4900",
            "name": "Gavião Peixoto",
            "state_id": "26"
        },
            {
            "id": "4901",
            "name": "General Salgado",
            "state_id": "26"
        },
            {
            "id": "4902",
            "name": "Getulina",
            "state_id": "26"
        },
            {
            "id": "4903",
            "name": "Glicério",
            "state_id": "26"
        },
            {
            "id": "4904",
            "name": "Guaiçara",
            "state_id": "26"
        },
            {
            "id": "4905",
            "name": "Guaimbê",
            "state_id": "26"
        },
            {
            "id": "4906",
            "name": "Guaíra",
            "state_id": "26"
        },
            {
            "id": "4907",
            "name": "Guapiaçu",
            "state_id": "26"
        },
            {
            "id": "4908",
            "name": "Guapiara",
            "state_id": "26"
        },
            {
            "id": "4909",
            "name": "Guará",
            "state_id": "26"
        },
            {
            "id": "4910",
            "name": "Guaraçaí",
            "state_id": "26"
        },
            {
            "id": "4911",
            "name": "Guaraci",
            "state_id": "26"
        },
            {
            "id": "4912",
            "name": "Guarani d`Oeste",
            "state_id": "26"
        },
            {
            "id": "4913",
            "name": "Guarantã",
            "state_id": "26"
        },
            {
            "id": "4914",
            "name": "Guararapes",
            "state_id": "26"
        },
            {
            "id": "4915",
            "name": "Guararema",
            "state_id": "26"
        },
            {
            "id": "4916",
            "name": "Guaratinguetá",
            "state_id": "26"
        },
            {
            "id": "4917",
            "name": "Guareí",
            "state_id": "26"
        },
            {
            "id": "4918",
            "name": "Guariba",
            "state_id": "26"
        },
            {
            "id": "4919",
            "name": "Guarujá",
            "state_id": "26"
        },
            {
            "id": "4920",
            "name": "Guarulhos",
            "state_id": "26"
        },
            {
            "id": "4921",
            "name": "Guatapará",
            "state_id": "26"
        },
            {
            "id": "4922",
            "name": "Guzolândia",
            "state_id": "26"
        },
            {
            "id": "4923",
            "name": "Herculândia",
            "state_id": "26"
        },
            {
            "id": "4924",
            "name": "Holambra",
            "state_id": "26"
        },
            {
            "id": "4925",
            "name": "Hortolândia",
            "state_id": "26"
        },
            {
            "id": "4926",
            "name": "Iacanga",
            "state_id": "26"
        },
            {
            "id": "4927",
            "name": "Iacri",
            "state_id": "26"
        },
            {
            "id": "4928",
            "name": "Iaras",
            "state_id": "26"
        },
            {
            "id": "4929",
            "name": "Ibaté",
            "state_id": "26"
        },
            {
            "id": "4930",
            "name": "Ibirá",
            "state_id": "26"
        },
            {
            "id": "4931",
            "name": "Ibirarema",
            "state_id": "26"
        },
            {
            "id": "4932",
            "name": "Ibitinga",
            "state_id": "26"
        },
            {
            "id": "4933",
            "name": "Ibiúna",
            "state_id": "26"
        },
            {
            "id": "4934",
            "name": "Icém",
            "state_id": "26"
        },
            {
            "id": "4935",
            "name": "Iepê",
            "state_id": "26"
        },
            {
            "id": "4936",
            "name": "Igaraçu do Tietê",
            "state_id": "26"
        },
            {
            "id": "4937",
            "name": "Igarapava",
            "state_id": "26"
        },
            {
            "id": "4938",
            "name": "Igaratá",
            "state_id": "26"
        },
            {
            "id": "4939",
            "name": "Iguape",
            "state_id": "26"
        },
            {
            "id": "4940",
            "name": "Ilha Comprida",
            "state_id": "26"
        },
            {
            "id": "4941",
            "name": "Ilha Solteira",
            "state_id": "26"
        },
            {
            "id": "4942",
            "name": "Ilhabela",
            "state_id": "26"
        },
            {
            "id": "4943",
            "name": "Indaiatuba",
            "state_id": "26"
        },
            {
            "id": "4944",
            "name": "Indiana",
            "state_id": "26"
        },
            {
            "id": "4945",
            "name": "Indiaporã",
            "state_id": "26"
        },
            {
            "id": "4946",
            "name": "Inúbia Paulista",
            "state_id": "26"
        },
            {
            "id": "4947",
            "name": "Ipaussu",
            "state_id": "26"
        },
            {
            "id": "4948",
            "name": "Iperó",
            "state_id": "26"
        },
            {
            "id": "4949",
            "name": "Ipeúna",
            "state_id": "26"
        },
            {
            "id": "4950",
            "name": "Ipiguá",
            "state_id": "26"
        },
            {
            "id": "4951",
            "name": "Iporanga",
            "state_id": "26"
        },
            {
            "id": "4952",
            "name": "Ipuã",
            "state_id": "26"
        },
            {
            "id": "4953",
            "name": "Iracemápolis",
            "state_id": "26"
        },
            {
            "id": "4954",
            "name": "Irapuã",
            "state_id": "26"
        },
            {
            "id": "4955",
            "name": "Irapuru",
            "state_id": "26"
        },
            {
            "id": "4956",
            "name": "Itaberá",
            "state_id": "26"
        },
            {
            "id": "4957",
            "name": "Itaí",
            "state_id": "26"
        },
            {
            "id": "4958",
            "name": "Itajobi",
            "state_id": "26"
        },
            {
            "id": "4959",
            "name": "Itaju",
            "state_id": "26"
        },
            {
            "id": "4960",
            "name": "Itanhaém",
            "state_id": "26"
        },
            {
            "id": "4961",
            "name": "Itaóca",
            "state_id": "26"
        },
            {
            "id": "4962",
            "name": "Itapecerica da Serra",
            "state_id": "26"
        },
            {
            "id": "4963",
            "name": "Itapetininga",
            "state_id": "26"
        },
            {
            "id": "4964",
            "name": "Itapeva",
            "state_id": "26"
        },
            {
            "id": "4965",
            "name": "Itapevi",
            "state_id": "26"
        },
            {
            "id": "4966",
            "name": "Itapira",
            "state_id": "26"
        },
            {
            "id": "4967",
            "name": "Itapirapuã Paulista",
            "state_id": "26"
        },
            {
            "id": "4968",
            "name": "Itápolis",
            "state_id": "26"
        },
            {
            "id": "4969",
            "name": "Itaporanga",
            "state_id": "26"
        },
            {
            "id": "4970",
            "name": "Itapuí",
            "state_id": "26"
        },
            {
            "id": "4971",
            "name": "Itapura",
            "state_id": "26"
        },
            {
            "id": "4972",
            "name": "Itaquaquecetuba",
            "state_id": "26"
        },
            {
            "id": "4973",
            "name": "Itararé",
            "state_id": "26"
        },
            {
            "id": "4974",
            "name": "Itariri",
            "state_id": "26"
        },
            {
            "id": "4975",
            "name": "Itatiba",
            "state_id": "26"
        },
            {
            "id": "4976",
            "name": "Itatinga",
            "state_id": "26"
        },
            {
            "id": "4977",
            "name": "Itirapina",
            "state_id": "26"
        },
            {
            "id": "4978",
            "name": "Itirapuã",
            "state_id": "26"
        },
            {
            "id": "4979",
            "name": "Itobi",
            "state_id": "26"
        },
            {
            "id": "4980",
            "name": "Itu",
            "state_id": "26"
        },
            {
            "id": "4981",
            "name": "Itupeva",
            "state_id": "26"
        },
            {
            "id": "4982",
            "name": "Ituverava",
            "state_id": "26"
        },
            {
            "id": "4983",
            "name": "Jaborandi",
            "state_id": "26"
        },
            {
            "id": "4984",
            "name": "Jaboticabal",
            "state_id": "26"
        },
            {
            "id": "4985",
            "name": "Jacareí",
            "state_id": "26"
        },
            {
            "id": "4986",
            "name": "Jaci",
            "state_id": "26"
        },
            {
            "id": "4987",
            "name": "Jacupiranga",
            "state_id": "26"
        },
            {
            "id": "4988",
            "name": "Jaguariúna",
            "state_id": "26"
        },
            {
            "id": "4989",
            "name": "Jales",
            "state_id": "26"
        },
            {
            "id": "4990",
            "name": "Jambeiro",
            "state_id": "26"
        },
            {
            "id": "4991",
            "name": "Jandira",
            "state_id": "26"
        },
            {
            "id": "4992",
            "name": "Jardinópolis",
            "state_id": "26"
        },
            {
            "id": "4993",
            "name": "Jarinu",
            "state_id": "26"
        },
            {
            "id": "4994",
            "name": "Jaú",
            "state_id": "26"
        },
            {
            "id": "4995",
            "name": "Jeriquara",
            "state_id": "26"
        },
            {
            "id": "4996",
            "name": "Joanópolis",
            "state_id": "26"
        },
            {
            "id": "4997",
            "name": "João Ramalho",
            "state_id": "26"
        },
            {
            "id": "4998",
            "name": "José Bonifácio",
            "state_id": "26"
        },
            {
            "id": "4999",
            "name": "Júlio Mesquita",
            "state_id": "26"
        },
            {
            "id": "5000",
            "name": "Jumirim",
            "state_id": "26"
        },
            {
            "id": "5001",
            "name": "Jundiaí",
            "state_id": "26"
        },
            {
            "id": "5002",
            "name": "Junqueirópolis",
            "state_id": "26"
        },
            {
            "id": "5003",
            "name": "Juquiá",
            "state_id": "26"
        },
            {
            "id": "5004",
            "name": "Juquitiba",
            "state_id": "26"
        },
            {
            "id": "5005",
            "name": "Lagoinha",
            "state_id": "26"
        },
            {
            "id": "5006",
            "name": "Laranjal Paulista",
            "state_id": "26"
        },
            {
            "id": "5007",
            "name": "Lavínia",
            "state_id": "26"
        },
            {
            "id": "5008",
            "name": "Lavrinhas",
            "state_id": "26"
        },
            {
            "id": "5009",
            "name": "Leme",
            "state_id": "26"
        },
            {
            "id": "5010",
            "name": "Lençóis Paulista",
            "state_id": "26"
        },
            {
            "id": "5011",
            "name": "Limeira",
            "state_id": "26"
        },
            {
            "id": "5012",
            "name": "Lindóia",
            "state_id": "26"
        },
            {
            "id": "5013",
            "name": "Lins",
            "state_id": "26"
        },
            {
            "id": "5014",
            "name": "Lorena",
            "state_id": "26"
        },
            {
            "id": "5015",
            "name": "Lourdes",
            "state_id": "26"
        },
            {
            "id": "5016",
            "name": "Louveira",
            "state_id": "26"
        },
            {
            "id": "5017",
            "name": "Lucélia",
            "state_id": "26"
        },
            {
            "id": "5018",
            "name": "Lucianópolis",
            "state_id": "26"
        },
            {
            "id": "5019",
            "name": "Luís Antônio",
            "state_id": "26"
        },
            {
            "id": "5020",
            "name": "Luiziânia",
            "state_id": "26"
        },
            {
            "id": "5021",
            "name": "Lupércio",
            "state_id": "26"
        },
            {
            "id": "5022",
            "name": "Lutécia",
            "state_id": "26"
        },
            {
            "id": "5023",
            "name": "Macatuba",
            "state_id": "26"
        },
            {
            "id": "5024",
            "name": "Macaubal",
            "state_id": "26"
        },
            {
            "id": "5025",
            "name": "Macedônia",
            "state_id": "26"
        },
            {
            "id": "5026",
            "name": "Magda",
            "state_id": "26"
        },
            {
            "id": "5027",
            "name": "Mairinque",
            "state_id": "26"
        },
            {
            "id": "5028",
            "name": "Mairiporã",
            "state_id": "26"
        },
            {
            "id": "5029",
            "name": "Manduri",
            "state_id": "26"
        },
            {
            "id": "5030",
            "name": "Marabá Paulista",
            "state_id": "26"
        },
            {
            "id": "5031",
            "name": "Maracaí",
            "state_id": "26"
        },
            {
            "id": "5032",
            "name": "Marapoama",
            "state_id": "26"
        },
            {
            "id": "5033",
            "name": "Mariápolis",
            "state_id": "26"
        },
            {
            "id": "5034",
            "name": "Marília",
            "state_id": "26"
        },
            {
            "id": "5035",
            "name": "Marinópolis",
            "state_id": "26"
        },
            {
            "id": "5036",
            "name": "Martinópolis",
            "state_id": "26"
        },
            {
            "id": "5037",
            "name": "Matão",
            "state_id": "26"
        },
            {
            "id": "5038",
            "name": "Mauá",
            "state_id": "26"
        },
            {
            "id": "5039",
            "name": "Mendonça",
            "state_id": "26"
        },
            {
            "id": "5040",
            "name": "Meridiano",
            "state_id": "26"
        },
            {
            "id": "5041",
            "name": "Mesópolis",
            "state_id": "26"
        },
            {
            "id": "5042",
            "name": "Miguelópolis",
            "state_id": "26"
        },
            {
            "id": "5043",
            "name": "Mineiros do Tietê",
            "state_id": "26"
        },
            {
            "id": "5044",
            "name": "Mira Estrela",
            "state_id": "26"
        },
            {
            "id": "5045",
            "name": "Miracatu",
            "state_id": "26"
        },
            {
            "id": "5046",
            "name": "Mirandópolis",
            "state_id": "26"
        },
            {
            "id": "5047",
            "name": "Mirante do Paranapanema",
            "state_id": "26"
        },
            {
            "id": "5048",
            "name": "Mirassol",
            "state_id": "26"
        },
            {
            "id": "5049",
            "name": "Mirassolândia",
            "state_id": "26"
        },
            {
            "id": "5050",
            "name": "Mococa",
            "state_id": "26"
        },
            {
            "id": "5051",
            "name": "Mogi das Cruzes",
            "state_id": "26"
        },
            {
            "id": "5052",
            "name": "Mogi Guaçu",
            "state_id": "26"
        },
            {
            "id": "5053",
            "name": "Moji Mirim",
            "state_id": "26"
        },
            {
            "id": "5054",
            "name": "Mombuca",
            "state_id": "26"
        },
            {
            "id": "5055",
            "name": "Monções",
            "state_id": "26"
        },
            {
            "id": "5056",
            "name": "Mongaguá",
            "state_id": "26"
        },
            {
            "id": "5057",
            "name": "Monte Alegre do Sul",
            "state_id": "26"
        },
            {
            "id": "5058",
            "name": "Monte Alto",
            "state_id": "26"
        },
            {
            "id": "5059",
            "name": "Monte Aprazível",
            "state_id": "26"
        },
            {
            "id": "5060",
            "name": "Monte Azul Paulista",
            "state_id": "26"
        },
            {
            "id": "5061",
            "name": "Monte Castelo",
            "state_id": "26"
        },
            {
            "id": "5062",
            "name": "Monte Mor",
            "state_id": "26"
        },
            {
            "id": "5063",
            "name": "Monteiro Lobato",
            "state_id": "26"
        },
            {
            "id": "5064",
            "name": "Morro Agudo",
            "state_id": "26"
        },
            {
            "id": "5065",
            "name": "Morungaba",
            "state_id": "26"
        },
            {
            "id": "5066",
            "name": "Motuca",
            "state_id": "26"
        },
            {
            "id": "5067",
            "name": "Murutinga do Sul",
            "state_id": "26"
        },
            {
            "id": "5068",
            "name": "Nantes",
            "state_id": "26"
        },
            {
            "id": "5069",
            "name": "Narandiba",
            "state_id": "26"
        },
            {
            "id": "5070",
            "name": "Natividade da Serra",
            "state_id": "26"
        },
            {
            "id": "5071",
            "name": "Nazaré Paulista",
            "state_id": "26"
        },
            {
            "id": "5072",
            "name": "Neves Paulista",
            "state_id": "26"
        },
            {
            "id": "5073",
            "name": "Nhandeara",
            "state_id": "26"
        },
            {
            "id": "5074",
            "name": "Nipoã",
            "state_id": "26"
        },
            {
            "id": "5075",
            "name": "Nova Aliança",
            "state_id": "26"
        },
            {
            "id": "5076",
            "name": "Nova Campina",
            "state_id": "26"
        },
            {
            "id": "5077",
            "name": "Nova Canaã Paulista",
            "state_id": "26"
        },
            {
            "id": "5078",
            "name": "Nova Castilho",
            "state_id": "26"
        },
            {
            "id": "5079",
            "name": "Nova Europa",
            "state_id": "26"
        },
            {
            "id": "5080",
            "name": "Nova Granada",
            "state_id": "26"
        },
            {
            "id": "5081",
            "name": "Nova Guataporanga",
            "state_id": "26"
        },
            {
            "id": "5082",
            "name": "Nova Independência",
            "state_id": "26"
        },
            {
            "id": "5083",
            "name": "Nova Luzitânia",
            "state_id": "26"
        },
            {
            "id": "5084",
            "name": "Nova Odessa",
            "state_id": "26"
        },
            {
            "id": "5085",
            "name": "Novais",
            "state_id": "26"
        },
            {
            "id": "5086",
            "name": "Novo Horizonte",
            "state_id": "26"
        },
            {
            "id": "5087",
            "name": "Nuporanga",
            "state_id": "26"
        },
            {
            "id": "5088",
            "name": "Ocauçu",
            "state_id": "26"
        },
            {
            "id": "5089",
            "name": "Óleo",
            "state_id": "26"
        },
            {
            "id": "5090",
            "name": "Olímpia",
            "state_id": "26"
        },
            {
            "id": "5091",
            "name": "Onda Verde",
            "state_id": "26"
        },
            {
            "id": "5092",
            "name": "Oriente",
            "state_id": "26"
        },
            {
            "id": "5093",
            "name": "Orindiúva",
            "state_id": "26"
        },
            {
            "id": "5094",
            "name": "Orlândia",
            "state_id": "26"
        },
            {
            "id": "5095",
            "name": "Osasco",
            "state_id": "26"
        },
            {
            "id": "5096",
            "name": "Oscar Bressane",
            "state_id": "26"
        },
            {
            "id": "5097",
            "name": "Osvaldo Cruz",
            "state_id": "26"
        },
            {
            "id": "5098",
            "name": "Ourinhos",
            "state_id": "26"
        },
            {
            "id": "5099",
            "name": "Ouro Verde",
            "state_id": "26"
        },
            {
            "id": "5100",
            "name": "Ouroeste",
            "state_id": "26"
        },
            {
            "id": "5101",
            "name": "Pacaembu",
            "state_id": "26"
        },
            {
            "id": "5102",
            "name": "Palestina",
            "state_id": "26"
        },
            {
            "id": "5103",
            "name": "Palmares Paulista",
            "state_id": "26"
        },
            {
            "id": "5104",
            "name": "Palmeira d`Oeste",
            "state_id": "26"
        },
            {
            "id": "5105",
            "name": "Palmital",
            "state_id": "26"
        },
            {
            "id": "5106",
            "name": "Panorama",
            "state_id": "26"
        },
            {
            "id": "5107",
            "name": "Paraguaçu Paulista",
            "state_id": "26"
        },
            {
            "id": "5108",
            "name": "Paraibuna",
            "state_id": "26"
        },
            {
            "id": "5109",
            "name": "Paraíso",
            "state_id": "26"
        },
            {
            "id": "5110",
            "name": "Paranapanema",
            "state_id": "26"
        },
            {
            "id": "5111",
            "name": "Paranapuã",
            "state_id": "26"
        },
            {
            "id": "5112",
            "name": "Parapuã",
            "state_id": "26"
        },
            {
            "id": "5113",
            "name": "Pardinho",
            "state_id": "26"
        },
            {
            "id": "5114",
            "name": "Pariquera-Açu",
            "state_id": "26"
        },
            {
            "id": "5115",
            "name": "Parisi",
            "state_id": "26"
        },
            {
            "id": "5116",
            "name": "Patrocínio Paulista",
            "state_id": "26"
        },
            {
            "id": "5117",
            "name": "Paulicéia",
            "state_id": "26"
        },
            {
            "id": "5118",
            "name": "Paulínia",
            "state_id": "26"
        },
            {
            "id": "5119",
            "name": "Paulistânia",
            "state_id": "26"
        },
            {
            "id": "5120",
            "name": "Paulo de Faria",
            "state_id": "26"
        },
            {
            "id": "5121",
            "name": "Pederneiras",
            "state_id": "26"
        },
            {
            "id": "5122",
            "name": "Pedra Bela",
            "state_id": "26"
        },
            {
            "id": "5123",
            "name": "Pedranópolis",
            "state_id": "26"
        },
            {
            "id": "5124",
            "name": "Pedregulho",
            "state_id": "26"
        },
            {
            "id": "5125",
            "name": "Pedreira",
            "state_id": "26"
        },
            {
            "id": "5126",
            "name": "Pedrinhas Paulista",
            "state_id": "26"
        },
            {
            "id": "5127",
            "name": "Pedro de Toledo",
            "state_id": "26"
        },
            {
            "id": "5128",
            "name": "Penápolis",
            "state_id": "26"
        },
            {
            "id": "5129",
            "name": "Pereira Barreto",
            "state_id": "26"
        },
            {
            "id": "5130",
            "name": "Pereiras",
            "state_id": "26"
        },
            {
            "id": "5131",
            "name": "Peruíbe",
            "state_id": "26"
        },
            {
            "id": "5132",
            "name": "Piacatu",
            "state_id": "26"
        },
            {
            "id": "5133",
            "name": "Piedade",
            "state_id": "26"
        },
            {
            "id": "5134",
            "name": "Pilar do Sul",
            "state_id": "26"
        },
            {
            "id": "5135",
            "name": "Pindamonhangaba",
            "state_id": "26"
        },
            {
            "id": "5136",
            "name": "Pindorama",
            "state_id": "26"
        },
            {
            "id": "5137",
            "name": "Pinhalzinho",
            "state_id": "26"
        },
            {
            "id": "5138",
            "name": "Piquerobi",
            "state_id": "26"
        },
            {
            "id": "5139",
            "name": "Piquete",
            "state_id": "26"
        },
            {
            "id": "5140",
            "name": "Piracaia",
            "state_id": "26"
        },
            {
            "id": "5141",
            "name": "Piracicaba",
            "state_id": "26"
        },
            {
            "id": "5142",
            "name": "Piraju",
            "state_id": "26"
        },
            {
            "id": "5143",
            "name": "Pirajuí",
            "state_id": "26"
        },
            {
            "id": "5144",
            "name": "Pirangi",
            "state_id": "26"
        },
            {
            "id": "5145",
            "name": "Pirapora do Bom Jesus",
            "state_id": "26"
        },
            {
            "id": "5146",
            "name": "Pirapozinho",
            "state_id": "26"
        },
            {
            "id": "5147",
            "name": "Pirassununga",
            "state_id": "26"
        },
            {
            "id": "5148",
            "name": "Piratininga",
            "state_id": "26"
        },
            {
            "id": "5149",
            "name": "Pitangueiras",
            "state_id": "26"
        },
            {
            "id": "5150",
            "name": "Planalto",
            "state_id": "26"
        },
            {
            "id": "5151",
            "name": "Platina",
            "state_id": "26"
        },
            {
            "id": "5152",
            "name": "Poá",
            "state_id": "26"
        },
            {
            "id": "5153",
            "name": "Poloni",
            "state_id": "26"
        },
            {
            "id": "5154",
            "name": "Pompéia",
            "state_id": "26"
        },
            {
            "id": "5155",
            "name": "Pongaí",
            "state_id": "26"
        },
            {
            "id": "5156",
            "name": "Pontal",
            "state_id": "26"
        },
            {
            "id": "5157",
            "name": "Pontalinda",
            "state_id": "26"
        },
            {
            "id": "5158",
            "name": "Pontes Gestal",
            "state_id": "26"
        },
            {
            "id": "5159",
            "name": "Populina",
            "state_id": "26"
        },
            {
            "id": "5160",
            "name": "Porangaba",
            "state_id": "26"
        },
            {
            "id": "5161",
            "name": "Porto Feliz",
            "state_id": "26"
        },
            {
            "id": "5162",
            "name": "Porto Ferreira",
            "state_id": "26"
        },
            {
            "id": "5163",
            "name": "Potim",
            "state_id": "26"
        },
            {
            "id": "5164",
            "name": "Potirendaba",
            "state_id": "26"
        },
            {
            "id": "5165",
            "name": "Pracinha",
            "state_id": "26"
        },
            {
            "id": "5166",
            "name": "Pradópolis",
            "state_id": "26"
        },
            {
            "id": "5167",
            "name": "Praia Grande",
            "state_id": "26"
        },
            {
            "id": "5168",
            "name": "Pratânia",
            "state_id": "26"
        },
            {
            "id": "5169",
            "name": "Presidente Alves",
            "state_id": "26"
        },
            {
            "id": "5170",
            "name": "Presidente Bernardes",
            "state_id": "26"
        },
            {
            "id": "5171",
            "name": "Presidente Epitácio",
            "state_id": "26"
        },
            {
            "id": "5172",
            "name": "Presidente Prudente",
            "state_id": "26"
        },
            {
            "id": "5173",
            "name": "Presidente Venceslau",
            "state_id": "26"
        },
            {
            "id": "5174",
            "name": "Promissão",
            "state_id": "26"
        },
            {
            "id": "5175",
            "name": "Quadra",
            "state_id": "26"
        },
            {
            "id": "5176",
            "name": "Quatá",
            "state_id": "26"
        },
            {
            "id": "5177",
            "name": "Queiroz",
            "state_id": "26"
        },
            {
            "id": "5178",
            "name": "Queluz",
            "state_id": "26"
        },
            {
            "id": "5179",
            "name": "Quintana",
            "state_id": "26"
        },
            {
            "id": "5180",
            "name": "Rafard",
            "state_id": "26"
        },
            {
            "id": "5181",
            "name": "Rancharia",
            "state_id": "26"
        },
            {
            "id": "5182",
            "name": "Redenção da Serra",
            "state_id": "26"
        },
            {
            "id": "5183",
            "name": "Regente Feijó",
            "state_id": "26"
        },
            {
            "id": "5184",
            "name": "Reginópolis",
            "state_id": "26"
        },
            {
            "id": "5185",
            "name": "Registro",
            "state_id": "26"
        },
            {
            "id": "5186",
            "name": "Restinga",
            "state_id": "26"
        },
            {
            "id": "5187",
            "name": "Ribeira",
            "state_id": "26"
        },
            {
            "id": "5188",
            "name": "Ribeirão Bonito",
            "state_id": "26"
        },
            {
            "id": "5189",
            "name": "Ribeirão Branco",
            "state_id": "26"
        },
            {
            "id": "5190",
            "name": "Ribeirão Corrente",
            "state_id": "26"
        },
            {
            "id": "5191",
            "name": "Ribeirão do Sul",
            "state_id": "26"
        },
            {
            "id": "5192",
            "name": "Ribeirão dos Índios",
            "state_id": "26"
        },
            {
            "id": "5193",
            "name": "Ribeirão Grande",
            "state_id": "26"
        },
            {
            "id": "5194",
            "name": "Ribeirão Pires",
            "state_id": "26"
        },
            {
            "id": "5195",
            "name": "Ribeirão Preto",
            "state_id": "26"
        },
            {
            "id": "5196",
            "name": "Rifaina",
            "state_id": "26"
        },
            {
            "id": "5197",
            "name": "Rincão",
            "state_id": "26"
        },
            {
            "id": "5198",
            "name": "Rinópolis",
            "state_id": "26"
        },
            {
            "id": "5199",
            "name": "Rio Claro",
            "state_id": "26"
        },
            {
            "id": "5200",
            "name": "Rio das Pedras",
            "state_id": "26"
        },
            {
            "id": "5201",
            "name": "Rio Grande da Serra",
            "state_id": "26"
        },
            {
            "id": "5202",
            "name": "Riolândia",
            "state_id": "26"
        },
            {
            "id": "5203",
            "name": "Riversul",
            "state_id": "26"
        },
            {
            "id": "5204",
            "name": "Rosana",
            "state_id": "26"
        },
            {
            "id": "5205",
            "name": "Roseira",
            "state_id": "26"
        },
            {
            "id": "5206",
            "name": "Rubiácea",
            "state_id": "26"
        },
            {
            "id": "5207",
            "name": "Rubinéia",
            "state_id": "26"
        },
            {
            "id": "5208",
            "name": "Sabino",
            "state_id": "26"
        },
            {
            "id": "5209",
            "name": "Sagres",
            "state_id": "26"
        },
            {
            "id": "5210",
            "name": "Sales",
            "state_id": "26"
        },
            {
            "id": "5211",
            "name": "Sales Oliveira",
            "state_id": "26"
        },
            {
            "id": "5212",
            "name": "Salesópolis",
            "state_id": "26"
        },
            {
            "id": "5213",
            "name": "Salmourão",
            "state_id": "26"
        },
            {
            "id": "5214",
            "name": "Saltinho",
            "state_id": "26"
        },
            {
            "id": "5215",
            "name": "Salto",
            "state_id": "26"
        },
            {
            "id": "5216",
            "name": "Salto de Pirapora",
            "state_id": "26"
        },
            {
            "id": "5217",
            "name": "Salto Grande",
            "state_id": "26"
        },
            {
            "id": "5218",
            "name": "Sandovalina",
            "state_id": "26"
        },
            {
            "id": "5219",
            "name": "Santa Adélia",
            "state_id": "26"
        },
            {
            "id": "5220",
            "name": "Santa Albertina",
            "state_id": "26"
        },
            {
            "id": "5221",
            "name": "Santa Bárbara d`Oeste",
            "state_id": "26"
        },
            {
            "id": "5222",
            "name": "Santa Branca",
            "state_id": "26"
        },
            {
            "id": "5223",
            "name": "Santa Clara d`Oeste",
            "state_id": "26"
        },
            {
            "id": "5224",
            "name": "Santa Cruz da Conceição",
            "state_id": "26"
        },
            {
            "id": "5225",
            "name": "Santa Cruz da Esperança",
            "state_id": "26"
        },
            {
            "id": "5226",
            "name": "Santa Cruz das Palmeiras",
            "state_id": "26"
        },
            {
            "id": "5227",
            "name": "Santa Cruz do Rio Pardo",
            "state_id": "26"
        },
            {
            "id": "5228",
            "name": "Santa Ernestina",
            "state_id": "26"
        },
            {
            "id": "5229",
            "name": "Santa Fé do Sul",
            "state_id": "26"
        },
            {
            "id": "5230",
            "name": "Santa Gertrudes",
            "state_id": "26"
        },
            {
            "id": "5231",
            "name": "Santa Isabel",
            "state_id": "26"
        },
            {
            "id": "5232",
            "name": "Santa Lúcia",
            "state_id": "26"
        },
            {
            "id": "5233",
            "name": "Santa Maria da Serra",
            "state_id": "26"
        },
            {
            "id": "5234",
            "name": "Santa Mercedes",
            "state_id": "26"
        },
            {
            "id": "5235",
            "name": "Santa Rita d`Oeste",
            "state_id": "26"
        },
            {
            "id": "5236",
            "name": "Santa Rita do Passa Quatro",
            "state_id": "26"
        },
            {
            "id": "5237",
            "name": "Santa Rosa de Viterbo",
            "state_id": "26"
        },
            {
            "id": "5238",
            "name": "Santa Salete",
            "state_id": "26"
        },
            {
            "id": "5239",
            "name": "Santana da Ponte Pensa",
            "state_id": "26"
        },
            {
            "id": "5240",
            "name": "Santana de Parnaíba",
            "state_id": "26"
        },
            {
            "id": "5241",
            "name": "Santo Anastácio",
            "state_id": "26"
        },
            {
            "id": "5242",
            "name": "Santo André",
            "state_id": "26"
        },
            {
            "id": "5243",
            "name": "Santo Antônio da Alegria",
            "state_id": "26"
        },
            {
            "id": "5244",
            "name": "Santo Antônio de Posse",
            "state_id": "26"
        },
            {
            "id": "5245",
            "name": "Santo Antônio do Aracanguá",
            "state_id": "26"
        },
            {
            "id": "5246",
            "name": "Santo Antônio do Jardim",
            "state_id": "26"
        },
            {
            "id": "5247",
            "name": "Santo Antônio do Pinhal",
            "state_id": "26"
        },
            {
            "id": "5248",
            "name": "Santo Expedito",
            "state_id": "26"
        },
            {
            "id": "5249",
            "name": "Santópolis do Aguapeí",
            "state_id": "26"
        },
            {
            "id": "5250",
            "name": "Santos",
            "state_id": "26"
        },
            {
            "id": "5251",
            "name": "São Bento do Sapucaí",
            "state_id": "26"
        },
            {
            "id": "5252",
            "name": "São Bernardo do Campo",
            "state_id": "26"
        },
            {
            "id": "5253",
            "name": "São Caetano do Sul",
            "state_id": "26"
        },
            {
            "id": "5254",
            "name": "São Carlos",
            "state_id": "26"
        },
            {
            "id": "5255",
            "name": "São Francisco",
            "state_id": "26"
        },
            {
            "id": "5256",
            "name": "São João da Boa Vista",
            "state_id": "26"
        },
            {
            "id": "5257",
            "name": "São João das Duas Pontes",
            "state_id": "26"
        },
            {
            "id": "5258",
            "name": "São João de Iracema",
            "state_id": "26"
        },
            {
            "id": "5259",
            "name": "São João do Pau d`Alho",
            "state_id": "26"
        },
            {
            "id": "5260",
            "name": "São Joaquim da Barra",
            "state_id": "26"
        },
            {
            "id": "5261",
            "name": "São José da Bela Vista",
            "state_id": "26"
        },
            {
            "id": "5262",
            "name": "São José do Barreiro",
            "state_id": "26"
        },
            {
            "id": "5263",
            "name": "São José do Rio Pardo",
            "state_id": "26"
        },
            {
            "id": "5264",
            "name": "São José do Rio Preto",
            "state_id": "26"
        },
            {
            "id": "5265",
            "name": "São José dos Campos",
            "state_id": "26"
        },
            {
            "id": "5266",
            "name": "São Lourenço da Serra",
            "state_id": "26"
        },
            {
            "id": "5267",
            "name": "São Luís do Paraitinga",
            "state_id": "26"
        },
            {
            "id": "5268",
            "name": "São Manuel",
            "state_id": "26"
        },
            {
            "id": "5269",
            "name": "São Miguel Arcanjo",
            "state_id": "26"
        },
            {
            "id": "5270",
            "name": "São Paulo",
            "state_id": "26"
        },
            {
            "id": "5271",
            "name": "São Pedro",
            "state_id": "26"
        },
            {
            "id": "5272",
            "name": "São Pedro do Turvo",
            "state_id": "26"
        },
            {
            "id": "5273",
            "name": "São Roque",
            "state_id": "26"
        },
            {
            "id": "5274",
            "name": "São Sebastião",
            "state_id": "26"
        },
            {
            "id": "5275",
            "name": "São Sebastião da Grama",
            "state_id": "26"
        },
            {
            "id": "5276",
            "name": "São Simão",
            "state_id": "26"
        },
            {
            "id": "5277",
            "name": "São Vicente",
            "state_id": "26"
        },
            {
            "id": "5278",
            "name": "Sarapuí",
            "state_id": "26"
        },
            {
            "id": "5279",
            "name": "Sarutaiá",
            "state_id": "26"
        },
            {
            "id": "5280",
            "name": "Sebastianópolis do Sul",
            "state_id": "26"
        },
            {
            "id": "5281",
            "name": "Serra Azul",
            "state_id": "26"
        },
            {
            "id": "5282",
            "name": "Serra Negra",
            "state_id": "26"
        },
            {
            "id": "5283",
            "name": "Serrana",
            "state_id": "26"
        },
            {
            "id": "5284",
            "name": "Sertãozinho",
            "state_id": "26"
        },
            {
            "id": "5285",
            "name": "Sete Barras",
            "state_id": "26"
        },
            {
            "id": "5286",
            "name": "Severínia",
            "state_id": "26"
        },
            {
            "id": "5287",
            "name": "Silveiras",
            "state_id": "26"
        },
            {
            "id": "5288",
            "name": "Socorro",
            "state_id": "26"
        },
            {
            "id": "5289",
            "name": "Sorocaba",
            "state_id": "26"
        },
            {
            "id": "5290",
            "name": "Sud Mennucci",
            "state_id": "26"
        },
            {
            "id": "5291",
            "name": "Sumaré",
            "state_id": "26"
        },
            {
            "id": "5292",
            "name": "Suzanápolis",
            "state_id": "26"
        },
            {
            "id": "5293",
            "name": "Suzano",
            "state_id": "26"
        },
            {
            "id": "5294",
            "name": "Tabapuã",
            "state_id": "26"
        },
            {
            "id": "5295",
            "name": "Tabatinga",
            "state_id": "26"
        },
            {
            "id": "5296",
            "name": "Taboão da Serra",
            "state_id": "26"
        },
            {
            "id": "5297",
            "name": "Taciba",
            "state_id": "26"
        },
            {
            "id": "5298",
            "name": "Taguaí",
            "state_id": "26"
        },
            {
            "id": "5299",
            "name": "Taiaçu",
            "state_id": "26"
        },
            {
            "id": "5300",
            "name": "Taiúva",
            "state_id": "26"
        },
            {
            "id": "5301",
            "name": "Tambaú",
            "state_id": "26"
        },
            {
            "id": "5302",
            "name": "Tanabi",
            "state_id": "26"
        },
            {
            "id": "5303",
            "name": "Tapiraí",
            "state_id": "26"
        },
            {
            "id": "5304",
            "name": "Tapiratiba",
            "state_id": "26"
        },
            {
            "id": "5305",
            "name": "Taquaral",
            "state_id": "26"
        },
            {
            "id": "5306",
            "name": "Taquaritinga",
            "state_id": "26"
        },
            {
            "id": "5307",
            "name": "Taquarituba",
            "state_id": "26"
        },
            {
            "id": "5308",
            "name": "Taquarivaí",
            "state_id": "26"
        },
            {
            "id": "5309",
            "name": "Tarabai",
            "state_id": "26"
        },
            {
            "id": "5310",
            "name": "Tarumã",
            "state_id": "26"
        },
            {
            "id": "5311",
            "name": "Tatuí",
            "state_id": "26"
        },
            {
            "id": "5312",
            "name": "Taubaté",
            "state_id": "26"
        },
            {
            "id": "5313",
            "name": "Tejupá",
            "state_id": "26"
        },
            {
            "id": "5314",
            "name": "Teodoro Sampaio",
            "state_id": "26"
        },
            {
            "id": "5315",
            "name": "Terra Roxa",
            "state_id": "26"
        },
            {
            "id": "5316",
            "name": "Tietê",
            "state_id": "26"
        },
            {
            "id": "5317",
            "name": "Timburi",
            "state_id": "26"
        },
            {
            "id": "5318",
            "name": "Torre de Pedra",
            "state_id": "26"
        },
            {
            "id": "5319",
            "name": "Torrinha",
            "state_id": "26"
        },
            {
            "id": "5320",
            "name": "Trabiju",
            "state_id": "26"
        },
            {
            "id": "5321",
            "name": "Tremembé",
            "state_id": "26"
        },
            {
            "id": "5322",
            "name": "Três Fronteiras",
            "state_id": "26"
        },
            {
            "id": "5323",
            "name": "Tuiuti",
            "state_id": "26"
        },
            {
            "id": "5324",
            "name": "Tupã",
            "state_id": "26"
        },
            {
            "id": "5325",
            "name": "Tupi Paulista",
            "state_id": "26"
        },
            {
            "id": "5326",
            "name": "Turiúba",
            "state_id": "26"
        },
            {
            "id": "5327",
            "name": "Turmalina",
            "state_id": "26"
        },
            {
            "id": "5328",
            "name": "Ubarana",
            "state_id": "26"
        },
            {
            "id": "5329",
            "name": "Ubatuba",
            "state_id": "26"
        },
            {
            "id": "5330",
            "name": "Ubirajara",
            "state_id": "26"
        },
            {
            "id": "5331",
            "name": "Uchoa",
            "state_id": "26"
        },
            {
            "id": "5332",
            "name": "União Paulista",
            "state_id": "26"
        },
            {
            "id": "5333",
            "name": "Urânia",
            "state_id": "26"
        },
            {
            "id": "5334",
            "name": "Uru",
            "state_id": "26"
        },
            {
            "id": "5335",
            "name": "Urupês",
            "state_id": "26"
        },
            {
            "id": "5336",
            "name": "Valentim Gentil",
            "state_id": "26"
        },
            {
            "id": "5337",
            "name": "Valinhos",
            "state_id": "26"
        },
            {
            "id": "5338",
            "name": "Valparaíso",
            "state_id": "26"
        },
            {
            "id": "5339",
            "name": "Vargem",
            "state_id": "26"
        },
            {
            "id": "5340",
            "name": "Vargem Grande do Sul",
            "state_id": "26"
        },
            {
            "id": "5341",
            "name": "Vargem Grande Paulista",
            "state_id": "26"
        },
            {
            "id": "5342",
            "name": "Várzea Paulista",
            "state_id": "26"
        },
            {
            "id": "5343",
            "name": "Vera Cruz",
            "state_id": "26"
        },
            {
            "id": "5344",
            "name": "Vinhedo",
            "state_id": "26"
        },
            {
            "id": "5345",
            "name": "Viradouro",
            "state_id": "26"
        },
            {
            "id": "5346",
            "name": "Vista Alegre do Alto",
            "state_id": "26"
        },
            {
            "id": "5347",
            "name": "Vitória Brasil",
            "state_id": "26"
        },
            {
            "id": "5348",
            "name": "Votorantim",
            "state_id": "26"
        },
            {
            "id": "5349",
            "name": "Votuporanga",
            "state_id": "26"
        },
            {
            "id": "5350",
            "name": "Zacarias",
            "state_id": "26"
        },
            {
            "id": "5351",
            "name": "Amparo de São Francisco",
            "state_id": "25"
        },
            {
            "id": "5352",
            "name": "Aquidabã",
            "state_id": "25"
        },
            {
            "id": "5353",
            "name": "Aracaju",
            "state_id": "25"
        },
            {
            "id": "5354",
            "name": "Arauá",
            "state_id": "25"
        },
            {
            "id": "5355",
            "name": "Areia Branca",
            "state_id": "25"
        },
            {
            "id": "5356",
            "name": "Barra dos Coqueiros",
            "state_id": "25"
        },
            {
            "id": "5357",
            "name": "Boquim",
            "state_id": "25"
        },
            {
            "id": "5358",
            "name": "Brejo Grande",
            "state_id": "25"
        },
            {
            "id": "5359",
            "name": "Campo do Brito",
            "state_id": "25"
        },
            {
            "id": "5360",
            "name": "Canhoba",
            "state_id": "25"
        },
            {
            "id": "5361",
            "name": "Canindé de São Francisco",
            "state_id": "25"
        },
            {
            "id": "5362",
            "name": "Capela",
            "state_id": "25"
        },
            {
            "id": "5363",
            "name": "Carira",
            "state_id": "25"
        },
            {
            "id": "5364",
            "name": "Carmópolis",
            "state_id": "25"
        },
            {
            "id": "5365",
            "name": "Cedro de São João",
            "state_id": "25"
        },
            {
            "id": "5366",
            "name": "Cristinápolis",
            "state_id": "25"
        },
            {
            "id": "5367",
            "name": "Cumbe",
            "state_id": "25"
        },
            {
            "id": "5368",
            "name": "Divina Pastora",
            "state_id": "25"
        },
            {
            "id": "5369",
            "name": "Estância",
            "state_id": "25"
        },
            {
            "id": "5370",
            "name": "Feira Nova",
            "state_id": "25"
        },
            {
            "id": "5371",
            "name": "Frei Paulo",
            "state_id": "25"
        },
            {
            "id": "5372",
            "name": "Gararu",
            "state_id": "25"
        },
            {
            "id": "5373",
            "name": "General Maynard",
            "state_id": "25"
        },
            {
            "id": "5374",
            "name": "Gracho Cardoso",
            "state_id": "25"
        },
            {
            "id": "5375",
            "name": "Ilha das Flores",
            "state_id": "25"
        },
            {
            "id": "5376",
            "name": "Indiaroba",
            "state_id": "25"
        },
            {
            "id": "5377",
            "name": "Itabaiana",
            "state_id": "25"
        },
            {
            "id": "5378",
            "name": "Itabaianinha",
            "state_id": "25"
        },
            {
            "id": "5379",
            "name": "Itabi",
            "state_id": "25"
        },
            {
            "id": "5380",
            "name": "Itaporanga d`Ajuda",
            "state_id": "25"
        },
            {
            "id": "5381",
            "name": "Japaratuba",
            "state_id": "25"
        },
            {
            "id": "5382",
            "name": "Japoatã",
            "state_id": "25"
        },
            {
            "id": "5383",
            "name": "Lagarto",
            "state_id": "25"
        },
            {
            "id": "5384",
            "name": "Laranjeiras",
            "state_id": "25"
        },
            {
            "id": "5385",
            "name": "Macambira",
            "state_id": "25"
        },
            {
            "id": "5386",
            "name": "Malhada dos Bois",
            "state_id": "25"
        },
            {
            "id": "5387",
            "name": "Malhador",
            "state_id": "25"
        },
            {
            "id": "5388",
            "name": "Maruim",
            "state_id": "25"
        },
            {
            "id": "5389",
            "name": "Moita Bonita",
            "state_id": "25"
        },
            {
            "id": "5390",
            "name": "Monte Alegre de Sergipe",
            "state_id": "25"
        },
            {
            "id": "5391",
            "name": "Muribeca",
            "state_id": "25"
        },
            {
            "id": "5392",
            "name": "Neópolis",
            "state_id": "25"
        },
            {
            "id": "5393",
            "name": "Nossa Senhora Aparecida",
            "state_id": "25"
        },
            {
            "id": "5394",
            "name": "Nossa Senhora da Glória",
            "state_id": "25"
        },
            {
            "id": "5395",
            "name": "Nossa Senhora das Dores",
            "state_id": "25"
        },
            {
            "id": "5396",
            "name": "Nossa Senhora de Lourdes",
            "state_id": "25"
        },
            {
            "id": "5397",
            "name": "Nossa Senhora do Socorro",
            "state_id": "25"
        },
            {
            "id": "5398",
            "name": "Pacatuba",
            "state_id": "25"
        },
            {
            "id": "5399",
            "name": "Pedra Mole",
            "state_id": "25"
        },
            {
            "id": "5400",
            "name": "Pedrinhas",
            "state_id": "25"
        },
            {
            "id": "5401",
            "name": "Pinhão",
            "state_id": "25"
        },
            {
            "id": "5402",
            "name": "Pirambu",
            "state_id": "25"
        },
            {
            "id": "5403",
            "name": "Poço Redondo",
            "state_id": "25"
        },
            {
            "id": "5404",
            "name": "Poço Verde",
            "state_id": "25"
        },
            {
            "id": "5405",
            "name": "Porto da Folha",
            "state_id": "25"
        },
            {
            "id": "5406",
            "name": "Propriá",
            "state_id": "25"
        },
            {
            "id": "5407",
            "name": "Riachão do Dantas",
            "state_id": "25"
        },
            {
            "id": "5408",
            "name": "Riachuelo",
            "state_id": "25"
        },
            {
            "id": "5409",
            "name": "Ribeirópolis",
            "state_id": "25"
        },
            {
            "id": "5410",
            "name": "Rosário do Catete",
            "state_id": "25"
        },
            {
            "id": "5411",
            "name": "Salgado",
            "state_id": "25"
        },
            {
            "id": "5412",
            "name": "Santa Luzia do Itanhy",
            "state_id": "25"
        },
            {
            "id": "5413",
            "name": "Santa Rosa de Lima",
            "state_id": "25"
        },
            {
            "id": "5414",
            "name": "Santana do São Francisco",
            "state_id": "25"
        },
            {
            "id": "5415",
            "name": "Santo Amaro das Brotas",
            "state_id": "25"
        },
            {
            "id": "5416",
            "name": "São Cristóvão",
            "state_id": "25"
        },
            {
            "id": "5417",
            "name": "São Domingos",
            "state_id": "25"
        },
            {
            "id": "5418",
            "name": "São Francisco",
            "state_id": "25"
        },
            {
            "id": "5419",
            "name": "São Miguel do Aleixo",
            "state_id": "25"
        },
            {
            "id": "5420",
            "name": "Simão Dias",
            "state_id": "25"
        },
            {
            "id": "5421",
            "name": "Siriri",
            "state_id": "25"
        },
            {
            "id": "5422",
            "name": "Telha",
            "state_id": "25"
        },
            {
            "id": "5423",
            "name": "Tobias Barreto",
            "state_id": "25"
        },
            {
            "id": "5424",
            "name": "Tomar do Geru",
            "state_id": "25"
        },
            {
            "id": "5425",
            "name": "Umbaúba",
            "state_id": "25"
        },
            {
            "id": "5426",
            "name": "Abreulândia",
            "state_id": "27"
        },
            {
            "id": "5427",
            "name": "Aguiarnópolis",
            "state_id": "27"
        },
            {
            "id": "5428",
            "name": "Aliança do Tocantins",
            "state_id": "27"
        },
            {
            "id": "5429",
            "name": "Almas",
            "state_id": "27"
        },
            {
            "id": "5430",
            "name": "Alvorada",
            "state_id": "27"
        },
            {
            "id": "5431",
            "name": "Ananás",
            "state_id": "27"
        },
            {
            "id": "5432",
            "name": "Angico",
            "state_id": "27"
        },
            {
            "id": "5433",
            "name": "Aparecida do Rio Negro",
            "state_id": "27"
        },
            {
            "id": "5434",
            "name": "Aragominas",
            "state_id": "27"
        },
            {
            "id": "5435",
            "name": "Araguacema",
            "state_id": "27"
        },
            {
            "id": "5436",
            "name": "Araguaçu",
            "state_id": "27"
        },
            {
            "id": "5437",
            "name": "Araguaína",
            "state_id": "27"
        },
            {
            "id": "5438",
            "name": "Araguanã",
            "state_id": "27"
        },
            {
            "id": "5439",
            "name": "Araguatins",
            "state_id": "27"
        },
            {
            "id": "5440",
            "name": "Arapoema",
            "state_id": "27"
        },
            {
            "id": "5441",
            "name": "Arraias",
            "state_id": "27"
        },
            {
            "id": "5442",
            "name": "Augustinópolis",
            "state_id": "27"
        },
            {
            "id": "5443",
            "name": "Aurora do Tocantins",
            "state_id": "27"
        },
            {
            "id": "5444",
            "name": "Axixá do Tocantins",
            "state_id": "27"
        },
            {
            "id": "5445",
            "name": "Babaçulândia",
            "state_id": "27"
        },
            {
            "id": "5446",
            "name": "Bandeirantes do Tocantins",
            "state_id": "27"
        },
            {
            "id": "5447",
            "name": "Barra do Ouro",
            "state_id": "27"
        },
            {
            "id": "5448",
            "name": "Barrolândia",
            "state_id": "27"
        },
            {
            "id": "5449",
            "name": "Bernardo Sayão",
            "state_id": "27"
        },
            {
            "id": "5450",
            "name": "Bom Jesus do Tocantins",
            "state_id": "27"
        },
            {
            "id": "5451",
            "name": "Brasilândia do Tocantins",
            "state_id": "27"
        },
            {
            "id": "5452",
            "name": "Brejinho de Nazaré",
            "state_id": "27"
        },
            {
            "id": "5453",
            "name": "Buriti do Tocantins",
            "state_id": "27"
        },
            {
            "id": "5454",
            "name": "Cachoeirinha",
            "state_id": "27"
        },
            {
            "id": "5455",
            "name": "Campos Lindos",
            "state_id": "27"
        },
            {
            "id": "5456",
            "name": "Cariri do Tocantins",
            "state_id": "27"
        },
            {
            "id": "5457",
            "name": "Carmolândia",
            "state_id": "27"
        },
            {
            "id": "5458",
            "name": "Carrasco Bonito",
            "state_id": "27"
        },
            {
            "id": "5459",
            "name": "Caseara",
            "state_id": "27"
        },
            {
            "id": "5460",
            "name": "Centenário",
            "state_id": "27"
        },
            {
            "id": "5461",
            "name": "Chapada da Natividade",
            "state_id": "27"
        },
            {
            "id": "5462",
            "name": "Chapada de Areia",
            "state_id": "27"
        },
            {
            "id": "5463",
            "name": "Colinas do Tocantins",
            "state_id": "27"
        },
            {
            "id": "5464",
            "name": "Colméia",
            "state_id": "27"
        },
            {
            "id": "5465",
            "name": "Combinado",
            "state_id": "27"
        },
            {
            "id": "5466",
            "name": "Conceição do Tocantins",
            "state_id": "27"
        },
            {
            "id": "5467",
            "name": "Couto de Magalhães",
            "state_id": "27"
        },
            {
            "id": "5468",
            "name": "Cristalândia",
            "state_id": "27"
        },
            {
            "id": "5469",
            "name": "Crixás do Tocantins",
            "state_id": "27"
        },
            {
            "id": "5470",
            "name": "Darcinópolis",
            "state_id": "27"
        },
            {
            "id": "5471",
            "name": "Dianópolis",
            "state_id": "27"
        },
            {
            "id": "5472",
            "name": "Divinópolis do Tocantins",
            "state_id": "27"
        },
            {
            "id": "5473",
            "name": "Dois Irmãos do Tocantins",
            "state_id": "27"
        },
            {
            "id": "5474",
            "name": "Dueré",
            "state_id": "27"
        },
            {
            "id": "5475",
            "name": "Esperantina",
            "state_id": "27"
        },
            {
            "id": "5476",
            "name": "Fátima",
            "state_id": "27"
        },
            {
            "id": "5477",
            "name": "Figueirópolis",
            "state_id": "27"
        },
            {
            "id": "5478",
            "name": "Filadélfia",
            "state_id": "27"
        },
            {
            "id": "5479",
            "name": "Formoso do Araguaia",
            "state_id": "27"
        },
            {
            "id": "5480",
            "name": "Fortaleza do Tabocão",
            "state_id": "27"
        },
            {
            "id": "5481",
            "name": "Goianorte",
            "state_id": "27"
        },
            {
            "id": "5482",
            "name": "Goiatins",
            "state_id": "27"
        },
            {
            "id": "5483",
            "name": "Guaraí",
            "state_id": "27"
        },
            {
            "id": "5484",
            "name": "Gurupi",
            "state_id": "27"
        },
            {
            "id": "5485",
            "name": "Ipueiras",
            "state_id": "27"
        },
            {
            "id": "5486",
            "name": "Itacajá",
            "state_id": "27"
        },
            {
            "id": "5487",
            "name": "Itaguatins",
            "state_id": "27"
        },
            {
            "id": "5488",
            "name": "Itapiratins",
            "state_id": "27"
        },
            {
            "id": "5489",
            "name": "Itaporã do Tocantins",
            "state_id": "27"
        },
            {
            "id": "5490",
            "name": "Jaú do Tocantins",
            "state_id": "27"
        },
            {
            "id": "5491",
            "name": "Juarina",
            "state_id": "27"
        },
            {
            "id": "5492",
            "name": "Lagoa da Confusão",
            "state_id": "27"
        },
            {
            "id": "5493",
            "name": "Lagoa do Tocantins",
            "state_id": "27"
        },
            {
            "id": "5494",
            "name": "Lajeado",
            "state_id": "27"
        },
            {
            "id": "5495",
            "name": "Lavandeira",
            "state_id": "27"
        },
            {
            "id": "5496",
            "name": "Lizarda",
            "state_id": "27"
        },
            {
            "id": "5497",
            "name": "Luzinópolis",
            "state_id": "27"
        },
            {
            "id": "5498",
            "name": "Marianópolis do Tocantins",
            "state_id": "27"
        },
            {
            "id": "5499",
            "name": "Mateiros",
            "state_id": "27"
        },
            {
            "id": "5500",
            "name": "Maurilândia do Tocantins",
            "state_id": "27"
        },
            {
            "id": "5501",
            "name": "Miracema do Tocantins",
            "state_id": "27"
        },
            {
            "id": "5502",
            "name": "Miranorte",
            "state_id": "27"
        },
            {
            "id": "5503",
            "name": "Monte do Carmo",
            "state_id": "27"
        },
            {
            "id": "5504",
            "name": "Monte Santo do Tocantins",
            "state_id": "27"
        },
            {
            "id": "5505",
            "name": "Muricilândia",
            "state_id": "27"
        },
            {
            "id": "5506",
            "name": "Natividade",
            "state_id": "27"
        },
            {
            "id": "5507",
            "name": "Nazaré",
            "state_id": "27"
        },
            {
            "id": "5508",
            "name": "Nova Olinda",
            "state_id": "27"
        },
            {
            "id": "5509",
            "name": "Nova Rosalândia",
            "state_id": "27"
        },
            {
            "id": "5510",
            "name": "Novo Acordo",
            "state_id": "27"
        },
            {
            "id": "5511",
            "name": "Novo Alegre",
            "state_id": "27"
        },
            {
            "id": "5512",
            "name": "Novo Jardim",
            "state_id": "27"
        },
            {
            "id": "5513",
            "name": "Oliveira de Fátima",
            "state_id": "27"
        },
            {
            "id": "5514",
            "name": "Palmas",
            "state_id": "27"
        },
            {
            "id": "5515",
            "name": "Palmeirante",
            "state_id": "27"
        },
            {
            "id": "5516",
            "name": "Palmeiras do Tocantins",
            "state_id": "27"
        },
            {
            "id": "5517",
            "name": "Palmeirópolis",
            "state_id": "27"
        },
            {
            "id": "5518",
            "name": "Paraíso do Tocantins",
            "state_id": "27"
        },
            {
            "id": "5519",
            "name": "Paranã",
            "state_id": "27"
        },
            {
            "id": "5520",
            "name": "Pau d`Arco",
            "state_id": "27"
        },
            {
            "id": "5521",
            "name": "Pedro Afonso",
            "state_id": "27"
        },
            {
            "id": "5522",
            "name": "Peixe",
            "state_id": "27"
        },
            {
            "id": "5523",
            "name": "Pequizeiro",
            "state_id": "27"
        },
            {
            "id": "5524",
            "name": "Pindorama do Tocantins",
            "state_id": "27"
        },
            {
            "id": "5525",
            "name": "Piraquê",
            "state_id": "27"
        },
            {
            "id": "5526",
            "name": "Pium",
            "state_id": "27"
        },
            {
            "id": "5527",
            "name": "Ponte Alta do Bom Jesus",
            "state_id": "27"
        },
            {
            "id": "5528",
            "name": "Ponte Alta do Tocantins",
            "state_id": "27"
        },
            {
            "id": "5529",
            "name": "Porto Alegre do Tocantins",
            "state_id": "27"
        },
            {
            "id": "5530",
            "name": "Porto Nacional",
            "state_id": "27"
        },
            {
            "id": "5531",
            "name": "Praia Norte",
            "state_id": "27"
        },
            {
            "id": "5532",
            "name": "Presidente Kennedy",
            "state_id": "27"
        },
            {
            "id": "5533",
            "name": "Pugmil",
            "state_id": "27"
        },
            {
            "id": "5534",
            "name": "Recursolândia",
            "state_id": "27"
        },
            {
            "id": "5535",
            "name": "Riachinho",
            "state_id": "27"
        },
            {
            "id": "5536",
            "name": "Rio da Conceição",
            "state_id": "27"
        },
            {
            "id": "5537",
            "name": "Rio dos Bois",
            "state_id": "27"
        },
            {
            "id": "5538",
            "name": "Rio Sono",
            "state_id": "27"
        },
            {
            "id": "5539",
            "name": "Sampaio",
            "state_id": "27"
        },
            {
            "id": "5540",
            "name": "Sandolândia",
            "state_id": "27"
        },
            {
            "id": "5541",
            "name": "Santa Fé do Araguaia",
            "state_id": "27"
        },
            {
            "id": "5542",
            "name": "Santa Maria do Tocantins",
            "state_id": "27"
        },
            {
            "id": "5543",
            "name": "Santa Rita do Tocantins",
            "state_id": "27"
        },
            {
            "id": "5544",
            "name": "Santa Rosa do Tocantins",
            "state_id": "27"
        },
            {
            "id": "5545",
            "name": "Santa Tereza do Tocantins",
            "state_id": "27"
        },
            {
            "id": "5546",
            "name": "Santa Terezinha do Tocantins",
            "state_id": "27"
        },
            {
            "id": "5547",
            "name": "São Bento do Tocantins",
            "state_id": "27"
        },
            {
            "id": "5548",
            "name": "São Félix do Tocantins",
            "state_id": "27"
        },
            {
            "id": "5549",
            "name": "São Miguel do Tocantins",
            "state_id": "27"
        },
            {
            "id": "5550",
            "name": "São Salvador do Tocantins",
            "state_id": "27"
        },
            {
            "id": "5551",
            "name": "São Sebastião do Tocantins",
            "state_id": "27"
        },
            {
            "id": "5552",
            "name": "São Valério da Natividade",
            "state_id": "27"
        },
            {
            "id": "5553",
            "name": "Silvanópolis",
            "state_id": "27"
        },
            {
            "id": "5554",
            "name": "Sítio Novo do Tocantins",
            "state_id": "27"
        },
            {
            "id": "5555",
            "name": "Sucupira",
            "state_id": "27"
        },
            {
            "id": "5556",
            "name": "Taguatinga",
            "state_id": "27"
        },
            {
            "id": "5557",
            "name": "Taipas do Tocantins",
            "state_id": "27"
        },
            {
            "id": "5558",
            "name": "Talismã",
            "state_id": "27"
        },
            {
            "id": "5559",
            "name": "Tocantínia",
            "state_id": "27"
        },
            {
            "id": "5560",
            "name": "Tocantinópolis",
            "state_id": "27"
        },
            {
            "id": "5561",
            "name": "Tupirama",
            "state_id": "27"
        },
            {
            "id": "5562",
            "name": "Tupiratins",
            "state_id": "27"
        },
            {
            "id": "5563",
            "name": "Wanderlândia",
            "state_id": "27"
        },
            {
            "id": "5564",
            "name": "Xambioá",
            "state_id": "27"
        }]';

        $citiesArr = json_decode($cities, true);

        DB::table('cities')->insert($citiesArr);
    }
}