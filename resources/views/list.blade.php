@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <small>
                <table id="example" class="hover" style="width:100%">
                    <thead>
                        <tr>
                            <th class="border" data-sort="int">Número</th>
                            <th class="border" data-sort="int">Série</th>
                            <th class="border" data-sort="string">Data</th>
                            <th class="border" data-sort="string">Destinatário/Emitente</th>
                            <th class="border" data-sort="valor" width="10%">Valor NF</th>
                            <th class="border" data-sort="valor" width="10%">Valor Fat</th>
                            <th class="border">Peso</th>
                            <th class="border" data-sort="string">Natureza da Operação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAA9PPS0vVLyjKTylNTszXT80ry0xMSSzWTwQKlYFZRgaGFgYm+samIMrc0BxImpoZGBgYmhmYmgIpINPA2MLQwNgQztAFmqlXkZsDABAulNxcAAAA');">38103</a> <i class="fa fa-print" style="font-size:20px"></i></td>
                            <td class="center">1</td>
                            <td class="center">02/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38103', 'H4sIAAAAAAAAA9PPS0vVLyjKTylNTszXT80ry0xMSSzWTwQKlYFZRgaGFgYm+samIMrc0BxImpoZGBgYmhmYmgIpINPA2MLQwNgQztAFmqlXkZsDABAulNxcAAAA', 'H4sIAAAAAAAAAzMyNDdWsLAwMlMoS8xJySxS0Fcoy8zLTM4sLQYAzio0pBsAAAA=');">SEARA ALIMENTOS LTDA</a> <i class="fa fa-mail-reply"></i></td>
                            <td class="right" width="10%">R$ 200,00</td>
                            <td class="right" width="10%"> </td>
                            <td class="right"></td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAA9PPS0vVLyjKTylNTszXT80ry0xMSSzWTwQKlYFZRgaGFgYm+samIMrc0BxImpoZGBgYmhmYmgIpINPA2MLQwNgQztAFmqlXkZsDABAulNxcAAAA');">REMESSA VASILHAME/PALLETS</a> <i class="fa fa-file-code-o"></i></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAzWMQQqAMAwEX6TZaNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARjkZ5ETjYigfAHiIGU4yR4fiX0Nlnf2/rA6jHbAdcAAAA');">38104</a></td>
                            <td class="center">1</td>
                            <td class="center">02/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38104', 'H4sIAAAAAAAAAzWMQQqAMAwEX6TZaNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARjkZ5ETjYigfAHiIGU4yR4fiX0Nlnf2/rA6jHbAdcAAAA', 'H4sIAAAAAAAAAzMyNDdWsLAwMlMoS8xJySxS0Fcoy8zLTM4sLQYAzio0pBsAAAA=');">SEARA ALIMENTOS LTDA</a></td>
                            <td class="right" width="10%">R$ 150,00</td>
                            <td class="right" width="10%"> </td>
                            <td class="right"></td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAzWMQQqAMAwEX6TZaNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARjkZ5ETjYigfAHiIGU4yR4fiX0Nlnf2/rA6jHbAdcAAAA');">REMESSA VASILHAME/PALLETS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAzWMQQqAMAwEX6TZVNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+c+CIkQZ5ETjYigfAHiIGUwyRIfyL6+yzv7f1AYFp23VcAAAA');">38105</a></td>
                            <td class="center">1</td>
                            <td class="center">02/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38105', 'H4sIAAAAAAAAAzWMQQqAMAwEX6TZVNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+c+CIkQZ5ETjYigfAHiIGUwyRIfyL6+yzv7f1AYFp23VcAAAA', 'H4sIAAAAAAAAAyvKT08tysx3yEgvSq0oKSotzi9KLNZLzs/VSyoCADIkPMQcAAAA');">HGR IND E COM DE MAQUINAS LTDA</a></td>
                            <td class="right" width="10%">R$ 50.000,00</td>
                            <td class="right" width="10%"> </td>
                            <td class="right"></td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAzWMQQqAMAwEX6TZVNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+c+CIkQZ5ETjYigfAHiIGUwyRIfyL6+yzv7f1AYFp23VcAAAA');">REMESSA PARA MANUTENCAO</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAzWMQQqAMAwEX6TZWNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARIzl5ETjYigfAHiIGU7jI8PxL7Oyzv7f1AbXelKhcAAAA');">38106</a></td>
                            <td class="center">1</td>
                            <td class="center">02/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38106', 'H4sIAAAAAAAAAzWMQQqAMAwEX6TZWNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARIzl5ETjYigfAHiIGU7jI8PxL7Oyzv7f1AbXelKhcAAAA', 'H4sIAAAAAAAAAytMTMlLS3UoSq1MSc3RS87PtU5KzCspzUs1RBIDAIAvr7YlAAAA');">REYDEL AUTOMOTIV BRAZIL IND E COM DE SISTEMAS AUTO LTDA</a></td>
                            <td class="right" width="10%">R$ 2.033,75</td>
                            <td class="right" width="10%">R$ 2.033,75</td>
                            <td class="right">164,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAzWMQQqAMAwEX6TZWNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARIzl5ETjYigfAHiIGU7jI8PxL7Oyzv7f1AbXelKhcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAzWMQQqAMAwEX6TZWNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARIzl5ETjYigfAHiIGU7jICPyL6+yzv7f1AQ6r4RJcAAAA');">38107</a></td>
                            <td class="center">1</td>
                            <td class="center">02/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38107', 'H4sIAAAAAAAAAzWMQQqAMAwEX6TZWNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARIzl5ETjYigfAHiIGU7jICPyL6+yzv7f1AQ6r4RJcAAAA', 'H4sIAAAAAAAAAytMTMlLS3UoSq1MSc3RS87PtU5KzCspzUs1RBIDAIAvr7YlAAAA');">REYDEL AUTOMOTIV BRAZIL IND E COM DE SISTEMAS AUTO LTDA</a></td>
                            <td class="right" width="10%">R$ 4.623,90</td>
                            <td class="right" width="10%"> </td>
                            <td class="right"></td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAzWMQQqAMAwEX6TZWNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARIzl5ETjYigfAHiIGU7jICPyL6+yzv7f1AQ6r4RJcAAAA');">DEVOLUCAO DE EMBALAGENS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAzWMQQqAMAwEX6TZqGnrc4KtIGgrisXnGwUvO8MclvKcaD9KvCYtlHJdNOpJaql+1oEDBurlhWdvKw4AO4gYTNEHRuBfxsY+23tbH9PsWzVcAAAA');">38108</a></td>
                            <td class="center">1</td>
                            <td class="center">02/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38108', 'H4sIAAAAAAAAAzWMQQqAMAwEX6TZqGnrc4KtIGgrisXnGwUvO8MclvKcaD9KvCYtlHJdNOpJaql+1oEDBurlhWdvKw4AO4gYTNEHRuBfxsY+23tbH9PsWzVcAAAA', 'H4sIAAAAAAAAA8tLS3UoScxOLEnUS87P1UsqAgDMTkWMEQAAAA==');">TAKATA BRASIL LTDA</a></td>
                            <td class="right" width="10%">R$ 6.816,75</td>
                            <td class="right" width="10%">R$ 6.816,75</td>
                            <td class="right">422,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAzWMQQqAMAwEX6TZqGnrc4KtIGgrisXnGwUvO8MclvKcaD9KvCYtlHJdNOpJaql+1oEDBurlhWdvKw4AO4gYTNEHRuBfxsY+23tbH9PsWzVcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAzWMUQqAIBAFT1T7Nl2140gaBKVRJB2/LejnzTAfj8qcaT9quqZYKZe2xBRPipraZwM4wJKRF569rjgA7CCiUIUJjJF/sZ1+9ve2PuLgNPxcAAAA');">38109</a></td>
                            <td class="center">1</td>
                            <td class="center">02/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38109', 'H4sIAAAAAAAAAzWMUQqAIBAFT1T7Nl2140gaBKVRJB2/LejnzTAfj8qcaT9quqZYKZe2xBRPipraZwM4wJKRF569rjgA7CCiUIUJjJF/sZ1+9ve2PuLgNPxcAAAA', 'H4sIAAAAAAAAA8tLS3VITkwpyEksLtFLzs/VSyqyzirNyUzMwxAHAKcgBDkrAAAA');">CADPLAST IND E COM DE PLASTICOS LTDA</a></td>
                            <td class="right" width="10%">R$ 10.828,13</td>
                            <td class="right" width="10%"> </td>
                            <td class="right"></td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAzWMUQqAIBAFT1T7Nl2140gaBKVRJB2/LejnzTAfj8qcaT9quqZYKZe2xBRPipraZwM4wJKRF569rjgA7CCiUIUJjJF/sZ1+9ve2PuLgNPxcAAAA');">OUTRAS SAIDAS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx3MUQqAMAwD0BNpU7XbPE5xEwTdRHF4fOt+kkc+QnlNdF4lPosWSrluGvUmtak2DeCAiUb5y7O3FAeAHUSsjBgDc1PD3Nln/x77ByRVxItcAAAA');">38110</a></td>
                            <td class="center">1</td>
                            <td class="center">03/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38110', 'H4sIAAAAAAAAAx3MUQqAMAwD0BNpU7XbPE5xEwTdRHF4fOt+kkc+QnlNdF4lPosWSrluGvUmtak2DeCAiUb5y7O3FAeAHUSsjBgDc1PD3Nln/x77ByRVxItcAAAA', 'H4sIAAAAAAAAA0tLLC1KTc5M1MtLS3UoTizPKa3KSy3RS87P1UsqUtCoyM3RBABMkmsLIwAAAA==');">FAURECIA AUTOMOTIVE DO BRASIL LTDA</a></td>
                            <td class="right" width="10%">R$ 8.512,00</td>
                            <td class="right" width="10%">R$ 8.512,00</td>
                            <td class="right">618,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx3MUQqAMAwD0BNpU7XbPE5xEwTdRHF4fOt+kkc+QnlNdF4lPosWSrluGvUmtak2DeCAiUb5y7O3FAeAHUSsjBgDc1PD3Nln/x77ByRVxItcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAA9PPS0vVLyjKTylNTszXT80ry0xMSSzWTwQKlYFZRgaGFgYm+samIMrc0BxImpoZGBgYmhmYmgIpINPA2MIQCGAME12gmXoVuTkAFVmrQlwAAAA=');">38111</a></td>
                            <td class="center">1</td>
                            <td class="center">03/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38111', 'H4sIAAAAAAAAA9PPS0vVLyjKTylNTszXT80ry0xMSSzWTwQKlYFZRgaGFgYm+samIMrc0BxImpoZGBgYmhmYmgIpINPA2MIQCGAME12gmXoVuTkAFVmrQlwAAAA=', 'H4sIAAAAAAAAA8tNLE3Uy0tLdUhKzc0s1kvOzwUAl4ISGRIAAAA=');">BEMIS DO BRASIL INDUSTRIA ECOMERCIO DE EMBALAGENS LTDA</a></td>
                            <td class="right" width="10%">R$ 11.557,29</td>
                            <td class="right" width="10%">R$ 11.557,29</td>
                            <td class="right">914,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAA9PPS0vVLyjKTylNTszXT80ry0xMSSzWTwQKlYFZRgaGFgYm+samIMrc0BxImpoZGBgYmhmYmgIpINPA2MIQCGAME12gmXoVuTkAFVmrQlwAAAA=');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="cancel">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAzWMQQqAMAwEX6TZVNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+c+CIkQZ5ETjYigfAHiIGUwyR2fEv6Oyzv7f1AbM1JldcAAAA');">38112</a></td>
                            <td class="center">1</td>
                            <td class="center">03/04/2018</td>
                            <td class="left email"><a href="#" onClick="alert('Nota Cancelada - o email não pode ser enviado!');">AUTOMETAL SBC INJECAO E PINTURA DE PLASTICOS LTDA</a></td>
                            <td class="right" width="10%">R$ 60.480,00</td>
                            <td class="right" width="10%">R$ 60.480,00</td>
                            <td class="right"></td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAzWMQQqAMAwEX6TZVNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+c+CIkQZ5ETjYigfAHiIGUwyR2fEv6Oyzv7f1AbM1JldcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAzWMQQqAMAwEX6TZWNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARIzl5ETjYigfAHiIGU7jI7PgX6eyzv7f1AZqbkSVcAAAA');">38113</a></td>
                            <td class="center">1</td>
                            <td class="center">03/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38113', 'H4sIAAAAAAAAAzWMQQqAMAwEX6TZWNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARIzl5ETjYigfAHiIGU7jI7PgX6eyzv7f1AZqbkSVcAAAA', 'H4sIAAAAAAAAA8vNSSwtSk3Mc0gsLcnPTS1JzNFLzs/VSyoCAA2ip9wZAAAA');">AUTOMETAL S/A.</a></td>
                            <td class="right" width="10%">R$ 4.169,41</td>
                            <td class="right" width="10%">R$ 4.169,41</td>
                            <td class="right">149,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAzWMQQqAMAwEX6TZWNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARIzl5ETjYigfAHiIGU7jI7PgX6eyzv7f1AZqbkSVcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAzWMQQqAMAwEX6TZaNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARjkZ5ETjYigfAHiIGU4yR2fEv6Oyzv7f1AedO5MdcAAAA');">38114</a></td>
                            <td class="center">1</td>
                            <td class="center">03/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38114', 'H4sIAAAAAAAAAzWMQQqAMAwEX6TZaNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARjkZ5ETjYigfAHiIGU4yR2fEv6Oyzv7f1AedO5MdcAAAA', 'H4sIAAAAAAAAA0tLLCktSsxNzSvJd0gsTkstysxLKS0uKcpMLCzNzM1MTtRLzs/VSyoCALLa7vQoAAAA');">ASFER INDUSTRIA QUIMICA LTDA</a></td>
                            <td class="right" width="10%">R$ 5.365,00</td>
                            <td class="right" width="10%"> </td>
                            <td class="right"></td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAzWMQQqAMAwEX6TZaNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARjkZ5ETjYigfAHiIGU4yR2fEv6Oyzv7f1AedO5MdcAAAA');">SIMPLES REMESSA / OUTRAS SAIDAS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAzWMQQqAMAwEX6TZWNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARIzl5ETjYigfAHiIGU7jILPyL7+yzv7f1AQvc3oxcAAAA');">38115</a></td>
                            <td class="center">1</td>
                            <td class="center">03/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38115', 'H4sIAAAAAAAAAzWMQQqAMAwEX6TZWNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARIzl5ETjYigfAHiIGU7jILPyL7+yzv7f1AQvc3oxcAAAA', 'H4sIAAAAAAAAA0ssLcl3SAQSuakliTl6yfm5eklF1kV5+emlqZlFiRhSAEPqiowwAAAA');">AUTOMETAL SBC INJECAO E PINTURA DE PLASTICOS LTDA</a></td>
                            <td class="right" width="10%">R$ 7.005,00</td>
                            <td class="right" width="10%">R$ 7.005,00</td>
                            <td class="right">291,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAzWMQQqAMAwEX6TZWNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARIzl5ETjYigfAHiIGU7jILPyL7+yzv7f1AQvc3oxcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAA9PPS0vVLyjKTylNTszXT80ry0xMSSzWTwQKlYFZRgaGFgYm+samIMrc0BxImpoZGBgYmhmYmgIpINPA2MLQ0MwQztAFmqlXkZsDAGiM3qBcAAAA');">38116</a></td>
                            <td class="center">1</td>
                            <td class="center">03/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38116', 'H4sIAAAAAAAAA9PPS0vVLyjKTylNTszXT80ry0xMSSzWTwQKlYFZRgaGFgYm+samIMrc0BxImpoZGBgYmhmYmgIpINPA2MLQ0MwQztAFmqlXkZsDAGiM3qBcAAAA', 'H4sIAAAAAAAAA0vOzytJLNYrSExPLHJIyi9Kzs/RS87P1Usqsi7KTyrOz0tOzC3IL0aSAgCvBM2RMgAAAA==');">BORCOL INDUSTRIA DE BORRACHA LTDA</a></td>
                            <td class="right" width="10%">R$ 3.415,50</td>
                            <td class="right" width="10%">R$ 3.415,50</td>
                            <td class="right">203,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAA9PPS0vVLyjKTylNTszXT80ry0xMSSzWTwQKlYFZRgaGFgYm+samIMrc0BxImpoZGBgYmhmYmgIpINPA2MLQ0MwQztAFmqlXkZsDAGiM3qBcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAzWMQQqAMAwEX6TZWNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARIzl5ETjYigfAHiIGU7jIHPiX0Nlnf2/rA4Qe5OtcAAAA');">38117</a></td>
                            <td class="center">1</td>
                            <td class="center">03/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38117', 'H4sIAAAAAAAAAzWMQQqAMAwEX6TZWNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARIzl5ETjYigfAHiIGU7jIHPiX0Nlnf2/rA4Qe5OtcAAAA', 'H4sIAAAAAAAAAytMTMlLS3UoSq1MSc3RS87PtU5KzCspzUs1RBIDAIAvr7YlAAAA');">REYDEL AUTOMOTIV BRAZIL IND E COM DE SISTEMAS AUTO LTDA</a></td>
                            <td class="right" width="10%">R$ 135,00</td>
                            <td class="right" width="10%">R$ 135,00</td>
                            <td class="right">12,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAzWMQQqAMAwEX6TZWNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARIzl5ETjYigfAHiIGU7jIHPiX0Nlnf2/rA4Qe5OtcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAzWMQQqAMAwEX6TZVNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+c+CIkQZ5ETjYigfAHiIGUwyROfIvrrPP/t7WB4iW5xNcAAAA');">38118</a></td>
                            <td class="center">1</td>
                            <td class="center">03/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38118', 'H4sIAAAAAAAAAzWMQQqAMAwEX6TZVNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+c+CIkQZ5ETjYigfAHiIGUwyROfIvrrPP/t7WB4iW5xNcAAAA', 'H4sIAAAAAAAAA9MwN9RUsLQ0MjDVNTU3NFLILEvMS81MSQUA7l6WrRgAAAA=');">FAURECIA AUTOMOTIVE DO BRASIL LTDA.</a></td>
                            <td class="right" width="10%">R$ 105,00</td>
                            <td class="right" width="10%">R$ 105,00</td>
                            <td class="right">5,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAzWMQQqAMAwEX6TZVNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+c+CIkQZ5ETjYigfAHiIGUwyROfIvrrPP/t7WB4iW5xNcAAAA');">VENDA DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAzWMQQqAMAwEX6TZqGnrc4KtIGgrisXnGwUvO8MclvKcaD9KvCYtlHJdNOpJaql+1oEDBurlhWdvKw4AO4gYTNEH5pF/CY19tve2PnD36b5cAAAA');">38119</a></td>
                            <td class="center">1</td>
                            <td class="center">03/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38119', 'H4sIAAAAAAAAAzWMQQqAMAwEX6TZqGnrc4KtIGgrisXnGwUvO8MclvKcaD9KvCYtlHJdNOpJaql+1oEDBurlhWdvKw4AO4gYTNEH5pF/CY19tve2PnD36b5cAAAA', 'H4sIAAAAAAAAAytMTMlLS3UoSq1MSc3RS87PtU5KzCspzUs1RBIDAIAvr7YlAAAA');">REYDEL AUTOMOTIV BRAZIL IND E COM DE SISTEMAS AUTO LTDA</a></td>
                            <td class="right" width="10%">R$ 3.681,45</td>
                            <td class="right" width="10%">R$ 3.681,45</td>
                            <td class="right">263,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAzWMQQqAMAwEX6TZqGnrc4KtIGgrisXnGwUvO8MclvKcaD9KvCYtlHJdNOpJaql+1oEDBurlhWdvKw4AO4gYTNEH5pF/CY19tve2PnD36b5cAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx3MUQ6AIAwD0BPpOnDAdRbFxETBaCQe38lP+9KPUlkznVddnlkr5dI2XfQmtal1OXDCRF7+ihwtJQDgABErI3xi19XhBvsc32P/ADLg2j9cAAAA');">38120</a></td>
                            <td class="center">1</td>
                            <td class="center">03/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38120', 'H4sIAAAAAAAAAx3MUQ6AIAwD0BPpOnDAdRbFxETBaCQe38lP+9KPUlkznVddnlkr5dI2XfQmtal1OXDCRF7+ihwtJQDgABErI3xi19XhBvsc32P/ADLg2j9cAAAA', 'H4sIAAAAAAAAAytMTMlLS3UoSq1MSc3RS87PtU5KzCspzUs1RBIDAIAvr7YlAAAA');">REYDEL AUTOMOTIV BRAZIL IND E COM DE SISTEMAS AUTO LTDA</a></td>
                            <td class="right" width="10%">R$ 12.497,60</td>
                            <td class="right" width="10%"> </td>
                            <td class="right"></td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx3MUQ6AIAwD0BPpOnDAdRbFxETBaCQe38lP+9KPUlkznVddnlkr5dI2XfQmtal1OXDCRF7+ihwtJQDgABErI3xi19XhBvsc32P/ADLg2j9cAAAA');">DEVOLUCAO DE EMBALAGENS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAzWMQQqAMAwEX6TZVNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+c+CIkQZ5ETjYigfAHiIGUwyRHfMvsbPP/t7WB8qB1JJcAAAA');">38121</a></td>
                            <td class="center">1</td>
                            <td class="center">03/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38121', 'H4sIAAAAAAAAAzWMQQqAMAwEX6TZVNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+c+CIkQZ5ETjYigfAHiIGUwyRHfMvsbPP/t7WB8qB1JJcAAAA', 'H4sIAAAAAAAAA8tLS3Uoys/JScsv0kvOz9VLKgIAjK1SOBIAAAA=');">ROLL FOR ARTEFATOS METALICOS LTDA</a></td>
                            <td class="right" width="10%">R$ 6.592,77</td>
                            <td class="right" width="10%">R$ 6.592,77</td>
                            <td class="right">502,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAzWMQQqAMAwEX6TZVNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+c+CIkQZ5ETjYigfAHiIGUwyRHfMvsbPP/t7WB8qB1JJcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAzWMQQqAMAwEX6TZtKbtd4JWELQVxeLzjYKXnWEOS2XOtB91ukatlEtbdNKT1FL7zIETBvLyInK0lQCAA0QMpvCJneNffGef/b2tD70i4FhcAAAA');">38122</a></td>
                            <td class="center">1</td>
                            <td class="center">03/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38122', 'H4sIAAAAAAAAAzWMQQqAMAwEX6TZtKbtd4JWELQVxeLzjYKXnWEOS2XOtB91ukatlEtbdNKT1FL7zIETBvLyInK0lQCAA0QMpvCJneNffGef/b2tD70i4FhcAAAA', 'H4sIAAAAAAAAA8tLS3VITC/KL04tKstMTtXLSy0BAKHtfp8TAAAA');">AGROSERVICE COMERCIO E REPRESENTACAO LTDA - ME</a></td>
                            <td class="right" width="10%">R$ 2.040,00</td>
                            <td class="right" width="10%"> </td>
                            <td class="right"></td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAzWMQQqAMAwEX6TZtKbtd4JWELQVxeLzjYKXnWEOS2XOtB91ukatlEtbdNKT1FL7zIETBvLyInK0lQCAA0QMpvCJneNffGef/b2tD70i4FhcAAAA');">REMESSA AMOSTRA GRATIS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAA9PPS0vVLyjKTylNTszXT80ry0xMSSzWTwQKlYFZRgaGFgYm+samIMrc0BxImpoZGBgYmhmYmgIpINPA2MLQyNgQxrDUBZqpV5GbAwBFQ+71XAAAAA==');">38123</a></td>
                            <td class="center">1</td>
                            <td class="center">04/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38123', 'H4sIAAAAAAAAA9PPS0vVLyjKTylNTszXT80ry0xMSSzWTwQKlYFZRgaGFgYm+samIMrc0BxImpoZGBgYmhmYmgIpINPA2MLQyNgQxrDUBZqpV5GbAwBFQ+71XAAAAA==', 'H4sIAAAAAAAAA0tNKU0sSsnXK8nPTaxyyE3MK01LLMkvStRLzs/VSyoCAMJBsKUfAAAA');">CIA MANUFATORA DE TECIDOS DE ALGODAO</a></td>
                            <td class="right" width="10%">R$ 10.628,42</td>
                            <td class="right" width="10%">R$ 10.628,42</td>
                            <td class="right">302,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAA9PPS0vVLyjKTylNTszXT80ry0xMSSzWTwQKlYFZRgaGFgYm+samIMrc0BxImpoZGBgYmhmYmgIpINPA2MLQyNgQxrDUBZqpV5GbAwBFQ+71XAAAAA==');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAzWMQQqAMAwEX6RJ2qTtd4KtIGgrisXnGwUvO8McFupcYD9aviZtUGpfNOsJaql/5pASMnh5ESnaSkBECihiMEWfyDH9woN9jve2PiA0Q6xcAAAA');">38124</a></td>
                            <td class="center">1</td>
                            <td class="center">04/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38124', 'H4sIAAAAAAAAAzWMQQqAMAwEX6RJ2qTtd4KtIGgrisXnGwUvO8McFupcYD9aviZtUGpfNOsJaql/5pASMnh5ESnaSkBECihiMEWfyDH9woN9jve2PiA0Q6xcAAAA', 'H4sIAAAAAAAAA8tLS3UoScxOLEnUS87P1UsqAgDMTkWMEQAAAA==');">TAKATA BRASIL LTDA</a></td>
                            <td class="right" width="10%">R$ 141,44</td>
                            <td class="right" width="10%">R$ 141,44</td>
                            <td class="right">6,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAzWMQQqAMAwEX6RJ2qTtd4KtIGgrisXnGwUvO8McFupcYD9aviZtUGpfNOsJaql/5pASMnh5ESnaSkBECihiMEWfyDH9woN9jve2PiA0Q6xcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAzWMQQqAMAwEX6TZVNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+c+CIkQZ5ETjYigfAHiIGUwyRnfAv6Oyzv7f1AUqOj8lcAAAA');">38125</a></td>
                            <td class="center">1</td>
                            <td class="center">04/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38125', 'H4sIAAAAAAAAAzWMQQqAMAwEX6TZVNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+c+CIkQZ5ETjYigfAHiIGUwyRnfAv6Oyzv7f1AUqOj8lcAAAA', 'H4sIAAAAAAAAA0tOzM3MSdRLKc2syixxSEssLUpNzkzUS87PBQC/Fy2YGgAAAA==');">FAURECIA AUTOMOTIVE DO BRASIL LTDA</a></td>
                            <td class="right" width="10%">R$ 3.894,00</td>
                            <td class="right" width="10%">R$ 3.894,00</td>
                            <td class="right">283,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAzWMQQqAMAwEX6TZVNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+c+CIkQZ5ETjYigfAHiIGUwyRnfAv6Oyzv7f1AUqOj8lcAAAA');">VENDA DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAzWMQQqAMAwEX6TZVNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+c+CIkQZ5ETjYigfAHiIGUwyRnedfpLPP/t7WB6/2ectcAAAA');">38126</a></td>
                            <td class="center">1</td>
                            <td class="center">04/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38126', 'H4sIAAAAAAAAAzWMQQqAMAwEX6TZVNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+c+CIkQZ5ETjYigfAHiIGUwyRnedfpLPP/t7WB6/2ectcAAAA', 'H4sIAAAAAAAAAytMTMlLS3UoSq1MSc3RS87PtU5KzCspzUs1RBIDAIAvr7YlAAAA');">REYDEL AUTOMOTIV BRAZIL IND E COM DE SISTEMAS AUTO LTDA</a></td>
                            <td class="right" width="10%">R$ 4.418,00</td>
                            <td class="right" width="10%">R$ 4.418,00</td>
                            <td class="right">306,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAzWMQQqAMAwEX6TZVNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+c+CIkQZ5ETjYigfAHiIGUwyRnedfpLPP/t7WB6/2ectcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAzWMQQqAMAwEX6TZVNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+c+CIkQZ5ETjYigfAHiIGUwyRXeBf0Nlnf2/rA4ZYzrlcAAAA');">38127</a></td>
                            <td class="center">1</td>
                            <td class="center">04/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38127', 'H4sIAAAAAAAAAzWMQQqAMAwEX6TZVNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+c+CIkQZ5ETjYigfAHiIGUwyRXeBf0Nlnf2/rA4ZYzrlcAAAA', 'H4sIAAAAAAAAAytMTMlLS3UoSq1MSc3RS87PtU5KzCspzUs1RBIDAIAvr7YlAAAA');">REYDEL AUTOMOTIV BRAZIL IND E COM DE SISTEMAS AUTO LTDA</a></td>
                            <td class="right" width="10%">R$ 16.336,30</td>
                            <td class="right" width="10%"> </td>
                            <td class="right"></td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAzWMQQqAMAwEX6TZVNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+c+CIkQZ5ETjYigfAHiIGUwyRXeBf0Nlnf2/rA4ZYzrlcAAAA');">DEVOLUCAO DE EMBALAGENS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAzWMQQqAMAwEX6TZVNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+c+CIkQZ5ETjYigfAHiIGUwyRXeRffGef/b2tD0/sQHhcAAAA');">38128</a></td>
                            <td class="center">1</td>
                            <td class="center">04/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38128', 'H4sIAAAAAAAAAzWMQQqAMAwEX6TZVNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+c+CIkQZ5ETjYigfAHiIGUwyRXeRffGef/b2tD0/sQHhcAAAA', 'H4sIAAAAAAAAA8tLS3UoScxOLEnUS87P1UsqAgDMTkWMEQAAAA==');">TAKATA BRASIL LTDA</a></td>
                            <td class="right" width="10%">R$ 9.619,80</td>
                            <td class="right" width="10%">R$ 9.619,80</td>
                            <td class="right">600,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAzWMQQqAMAwEX6TZVNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+c+CIkQZ5ETjYigfAHiIGUwyRXeRffGef/b2tD0/sQHhcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAA9PPS0vVLyjKTylNTszXT80ry0xMSSzWTwQKlYFZRgaGFgYm+samIMrc0BxImpoZGBgYmhmYmgIpINPA2MLQyNIQztAFmqlXkZsDAOBqASRcAAAA');">38129</a></td>
                            <td class="center">1</td>
                            <td class="center">04/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38129', 'H4sIAAAAAAAAA9PPS0vVLyjKTylNTszXT80ry0xMSSzWTwQKlYFZRgaGFgYm+samIMrc0BxImpoZGBgYmhmYmgIpINPA2MLQyNIQztAFmqlXkZsDAOBqASRcAAAA', 'H4sIAAAAAAAAA0tNKU0sSsl3KClOLCzNzM1MTtRLzs/VSyoCAM5aVlIZAAAA');">TSA QUIMICA DO BRASIL LTDA.</a></td>
                            <td class="right" width="10%">R$ 8.256,77</td>
                            <td class="right" width="10%"> </td>
                            <td class="right"></td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAA9PPS0vVLyjKTylNTszXT80ry0xMSSzWTwQKlYFZRgaGFgYm+samIMrc0BxImpoZGBgYmhmYmgIpINPA2MLQyNIQztAFmqlXkZsDAOBqASRcAAAA');">DEVOLUCAO SIMBOLICA</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx3MUQ6AIAwD0BPpOnHAdRbBxETBaCQe38lP+9KPUlkznVdNz6KVcmmbJr1JbWpdEzhiJid/BQ6W4gGwh4iVES6y6+rwg32O77F/uFXfxlwAAAA=');">38130</a></td>
                            <td class="center">1</td>
                            <td class="center">05/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38130', 'H4sIAAAAAAAAAx3MUQ6AIAwD0BPpOnHAdRbBxETBaCQe38lP+9KPUlkznVdNz6KVcmmbJr1JbWpdEzhiJid/BQ6W4gGwh4iVES6y6+rwg32O77F/uFXfxlwAAAA=', 'H4sIAAAAAAAAA0tOLU4scijISCzKTUzOTEwtLk7NK8lM1EvOz9VLKgIANdoUmR4AAAA=');">SMART SOLUCOES FARMACEUTICAS LTDA</a></td>
                            <td class="right" width="10%">R$ 2.925,60</td>
                            <td class="right" width="10%">R$ 2.925,60</td>
                            <td class="right">38,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx3MUQ6AIAwD0BPpOnHAdRbBxETBaCQe38lP+9KPUlkznVdNz6KVcmmbJr1JbWpdEzhiJid/BQ6W4gGwh4iVES6y6+rwg32O77F/uFXfxlwAAAA=');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAA9PPS0vVLyjKTylNTszXT80ry0xMSSzWTwQKlYFZRgaGFgYm+samIMrc0BxImpoZGBgYmhmYmgIpINPA2MLQ2NAQztAFmqlXkZsDABfTnppcAAAA');">38131</a></td>
                            <td class="center">1</td>
                            <td class="center">05/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38131', 'H4sIAAAAAAAAA9PPS0vVLyjKTylNTszXT80ry0xMSSzWTwQKlYFZRgaGFgYm+samIMrc0BxImpoZGBgYmhmYmgIpINPA2MLQ2NAQztAFmqlXkZsDABfTnppcAAAA', 'H4sIAAAAAAAAAysuLSjKzE3NK8kvdkgtLgYyMhP1kvNz9ZKKAIwQJtwbAAAA');">HKM FARMACIA DE MANIPULACAO LTDA</a></td>
                            <td class="right" width="10%">R$ 12.580,08</td>
                            <td class="right" width="10%">R$ 12.580,08</td>
                            <td class="right">162,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAA9PPS0vVLyjKTylNTszXT80ry0xMSSzWTwQKlYFZRgaGFgYm+samIMrc0BxImpoZGBgYmhmYmgIpINPA2MLQ2NAQztAFmqlXkZsDABfTnppcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAzWMQQqAMAwEX6TZtKbtd4JWELQVxeLzjYKXnWEOS2XOtB91ukatlEtbdNKT1FL7zIETBvLyInK0lQCAA0QMpvCJveNfYmef/b2tDzeX5aFcAAAA');">38132</a></td>
                            <td class="center">1</td>
                            <td class="center">05/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38132', 'H4sIAAAAAAAAAzWMQQqAMAwEX6TZtKbtd4JWELQVxeLzjYKXnWEOS2XOtB91ukatlEtbdNKT1FL7zIETBvLyInK0lQCAA0QMpvCJveNfYmef/b2tDzeX5aFcAAAA', 'H4sIAAAAAAAAAytMTMlLS3UoSq1MSc3RS87PtU5KzCspzUs1RBIDAIAvr7YlAAAA');">REYDEL AUTOMOTIV BRAZIL IND E COM DE SISTEMAS AUTO LTDA</a></td>
                            <td class="right" width="10%">R$ 3.288,50</td>
                            <td class="right" width="10%">R$ 3.288,50</td>
                            <td class="right">255,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAzWMQQqAMAwEX6TZtKbtd4JWELQVxeLzjYKXnWEOS2XOtB91ukatlEtbdNKT1FL7zIETBvLyInK0lQCAA0QMpvCJveNfYmef/b2tDzeX5aFcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAzWMQQqAMAwEX6RJGtP2O8FWELQVxeLzjUIvO8McFsqS4ThrumetkEtbNekFaqn95pAiTsDyIVCwFY+I5FHEYIociZm6uME+x2ffXh45UtNcAAAA');">38133</a></td>
                            <td class="center">1</td>
                            <td class="center">05/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38133', 'H4sIAAAAAAAAAzWMQQqAMAwEX6RJGtP2O8FWELQVxeLzjUIvO8McFsqS4ThrumetkEtbNekFaqn95pAiTsDyIVCwFY+I5FHEYIociZm6uME+x2ffXh45UtNcAAAA', 'H4sIAAAAAAAAAytMTMlLS3UoSq1MSc3RS87PtU5KzCspzUs1RBIDAIAvr7YlAAAA');">REYDEL AUTOMOTIV BRAZIL IND E COM DE SISTEMAS AUTO LTDA</a></td>
                            <td class="right" width="10%">R$ 12.615,38</td>
                            <td class="right" width="10%"> </td>
                            <td class="right"></td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAzWMQQqAMAwEX6RJGtP2O8FWELQVxeLzjUIvO8McFsqS4ThrumetkEtbNekFaqn95pAiTsDyIVCwFY+I5FHEYIociZm6uME+x2ffXh45UtNcAAAA');">DEVOLUCAO DE EMBALAGENS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAzWMQQqAMAwEX6TZ2Kbtd4JWELQVxeLzjYKXnWEOS2XOtB91ukatlEtbdNKT1FL7bAAneHLyInK0lQCAA0QMpnCJnedfUmef/b2tD7Ijnu5cAAAA');">38134</a></td>
                            <td class="center">1</td>
                            <td class="center">05/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38134', 'H4sIAAAAAAAAAzWMQQqAMAwEX6TZ2Kbtd4JWELQVxeLzjYKXnWEOS2XOtB91ukatlEtbdNKT1FL7bAAneHLyInK0lQCAA0QMpnCJnedfUmef/b2tD7Ijnu5cAAAA', 'H4sIAAAAAAAAA0ssSc1LScsvcgDiFL3k/FwAXdEbfBEAAAA=');">FORD MOTOR COMPANY BRASIL LTDA</a></td>
                            <td class="right" width="10%">R$ 2.205,00</td>
                            <td class="right" width="10%">R$ 2.205,00</td>
                            <td class="right">66,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAzWMQQqAMAwEX6TZ2Kbtd4JWELQVxeLzjYKXnWEOS2XOtB91ukatlEtbdNKT1FL7bAAneHLyInK0lQCAA0QMpnCJnedfUmef/b2tD7Ijnu5cAAAA');">VENDAS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAA9PPS0vVLyjKTylNTszXT80ry0xMSSzWTwQKlYFZRgaGFgYm+samIMrc0BxImpoZGBgYmhmYmgIpINPA2MIQKA9jGOsCzdSryM0BAAlW61RcAAAA');">38135</a></td>
                            <td class="center">1</td>
                            <td class="center">05/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38135', 'H4sIAAAAAAAAA9PPS0vVLyjKTylNTszXT80ry0xMSSzWTwQKlYFZRgaGFgYm+samIMrc0BxImpoZGBgYmhmYmgIpINPA2MIQKA9jGOsCzdSryM0BAAlW61RcAAAA', 'H4sIAAAAAAAAA0tOLMqpSs0sLtbLLanSq8jNcSjLLM7Mz9ODCCbn5wIAtdSRnCIAAAA=');">CARL ZEISS VISION BRASIL INDUSTRIA OPTICA LTDA</a></td>
                            <td class="right" width="10%">R$ 6.037,50</td>
                            <td class="right" width="10%">R$ 6.037,50</td>
                            <td class="right">105,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAA9PPS0vVLyjKTylNTszXT80ry0xMSSzWTwQKlYFZRgaGFgYm+samIMrc0BxImpoZGBgYmhmYmgIpINPA2MIQKA9jGOsCzdSryM0BAAlW61RcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAA9PPS0vVLyjKTylNTszXT80ry0xMSSzWTwQKlYFZRgaGFgYm+samIMrc0BxImpoZGBgYmhmYmgIpINPA2MLQ2MwQxrDUBZqpV5GbAwA94aSJXAAAAA==');">38136</a></td>
                            <td class="center">1</td>
                            <td class="center">05/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38136', 'H4sIAAAAAAAAA9PPS0vVLyjKTylNTszXT80ry0xMSSzWTwQKlYFZRgaGFgYm+samIMrc0BxImpoZGBgYmhmYmgIpINPA2MLQ2MwQxrDUBZqpV5GbAwA94aSJXAAAAA==', 'H4sIAAAAAAAAA0tLLC1KTc5M1MtLS3UoTizPKa3KSy3RS87P1Usqsi5KTEtMzdHLTUzOSEzJd0hLLAUA4PAfLzAAAAA=');">FAURECIA AUTOMOTIVE DO BRASIL LTDA.</a></td>
                            <td class="right" width="10%">R$ 1.824,60</td>
                            <td class="right" width="10%">R$ 1.824,60</td>
                            <td class="right">118,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAA9PPS0vVLyjKTylNTszXT80ry0xMSSzWTwQKlYFZRgaGFgYm+samIMrc0BxImpoZGBgYmhmYmgIpINPA2MLQ2MwQxrDUBZqpV5GbAwA94aSJXAAAAA==');">VENDA DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAzWMQQqAMAwEX6TZ2Kbtd4JWELQVxeLzjYKXnWEOS2XOtB91ukatlEtbdNKT1FL7bAAneHLyInK0lQCAA0QMpnCJXeRffGef/b2tDwzty0BcAAAA');">38137</a></td>
                            <td class="center">1</td>
                            <td class="center">05/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38137', 'H4sIAAAAAAAAAzWMQQqAMAwEX6TZ2Kbtd4JWELQVxeLzjYKXnWEOS2XOtB91ukatlEtbdNKT1FL7bAAneHLyInK0lQCAA0QMpnCJXeRffGef/b2tDwzty0BcAAAA', 'H4sIAAAAAAAAA0tNKU0sSsnXK8nPTaxyyE3MK01LLMkvStRLzs/VSyoCAMJBsKUfAAAA');">CIA MANUFATORA DE TECIDOS DE ALGODAO</a></td>
                            <td class="right" width="10%">R$ 7.475,00</td>
                            <td class="right" width="10%">R$ 7.475,00</td>
                            <td class="right">224,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAzWMQQqAMAwEX6TZ2Kbtd4JWELQVxeLzjYKXnWEOS2XOtB91ukatlEtbdNKT1FL7bAAneHLyInK0lQCAA0QMpnCJXeRffGef/b2tDwzty0BcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAA9PPS0vVLyjKTylNTszXT80ry0xMSSzWTwQKlYFZRgaGFgYm+samIMrc0BxImpoZGBgYmhmYmgIpINPA2MIQiGAMA12gmXoVuTkAQ3Gzr1wAAAA=');">38138</a></td>
                            <td class="center">1</td>
                            <td class="center">06/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38138', 'H4sIAAAAAAAAA9PPS0vVLyjKTylNTszXT80ry0xMSSzWTwQKlYFZRgaGFgYm+samIMrc0BxImpoZGBgYmhmYmgIpINPA2MIQiGAMA12gmXoVuTkAQ3Gzr1wAAAA=', 'H4sIAAAAAAAAA8tLS3VITkwpyEksLtFLzs/VSyqyzirNyUzMwxAHAKcgBDkrAAAA');">CADPLAST IND E COM DE PLASTICOS LTDA</a></td>
                            <td class="right" width="10%">R$ 4.214,84</td>
                            <td class="right" width="10%">R$ 1.082,80</td>
                            <td class="right">492,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAA9PPS0vVLyjKTylNTszXT80ry0xMSSzWTwQKlYFZRgaGFgYm+samIMrc0BxImpoZGBgYmhmYmgIpINPA2MIQiGAMA12gmXoVuTkAQ3Gzr1wAAAA=');">BENEF/RET IND</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAzWMQQqAMAwEX6TZWNPW5wSrIGgrisXnGwUvO8MclvI80X6UdI1aaMp10aQnqaX6WQeO6MnJi8DBVjwA9hAxmMJFdgP/Io19tve2PmrfBN1cAAAA');">38139</a></td>
                            <td class="center">1</td>
                            <td class="center">06/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38139', 'H4sIAAAAAAAAAzWMQQqAMAwEX6TZWNPW5wSrIGgrisXnGwUvO8MclvI80X6UdI1aaMp10aQnqaX6WQeO6MnJi8DBVjwA9hAxmMJFdgP/Io19tve2PmrfBN1cAAAA', 'H4sIAAAAAAAAA8tLS3XISkwuyddLzs/VSyoCAAMB+/UQAAAA');">MAQUINAS AGRICOLAS JACTO S/A</a></td>
                            <td class="right" width="10%">R$ 8.728,53</td>
                            <td class="right" width="10%">R$ 8.728,53</td>
                            <td class="right">723,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAzWMQQqAMAwEX6TZWNPW5wSrIGgrisXnGwUvO8MclvI80X6UdI1aaMp10aQnqaX6WQeO6MnJi8DBVjwA9hAxmMJFdgP/Io19tve2PmrfBN1cAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx3MUQ6AIAwD0BPpOmHAdRbFxETBaCQe38lP+9KPUlkznVddnlkr5dI2XfQmtal1TeAET07+ihwtJQDgABErI1xi39WBwT7H99g/Ip+6fVwAAAA=');">38140</a></td>
                            <td class="center">1</td>
                            <td class="center">06/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38140', 'H4sIAAAAAAAAAx3MUQ6AIAwD0BPpOmHAdRbFxETBaCQe38lP+9KPUlkznVddnlkr5dI2XfQmtal1TeAET07+ihwtJQDgABErI1xi39WBwT7H99g/Ip+6fVwAAAA=', 'H4sIAAAAAAAAA0vOzytJTMrM0UvOSU3My8xLd8hKTC7J10vOz9VLKgIAZdlMih4AAAA=');">MAQUINAS AGRICOLAS JACTO S.A. - CLEAN</a></td>
                            <td class="right" width="10%">R$ 1.792,16</td>
                            <td class="right" width="10%">R$ 1.792,16</td>
                            <td class="right">111,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx3MUQ6AIAwD0BPpOmHAdRbFxETBaCQe38lP+9KPUlkznVddnlkr5dI2XfQmtal1TeAET07+ihwtJQDgABErI1xi39WBwT7H99g/Ip+6fVwAAAA=');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAzWMQQqAMAwEX6TZaNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARjkZ5ETjYigfAHiIGU4yRHfMv0tlnf2/rAwsxDQ9cAAAA');">38141</a></td>
                            <td class="center">1</td>
                            <td class="center">06/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38141', 'H4sIAAAAAAAAAzWMQQqAMAwEX6TZaNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARjkZ5ETjYigfAHiIGU4yRHfMv0tlnf2/rAwsxDQ9cAAAA', 'H4sIAAAAAAAAA8tLS3XISkwuyddLzs/VSyoCAAMB+/UQAAAA');">MAQUINAS AGRICOLAS JACTO S/A</a></td>
                            <td class="right" width="10%">R$ 1.971,38</td>
                            <td class="right" width="10%">R$ 1.971,38</td>
                            <td class="right">121,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAzWMQQqAMAwEX6TZaNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARjkZ5ETjYigfAHiIGU4yRHfMv0tlnf2/rAwsxDQ9cAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAzWMUQqAIBAFT1T7Vl31OpIGQWkUScdvC/p5M8zHozoX2o+Wryk1KrUvKaeTkqb+mQFHOLLyInDQFQ+APUQUqrCRneFfMOjneG/rA+5J+w1cAAAA');">38142</a></td>
                            <td class="center">1</td>
                            <td class="center">06/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38142', 'H4sIAAAAAAAAAzWMUQqAIBAFT1T7Vl31OpIGQWkUScdvC/p5M8zHozoX2o+Wryk1KrUvKaeTkqb+mQFHOLLyInDQFQ+APUQUqrCRneFfMOjneG/rA+5J+w1cAAAA', 'H4sIAAAAAAAAAysuzc1LSy1KTXbIyM9LSdRLzs/VSyqyTs3JLE7MS0/NSYwvykxKzSzKh8sDAJOWSGUyAAAA');">HONDA AUTOMOVEIS DO BRASIL LTDA</a></td>
                            <td class="right" width="10%">R$ 30.651,18</td>
                            <td class="right" width="10%">R$ 30.651,18</td>
                            <td class="right">973,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAzWMUQqAIBAFT1T7Vl31OpIGQWkUScdvC/p5M8zHozoX2o+Wryk1KrUvKaeTkqb+mQFHOLLyInDQFQ+APUQUqrCRneFfMOjneG/rA+5J+w1cAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAzWMQQqAMAwEX6TZ2Kbtd4JWELQVxeLzjYKXnWEOS2XOtB91ukatlEtbdNKT1FL7bAAneHLyInK0lQCAA0QMpnCJveNfQmef/b2tDwLbwUZcAAAA');">38143</a></td>
                            <td class="center">1</td>
                            <td class="center">06/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38143', 'H4sIAAAAAAAAAzWMQQqAMAwEX6TZ2Kbtd4JWELQVxeLzjYKXnWEOS2XOtB91ukatlEtbdNKT1FL7bAAneHLyInK0lQCAA0QMpnCJveNfQmef/b2tDwLbwUZcAAAA', 'H4sIAAAAAAAAA8tLS3VIzElLzMwrLikqzU3NK8kv1kvOz9VLKgIAxeR5kxsAAAA=');">ALFA INSTRUMENTOS ELETRONICOS S/A</a></td>
                            <td class="right" width="10%">R$ 1.012,00</td>
                            <td class="right" width="10%">R$ 1.012,00</td>
                            <td class="right">86,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAzWMQQqAMAwEX6TZ2Kbtd4JWELQVxeLzjYKXnWEOS2XOtB91ukatlEtbdNKT1FL7bAAneHLyInK0lQCAA0QMpnCJveNfQmef/b2tDwLbwUZcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAA9PPS0vVLyjKTylNTszXT80ry0xMSSzWTwQKlYFZRgaGFgYm+samIMrc0BxImpoZGBgYmhmYmgIpINPA2MLQxMQQztAFmqlXkZsDAPkmQopcAAAA');">38144</a></td>
                            <td class="center">1</td>
                            <td class="center">06/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38144', 'H4sIAAAAAAAAA9PPS0vVLyjKTylNTszXT80ry0xMSSzWTwQKlYFZRgaGFgYm+samIMrc0BxImpoZGBgYmhmYmgIpINPA2MLQxMQQztAFmqlXkZsDAPkmQopcAAAA', 'H4sIAAAAAAAAAysoyixOzsxJ1CtOrCzNzXRIKkoszklMyi8oyUxOzNFLzs/VSyoCALWdoQslAAAA');">BRASLAB PRODUTOS OTICOS EIRELLI</a></td>
                            <td class="right" width="10%">R$ 586,50</td>
                            <td class="right" width="10%">R$ 586,50</td>
                            <td class="right">18,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAA9PPS0vVLyjKTylNTszXT80ry0xMSSzWTwQKlYFZRgaGFgYm+samIMrc0BxImpoZGBgYmhmYmgIpINPA2MLQxMQQztAFmqlXkZsDAPkmQopcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAzWMQQqAMAwEX6TZaNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARjkZ5ETjYigfAHiIGU4yRnfAvobPP/t7WBxW0eMFcAAAA');">38145</a></td>
                            <td class="center">1</td>
                            <td class="center">06/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38145', 'H4sIAAAAAAAAAzWMQQqAMAwEX6TZaNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARjkZ5ETjYigfAHiIGU4yRnfAvobPP/t7WBxW0eMFcAAAA', 'H4sIAAAAAAAAA0tMKcpMzEt0yMkvSs1Ly0mt0EvOz9VLKgIAIp7oUhgAAAA=');">LORENPACK INDUSTRIA E COMERCIO DE EMBALAGENS LTDA EPP.</a></td>
                            <td class="right" width="10%">R$ 1.586,43</td>
                            <td class="right" width="10%">R$ 1.586,43</td>
                            <td class="right">50,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAzWMQQqAMAwEX6TZaNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARjkZ5ETjYigfAHiIGU4yRnfAvobPP/t7WBxW0eMFcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAzWMQQqAMAwEX6RJ2ibtd4KtIGgrisXnGwUvO8McFupcYD9aviZtUGpfNOsJaql/5pASBvD8IlK0ZUFEEmQ2mKJPFIR+cYN9jve2PvDMjsNcAAAA');">38146</a></td>
                            <td class="center">1</td>
                            <td class="center">06/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38146', 'H4sIAAAAAAAAAzWMQQqAMAwEX6RJ2ibtd4KtIGgrisXnGwUvO8McFupcYD9aviZtUGpfNOsJaql/5pASBvD8IlK0ZUFEEmQ2mKJPFIR+cYN9jve2PvDMjsNcAAAA', 'H4sIAAAAAAAAA0tMKcpMzEt0yMkvSs1Ly0mt0EvOz9VLKgIAIp7oUhgAAAA=');">LORENPACK INDUSTRIA E COMERCIO DE EMBALAGENS LTDA EPP.</a></td>
                            <td class="right" width="10%">R$ 7.190,00</td>
                            <td class="right" width="10%">R$ 990,00</td>
                            <td class="right">620,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAzWMQQqAMAwEX6RJ2ibtd4KtIGgrisXnGwUvO8McFupcYD9aviZtUGpfNOsJaql/5pASBvD8IlK0ZUFEEmQ2mKJPFIR+cYN9jve2PvDMjsNcAAAA');">BENEF/RET IND</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAA9PPS0vVLyjKTylNTszXT80ry0xMSSzWTwQKlYFZRgaGFgYm+samIMrc0BxImpoZGBgYmhmYmgIpINPA2MIQKAVjWOgCzdSryM0BAAitgG5cAAAA');">38147</a></td>
                            <td class="center">1</td>
                            <td class="center">06/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38147', 'H4sIAAAAAAAAA9PPS0vVLyjKTylNTszXT80ry0xMSSzWTwQKlYFZRgaGFgYm+samIMrc0BxImpoZGBgYmhmYmgIpINPA2MIQKAVjWOgCzdSryM0BAAitgG5cAAAA', 'H4sIAAAAAAAAA0tOzM3MSdRLKc2syixxSEssLUpNzkzUS87PBQC/Fy2YGgAAAA==');">FAURECIA AUTOMOTIVE DO BRASIL LTDA</a></td>
                            <td class="right" width="10%">R$ 3.479,40</td>
                            <td class="right" width="10%">R$ 3.479,40</td>
                            <td class="right">165,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAA9PPS0vVLyjKTylNTszXT80ry0xMSSzWTwQKlYFZRgaGFgYm+samIMrc0BxImpoZGBgYmhmYmgIpINPA2MIQKAVjWOgCzdSryM0BAAitgG5cAAAA');">VENDA DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAzWMQQqAMAwEX6TZ2Kbtd4JWELQVxeLzjYKXnWEOS2XOtB91ukatlEtbdNKT1FL7bAAneHLyInK0lQCAA0QMpnCJfeJfXGef/b2tD5b+QV5cAAAA');">38148</a></td>
                            <td class="center">1</td>
                            <td class="center">06/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38148', 'H4sIAAAAAAAAAzWMQQqAMAwEX6TZ2Kbtd4JWELQVxeLzjYKXnWEOS2XOtB91ukatlEtbdNKT1FL7bAAneHLyInK0lQCAA0QMpnCJfeJfXGef/b2tD5b+QV5cAAAA', 'H4sIAAAAAAAAAytMTMlLS3UoSq1MSc3RS87PtU5KzCspzUs1RBIDAIAvr7YlAAAA');">REYDEL AUTOMOTIV BRAZIL IND E COM DE SISTEMAS AUTO LTDA</a></td>
                            <td class="right" width="10%">R$ 3.989,50</td>
                            <td class="right" width="10%">R$ 3.989,50</td>
                            <td class="right">317,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAzWMQQqAMAwEX6TZ2Kbtd4JWELQVxeLzjYKXnWEOS2XOtB91ukatlEtbdNKT1FL7bAAneHLyInK0lQCAA0QMpnCJfeJfXGef/b2tD5b+QV5cAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAA9PPS0vVLyjKTylNTszXT80ry0xMSSzWTwQKlYFZRgaGFgYm+samIMrc0BxImpoZGBgYmhmYmgIpINPA2MLQxNIQxrDUBZqpV5GbAwBun0/zXAAAAA==');">38149</a></td>
                            <td class="center">1</td>
                            <td class="center">06/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38149', 'H4sIAAAAAAAAA9PPS0vVLyjKTylNTszXT80ry0xMSSzWTwQKlYFZRgaGFgYm+samIMrc0BxImpoZGBgYmhmYmgIpINPA2MLQxNIQxrDUBZqpV5GbAwBun0/zXAAAAA==', 'H4sIAAAAAAAAAytMTMlLS3UoSq1MSc3RS87PtU5KzCspzUs1RBIDAIAvr7YlAAAA');">REYDEL AUTOMOTIV BRAZIL IND E COM DE SISTEMAS AUTO LTDA</a></td>
                            <td class="right" width="10%">R$ 12.654,64</td>
                            <td class="right" width="10%"> </td>
                            <td class="right"></td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAA9PPS0vVLyjKTylNTszXT80ry0xMSSzWTwQKlYFZRgaGFgYm+samIMrc0BxImpoZGBgYmhmYmgIpINPA2MLQxNIQxrDUBZqpV5GbAwBun0/zXAAAAA==');">DEVOLUCAO DE EMBALAGENS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx3MUQ6AIAwD0BPpOnHAdRbBxETBaCQe38lP+9KPUlkznVdNz6KVcmmbJr1JbWpdEzhiJid/BQ6W4gGwh4iVES6ydHW4wT7H99g/YUfe4FwAAAA=');">38150</a></td>
                            <td class="center">1</td>
                            <td class="center">06/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38150', 'H4sIAAAAAAAAAx3MUQ6AIAwD0BPpOnHAdRbBxETBaCQe38lP+9KPUlkznVdNz6KVcmmbJr1JbWpdEzhiJid/BQ6W4gGwh4iVES6ydHW4wT7H99g/YUfe4FwAAAA=', 'H4sIAAAAAAAAA0vLzEvMS07NLMp3KCjKL8hJLC7JzNZLzs/VSyoCAEpK6nUcAAAA');">SANTISTA COMERCIAL DE EMBALAGENS LTDA.</a></td>
                            <td class="right" width="10%">R$ 1.449,00</td>
                            <td class="right" width="10%">R$ 1.449,00</td>
                            <td class="right">90,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx3MUQ6AIAwD0BPpOnHAdRbBxETBaCQe38lP+9KPUlkznVdNz6KVcmmbJr1JbWpdEzhiJid/BQ6W4gGwh4iVES6ydHW4wT7H99g/YUfe4FwAAAA=');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAzWMQQqAMAwEX6TZqGnrc4KtIGgrisXnGwUvO8MclvKcaD9KvCYtlHJdNOpJaql+1oEDBurlhWdvKw4AO4gYTNEHFuZfxsY+23tbH5km0E1cAAAA');">38151</a></td>
                            <td class="center">1</td>
                            <td class="center">06/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38151', 'H4sIAAAAAAAAAzWMQQqAMAwEX6TZqGnrc4KtIGgrisXnGwUvO8MclvKcaD9KvCYtlHJdNOpJaql+1oEDBurlhWdvKw4AO4gYTNEHFuZfxsY+23tbH5km0E1cAAAA', 'H4sIAAAAAAAAAyvISSwuyUlMdihJLSpK1EvOz9VLKgIA3S/oGxUAAAA=');">PLAST LAC COMERCIO DE PLASTICOS LTDA.</a></td>
                            <td class="right" width="10%">R$ 1.860,00</td>
                            <td class="right" width="10%"> </td>
                            <td class="right"></td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAzWMQQqAMAwEX6TZqGnrc4KtIGgrisXnGwUvO8MclvKcaD9KvCYtlHJdNOpJaql+1oEDBurlhWdvKw4AO4gYTNEHFuZfxsY+23tbH5km0E1cAAAA');">REMESSA P/INDL.</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAzWMUQqAIBAFT1T7Vl31OpIGQWkUScdvC/p5M8zHozoX2o+Wryk1KrUvKaeTkqb+mQFHOLLyInDQFQ+APUQUqrCRxfAvbtDP8d7WB2T8/vRcAAAA');">38152</a></td>
                            <td class="center">1</td>
                            <td class="center">06/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38152', 'H4sIAAAAAAAAAzWMUQqAIBAFT1T7Vl31OpIGQWkUScdvC/p5M8zHozoX2o+Wryk1KrUvKaeTkqb+mQFHOLLyInDQFQ+APUQUqrCRxfAvbtDP8d7WB2T8/vRcAAAA', 'H4sIAAAAAAAAA8tLS3XISkwuyddLzs/VSyoCAAMB+/UQAAAA');">MAQUINAS AGRICOLAS JACTO S/A</a></td>
                            <td class="right" width="10%">R$ 288,20</td>
                            <td class="right" width="10%"> </td>
                            <td class="right"></td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAzWMUQqAIBAFT1T7Vl31OpIGQWkUScdvC/p5M8zHozoX2o+Wryk1KrUvKaeTkqb+mQFHOLLyInDQFQ+APUQUqrCRxfAvbtDP8d7WB2T8/vRcAAAA');">OUTRAS SAIDAS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAzWMQQqAMAwEX6TZWNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARIzl5ETjYigfAHiIGU7jI4vgXdPbZ39v6AA5GMpFcAAAA');">38153</a></td>
                            <td class="center">1</td>
                            <td class="center">06/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38153', 'H4sIAAAAAAAAAzWMQQqAMAwEX6TZWNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARIzl5ETjYigfAHiIGU7jI4vgXdPbZ39v6AA5GMpFcAAAA', 'H4sIAAAAAAAAA0vMySwuzs9zKEpOTCsqLUks1kvOz9VLKgIAImVq1BgAAAA=');">RCA COMERCIO DE FRUTAS LTDA</a></td>
                            <td class="right" width="10%">R$ 11.880,00</td>
                            <td class="right" width="10%">R$ 11.880,00</td>
                            <td class="right">720,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAzWMQQqAMAwEX6TZWNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARIzl5ETjYigfAHiIGU7jI4vgXdPbZ39v6AA5GMpFcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAzWMQQqAMAwEX6TZaNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARjkZ5ETjYigfAHiIGU4yRxfEv0tlnf2/rA3OTR3NcAAAA');">38154</a></td>
                            <td class="center">1</td>
                            <td class="center">09/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38154', 'H4sIAAAAAAAAAzWMQQqAMAwEX6TZaNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARjkZ5ETjYigfAHiIGU4yRxfEv0tlnf2/rA3OTR3NcAAAA', 'H4sIAAAAAAAAA8tLS3XISkwuyddLzs/VSyoCAAMB+/UQAAAA');">MAQUINAS AGRICOLAS JACTO S/A</a></td>
                            <td class="right" width="10%">R$ 4.325,84</td>
                            <td class="right" width="10%">R$ 4.325,84</td>
                            <td class="right">312,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAzWMQQqAMAwEX6TZaNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARjkZ5ETjYigfAHiIGU4yRxfEv0tlnf2/rA3OTR3NcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAzWMQQqAMAwEX6TZWNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARIzl5ETjYigfAHiIGU7jIIvwLOvvs7219AFo98AFcAAAA');">38155</a></td>
                            <td class="center">1</td>
                            <td class="center">09/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38155', 'H4sIAAAAAAAAAzWMQQqAMAwEX6TZWNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARIzl5ETjYigfAHiIGU7jIIvwLOvvs7219AFo98AFcAAAA', 'H4sIAAAAAAAAA8tLS3XISkwuyddLzs/VSyoCAAMB+/UQAAAA');">MAQUINAS AGRICOLAS JACTO S/A</a></td>
                            <td class="right" width="10%">R$ 8.222,62</td>
                            <td class="right" width="10%">R$ 8.222,62</td>
                            <td class="right">430,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAzWMQQqAMAwEX6TZWNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARIzl5ETjYigfAHiIGU7jIIvwLOvvs7219AFo98AFcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAzWMQQqAMAwEX6TZWNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARIzl5ETjYigfAHiIGU7jI4vkX39lnf2/rA3p5izpcAAAA');">38156</a></td>
                            <td class="center">1</td>
                            <td class="center">09/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38156', 'H4sIAAAAAAAAAzWMQQqAMAwEX6TZWNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARIzl5ETjYigfAHiIGU7jI4vkX39lnf2/rA3p5izpcAAAA', 'H4sIAAAAAAAAA8tLS3XISkwuyddLzs/VSyoCAAMB+/UQAAAA');">MAQUINAS AGRICOLAS JACTO S/A</a></td>
                            <td class="right" width="10%">R$ 4.227,38</td>
                            <td class="right" width="10%">R$ 4.227,38</td>
                            <td class="right">264,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAzWMQQqAMAwEX6TZWNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARIzl5ETjYigfAHiIGU7jI4vkX39lnf2/rA3p5izpcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAA9PPS0vVLyjKTylNTszXT80ry0xMSSzWTwQKlYFZRgaGFgYm+samIMrc0BxImpoZGBgYmhmYmgIpINPA2MLQ1NwQztAFmqlXkZsDANX/ymZcAAAA');">38157</a></td>
                            <td class="center">1</td>
                            <td class="center">09/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38157', 'H4sIAAAAAAAAA9PPS0vVLyjKTylNTszXT80ry0xMSSzWTwQKlYFZRgaGFgYm+samIMrc0BxImpoZGBgYmhmYmgIpINPA2MLQ1NwQztAFmqlXkZsDANX/ymZcAAAA', 'H4sIAAAAAAAAA8tLS3XISkwuyddLzs/VSyoCAAMB+/UQAAAA');">MAQUINAS AGRICOLAS JACTO S/A</a></td>
                            <td class="right" width="10%">R$ 4.655,43</td>
                            <td class="right" width="10%">R$ 4.655,43</td>
                            <td class="right">242,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAA9PPS0vVLyjKTylNTszXT80ry0xMSSzWTwQKlYFZRgaGFgYm+samIMrc0BxImpoZGBgYmhmYmgIpINPA2MLQ1NwQztAFmqlXkZsDANX/ymZcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAzWMQQqAMAwEX6TZWNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARIzl5ETjYigfAHiIGU7jIEvmX0Nlnf2/rAxxLRKdcAAAA');">38158</a></td>
                            <td class="center">1</td>
                            <td class="center">09/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38158', 'H4sIAAAAAAAAAzWMQQqAMAwEX6TZWNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARIzl5ETjYigfAHiIGU7jIEvmX0Nlnf2/rAxxLRKdcAAAA', 'H4sIAAAAAAAAAyvISSxOTizSy0tLdSiAsNOL8ksL9JLzcwHy5qqUHAAAAA==');">PLASCAR INDUSTRIA DE COMPONENTES PLASTICOS LTDA</a></td>
                            <td class="right" width="10%">R$ 1.980,03</td>
                            <td class="right" width="10%">R$ 1.980,03</td>
                            <td class="right">122,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAzWMQQqAMAwEX6TZWNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARIzl5ETjYigfAHiIGU7jIEvmX0Nlnf2/rAxxLRKdcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAA9PPS0vVLyjKTylNTszXT80ry0xMSSzWTwQKlYFZRgaGFgYm+samIMrc0BxImpoZGBgYmhmYmgIpINPA2MLQ1NIQxjDSBZqpV5GbAwA15fPVXAAAAA==');">38159</a></td>
                            <td class="center">1</td>
                            <td class="center">09/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38159', 'H4sIAAAAAAAAA9PPS0vVLyjKTylNTszXT80ry0xMSSzWTwQKlYFZRgaGFgYm+samIMrc0BxImpoZGBgYmhmYmgIpINPA2MLQ1NIQxjDSBZqpV5GbAwA15fPVXAAAAA==', 'H4sIAAAAAAAAA0tOLC7OzNdLzyzKLynJd0gsSqzMzc9L0UvOz7VOzs8rSUwu0UsqQhYHAK55hOoyAAAA');">A.RAYMOND DO BRASIL LTDA</a></td>
                            <td class="right" width="10%">R$ 9.079,11</td>
                            <td class="right" width="10%">R$ 9.079,11</td>
                            <td class="right">171,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAA9PPS0vVLyjKTylNTszXT80ry0xMSSzWTwQKlYFZRgaGFgYm+samIMrc0BxImpoZGBgYmhmYmgIpINPA2MLQ1NIQxjDSBZqpV5GbAwA15fPVXAAAAA==');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAA9PPS0vVLyjKTylNTszXT80ry0xMSSzWTwQKlYFZRgaGFgYm+samIMrc0BxImpoZGBgYmhmYmgIpINPA2ALIM4QxzHWBZupV5OYAAKY9eYtcAAAA');">38160</a></td>
                            <td class="center">1</td>
                            <td class="center">09/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38160', 'H4sIAAAAAAAAA9PPS0vVLyjKTylNTszXT80ry0xMSSzWTwQKlYFZRgaGFgYm+samIMrc0BxImpoZGBgYmhmYmgIpINPA2ALIM4QxzHWBZupV5OYAAKY9eYtcAAAA', 'H4sIAAAAAAAAA0tOzSspSszJS0t1KMvPyS4uT0xPzdNLzs/VSyoCAIe1BX4cAAAA');">MAN LATIN AMERICA INDUSTRIA E COMERCIO DE VEICULOS LTDA</a></td>
                            <td class="right" width="10%">R$ 2.593,83</td>
                            <td class="right" width="10%">R$ 2.593,83</td>
                            <td class="right">169,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAA9PPS0vVLyjKTylNTszXT80ry0xMSSzWTwQKlYFZRgaGFgYm+samIMrc0BxImpoZGBgYmhmYmgIpINPA2ALIM4QxzHWBZupV5OYAAKY9eYtcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAzWMQQqAMAwEX6TZVNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+c+CIkQZ5ETjYigfAHiIGUwyRPfMvrrPP/t7WB4+TzvlcAAAA');">38161</a></td>
                            <td class="center">1</td>
                            <td class="center">09/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38161', 'H4sIAAAAAAAAAzWMQQqAMAwEX6TZVNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+c+CIkQZ5ETjYigfAHiIGUwyRPfMvrrPP/t7WB4+TzvlcAAAA', 'H4sIAAAAAAAAA0tOzSspSszJS0t1KMvPyS4uT0xPzdNLzs/VSyoCAIe1BX4cAAAA');">VOLKSWAGEN DO BRASIL IND DE VEICULOS AUTOMOTORES LTDA</a></td>
                            <td class="right" width="10%">R$ 37.365,73</td>
                            <td class="right" width="10%">R$ 37.365,73</td>
                            <td class="right">2.247,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAzWMQQqAMAwEX6TZVNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+c+CIkQZ5ETjYigfAHiIGUwyRPfMvrrPP/t7WB4+TzvlcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAzWMQQqAMAwEX6TZVNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+c+CIkQZ5ETjYigfAHiIGUwyRveNfYmef/b2tD7skgSRcAAAA');">38162</a></td>
                            <td class="center">1</td>
                            <td class="center">09/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38162', 'H4sIAAAAAAAAAzWMQQqAMAwEX6TZVNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+c+CIkQZ5ETjYigfAHiIGUwyRveNfYmef/b2tD7skgSRcAAAA', 'H4sIAAAAAAAAA0vLzMlMzHFITkwpyEksLtFLzs/VSyoCADw8fv0WAAAA');">CADPLAST IND. E COM. DE PLASTICOS LTDA</a></td>
                            <td class="right" width="10%">R$ 635,25</td>
                            <td class="right" width="10%">R$ 635,25</td>
                            <td class="right">100,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAzWMQQqAMAwEX6TZVNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+c+CIkQZ5ETjYigfAHiIGUwyRveNfYmef/b2tD7skgSRcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAzWMQQqAMAwEX6RJjEn7nWArCNqKYvH5RsHLzjCHhTJn2I+arskq5NIWS3aCeWqfDUgRR2B5ESj4iiIiKYo4XJEjKdMv3Plnf2/rAwBR9J5cAAAA');">38163</a></td>
                            <td class="center">1</td>
                            <td class="center">09/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38163', 'H4sIAAAAAAAAAzWMQQqAMAwEX6RJjEn7nWArCNqKYvH5RsHLzjCHhTJn2I+arskq5NIWS3aCeWqfDUgRR2B5ESj4iiIiKYo4XJEjKdMv3Plnf2/rAwBR9J5cAAAA', 'H4sIAAAAAAAAA0vLzMlMzHFITkwpyEksLtFLzs/VSyoCADw8fv0WAAAA');">CADPLAST IND. E COM. DE PLASTICOS LTDA</a></td>
                            <td class="right" width="10%">R$ 18.906,25</td>
                            <td class="right" width="10%"> </td>
                            <td class="right"></td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAzWMQQqAMAwEX6RJjEn7nWArCNqKYvH5RsHLzjCHhTJn2I+arskq5NIWS3aCeWqfDUgRR2B5ESj4iiIiKYo4XJEjKdMv3Plnf2/rAwBR9J5cAAAA');">OUTRAS SAIDAS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAA9PPS0vVLyjKTylNTszXT80ry0xMSSzWTwQKlYFZRgaGFgYm+samIMrc0BxImpoZGBgYmhmYmgIpINPA2MLQzMQQxrDUBZqpV5GbAwCsSzijXAAAAA==');">38164</a></td>
                            <td class="center">1</td>
                            <td class="center">09/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38164', 'H4sIAAAAAAAAA9PPS0vVLyjKTylNTszXT80ry0xMSSzWTwQKlYFZRgaGFgYm+samIMrc0BxImpoZGBgYmhmYmgIpINPA2MLQzMQQxrDUBZqpV5GbAwCsSzijXAAAAA==', 'H4sIAAAAAAAAA8vNSSwtSk3Mc0gsLcnPTS1JzNFLzs/VSyoCAA2ip9wZAAAA');">AUTOMETAL S/A.</a></td>
                            <td class="right" width="10%">R$ 390,00</td>
                            <td class="right" width="10%">R$ 390,00</td>
                            <td class="right">30,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAA9PPS0vVLyjKTylNTszXT80ry0xMSSzWTwQKlYFZRgaGFgYm+samIMrc0BxImpoZGBgYmhmYmgIpINPA2MLQzMQQxrDUBZqpV5GbAwCsSzijXAAAAA==');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAzWMQQqAMAwEX6TZaNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARjkZ5ETjYigfAHiIGU4yRvfAvrrPP/t7WB51HV2pcAAAA');">38165</a></td>
                            <td class="center">1</td>
                            <td class="center">09/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38165', 'H4sIAAAAAAAAAzWMQQqAMAwEX6TZaNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARjkZ5ETjYigfAHiIGU4yRvfAvrrPP/t7WB51HV2pcAAAA', 'H4sIAAAAAAAAAytMTMlLS3UoSq1MSc3RS87PtU5KzCspzUs1RBIDAIAvr7YlAAAA');">REYDEL AUTOMOTIV BRAZIL IND E COM DE SISTEMAS AUTO LTDA</a></td>
                            <td class="right" width="10%">R$ 3.043,50</td>
                            <td class="right" width="10%">R$ 3.043,50</td>
                            <td class="right">168,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAzWMQQqAMAwEX6TZaNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARjkZ5ETjYigfAHiIGU4yRvfAvrrPP/t7WB51HV2pcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAzWMQQqAMAwEX6TZWJv2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARIzn/InCw9QKABd4bTOEii/Av6Oyzv7f1ATsr2n9cAAAA');">38166</a></td>
                            <td class="center">1</td>
                            <td class="center">09/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38166', 'H4sIAAAAAAAAAzWMQQqAMAwEX6TZWJv2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARIzn/InCw9QKABd4bTOEii/Av6Oyzv7f1ATsr2n9cAAAA', 'H4sIAAAAAAAAAytMTMlLS3UoSq1MSc3RS87PtU5KzCspzUs1RBIDAIAvr7YlAAAA');">REYDEL AUTOMOTIV BRAZIL IND E COM DE SISTEMAS AUTO LTDA</a></td>
                            <td class="right" width="10%">R$ 8.658,90</td>
                            <td class="right" width="10%"> </td>
                            <td class="right"></td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAzWMQQqAMAwEX6TZWJv2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARIzn/InCw9QKABd4bTOEii/Av6Oyzv7f1ATsr2n9cAAAA');">DEVOLUCAO DE EMBALAGENS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAzWMQQqAMAwEX6TZWNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARIzl5ETjYigfAHiIGU7jIPvAv0tlnf2/rAxKFbQ1cAAAA');">38167</a></td>
                            <td class="center">1</td>
                            <td class="center">09/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38167', 'H4sIAAAAAAAAAzWMQQqAMAwEX6TZWNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARIzl5ETjYigfAHiIGU7jIPvAv0tlnf2/rAxKFbQ1cAAAA', 'H4sIAAAAAAAAAytKzcxLzEnJd8jPSUnLSa3QS87P1UsqAgDnSl8iFwAAAA==');">OLDFLEX COMERCIO E DISTRIBUICAO LTDA</a></td>
                            <td class="right" width="10%">R$ 8.000,00</td>
                            <td class="right" width="10%"> </td>
                            <td class="right"></td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAzWMQQqAMAwEX6TZWNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARIzl5ETjYigfAHiIGU7jIPvAv0tlnf2/rAxKFbQ1cAAAA');">DEVOLUCAO DE EMBALAGENS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAzWMQQqAMAwEX6TZWNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARIzl5ETjYigfAHiIGU7jIPvIv6Oyzv7f1AR4NbvVcAAAA');">38168</a></td>
                            <td class="center">1</td>
                            <td class="center">09/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38168', 'H4sIAAAAAAAAAzWMQQqAMAwEX6TZWNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARIzl5ETjYigfAHiIGU7jIPvIv6Oyzv7f1AR4NbvVcAAAA', 'H4sIAAAAAAAAA8tLS3VITkwpyEksLtFLzs/VSyqyzirNyUzMwxAHAKcgBDkrAAAA');">CADPLAST IND E COM DE PLASTICOS LTDA</a></td>
                            <td class="right" width="10%">R$ 937,50</td>
                            <td class="right" width="10%"> </td>
                            <td class="right"></td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAzWMQQqAMAwEX6TZWNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARIzl5ETjYigfAHiIGU7jIPvIv6Oyzv7f1AR4NbvVcAAAA');">REMESSA P/INDL.</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAA9PPS0vVLyjKTylNTszXT80ry0xMSSzWTwQKlYFZRgaGFgYm+samIMrc0BxImpoZGBgYmhmYmgIpINPA2MLQzNIQxjDTBZqpV5GbAwDyn1S+XAAAAA==');">38169</a></td>
                            <td class="center">1</td>
                            <td class="center">09/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38169', 'H4sIAAAAAAAAA9PPS0vVLyjKTylNTszXT80ry0xMSSzWTwQKlYFZRgaGFgYm+samIMrc0BxImpoZGBgYmhmYmgIpINPA2MLQzNIQxjDTBZqpV5GbAwDyn1S+XAAAAA==', 'H4sIAAAAAAAAA8tLS3UoScxOLEnUS87P1UsqAgDMTkWMEQAAAA==');">TAKATA BRASIL LTDA</a></td>
                            <td class="right" width="10%">R$ 12.761,35</td>
                            <td class="right" width="10%">R$ 12.761,35</td>
                            <td class="right">773,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAA9PPS0vVLyjKTylNTszXT80ry0xMSSzWTwQKlYFZRgaGFgYm+samIMrc0BxImpoZGBgYmhmYmgIpINPA2MLQzNIQxjDTBZqpV5GbAwDyn1S+XAAAAA==');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx3MUQ6AIAwD0BPpOnHAdRbBxETBaCQe38lP+9KPUlkznVdNz6KVcmmbJr1JbWpdEzhiJid/BQ6W4gGwh4iVES5y6OrAYJ/je+wf6bTxS1wAAAA=');">38170</a></td>
                            <td class="center">1</td>
                            <td class="center">10/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38170', 'H4sIAAAAAAAAAx3MUQ6AIAwD0BPpOnHAdRbBxETBaCQe38lP+9KPUlkznVdNz6KVcmmbJr1JbWpdEzhiJid/BQ6W4gGwh4iVES5y6OrAYJ/je+wf6bTxS1wAAAA=', 'H4sIAAAAAAAAA9MwN9RUsLQ0MjDVNTU3NFLILEvMS81MSQUA7l6WrRgAAAA=');">FAURECIA AUTOMOTIVE DO BRASIL LTDA.</a></td>
                            <td class="right" width="10%">R$ 357,00</td>
                            <td class="right" width="10%">R$ 357,00</td>
                            <td class="right">19,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx3MUQ6AIAwD0BPpOnHAdRbBxETBaCQe38lP+9KPUlkznVdNz6KVcmmbJr1JbWpdEzhiJid/BQ6W4gGwh4iVES5y6OrAYJ/je+wf6bTxS1wAAAA=');">VENDA DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAzWMQQqAMAwEX6TZWNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARIzl5ETjYigfAHiIGU7jIgfkX39lnf2/rAwUmywBcAAAA');">38171</a></td>
                            <td class="center">1</td>
                            <td class="center">10/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38171', 'H4sIAAAAAAAAAzWMQQqAMAwEX6TZWNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARIzl5ETjYigfAHiIGU7jIgfkX39lnf2/rAwUmywBcAAAA', 'H4sIAAAAAAAAA8tLS3VITkwpyEksLtFLzs/VSyqyzirNyUzMwxAHAKcgBDkrAAAA');">CADPLAST IND E COM DE PLASTICOS LTDA</a></td>
                            <td class="right" width="10%">R$ 21.656,25</td>
                            <td class="right" width="10%"> </td>
                            <td class="right"></td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAzWMQQqAMAwEX6TZWNP2O8FWELQVxeLzjYKXnWEOS2XOtB81XZNWyqUtmvQktdQ+G8ARIzl5ETjYigfAHiIGU7jIgfkX39lnf2/rAwUmywBcAAAA');">OUTRAS SAIDAS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAA9PPS0vVLyjKTylNTszXT80ry0xMSSzWTwQKlYFZRgaGFgYm+samIMrc0BxImpoZGBgYmhmYmgIpINPA2MLQ3MgQztAFmqlXkZsDAGZ2yyxcAAAA');">38172</a></td>
                            <td class="center">1</td>
                            <td class="center">10/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38172', 'H4sIAAAAAAAAA9PPS0vVLyjKTylNTszXT80ry0xMSSzWTwQKlYFZRgaGFgYm+samIMrc0BxImpoZGBgYmhmYmgIpINPA2MLQ3MgQztAFmqlXkZsDAGZ2yyxcAAAA', 'H4sIAAAAAAAAA0tLLCktSsxNzSvJd8gtzSlJzUtPLEkt1kvOz9VLKgIAv+xZRx4AAAA=');">MULT ACESSORIOS AUTOMOTIVOS IND. E COM. EIRELI-EPP</a></td>
                            <td class="right" width="10%">R$ 2.553,00</td>
                            <td class="right" width="10%">R$ 2.553,00</td>
                            <td class="right">116,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAA9PPS0vVLyjKTylNTszXT80ry0xMSSzWTwQKlYFZRgaGFgYm+samIMrc0BxImpoZGBgYmhmYmgIpINPA2MLQ3MgQztAFmqlXkZsDAGZ2yyxcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgUJ9TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hyQYwPOHRMmWIyJSRGaDKXqh5ImmyBKCuME+x2ffXvoRIlRcAAAA');">38173</a></td>
                            <td class="center">1</td>
                            <td class="center">10/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38173', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgUJ9TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hyQYwPOHRMmWIyJSRGaDKXqh5ImmyBKCuME+x2ffXvoRIlRcAAAA', 'H4sIAAAAAAAAAwMAAAAAAAAAAAA=');">EUROFARMA LABORATORIOS S/A</a></td>
                            <td class="right" width="10%">R$ 160,98</td>
                            <td class="right" width="10%"> </td>
                            <td class="right"></td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgUJ9TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hyQYwPOHRMmWIyJSRGaDKXqh5ImmyBKCuME+x2ffXvoRIlRcAAAA');">OUTRAS SAIDAS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MSwqAMAwFT6RJbNLPcYKtIGgrisXjG928GWbxoC4FjrPle9YGpfZVs16glvpvE1JEBicfAgVb8YhIHkUMpugiBSZKXiJzioN9js++vRF78GRcAAAA');">38174</a></td>
                            <td class="center">1</td>
                            <td class="center">10/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38174', 'H4sIAAAAAAAAAx2MSwqAMAwFT6RJbNLPcYKtIGgrisXjG928GWbxoC4FjrPle9YGpfZVs16glvpvE1JEBicfAgVb8YhIHkUMpugiBSZKXiJzioN9js++vRF78GRcAAAA', 'H4sIAAAAAAAAA0vNyUytSi1ySM7PyU9L00vOz9VLKrJOy8xLzEtOzSzKR5UAAJOr07MuAAAA');">COLOFF INDUSTRIAL LTDA-EPP</a></td>
                            <td class="right" width="10%">R$ 1.988,35</td>
                            <td class="right" width="10%">R$ 1.988,35</td>
                            <td class="right">117,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MSwqAMAwFT6RJbNLPcYKtIGgrisXjG928GWbxoC4FjrPle9YGpfZVs16glvpvE1JEBicfAgVb8YhIHkUMpugiBSZKXiJzioN9js++vRF78GRcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MWw6AIAwET6TdCuVxHCKYmCgYjcTjW/3ZmczHUl0KHWfL95waldrXlNNFSVP/bQIHWDLywbPXFQeAHUQUqjCBvTBHJ8EK4qCf47NvLwAb8plcAAAA');">38175</a></td>
                            <td class="center">1</td>
                            <td class="center">10/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38175', 'H4sIAAAAAAAAAx2MWw6AIAwET6TdCuVxHCKYmCgYjcTjW/3ZmczHUl0KHWfL95waldrXlNNFSVP/bQIHWDLywbPXFQeAHUQUqjCBvTBHJ8EK4qCf47NvLwAb8plcAAAA', 'H4sIAAAAAAAAA8tLS3VITkwpyEksLtFLzs/VSyqyzirNyUzMwxAHAKcgBDkrAAAA');">CADPLAST IND E COM DE PLASTICOS LTDA</a></td>
                            <td class="right" width="10%">R$ 5.223,80</td>
                            <td class="right" width="10%">R$ 1.342,00</td>
                            <td class="right">610,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MWw6AIAwET6TdCuVxHCKYmCgYjcTjW/3ZmczHUl0KHWfL95waldrXlNNFSVP/bQIHWDLywbPXFQeAHUQUqjCBvTBHJ8EK4qCf47NvLwAb8plcAAAA');">BENEF/RET IND</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RthRZ8TiOYmCgYjcTnW7zsTOawUNYM51XTs2iFXNqmSW9QS+23CSmiB8cdgYItCyKSILPBFF2kIESzcPRMfrDP8T32D8ARKSRcAAAA');">38176</a></td>
                            <td class="center">1</td>
                            <td class="center">10/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38176', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RthRZ8TiOYmCgYjcTnW7zsTOawUNYM51XTs2iFXNqmSW9QS+23CSmiB8cdgYItCyKSILPBFF2kIESzcPRMfrDP8T32D8ARKSRcAAAA', 'H4sIAAAAAAAAA0tLLC1KTc5M1MtLS3UoTizPKa3KSy3RS87P1UsqUtCoyM3RBABMkmsLIwAAAA==');">FAURECIA AUTOMOTIVE DO BRASIL LTDA</a></td>
                            <td class="right" width="10%">R$ 7.709,50</td>
                            <td class="right" width="10%">R$ 7.709,50</td>
                            <td class="right">531,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RthRZ8TiOYmCgYjcTnW7zsTOawUNYM51XTs2iFXNqmSW9QS+23CSmiB8cdgYItCyKSILPBFF2kIESzcPRMfrDP8T32D8ARKSRcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgVJ8TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03h5QwgOcPQmLLEREpIrPBFH0iEaIpcgrscLDP8dm3F5d7EEVcAAAA');">38177</a></td>
                            <td class="center">1</td>
                            <td class="center">10/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38177', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgVJ8TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03h5QwgOcPQmLLEREpIrPBFH0iEaIpcgrscLDP8dm3F5d7EEVcAAAA', 'H4sIAAAAAAAAA8tLS3VITkwpyEksLtFLzs/VSyqyzirNyUzMwxAHAKcgBDkrAAAA');">CADPLAST IND E COM DE PLASTICOS LTDA</a></td>
                            <td class="right" width="10%">R$ 77.791,74</td>
                            <td class="right" width="10%">R$ 19.984,80</td>
                            <td class="right">9.084,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgVJ8TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03h5QwgOcPQmLLEREpIrPBFH0iEaIpcgrscLDP8dm3F5d7EEVcAAAA');">BENEF/RET IND</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQqAMAwEX6RJbLetzwlaQdBWFIvPN3rZGeawVJZMx1nne9JKubRVZ71ILbXfBpbEnhw+RIm2CMwsgQGDKbtkXWQMSB4OnX32z769KMPao1wAAAA=');">38178</a></td>
                            <td class="center">1</td>
                            <td class="center">10/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38178', 'H4sIAAAAAAAAAx2MQQqAMAwEX6RJbLetzwlaQdBWFIvPN3rZGeawVJZMx1nne9JKubRVZ71ILbXfBpbEnhw+RIm2CMwsgQGDKbtkXWQMSB4OnX32z769KMPao1wAAAA=', 'H4sIAAAAAAAAA8vNSSwtSk3Mc0gsLcnPTS1JzNFLzs/VSyoCAA2ip9wZAAAA');">AUTOMETAL S/A.</a></td>
                            <td class="right" width="10%">R$ 2.203,50</td>
                            <td class="right" width="10%">R$ 2.203,50</td>
                            <td class="right">190,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQqAMAwEX6RJbLetzwlaQdBWFIvPN3rZGeawVJZMx1nne9JKubRVZ71ILbXfBpbEnhw+RIm2CMwsgQGDKbtkXWQMSB4OnX32z769KMPao1wAAAA=');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MWw6AIAwET6TdCuVxHCKYmCgYjcTjW/3ZmczHUl0KHWfL95waldrXlNNFSVP/bQIHWDLywbPXFQeAHUQUqjCBfWSOToIVi0E/x2ffXkYdc9xcAAAA');">38179</a></td>
                            <td class="center">1</td>
                            <td class="center">10/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38179', 'H4sIAAAAAAAAAx2MWw6AIAwET6TdCuVxHCKYmCgYjcTjW/3ZmczHUl0KHWfL95waldrXlNNFSVP/bQIHWDLywbPXFQeAHUQUqjCBfWSOToIVi0E/x2ffXkYdc9xcAAAA', 'H4sIAAAAAAAAA0tLLCktSsxNzSvJd0gsTkstysxLKS0uKcpMLCzNzM1MTtRLzs/VSyoCALLa7vQoAAAA');">ASFER INDUSTRIA QUIMICA LTDA</a></td>
                            <td class="right" width="10%">R$ 1.450,00</td>
                            <td class="right" width="10%">R$ 1.450,00</td>
                            <td class="right">40,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MWw6AIAwET6TdCuVxHCKYmCgYjcTjW/3ZmczHUl0KHWfL95waldrXlNNFSVP/bQIHWDLywbPXFQeAHUQUqjCBfWSOToIVi0E/x2ffXkYdc9xcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MUQqAMAxDT6RNdd3mcYqbIOgmisPjW/3JCy8QKkum46zpnrVSLm3VpBepqfa3ARzhaJQPgYOleADsIWKwijHayDx5ic5kZ5/9s28vhJttkVwAAAA=');">38180</a></td>
                            <td class="center">1</td>
                            <td class="center">10/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38180', 'H4sIAAAAAAAAAx2MUQqAMAxDT6RNdd3mcYqbIOgmisPjW/3JCy8QKkum46zpnrVSLm3VpBepqfa3ARzhaJQPgYOleADsIWKwijHayDx5ic5kZ5/9s28vhJttkVwAAAA=', 'H4sIAAAAAAAAA0vOzy0oSix2SC7KLM5NLUnM0UvOz9VLKgIARkpfKhgAAAA=');">CRIS-METAL MOVEIS PARA BANHEIRO LTDA</a></td>
                            <td class="right" width="10%">R$ 708,86</td>
                            <td class="right" width="10%">R$ 708,86</td>
                            <td class="right">62,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MUQqAMAxDT6RNdd3mcYqbIOgmisPjW/3JCy8QKkum46zpnrVSLm3VpBepqfa3ARzhaJQPgYOleADsIWKwijHayDx5ic5kZ5/9s28vhJttkVwAAAA=');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MUQqAMAxDT6Rtne3qcYqbIOgmisPjW/3JeyQQKEuG46zpnq1CLm21ZBeYV+23AUlxhMAfIkVPFkQkQWaHKwYlJaJJWH3kzj/7Z99ekOUv51wAAAA=');">38181</a></td>
                            <td class="center">1</td>
                            <td class="center">10/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38181', 'H4sIAAAAAAAAAx2MUQqAMAxDT6Rtne3qcYqbIOgmisPjW/3JeyQQKEuG46zpnq1CLm21ZBeYV+23AUlxhMAfIkVPFkQkQWaHKwYlJaJJWH3kzj/7Z99ekOUv51wAAAA=', 'H4sIAAAAAAAAAytMTMlLS3UoSq1MSc3RS87PtU5KzCspzUs1RBIDAIAvr7YlAAAA');">REYDEL AUTOMOTIV BRAZIL IND E COM DE SISTEMAS AUTO LTDA</a></td>
                            <td class="right" width="10%">R$ 4.700,00</td>
                            <td class="right" width="10%">R$ 4.700,00</td>
                            <td class="right">290,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MUQqAMAxDT6Rtne3qcYqbIOgmisPjW/3JeyQQKEuG46zpnq1CLm21ZBeYV+23AUlxhMAfIkVPFkQkQWaHKwYlJaJJWH3kzj/7Z99ekOUv51wAAAA=');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgUJ9TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hyQYwPOHRMmWIyJSRGaDKXohcURTZAmccLDP8dm3F0hNLOFcAAAA');">38182</a></td>
                            <td class="center">1</td>
                            <td class="center">10/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38182', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgUJ9TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hyQYwPOHRMmWIyJSRGaDKXohcURTZAmccLDP8dm3F0hNLOFcAAAA', 'H4sIAAAAAAAAAyvKT08tysx3yEgvSq0oKSotzi9KLNZLzs/VSyoCADIkPMQcAAAA');">HGR IND E COM DE MAQUINAS LTDA</a></td>
                            <td class="right" width="10%">R$ 10.000,00</td>
                            <td class="right" width="10%"> </td>
                            <td class="right"></td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgUJ9TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hyQYwPOHRMmWIyJSRGaDKXohcURTZAmccLDP8dm3F0hNLOFcAAAA');">REMESSA PARA MANUTENCAO</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQqAMAwEX6RJbJPG5wStIGgrisXnG73sDHNYKEuG46zzPVmFXNpqs11gntpvA5JihMAfEiVfFkQkQWaHKwYlDUSjsEZW6fyzf/btBRfv37RcAAAA');">38183</a></td>
                            <td class="center">1</td>
                            <td class="center">10/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38183', 'H4sIAAAAAAAAAx2MQQqAMAwEX6RJbJPG5wStIGgrisXnG73sDHNYKEuG46zzPVmFXNpqs11gntpvA5JihMAfEiVfFkQkQWaHKwYlDUSjsEZW6fyzf/btBRfv37RcAAAA', 'H4sIAAAAAAAAA8tLS3XISkwuyddLzs/VSyoCAAMB+/UQAAAA');">MAQUINAS AGRICOLAS JACTO S/A</a></td>
                            <td class="right" width="10%">R$ 764,40</td>
                            <td class="right" width="10%"> </td>
                            <td class="right"></td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQqAMAwEX6RJbJPG5wStIGgrisXnG73sDHNYKEuG46zzPVmFXNpqs11gntpvA5JihMAfEiVfFkQkQWaHKwYlDUSjsEZW6fyzf/btBRfv37RcAAAA');">OUTRAS SAIDAS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RthUJ5TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CUnQg+MPkaItB0SkgMwGU3RC4olSYPGcaLDP8dm3F6tiQnVcAAAA');">38184</a></td>
                            <td class="center">1</td>
                            <td class="center">10/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38184', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RthUJ5TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CUnQg+MPkaItB0SkgMwGU3RC4olSYPGcaLDP8dm3F6tiQnVcAAAA', 'H4sIAAAAAAAAA8tLS3XISkwuyddLzs/VSyoCAAMB+/UQAAAA');">MAQUINAS AGRICOLAS JACTO S/A</a></td>
                            <td class="right" width="10%">R$ 1.528,80</td>
                            <td class="right" width="10%"> </td>
                            <td class="right"></td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RthUJ5TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CUnQg+MPkaItB0SkgMwGU3RC4olSYPGcaLDP8dm3F6tiQnVcAAAA');">OUTRAS SAIDAS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgRZ8TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03h5QwgOcPkaItCyKSILPBFH2ixESTcAqCbrDP8dm3F/2T2v5cAAAA');">38185</a></td>
                            <td class="center">1</td>
                            <td class="center">10/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38185', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgRZ8TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03h5QwgOcPkaItCyKSILPBFH2ixESTcAqCbrDP8dm3F/2T2v5cAAAA', 'H4sIAAAAAAAAAytMTMlLS3UoSq1MSc3RS87PtU5KzCspzUs1RBIDAIAvr7YlAAAA');">REYDEL AUTOMOTIV BRAZIL IND E COM DE SISTEMAS AUTO LTDA</a></td>
                            <td class="right" width="10%">R$ 17.642,04</td>
                            <td class="right" width="10%"> </td>
                            <td class="right"></td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgRZ8TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03h5QwgOcPkaItCyKSILPBFH2ixESTcAqCbrDP8dm3F/2T2v5cAAAA');">DEVOLUCAO DE EMBALAGENS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQqAMAwEX6RJtEnjc4KtIGgrisXnG73sDHNYKEuG46zpnq1CLm21ZBeYp/bbgKQYYOQPkaIvCyKSILPDFUclFaJJWIOQdv7ZP/v2AvT0YCdcAAAA');">38186</a></td>
                            <td class="center">1</td>
                            <td class="center">10/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38186', 'H4sIAAAAAAAAAx2MQQqAMAwEX6RJtEnjc4KtIGgrisXnG73sDHNYKEuG46zpnq1CLm21ZBeYp/bbgKQYYOQPkaIvCyKSILPDFUclFaJJWIOQdv7ZP/v2AvT0YCdcAAAA', 'H4sIAAAAAAAAA0vOzytJLNYrSExPLHJIyi9Kzs/RS87P1Usqsi7KTyrOz0tOzC3IL0aSAgCvBM2RMgAAAA==');">BORCOL INDUSTRIA DE BORRACHA LTDA</a></td>
                            <td class="right" width="10%">R$ 3.105,00</td>
                            <td class="right" width="10%">R$ 3.105,00</td>
                            <td class="right">180,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQqAMAwEX6RJtEnjc4KtIGgrisXnG73sDHNYKEuG46zpnq1CLm21ZBeYp/bbgKQYYOQPkaIvCyKSILPDFUclFaJJWIOQdv7ZP/v2AvT0YCdcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgUJ9TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hyQYwPOHRMmWIyJSRGaDKXohSURTZAnR+cE+x2ffXnJR4JlcAAAA');">38187</a></td>
                            <td class="center">1</td>
                            <td class="center">11/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38187', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgUJ9TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hyQYwPOHRMmWIyJSRGaDKXohSURTZAnR+cE+x2ffXnJR4JlcAAAA', 'H4sIAAAAAAAAA0tLLCktSsxNzSvJd0gsTkstysxLKS0uKcpMLCzNzM1MTtRLzs/VSyoCALLa7vQoAAAA');">ASFER INDUSTRIA QUIMICA LTDA</a></td>
                            <td class="right" width="10%">R$ 4.843,00</td>
                            <td class="right" width="10%">R$ 4.843,00</td>
                            <td class="right">260,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgUJ9TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hyQYwPOHRMmWIyJSRGaDKXohSURTZAnR+cE+x2ffXnJR4JlcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RthZbyHCKYmCgYjcTnW73sTOawUJcCx9nyPacGpfY15XRBstR/m5AUPTj+ECjYsiAiCTIbTNEpqRJFYfXi4mCf47NvLxwmk6BcAAAA');">38188</a></td>
                            <td class="center">1</td>
                            <td class="center">11/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38188', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RthZbyHCKYmCgYjcTnW73sTOawUJcCx9nyPacGpfY15XRBstR/m5AUPTj+ECjYsiAiCTIbTNEpqRJFYfXi4mCf47NvLxwmk6BcAAAA', 'H4sIAAAAAAAAAysuzc1LSy1KTXbIyM9LSdRLzs/VSyqyTs3JLE7MS0/NSYwvykxKzSzKh8sDAJOWSGUyAAAA');">HONDA AUTOMOVEIS DO BRASIL LTDA</a></td>
                            <td class="right" width="10%">R$ 12.857,00</td>
                            <td class="right" width="10%">R$ 12.857,00</td>
                            <td class="right">645,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RthZbyHCKYmCgYjcTnW73sTOawUJcCx9nyPacGpfY15XRBstR/m5AUPTj+ECjYsiAiCTIbTNEpqRJFYfXi4mCf47NvLxwmk6BcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RthZbyHCKYmCgYjcTnW73sTOawUJcCx9nyPacGpfY15XRBstR/m5AUPTj+ECjYsiAiCTIbTNEpaSSKwurF+8E+x2ffXmpa4mRcAAAA');">38189</a></td>
                            <td class="center">1</td>
                            <td class="center">11/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38189', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RthZbyHCKYmCgYjcTnW73sTOawUJcCx9nyPacGpfY15XRBstR/m5AUPTj+ECjYsiAiCTIbTNEpaSSKwurF+8E+x2ffXmpa4mRcAAAA', 'H4sIAAAAAAAAAysuzc1LSy1KTXbIyM9LSdRLzs/VSyqyTs3JLE7MS0/NSYwvykxKzSzKh8sDAJOWSGUyAAAA');">HONDA AUTOMOVEIS DO BRASIL LTDA</a></td>
                            <td class="right" width="10%">R$ 19.582,20</td>
                            <td class="right" width="10%">R$ 19.582,20</td>
                            <td class="right">924,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RthZbyHCKYmCgYjcTnW73sTOawUJcCx9nyPacGpfY15XRBstR/m5AUPTj+ECjYsiAiCTIbTNEpaSSKwurF+8E+x2ffXmpa4mRcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RthRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CSmiB8cfAgVbFkQkQWaDKbpICYmScPTCbrDP8dm3Fwb6ZVRcAAAA');">38190</a></td>
                            <td class="center">1</td>
                            <td class="center">11/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38190', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RthRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CSmiB8cfAgVbFkQkQWaDKbpICYmScPTCbrDP8dm3Fwb6ZVRcAAAA', 'H4sIAAAAAAAAA8tLS3XISkwuyddLzs/VSyoCAAMB+/UQAAAA');">MAQUINAS AGRICOLAS JACTO S/A</a></td>
                            <td class="right" width="10%">R$ 764,40</td>
                            <td class="right" width="10%"> </td>
                            <td class="right"></td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RthRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CSmiB8cfAgVbFkQkQWaDKbpICYmScPTCbrDP8dm3Fwb6ZVRcAAAA');">OUTRAS SAIDAS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RthRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CSmiB8cfAgVbFkQkQWaDKbpIiYiScPQiabDP8dm3F8NLnv1cAAAA');">38191</a></td>
                            <td class="center">1</td>
                            <td class="center">11/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38191', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RthRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CSmiB8cfAgVbFkQkQWaDKbpIiYiScPQiabDP8dm3F8NLnv1cAAAA', 'H4sIAAAAAAAAA8tLS3XISkwuyddLzs/VSyoCAAMB+/UQAAAA');">MAQUINAS AGRICOLAS JACTO S/A</a></td>
                            <td class="right" width="10%">R$ 4.334,33</td>
                            <td class="right" width="10%">R$ 4.334,33</td>
                            <td class="right">362,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RthRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CSmiB8cfAgVbFkQkQWaDKbpIiYiScPQiabDP8dm3F8NLnv1cAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtkRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hxTRw8QfAgVbFkQkQWaDKU6RkiNKwtFL8IN9js++vQNBRUBcAAAA');">38192</a></td>
                            <td class="center">1</td>
                            <td class="center">11/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38192', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RtkRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hxTRw8QfAgVbFkQkQWaDKU6RkiNKwtFL8IN9js++vQNBRUBcAAAA', 'H4sIAAAAAAAAAytMTMlLS3UoSq1MSc3RS87PtU5KzCspzUs1RBIDAIAvr7YlAAAA');">REYDEL AUTOMOTIV BRAZIL IND E COM DE SISTEMAS AUTO LTDA</a></td>
                            <td class="right" width="10%">R$ 4.052,00</td>
                            <td class="right" width="10%">R$ 4.052,00</td>
                            <td class="right">324,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtkRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hxTRw8QfAgVbFkQkQWaDKU6RkiNKwtFL8IN9js++vQNBRUBcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RthRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CSmiB8cfAgVbFkQkQWaDKbpIyREl4egl4mCf47NvL9rLQDtcAAAA');">38193</a></td>
                            <td class="center">1</td>
                            <td class="center">11/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38193', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RthRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CSmiB8cfAgVbFkQkQWaDKbpIyREl4egl4mCf47NvL9rLQDtcAAAA', 'H4sIAAAAAAAAAytMTMlLS3UoSq1MSc3RS87PtU5KzCspzUs1RBIDAIAvr7YlAAAA');">REYDEL AUTOMOTIV BRAZIL IND E COM DE SISTEMAS AUTO LTDA</a></td>
                            <td class="right" width="10%">R$ 11.505,94</td>
                            <td class="right" width="10%"> </td>
                            <td class="right"></td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RthRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CSmiB8cfAgVbFkQkQWaDKbpIyREl4egl4mCf47NvL9rLQDtcAAAA');">DEVOLUCAO DE EMBALAGENS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RthRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CSmiB8cfAgVbFkQkQWaDKbpIyRMl4egl8WCf47NvL+BuK9RcAAAA');">38194</a></td>
                            <td class="center">1</td>
                            <td class="center">11/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38194', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RthRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CSmiB8cfAgVbFkQkQWaDKbpIyRMl4egl8WCf47NvL+BuK9RcAAAA', 'H4sIAAAAAAAAA8tLS3UoScxOLEnUS87P1UsqAgDMTkWMEQAAAA==');">TAKATA BRASIL LTDA</a></td>
                            <td class="right" width="10%">R$ 9.448,83</td>
                            <td class="right" width="10%">R$ 9.448,83</td>
                            <td class="right">566,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RthRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CSmiB8cfAgVbFkQkQWaDKbpIyRMl4egl8WCf47NvL+BuK9RcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RthRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CSmiB8cfAgVbFkQkQWaDKbpIiYmScPQBZbDP8dm3F3cm3wdcAAAA');">38195</a></td>
                            <td class="center">1</td>
                            <td class="center">11/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38195', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RthRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CSmiB8cfAgVbFkQkQWaDKbpIiYmScPQBZbDP8dm3F3cm3wdcAAAA', 'H4sIAAAAAAAAA0tOzM3MSdRLKc2syixxSEssLUpNzkzUS87PBQC/Fy2YGgAAAA==');">FAURECIA AUTOMOTIVE DO BRASIL LTDA</a></td>
                            <td class="right" width="10%">R$ 3.295,80</td>
                            <td class="right" width="10%">R$ 3.295,80</td>
                            <td class="right">242,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RthRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CSmiB8cfAgVbFkQkQWaDKbpIiYmScPQBZbDP8dm3F3cm3wdcAAAA');">VENDA DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MUQqAMAxDT6RNnd3mcYqbIOgmisPjW/1I8gghVJZMx1nTPWulXNqqSS9Sq9pPAzhiJCdfBA7m4gGwh4iFIVzkybNJok24s8/+2bcXKaYqL1wAAAA=');">38196</a></td>
                            <td class="center">1</td>
                            <td class="center">12/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38196', 'H4sIAAAAAAAAAx2MUQqAMAxDT6RNnd3mcYqbIOgmisPjW/1I8gghVJZMx1nTPWulXNqqSS9Sq9pPAzhiJCdfBA7m4gGwh4iFIVzkybNJok24s8/+2bcXKaYqL1wAAAA=', 'H4sIAAAAAAAAA0suLogvSk1OTcrMTc0ryY/PS0t1SM4vKijKzCvRS87P1UsqAgBPycPmIwAAAA==');">CORPRINT GRAFICA E EDITORA LTDA</a></td>
                            <td class="right" width="10%">R$ 15.812,50</td>
                            <td class="right" width="10%">R$ 15.812,50</td>
                            <td class="right">475,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MUQqAMAxDT6RNnd3mcYqbIOgmisPjW/1I8gghVJZMx1nTPWulXNqqSS9Sq9pPAzhiJCdfBA7m4gGwh4iFIVzkybNJok24s8/+2bcXKaYqL1wAAAA=');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RthVJ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CSmiB8cfhMSWAyJSQGaDKbpISYhS4OhlksE+x2ffXvjk5WBcAAAA');">38197</a></td>
                            <td class="center">1</td>
                            <td class="center">12/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38197', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RthVJ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CSmiB8cfhMSWAyJSQGaDKbpISYhS4OhlksE+x2ffXvjk5WBcAAAA', 'H4sIAAAAAAAAAzMyNDdWsLAwMlMoS8xJySxS0Fcoy8zLTM4sLQYAzio0pBsAAAA=');">SEARA ALIMENTOS LTDA</a></td>
                            <td class="right" width="10%">R$ 39.082,27</td>
                            <td class="right" width="10%">R$ 39.082,27</td>
                            <td class="right">3.922,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RthVJ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CSmiB8cfhMSWAyJSQGaDKbpISYhS4OhlksE+x2ffXvjk5WBcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RthUJ5TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CUnQg+MPkaItB0SkgMwGU3RCSYhSYPHRTYN9js++vUdcL4ZcAAAA');">38198</a></td>
                            <td class="center">1</td>
                            <td class="center">12/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38198', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RthUJ5TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CUnQg+MPkaItB0SkgMwGU3RCSYhSYPHRTYN9js++vUdcL4ZcAAAA', 'H4sIAAAAAAAAAzMyNDdWsLAwMlMoS8xJySxS0Fcoy8zLTM4sLQYAzio0pBsAAAA=');">SEARA ALIMENTOS LTDA</a></td>
                            <td class="right" width="10%">R$ 175,00</td>
                            <td class="right" width="10%"> </td>
                            <td class="right"></td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RthUJ5TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CUnQg+MPkaItB0SkgMwGU3RCSYhSYPHRTYN9js++vUdcL4ZcAAAA');">REMESSA VASILHAME/PALLETS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RthUJ5TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CUnQg+MPkaItB0SkgMwGU3RCKRGlwOKjl8E+x2ffXvhNPyZcAAAA');">38199</a></td>
                            <td class="center">1</td>
                            <td class="center">12/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38199', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RthUJ5TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CUnQg+MPkaItB0SkgMwGU3RCKRGlwOKjl8E+x2ffXvhNPyZcAAAA', 'H4sIAAAAAAAAA0vMSUotKsl3KM7PTUwqSizOzNFLzs/VSyqyzizLz0stSUWXAQAvvzpiMQAAAA==');">SOMA SOLUCOES MAGNETICAS INDUSTRIA E COMERCIO LTDA</a></td>
                            <td class="right" width="10%">R$ 5.488,03</td>
                            <td class="right" width="10%">R$ 5.488,03</td>
                            <td class="right">363,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RthUJ5TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CUnQg+MPkaItB0SkgMwGU3RCKRGlwOKjl8E+x2ffXvhNPyZcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MSw6AIAwFT6RtgfI5TiOYmCgYjcTjW9y8mcziQV0LnFfLzyINSu2bZLlBNPXfDFJEB5YHAgVd9ohIHpkVqmijUaPkObrAadLP+T32D0/AZ4NcAAAA');">38200</a></td>
                            <td class="center">1</td>
                            <td class="center">12/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38200', 'H4sIAAAAAAAAAx2MSw6AIAwFT6RtgfI5TiOYmCgYjcTjW9y8mcziQV0LnFfLzyINSu2bZLlBNPXfDFJEB5YHAgVd9ohIHpkVqmijUaPkObrAadLP+T32D0/AZ4NcAAAA', 'H4sIAAAAAAAAA0vMycxL1StILUrNLEp0SEtNSS1KzMnNTy/N0UvOz9VJTizKyS/WK87MKYPJAgBAguj7MgAAAA==');">FEDERAL MOGUL SISTEMAS AUTOMOTIVOS LTDA</a></td>
                            <td class="right" width="10%">R$ 1.138,50</td>
                            <td class="right" width="10%">R$ 1.138,50</td>
                            <td class="right">53,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MSw6AIAwFT6RtgfI5TiOYmCgYjcTjW9y8mcziQV0LnFfLzyINSu2bZLlBNPXfDFJEB5YHAgVd9ohIHpkVqmijUaPkObrAadLP+T32D0/AZ4NcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MUQqAMAxDT6Rt3drN4xQ3QdBNFIfHt/Mn7xFCoKwZzqumZ9EKubRNk96gVrXfJqSIHhx3BAqWLIhIgswGU3TRVkSzcPRB/GCf43vsH0Mc/U5cAAAA');">38201</a></td>
                            <td class="center">1</td>
                            <td class="center">12/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38201', 'H4sIAAAAAAAAAx2MUQqAMAxDT6Rt3drN4xQ3QdBNFIfHt/Mn7xFCoKwZzqumZ9EKubRNk96gVrXfJqSIHhx3BAqWLIhIgswGU3TRVkSzcPRB/GCf43vsH0Mc/U5cAAAA', 'H4sIAAAAAAAAA0ssLcl3SAQSuakliTl6yfm5eklF1kV5+emlqZlFiRhSAEPqiowwAAAA');">AUTOMETAL SBC INJECAO E PINTURA DE PLASTICOS LTDA</a></td>
                            <td class="right" width="10%">R$ 5.088,00</td>
                            <td class="right" width="10%">R$ 5.088,00</td>
                            <td class="right">432,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MUQqAMAxDT6Rt3drN4xQ3QdBNFIfHt/Mn7xFCoKwZzqumZ9EKubRNk96gVrXfJqSIHhx3BAqWLIhIgswGU3TRVkSzcPRB/GCf43vsH0Mc/U5cAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6TdAgV8DhFMTBSMRuLzrV52JnNYqkuh42z5nlOjUvuacrooaeq/GXCEIysfAgdd8QDYQ0ShChsNDPPkJboQMOjn+OzbC9ighV9cAAAA');">38202</a></td>
                            <td class="center">1</td>
                            <td class="center">12/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38202', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6TdAgV8DhFMTBSMRuLzrV52JnNYqkuh42z5nlOjUvuacrooaeq/GXCEIysfAgdd8QDYQ0ShChsNDPPkJboQMOjn+OzbC9ighV9cAAAA', 'H4sIAAAAAAAAA8tLS9XLTSxJLcpMzHHITcxLT80p1kvOz9VLKgIACYAtZBsAAAA=');">MANGELS INDUSTRIAL S/A</a></td>
                            <td class="right" width="10%">R$ 9.905,28</td>
                            <td class="right" width="10%">R$ 9.905,28</td>
                            <td class="right">788,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6TdAgV8DhFMTBSMRuLzrV52JnNYqkuh42z5nlOjUvuacrooaeq/GXCEIysfAgdd8QDYQ0ShChsNDPPkJboQMOjn+OzbC9ighV9cAAAA');">VENDA DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgUJ9TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hyQYwPOHRMmWIyJSRGaDKXpx6ImmyBKS8GCf47NvL0I++zNcAAAA');">38203</a></td>
                            <td class="center">1</td>
                            <td class="center">12/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38203', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgUJ9TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hyQYwPOHRMmWIyJSRGaDKXpx6ImmyBKS8GCf47NvL0I++zNcAAAA', 'H4sIAAAAAAAAA0tOzM3MSdRLKc2syixxSEssLUpNzkzUS87PBQC/Fy2YGgAAAA==');">FAURECIA AUTOMOTIVE DO BRASIL LTDA</a></td>
                            <td class="right" width="10%">R$ 3.181,20</td>
                            <td class="right" width="10%">R$ 3.181,20</td>
                            <td class="right">150,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgUJ9TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hyQYwPOHRMmWIyJSRGaDKXpx6ImmyBKS8GCf47NvL0I++zNcAAAA');">VENDA DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MWw6AIAwET6TdIuVxHCKYmCgYjcTjW/3ZmczHUl0KHWfL95waldrXlNNFSVP/zYADLE3ywbPXFQeAHUQUqpiCgWWOToL1EYN+js++vXibkNxcAAAA');">38204</a></td>
                            <td class="center">1</td>
                            <td class="center">12/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38204', 'H4sIAAAAAAAAAx2MWw6AIAwET6TdIuVxHCKYmCgYjcTjW/3ZmczHUl0KHWfL95waldrXlNNFSVP/zYADLE3ywbPXFQeAHUQUqpiCgWWOToL1EYN+js++vXibkNxcAAAA', 'H4sIAAAAAAAAA8tLS3VITkwpyEksLtFLzs/VSyqyzirNyUzMwxAHAKcgBDkrAAAA');">CADPLAST IND E COM DE PLASTICOS LTDA</a></td>
                            <td class="right" width="10%">R$ 14.581,11</td>
                            <td class="right" width="10%">R$ 2.313,36</td>
                            <td class="right">1.928,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MWw6AIAwET6TdIuVxHCKYmCgYjcTjW/3ZmczHUl0KHWfL95waldrXlNNFSVP/zYADLE3ywbPXFQeAHUQUqpiCgWWOToL1EYN+js++vXibkNxcAAAA');">BENEF/RET IND</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6TdAgV8DhFMTBSMRuLzrV52JnNYqkuh42z5nlOjUvuacrooaeq/GXCEIysfAgdd8QDYQ0ShChsNhHnyEl0ED/o5Pvv2Am/Q5HNcAAAA');">38205</a></td>
                            <td class="center">1</td>
                            <td class="center">12/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38205', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6TdAgV8DhFMTBSMRuLzrV52JnNYqkuh42z5nlOjUvuacrooaeq/GXCEIysfAgdd8QDYQ0ShChsNhHnyEl0ED/o5Pvv2Am/Q5HNcAAAA', 'H4sIAAAAAAAAA0vLzMlMzHFITkwpyEksLtFLzs/VSyoCADw8fv0WAAAA');">CADPLAST IND. E COM. DE PLASTICOS LTDA</a></td>
                            <td class="right" width="10%">R$ 18.906,25</td>
                            <td class="right" width="10%"> </td>
                            <td class="right"></td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6TdAgV8DhFMTBSMRuLzrV52JnNYqkuh42z5nlOjUvuacrooaeq/GXCEIysfAgdd8QDYQ0ShChsNhHnyEl0ED/o5Pvv2Am/Q5HNcAAAA');">OUTRAS SAIDAS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgRZ8TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03h5QwgOcPkaItCyKSILPBFH1yKESTcAqJ4mCf47NvL3JEakxcAAAA');">38206</a></td>
                            <td class="center">1</td>
                            <td class="center">12/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38206', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgRZ8TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03h5QwgOcPkaItCyKSILPBFH1yKESTcAqJ4mCf47NvL3JEakxcAAAA', 'H4sIAAAAAAAAAyvISSwuyUlMdihJLSpK1EvOz9VLKgIA3S/oGxUAAAA=');">PLAST LAC COMERCIO DE PLASTICOS LTDA.</a></td>
                            <td class="right" width="10%">R$ 1.270,00</td>
                            <td class="right" width="10%"> </td>
                            <td class="right"></td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgRZ8TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03h5QwgOcPkaItCyKSILPBFH1yKESTcAqJ4mCf47NvL3JEakxcAAAA');">REMESSA P/INDL.</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MSw6AIAwFT6T9QAGP0wgmJgpGI/H4VjdvJrN4UJcCx9nyPWuDUvuqWS9QS/03RkrowcmHSNFWAiJSQBGDKbrEGImmIMkn5sE+x2ffXmY6KDpcAAAA');">38207</a></td>
                            <td class="center">1</td>
                            <td class="center">12/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38207', 'H4sIAAAAAAAAAx2MSw6AIAwFT6T9QAGP0wgmJgpGI/H4VjdvJrN4UJcCx9nyPWuDUvuqWS9QS/03RkrowcmHSNFWAiJSQBGDKbrEGImmIMkn5sE+x2ffXmY6KDpcAAAA', 'H4sIAAAAAAAAAytMTMlLS3UoSq1MSc3RS87PtU5KzCspzUs1RBIDAIAvr7YlAAAA');">REYDEL AUTOMOTIV BRAZIL IND E COM DE SISTEMAS AUTO LTDA</a></td>
                            <td class="right" width="10%">R$ 3.598,50</td>
                            <td class="right" width="10%">R$ 3.598,50</td>
                            <td class="right">253,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MSw6AIAwFT6T9QAGP0wgmJgpGI/H4VjdvJrN4UJcCx9nyPWuDUvuqWS9QS/03RkrowcmHSNFWAiJSQBGDKbrEGImmIMkn5sE+x2ffXmY6KDpcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgUJ9TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hyQYwPOHRMmWIyJSRGaDKXpxKERTZAniZbDP8dm3FwhNWwNcAAAA');">38208</a></td>
                            <td class="center">1</td>
                            <td class="center">12/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38208', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgUJ9TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hyQYwPOHRMmWIyJSRGaDKXpxKERTZAniZbDP8dm3FwhNWwNcAAAA', 'H4sIAAAAAAAAAytMTMlLS3UoSq1MSc3RS87PtU5KzCspzUs1RBIDAIAvr7YlAAAA');">REYDEL AUTOMOTIV BRAZIL IND E COM DE SISTEMAS AUTO LTDA</a></td>
                            <td class="right" width="10%">R$ 1.218,00</td>
                            <td class="right" width="10%">R$ 1.218,00</td>
                            <td class="right">74,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgUJ9TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hyQYwPOHRMmWIyJSRGaDKXpxKERTZAniZbDP8dm3FwhNWwNcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgUJ5TqOYmCgYjcTnW73sTOawUJcCx9nme9IGpfZVZ71ALfXfHJJgAM8fEiVbjohIEZkNpujFYSbKkSVI8IN9js++vfRIMLRcAAAA');">38209</a></td>
                            <td class="center">1</td>
                            <td class="center">12/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38209', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgUJ5TqOYmCgYjcTnW73sTOawUJcCx9nme9IGpfZVZ71ALfXfHJJgAM8fEiVbjohIEZkNpujFYSbKkSVI8IN9js++vfRIMLRcAAAA', 'H4sIAAAAAAAAAytMTMlLS3UoSq1MSc3RS87PtU5KzCspzUs1RBIDAIAvr7YlAAAA');">REYDEL AUTOMOTIV BRAZIL IND E COM DE SISTEMAS AUTO LTDA</a></td>
                            <td class="right" width="10%">R$ 16.689,64</td>
                            <td class="right" width="10%"> </td>
                            <td class="right"></td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgUJ5TqOYmCgYjcTnW73sTOawUJcCx9nme9IGpfZVZ71ALfXfHJJgAM8fEiVbjohIEZkNpujFYSbKkSVI8IN9js++vfRIMLRcAAAA');">DEVOLUCAO DE EMBALAGENS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgUJ9TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hyQYwPOHRMmWIyJSRGaDKXpxhERTZAnCbrDP8dm3FxKRrfdcAAAA');">38210</a></td>
                            <td class="center">1</td>
                            <td class="center">13/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38210', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgUJ9TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hyQYwPOHRMmWIyJSRGaDKXpxhERTZAnCbrDP8dm3FxKRrfdcAAAA', 'H4sIAAAAAAAAA0vOz00tSs5MzHEoSSzIzE9OTEksSS0qyszLSNRLzs/VSyoCAPbd1hwiAAAA');">DA TERRINHA COMERCIO DE ALIMENTOS LTDA</a></td>
                            <td class="right" width="10%">R$ 13.781,60</td>
                            <td class="right" width="10%">R$ 13.781,60</td>
                            <td class="right">1.120,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgUJ9TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hyQYwPOHRMmWIyJSRGaDKXpxhERTZAnCbrDP8dm3FxKRrfdcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MSwqAMAxET6RJP0njcYKtIGgrisXjG53FvMcsBupS4DhbvmdtUGpfNesFalP/zaMTjBDoQ3LJmhgRHSORwRSDeGeZmCQKy2Cf47NvL9cgVl5cAAAA');">38211</a></td>
                            <td class="center">1</td>
                            <td class="center">13/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38211', 'H4sIAAAAAAAAAx2MSwqAMAxET6RJP0njcYKtIGgrisXjG53FvMcsBupS4DhbvmdtUGpfNesFalP/zaMTjBDoQ3LJmhgRHSORwRSDeGeZmCQKy2Cf47NvL9cgVl5cAAAA', 'H4sIAAAAAAAAA6vIzdHLS0t1SMwryUwtLkksyUzOL9ZLzs/VSyoCAL3VLu4cAAAA');">ESD ANTIESTATICOS COMERCIAL E INDUSTRIAL LTDA</a></td>
                            <td class="right" width="10%">R$ 4.280,76</td>
                            <td class="right" width="10%">R$ 4.280,76</td>
                            <td class="right">238,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MSwqAMAxET6RJP0njcYKtIGgrisXjG53FvMcsBupS4DhbvmdtUGpfNesFalP/zaMTjBDoQ3LJmhgRHSORwRSDeGeZmCQKy2Cf47NvL9cgVl5cAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgUJ9TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hyQYwPOHRMmWIyJSRGaDKXpx5IimyBIk+cE+x2ffXp1Tl5BcAAAA');">38212</a></td>
                            <td class="center">1</td>
                            <td class="center">13/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38212', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgUJ9TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hyQYwPOHRMmWIyJSRGaDKXpx5IimyBIk+cE+x2ffXp1Tl5BcAAAA', 'H4sIAAAAAAAAA0tLLC1KTc5M1MtLS3UoTizPKa3KSy3RS87P1UsqUtCoyM3RBABMkmsLIwAAAA==');">FAURECIA AUTOMOTIVE DO BRASIL LTDA</a></td>
                            <td class="right" width="10%">R$ 1.160,00</td>
                            <td class="right" width="10%">R$ 1.160,00</td>
                            <td class="right">68,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgUJ9TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hyQYwPOHRMmWIyJSRGaDKXpx5IimyBIk+cE+x2ffXp1Tl5BcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RthUJ5TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CUnQg+MPkaItB0SkgMwGU3QykSNKgcWLpME+x2ffXtYCUCNcAAAA');">38213</a></td>
                            <td class="center">1</td>
                            <td class="center">13/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38213', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RthUJ5TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CUnQg+MPkaItB0SkgMwGU3QykSNKgcWLpME+x2ffXtYCUCNcAAAA', 'H4sIAAAAAAAAA8tLS3VIKkrTTSrSS87PBQBjsM/wDgAAAA==');">BRF S/A</a></td>
                            <td class="right" width="10%">R$ 1.079,16</td>
                            <td class="right" width="10%">R$ 1.079,16</td>
                            <td class="right">36,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RthUJ5TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CUnQg+MPkaItB0SkgMwGU3QykSNKgcWLpME+x2ffXtYCUCNcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MSwqAMAwFT6RJatLPcYKtIGgrisXjG928GWbxoC4FjrPle9YGpfZVs16glvpvDikiwyQfAgVb8YhIHkUMpjhFR0yUvESOiQf7HJ99ewH0BeN3XAAAAA==');">38214</a></td>
                            <td class="center">1</td>
                            <td class="center">13/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38214', 'H4sIAAAAAAAAAx2MSwqAMAwFT6RJatLPcYKtIGgrisXjG928GWbxoC4FjrPle9YGpfZVs16glvpvDikiwyQfAgVb8YhIHkUMpjhFR0yUvESOiQf7HJ99ewH0BeN3XAAAAA==', 'H4sIAAAAAAAAA8tLS3VITkwpyEksLtFLzs/VSyqyzirNyUzMwxAHAKcgBDkrAAAA');">CADPLAST IND E COM DE PLASTICOS LTDA</a></td>
                            <td class="right" width="10%">R$ 7.942,72</td>
                            <td class="right" width="10%">R$ 2.090,00</td>
                            <td class="right">950,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MSwqAMAwFT6RJatLPcYKtIGgrisXjG928GWbxoC4FjrPle9YGpfZVs16glvpvDikiwyQfAgVb8YhIHkUMpjhFR0yUvESOiQf7HJ99ewH0BeN3XAAAAA==');">BENEF/RET IND</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MWw6AIAwET6TdCuVxHCKYmCgYjcTjW/3ZmczHUl0KHWfL95waldrXlNNFSVP/bQIHWDLywbPXFQeAHUQUqjBhYmGOToKNkEE/x2ffXuVl4YpcAAAA');">38215</a></td>
                            <td class="center">1</td>
                            <td class="center">13/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38215', 'H4sIAAAAAAAAAx2MWw6AIAwET6TdCuVxHCKYmCgYjcTjW/3ZmczHUl0KHWfL95waldrXlNNFSVP/bQIHWDLywbPXFQeAHUQUqjBhYmGOToKNkEE/x2ffXuVl4YpcAAAA', 'H4sIAAAAAAAAA8tLS9UrSSx1KMhJLC7JTM7PzcsszdUD0tZ5QJni1KKyzORUFFkAhZsBeTIAAAA=');">PLASTIC OMNIUM DO BRASIL LTDA</a></td>
                            <td class="right" width="10%">R$ 5.360,00</td>
                            <td class="right" width="10%">R$ 5.360,00</td>
                            <td class="right">300,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MWw6AIAwET6TdCuVxHCKYmCgYjcTjW/3ZmczHUl0KHWfL95waldrXlNNFSVP/bQIHWDLywbPXFQeAHUQUqjBhYmGOToKNkEE/x2ffXuVl4YpcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RthRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CSmiB8cfAgVbFkQkQWaDKbo4kRAl4egT4WCf47NvLz3N4oxcAAAA');">38216</a></td>
                            <td class="center">1</td>
                            <td class="center">13/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38216', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RthRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CSmiB8cfAgVbFkQkQWaDKbo4kRAl4egT4WCf47NvLz3N4oxcAAAA', 'H4sIAAAAAAAAA0vOzy0oSix2KCjKL0lNLknUy0st0UsqAgA/mIfuFwAAAA==');">COPLATEX INDUSTRIA E COMERCIO DE TECIDOSLTDA</a></td>
                            <td class="right" width="10%">R$ 7.820,00</td>
                            <td class="right" width="10%">R$ 7.820,00</td>
                            <td class="right">425,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RthRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CSmiB8cfAgVbFkQkQWaDKbo4kRAl4egT4WCf47NvLz3N4oxcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtkRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hxTRw8QfAgVbFkQkQWaDKU7RUSBKwtEnJ4N9js++veyPLcNcAAAA');">38217</a></td>
                            <td class="center">1</td>
                            <td class="center">13/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38217', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RtkRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hxTRw8QfAgVbFkQkQWaDKU7RUSBKwtEnJ4N9js++veyPLcNcAAAA', 'H4sIAAAAAAAAAysoyixOzsxJdEhOzE0syslPTkxOzNdLzs/VSyoCAF95yAkcAAAA');">CAMAR LOCACAO E MANUTENCAO DE EQUIPAMENTO LTDA</a></td>
                            <td class="right" width="10%">R$ 3.389,00</td>
                            <td class="right" width="10%"> </td>
                            <td class="right"></td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtkRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hxTRw8QfAgVbFkQkQWaDKU7RUSBKwtEnJ4N9js++veyPLcNcAAAA');">OUTRAS SAIDAS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RthUJ5TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CUnQg+MPkaItB0SkgMwGU3QykRClwOKTo8E+x2ffXtUfEQtcAAAA');">38218</a></td>
                            <td class="center">1</td>
                            <td class="center">13/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38218', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RthUJ5TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CUnQg+MPkaItB0SkgMwGU3QykRClwOKTo8E+x2ffXtUfEQtcAAAA', 'H4sIAAAAAAAAA0tMKcpMzEt0yMkvSs1Ly0mt0EvOz9VLKgIAIp7oUhgAAAA=');">LORENPACK INDUSTRIA E COMERCIO DE EMBALAGENS LTDA EPP.</a></td>
                            <td class="right" width="10%">R$ 7.727,43</td>
                            <td class="right" width="10%">R$ 7.727,43</td>
                            <td class="right">242,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RthUJ5TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CUnQg+MPkaItB0SkgMwGU3QykRClwOKTo8E+x2ffXtUfEQtcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MSw6AIAwFT6RtgfI5TiOYmCgYjcTjW9y8mcziQV0LnFfLzyINSu2bZLlBNPXfDFJEB5YHAgVd9ohIHpkVqmijoUSUPEeXXJj0c36P/QN+/TVNXAAAAA==');">38219</a></td>
                            <td class="center">1</td>
                            <td class="center">13/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38219', 'H4sIAAAAAAAAAx2MSw6AIAwFT6RtgfI5TiOYmCgYjcTjW9y8mcziQV0LnFfLzyINSu2bZLlBNPXfDFJEB5YHAgVd9ohIHpkVqmijoUSUPEeXXJj0c36P/QN+/TVNXAAAAA==', 'H4sIAAAAAAAAA8tLS3VIyklMzk5NSQUSRXrJ+bl6SUXWCnlpqWn5RXmpyQ7FSSlJRYnFmTkQOQBXgo+lMgAAAA==');">BLACK E DECKER DO BRASIL LTDA</a></td>
                            <td class="right" width="10%">R$ 10.478,05</td>
                            <td class="right" width="10%">R$ 10.478,05</td>
                            <td class="right">754,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MSw6AIAwFT6RtgfI5TiOYmCgYjcTjW9y8mcziQV0LnFfLzyINSu2bZLlBNPXfDFJEB5YHAgVd9ohIHpkVqmijoUSUPEeXXJj0c36P/QN+/TVNXAAAAA==');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MUQqAMAxDT6Rt3dptxylugqCbKA6Pb/Un7xFCoC4FjrPle9YGpfZVs16gVvXfJqSIHhx/CBQsWRCRBJkNpujiZDNKwtEnlsE+x2ffXhRSZsRcAAAA');">38220</a></td>
                            <td class="center">1</td>
                            <td class="center">13/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38220', 'H4sIAAAAAAAAAx2MUQqAMAxDT6Rt3dptxylugqCbKA6Pb/Un7xFCoC4FjrPle9YGpfZVs16gVvXfJqSIHhx/CBQsWRCRBJkNpujiZDNKwtEnlsE+x2ffXhRSZsRcAAAA', 'H4sIAAAAAAAAAyvISSwuyUlMdihJLSpK1EvOz9VLKgIA3S/oGxUAAAA=');">PLAST LAC COMERCIO DE PLASTICOS LTDA.</a></td>
                            <td class="right" width="10%">R$ 3.830,00</td>
                            <td class="right" width="10%"> </td>
                            <td class="right"></td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MUQqAMAxDT6Rt3dptxylugqCbKA6Pb/Un7xFCoC4FjrPle9YGpfZVs16gVvXfJqSIHhx/CBQsWRCRBJkNpujiZDNKwtEnlsE+x2ffXhRSZsRcAAAA');">REMESSA P/INDL.</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtkRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hxTRw8QfAgVbFkQkQWaDKU7ROSJKwtEnocE+x2ffXoYE0pxcAAAA');">38221</a></td>
                            <td class="center">1</td>
                            <td class="center">13/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38221', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RtkRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hxTRw8QfAgVbFkQkQWaDKU7ROSJKwtEnocE+x2ffXoYE0pxcAAAA', 'H4sIAAAAAAAAA0tNKU0sSsnXK8nPTaxyyE3MK01LLMkvStRLzs/VSyoCAMJBsKUfAAAA');">CIA MANUFATORA DE TECIDOS DE ALGODAO</a></td>
                            <td class="right" width="10%">R$ 9.775,00</td>
                            <td class="right" width="10%">R$ 9.775,00</td>
                            <td class="right">299,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtkRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hxTRw8QfAgVbFkQkQWaDKU7ROSJKwtEnocE+x2ffXoYE0pxcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtkVJ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hxTRw8QfhMSWAyJSQGaDKU7ROUeUAkefRAb7HJ99ewGbkFyjXAAAAA==');">38222</a></td>
                            <td class="center">1</td>
                            <td class="center">13/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38222', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RtkVJ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hxTRw8QfhMSWAyJSQGaDKU7ROUeUAkefRAb7HJ99ewGbkFyjXAAAAA==', 'H4sIAAAAAAAAAytMTMlLS3UoSq1MSc3RS87PtU5KzCspzUs1RBIDAIAvr7YlAAAA');">REYDEL AUTOMOTIV BRAZIL IND E COM DE SISTEMAS AUTO LTDA</a></td>
                            <td class="right" width="10%">R$ 6.246,00</td>
                            <td class="right" width="10%">R$ 6.246,00</td>
                            <td class="right">545,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtkVJ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hxTRw8QfhMSWAyJSQGaDKU7ROUeUAkefRAb7HJ99ewGbkFyjXAAAAA==');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgUJ5TqOYmCgYjcTnW73sTOawUJcCx9nme9IGpfZVZ71ALfXfHJJgAM8fEiVbjohIEZkNpujFOU+UI0vI4gb7HJ99ewEBDiLPXAAAAA==');">38223</a></td>
                            <td class="center">1</td>
                            <td class="center">13/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38223', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgUJ5TqOYmCgYjcTnW73sTOawUJcCx9nme9IGpfZVZ71ALfXfHJJgAM8fEiVbjohIEZkNpujFOU+UI0vI4gb7HJ99ewEBDiLPXAAAAA==', 'H4sIAAAAAAAAAytMTMlLS3UoSq1MSc3RS87PtU5KzCspzUs1RBIDAIAvr7YlAAAA');">REYDEL AUTOMOTIV BRAZIL IND E COM DE SISTEMAS AUTO LTDA</a></td>
                            <td class="right" width="10%">R$ 13.361,32</td>
                            <td class="right" width="10%"> </td>
                            <td class="right"></td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgUJ5TqOYmCgYjcTnW73sTOawUJcCx9nme9IGpfZVZ71ALfXfHJJgAM8fEiVbjohIEZkNpujFOU+UI0vI4gb7HJ99ewEBDiLPXAAAAA==');">DEVOLUCAO DE EMBALAGENS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtkUJ5TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hyToYeIPkaItB0SkgMwGU5zEOU+UAotPSQb7HJ99ewHqZPD/XAAAAA==');">38224</a></td>
                            <td class="center">1</td>
                            <td class="center">13/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38224', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RtkUJ5TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hyToYeIPkaItB0SkgMwGU5zEOU+UAotPSQb7HJ99ewHqZPD/XAAAAA==', 'H4sIAAAAAAAAA8tNLEpOzcl3SM/PS8nPSSzWS87P1UsqAgBY6bFnFwAAAA==');">FINOCORTE IND. COM. DE FERRO E METAIS LTDA EPP</a></td>
                            <td class="right" width="10%">R$ 1.840,00</td>
                            <td class="right" width="10%">R$ 1.840,00</td>
                            <td class="right">116,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtkUJ5TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hyToYeIPkaItB0SkgMwGU5zEOU+UAotPSQb7HJ99ewHqZPD/XAAAAA==');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MSw6AIAwFT6T9YAGP0wgmJgpGI/H4VjZvJrN4UNYM51XTs2iFXNqmSW9QS60bI0WcwMmPQMFWPCKSRxGDKbrILESzl2iJB/sc32P/AAw3waFcAAAA');">38225</a></td>
                            <td class="center">1</td>
                            <td class="center">16/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38225', 'H4sIAAAAAAAAAx2MSw6AIAwFT6T9YAGP0wgmJgpGI/H4VjZvJrN4UNYM51XTs2iFXNqmSW9QS60bI0WcwMmPQMFWPCKSRxGDKbrILESzl2iJB/sc32P/AAw3waFcAAAA', 'H4sIAAAAAAAAA0vOzy0oSix2SKpM10vOz9VLKgIAxx99/xIAAAA=');">BYG TRANSEQUIP IND. E COM. DE EMPILHADEIRAS LTDA</a></td>
                            <td class="right" width="10%">R$ 3.320,08</td>
                            <td class="right" width="10%">R$ 3.320,08</td>
                            <td class="right">213,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MSw6AIAwFT6T9YAGP0wgmJgpGI/H4VjZvJrN4UNYM51XTs2iFXNqmSW9QS60bI0WcwMmPQMFWPCKSRxGDKbrILESzl2iJB/sc32P/AAw3waFcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MUQqAMAxDT6RtN9vN4xQ3QdBNFIfHt+4n7xFCoKwZzqumZ9EKubRNk96gVrVuDiniBJ5/BAqWLIhIgswGU/TROSGahSPbfLDP8T32DwVQe3hcAAAA');">38226</a></td>
                            <td class="center">1</td>
                            <td class="center">16/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38226', 'H4sIAAAAAAAAAx2MUQqAMAxDT6RtN9vN4xQ3QdBNFIfHt+4n7xFCoKwZzqumZ9EKubRNk96gVrVuDiniBJ5/BAqWLIhIgswGU/TROSGahSPbfLDP8T32DwVQe3hcAAAA', 'H4sIAAAAAAAAA0ssSc1LScsvcgDiFL3k/FwAXdEbfBEAAAA=');">FORD MOTOR COMPANY BRASIL LTDA</a></td>
                            <td class="right" width="10%">R$ 3.150,00</td>
                            <td class="right" width="10%">R$ 3.150,00</td>
                            <td class="right">51,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MUQqAMAxDT6RtN9vN4xQ3QdBNFIfHt+4n7xFCoKwZzqumZ9EKubRNk96gVrVuDiniBJ5/BAqWLIhIgswGU/TROSGahSPbfLDP8T32DwVQe3hcAAAA');">VENDAS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQqAMAwEX6TZpKatzylaQdBWFIvPN3rZGeawVJZMx1nne0qVcmlrmtNFyVL7TcARAzn9EDjYqgfAHqoGU7goEphHr1EhrrPP/tm3F4P1+8ZcAAAA');">38227</a></td>
                            <td class="center">1</td>
                            <td class="center">16/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38227', 'H4sIAAAAAAAAAx2MQQqAMAwEX6TZpKatzylaQdBWFIvPN3rZGeawVJZMx1nne0qVcmlrmtNFyVL7TcARAzn9EDjYqgfAHqoGU7goEphHr1EhrrPP/tm3F4P1+8ZcAAAA', 'H4sIAAAAAAAAA0tLLCktSsxNzSvJd8gtzSlJzUtPLEkt1kvOz9VLKgIAv+xZRx4AAAA=');">MULT ACESSORIOS AUTOMOTIVOS IND. E COM. EIRELI-EPP</a></td>
                            <td class="right" width="10%">R$ 2.553,00</td>
                            <td class="right" width="10%">R$ 2.553,00</td>
                            <td class="right">115,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQqAMAwEX6TZpKatzylaQdBWFIvPN3rZGeawVJZMx1nne0qVcmlrmtNFyVL7TcARAzn9EDjYqgfAHqoGU7goEphHr1EhrrPP/tm3F4P1+8ZcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwUJ5TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hyQ4gecPkaItB0SkgMwGU/TinBClwMLo02Cf47NvL+2CiP9cAAAA');">38228</a></td>
                            <td class="center">1</td>
                            <td class="center">16/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38228', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwUJ5TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hyQ4gecPkaItB0SkgMwGU/TinBClwMLo02Cf47NvL+2CiP9cAAAA', 'H4sIAAAAAAAAA0ssLcl3SAQSuakliTl6yfm5eklF1kV5+emlqZlFiRhSAEPqiowwAAAA');">AUTOMETAL SBC INJECAO E PINTURA DE PLASTICOS LTDA</a></td>
                            <td class="right" width="10%">R$ 3.934,50</td>
                            <td class="right" width="10%">R$ 3.934,50</td>
                            <td class="right">296,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwUJ5TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hyQ4gecPkaItB0SkgMwGU/TinBClwMLo02Cf47NvL+2CiP9cAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MWw6AIAwET6TdIuVxHCKYmCgYjcTjW/3ZmczHUl0KHWfL95waldrXlNNFSVP/zYADLE3ywbPXFQeAHUQUqpiCMZE5OgkCawf9HJ99ewGb/vk7XAAAAA==');">38229</a></td>
                            <td class="center">1</td>
                            <td class="center">16/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38229', 'H4sIAAAAAAAAAx2MWw6AIAwET6TdIuVxHCKYmCgYjcTjW/3ZmczHUl0KHWfL95waldrXlNNFSVP/zYADLE3ywbPXFQeAHUQUqpiCMZE5OgkCawf9HJ99ewGb/vk7XAAAAA==', 'H4sIAAAAAAAAA8vNSSwtSk3Mc0gsLcnPTS1JzNFLzs/VSyoCAA2ip9wZAAAA');">AUTOMETAL S/A.</a></td>
                            <td class="right" width="10%">R$ 7.690,16</td>
                            <td class="right" width="10%">R$ 7.690,16</td>
                            <td class="right">707,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MWw6AIAwET6TdIuVxHCKYmCgYjcTjW/3ZmczHUl0KHWfL95waldrXlNNFSVP/zYADLE3ywbPXFQeAHUQUqpiCMZE5OgkCawf9HJ99ewGb/vk7XAAAAA==');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQqAMAwEX6TZtKatzwlaQdBWFIvPN3rZGeawVJZMx1nne9JKubRVZ71ILbXfHDhhIC8fIkdbCQA4QMRgCp+cB/MYJAnEd/bZP/v2AvdefgtcAAAA');">38230</a></td>
                            <td class="center">1</td>
                            <td class="center">16/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38230', 'H4sIAAAAAAAAAx2MQQqAMAwEX6TZtKatzwlaQdBWFIvPN3rZGeawVJZMx1nne9JKubRVZ71ILbXfHDhhIC8fIkdbCQA4QMRgCp+cB/MYJAnEd/bZP/v2AvdefgtcAAAA', 'H4sIAAAAAAAAA0tOzSspSszJS0t1KMvPyS4uT0xPzdNLzs/VSyoCAIe1BX4cAAAA');">MAN LATIN AMERICA INDUSTRIA E COMERCIO DE VEICULOS LTDA</a></td>
                            <td class="right" width="10%">R$ 53.982,75</td>
                            <td class="right" width="10%">R$ 53.982,75</td>
                            <td class="right">2.912,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQqAMAwEX6TZtKatzwlaQdBWFIvPN3rZGeawVJZMx1nne9JKubRVZ71ILbXfHDhhIC8fIkdbCQA4QMRgCp+cB/MYJAnEd/bZP/v2AvdefgtcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hxRxAs8fAgVbFkQkQWaDKfroPBEl4cgoabDP8dm3FzLvhaJcAAAA');">38231</a></td>
                            <td class="center">1</td>
                            <td class="center">16/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38231', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hxRxAs8fAgVbFkQkQWaDKfroPBEl4cgoabDP8dm3FzLvhaJcAAAA', 'H4sIAAAAAAAAA0tOzSspSszJS0t1KMvPyS4uT0xPzdNLzs/VSyoCAIe1BX4cAAAA');">VOLKSWAGEN DO BRASIL IND DE VEICULOS AUTOMOTORES LTDA</a></td>
                            <td class="right" width="10%">R$ 47.592,93</td>
                            <td class="right" width="10%">R$ 47.592,93</td>
                            <td class="right">2.837,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hxRxAs8fAgVbFkQkQWaDKfroPBEl4cgoabDP8dm3FzLvhaJcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6TdAgV8DhFMTBSMRuLzrV52JnNYqkuh42z5nlOjUvuacrooaeq/GXCEIysfAgdd8QDYQ0ShChuNNcyTlygIbtDP8dm3F/LlXh9cAAAA');">38232</a></td>
                            <td class="center">1</td>
                            <td class="center">16/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38232', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6TdAgV8DhFMTBSMRuLzrV52JnNYqkuh42z5nlOjUvuacrooaeq/GXCEIysfAgdd8QDYQ0ShChuNNcyTlygIbtDP8dm3F/LlXh9cAAAA', 'H4sIAAAAAAAAAysuzc1LSy1KTXbIyM9LSdRLzs/VSyqyTs3JLE7MS0/NSYwvykxKzSzKh8sDAJOWSGUyAAAA');">HONDA AUTOMOVEIS DO BRASIL LTDA</a></td>
                            <td class="right" width="10%">R$ 24.928,09</td>
                            <td class="right" width="10%">R$ 24.928,09</td>
                            <td class="right">768,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6TdAgV8DhFMTBSMRuLzrV52JnNYqkuh42z5nlOjUvuacrooaeq/GXCEIysfAgdd8QDYQ0ShChuNNcyTlygIbtDP8dm3F/LlXh9cAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQqAMAwEX6TZtKatzwlaQdBWFIvPN3rZGeawVJZMx1nne9JKubRVZ71ILbXfHDhhIC8fIkdbCQA4QMRgCp+c98xjkCRI6Oyzf/btBStvW2RcAAAA');">38233</a></td>
                            <td class="center">1</td>
                            <td class="center">16/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38233', 'H4sIAAAAAAAAAx2MQQqAMAwEX6TZtKatzwlaQdBWFIvPN3rZGeawVJZMx1nne9JKubRVZ71ILbXfHDhhIC8fIkdbCQA4QMRgCp+c98xjkCRI6Oyzf/btBStvW2RcAAAA', 'H4sIAAAAAAAAA8tLS3VITkwpyEksLtFLzs/VSyqyzirNyUzMwxAHAKcgBDkrAAAA');">CADPLAST IND E COM DE PLASTICOS LTDA</a></td>
                            <td class="right" width="10%">R$ 2.310,00</td>
                            <td class="right" width="10%">R$ 1.080,00</td>
                            <td class="right">118,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQqAMAwEX6TZtKatzwlaQdBWFIvPN3rZGeawVJZMx1nne9JKubRVZ71ILbXfHDhhIC8fIkdbCQA4QMRgCp+c98xjkCRI6Oyzf/btBStvW2RcAAAA');">BENEF/RET IND</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MWw6AIAwET6TdCuVxHCKYmCgYjcTjW/3ZmczHUl0KHWfL95waldrXlNNFSVP/bQIHWDLywbPXFQeAHUQUqjBhMpY5OgmCKIN+js++vRHKMItcAAAA');">38234</a></td>
                            <td class="center">1</td>
                            <td class="center">16/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38234', 'H4sIAAAAAAAAAx2MWw6AIAwET6TdCuVxHCKYmCgYjcTjW/3ZmczHUl0KHWfL95waldrXlNNFSVP/bQIHWDLywbPXFQeAHUQUqjBhMpY5OgmCKIN+js++vRHKMItcAAAA', 'H4sIAAAAAAAAA8tLS3VITkwpyEksLtFLzs/VSyqyzirNyUzMwxAHAKcgBDkrAAAA');">CADPLAST IND E COM DE PLASTICOS LTDA</a></td>
                            <td class="right" width="10%">R$ 45.402,02</td>
                            <td class="right" width="10%">R$ 12.858,12</td>
                            <td class="right">5.845,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MWw6AIAwET6TdCuVxHCKYmCgYjcTjW/3ZmczHUl0KHWfL95waldrXlNNFSVP/bQIHWDLywbPXFQeAHUQUqjBhMpY5OgmCKIN+js++vRHKMItcAAAA');">BENEF/RET IND</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MUQqAMAxDT6RNp+3mcYabIOgmisPjW/3JeyQQKkum46zpnmOlXNoaU7woWtV+c+CAkQb54NlbigJghYjBFENwtvOkEoShnX32z769hoLEWFwAAAA=');">38235</a></td>
                            <td class="center">1</td>
                            <td class="center">16/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38235', 'H4sIAAAAAAAAAx2MUQqAMAxDT6RNp+3mcYabIOgmisPjW/3JeyQQKkum46zpnmOlXNoaU7woWtV+c+CAkQb54NlbigJghYjBFENwtvOkEoShnX32z769hoLEWFwAAAA=', 'H4sIAAAAAAAAA0tJLMtMcchNLMrJycwr1kvOz9VLKgIAv0pxLxUAAAA=');">MARLLINS COMERCIO E REPRESENTACAO INDUSTRIAL EIRELI</a></td>
                            <td class="right" width="10%">R$ 10.000,00</td>
                            <td class="right" width="10%"> </td>
                            <td class="right"></td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MUQqAMAxDT6RNp+3mcYabIOgmisPjW/3JeyQQKkum46zpnmOlXNoaU7woWtV+c+CAkQb54NlbigJghYjBFENwtvOkEoShnX32z769hoLEWFwAAAA=');">REMESSA PARA MANUTENCAO</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQqAMAwEX6TJtiatzylaQdBWFIvPN3rZGeawVJZMx1nne0qVcmlrmtNFyVL7zTEiD+TlQ0CwFWVmKIsYTNlH5xUYVaIA6Oyzf/btBdgCMXBcAAAA');">38236</a></td>
                            <td class="center">1</td>
                            <td class="center">16/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38236', 'H4sIAAAAAAAAAx2MQQqAMAwEX6TJtiatzylaQdBWFIvPN3rZGeawVJZMx1nne0qVcmlrmtNFyVL7zTEiD+TlQ0CwFWVmKIsYTNlH5xUYVaIA6Oyzf/btBdgCMXBcAAAA', 'H4sIAAAAAAAAAytMTMlLS3UoSq1MSc3RS87PtU5KzCspzUs1RBIDAIAvr7YlAAAA');">REYDEL AUTOMOTIV BRAZIL IND E COM DE SISTEMAS AUTO LTDA</a></td>
                            <td class="right" width="10%">R$ 4.296,50</td>
                            <td class="right" width="10%">R$ 4.296,50</td>
                            <td class="right">307,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQqAMAwEX6TJtiatzylaQdBWFIvPN3rZGeawVJZMx1nne0qVcmlrmtNFyVL7zTEiD+TlQ0CwFWVmKIsYTNlH5xUYVaIA6Oyzf/btBdgCMXBcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwVJ8TiOYmCgYjcTnW7nsTOawUNYM51XTs2iFXNqmSW9QS62bQ4o4gecfQmLLAREpILPBFH10XojmwJHJyWCf43vsHwlA/j9cAAAA');">38237</a></td>
                            <td class="center">1</td>
                            <td class="center">16/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38237', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwVJ8TiOYmCgYjcTnW7nsTOawUNYM51XTs2iFXNqmSW9QS62bQ4o4gecfQmLLAREpILPBFH10XojmwJHJyWCf43vsHwlA/j9cAAAA', 'H4sIAAAAAAAAAytMTMlLS3UoSq1MSc3RS87PtU5KzCspzUs1RBIDAIAvr7YlAAAA');">REYDEL AUTOMOTIV BRAZIL IND E COM DE SISTEMAS AUTO LTDA</a></td>
                            <td class="right" width="10%">R$ 10.239,46</td>
                            <td class="right" width="10%"> </td>
                            <td class="right"></td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwVJ8TiOYmCgYjcTnW7nsTOawUNYM51XTs2iFXNqmSW9QS62bQ4o4gecfQmLLAREpILPBFH10XojmwJHJyWCf43vsHwlA/j9cAAAA');">DEVOLUCAO DE EMBALAGENS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQqAMAwEX6RJGtPG5wStIGgrisXnG73sDHNYKEuG46zzPVmFXNpqs11gntpvAUlxAJYPiZKvRESkiCIOV2QNrERjFBXi0Pln/+zbC7b4NNlcAAAA');">38238</a></td>
                            <td class="center">1</td>
                            <td class="center">16/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38238', 'H4sIAAAAAAAAAx2MQQqAMAwEX6RJGtPG5wStIGgrisXnG73sDHNYKEuG46zzPVmFXNpqs11gntpvAUlxAJYPiZKvRESkiCIOV2QNrERjFBXi0Pln/+zbC7b4NNlcAAAA', 'H4sIAAAAAAAAA8tLS3UoScxOLEnUS87P1UsqAgDMTkWMEQAAAA==');">TAKATA BRASIL LTDA</a></td>
                            <td class="right" width="10%">R$ 15.221,12</td>
                            <td class="right" width="10%">R$ 15.221,12</td>
                            <td class="right">952,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQqAMAwEX6RJGtPG5wStIGgrisXnG73sDHNYKEuG46zzPVmFXNpqs11gntpvAUlxAJYPiZKvRESkiCIOV2QNrERjFBXi0Pln/+zbC7b4NNlcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RthUJ5TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CUnQg+MPkaItB0SkgMwGU3QyuUSUAguTl8E+x2ffXgnpJHlcAAAA');">38239</a></td>
                            <td class="center">1</td>
                            <td class="center">17/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38239', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RthUJ5TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CUnQg+MPkaItB0SkgMwGU3QyuUSUAguTl8E+x2ffXgnpJHlcAAAA', 'H4sIAAAAAAAAA8tLS3XISkwuyddLzs/VSyoCAAMB+/UQAAAA');">MAQUINAS AGRICOLAS JACTO S/A</a></td>
                            <td class="right" width="10%">R$ 4.412,45</td>
                            <td class="right" width="10%">R$ 4.412,45</td>
                            <td class="right">365,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RthUJ5TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CUnQg+MPkaItB0SkgMwGU3QyuUSUAguTl8E+x2ffXgnpJHlcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6TdAgV8DhFMTBSMRuLzrV52JnNYqkuh42z5nlOjUvuacrooaeq/GXCEIysfAgdd8QDYQ0ShChuNA/PkJQpLGPRzfPbtBah2WHZcAAAA');">38240</a></td>
                            <td class="center">1</td>
                            <td class="center">17/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38240', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6TdAgV8DhFMTBSMRuLzrV52JnNYqkuh42z5nlOjUvuacrooaeq/GXCEIysfAgdd8QDYQ0ShChuNA/PkJQpLGPRzfPbtBah2WHZcAAAA', 'H4sIAAAAAAAAA8tLS3XISkwuyddLzs/VSyoCAAMB+/UQAAAA');">MAQUINAS AGRICOLAS JACTO S/A</a></td>
                            <td class="right" width="10%">R$ 2.101,28</td>
                            <td class="right" width="10%">R$ 2.101,28</td>
                            <td class="right">116,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6TdAgV8DhFMTBSMRuLzrV52JnNYqkuh42z5nlOjUvuacrooaeq/GXCEIysfAgdd8QDYQ0ShChuNA/PkJQpLGPRzfPbtBah2WHZcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgRZ8TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03h5QwgOcPkaItCyKSILPBFH1ygYgm4cQkbrDP8dm3F7wIGgBcAAAA');">38241</a></td>
                            <td class="center">1</td>
                            <td class="center">17/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38241', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgRZ8TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03h5QwgOcPkaItCyKSILPBFH1ygYgm4cQkbrDP8dm3F7wIGgBcAAAA', 'H4sIAAAAAAAAA8tLS3XIzCtJLcpNLMrMS9VLzs/VSyqyTswrTs3JzcciBQCzVaHRMQAAAA==');">FALCON ESTALEIROS DO BRASIL LTDA</a></td>
                            <td class="right" width="10%">R$ 4.004,88</td>
                            <td class="right" width="10%">R$ 4.004,88</td>
                            <td class="right">326,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgRZ8TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03h5QwgOcPkaItCyKSILPBFH1ygYgm4cQkbrDP8dm3F7wIGgBcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MbQqAIBBET1T7oat2nCUNgtIoko7f1p95j2EYqEuB42z5nrVBqX3VrBeoVf03RkrowcmHSNFSAiJSQBGDKbrEnommIElsMdjn+OzbC7VvoNlcAAAA');">38242</a></td>
                            <td class="center">1</td>
                            <td class="center">17/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38242', 'H4sIAAAAAAAAAx2MbQqAIBBET1T7oat2nCUNgtIoko7f1p95j2EYqEuB42z5nrVBqX3VrBeoVf03RkrowcmHSNFSAiJSQBGDKbrEnommIElsMdjn+OzbC7VvoNlcAAAA', 'H4sIAAAAAAAAA8tLS81NLSnKd8hNTM9N1MvMS9FLKtJJzs8tKEosRhEEAPzc2qsqAAAA');">MAGMA INDUSTRIA COMERCIO IMPORTACAO DE PRODUTOS TEXTEIS LTDA</a></td>
                            <td class="right" width="10%">R$ 1.767,95</td>
                            <td class="right" width="10%">R$ 1.767,95</td>
                            <td class="right">166,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MbQqAIBBET1T7oat2nCUNgtIoko7f1p95j2EYqEuB42z5nrVBqX3VrBeoVf03RkrowcmHSNFSAiJSQBGDKbrEnommIElsMdjn+OzbC7VvoNlcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MUQqAMAxDT6Rt13WbxylugqCbKA6Pb/Un7xFCoC4FjrPle9YGpfZVs16gVvXfHFJCDywfIkVLCYhIAUUMpsjJeSaagiSb8WCf47NvL70qHH1cAAAA');">38243</a></td>
                            <td class="center">1</td>
                            <td class="center">17/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38243', 'H4sIAAAAAAAAAx2MUQqAMAxDT6Rt13WbxylugqCbKA6Pb/Un7xFCoC4FjrPle9YGpfZVs16gVvXfHFJCDywfIkVLCYhIAUUMpsjJeSaagiSb8WCf47NvL70qHH1cAAAA', 'H4sIAAAAAAAAA8tLS81NLSnKd8hNTM9N1MvMS9FLKtJJzs8tKEosRhEEAPzc2qsqAAAA');">MAGMA INDUSTRIA COMERCIO IMPORTACAO DE PRODUTOS TEXTEIS LTDA</a></td>
                            <td class="right" width="10%">R$ 3.391,24</td>
                            <td class="right" width="10%">R$ 3.391,24</td>
                            <td class="right">319,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MUQqAMAxDT6Rt13WbxylugqCbKA6Pb/Un7xFCoC4FjrPle9YGpfZVs16gVvXfHFJCDywfIkVLCYhIAUUMpsjJeSaagiSb8WCf47NvL70qHH1cAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MSw6AIAwFT6RtgfI5TiOYmCgYjcTjW9y8mcziQV0LnFfLzyINSu2bZLlBNPXfDFJEB5YHAgVd9ohIHpkVqmijcY4oeY5MKU36Ob/H/gFWQM5NXAAAAA==');">38244</a></td>
                            <td class="center">1</td>
                            <td class="center">17/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38244', 'H4sIAAAAAAAAAx2MSw6AIAwFT6RtgfI5TiOYmCgYjcTjW9y8mcziQV0LnFfLzyINSu2bZLlBNPXfDFJEB5YHAgVd9ohIHpkVqmijcY4oeY5MKU36Ob/H/gFWQM5NXAAAAA==', 'H4sIAAAAAAAAAysoyixOzsxJ1CtOrCzNzXRIKkoszklMyi8oyUxOzNFLzs/VSyoCALWdoQslAAAA');">BRASLAB PRODUTOS OTICOS EIRELLI</a></td>
                            <td class="right" width="10%">R$ 2.346,00</td>
                            <td class="right" width="10%">R$ 2.346,00</td>
                            <td class="right">60,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MSw6AIAwFT6RtgfI5TiOYmCgYjcTjW9y8mcziQV0LnFfLzyINSu2bZLlBNPXfDFJEB5YHAgVd9ohIHpkVqmijcY4oeY5MKU36Ob/H/gFWQM5NXAAAAA==');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6TdAgV8DhFMTBSMRuLzrV52JnNYqkuh42z5nlOjUvuacrooaeq/GXCEIysfAgdd8QDYQ0ShChuNE+bJSxQDDPo5Pvv2Ap47eFNcAAAA');">38245</a></td>
                            <td class="center">1</td>
                            <td class="center">17/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38245', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6TdAgV8DhFMTBSMRuLzrV52JnNYqkuh42z5nlOjUvuacrooaeq/GXCEIysfAgdd8QDYQ0ShChuNE+bJSxQDDPo5Pvv2Ap47eFNcAAAA', 'H4sIAAAAAAAAA0tLLC1KTc5M1MtLS3UoTizPKa3KSy3RS87P1UsqUtCoyM3RBABMkmsLIwAAAA==');">FAURECIA AUTOMOTIVE DO BRASIL LTDA</a></td>
                            <td class="right" width="10%">R$ 7.131,25</td>
                            <td class="right" width="10%">R$ 7.131,25</td>
                            <td class="right">532,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6TdAgV8DhFMTBSMRuLzrV52JnNYqkuh42z5nlOjUvuacrooaeq/GXCEIysfAgdd8QDYQ0ShChuNE+bJSxQDDPo5Pvv2Ap47eFNcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgRZ8TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03h5QwgOcPkaItCyKSILPBFH1yQYgm4cSOeLDP8dm3F0aTe1VcAAAA');">38246</a></td>
                            <td class="center">1</td>
                            <td class="center">17/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38246', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgRZ8TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03h5QwgOcPkaItCyKSILPBFH1yQYgm4cSOeLDP8dm3F0aTe1VcAAAA', 'H4sIAAAAAAAAA9MwN9RUsLQ0MjDVNTU3NFLILEvMS81MSQUA7l6WrRgAAAA=');">FAURECIA AUTOMOTIVE DO BRASIL LTDA.</a></td>
                            <td class="right" width="10%">R$ 105,00</td>
                            <td class="right" width="10%">R$ 105,00</td>
                            <td class="right">6,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgRZ8TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03h5QwgOcPkaItCyKSILPBFH1yQYgm4cSOeLDP8dm3F0aTe1VcAAAA');">VENDA DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MUQqAMAxDT6TNqt3mcYqbIOgmisPjW/3JeyQQKkum46zpnrVSLm3VpBepVe03hosYaZAPwQVL8QCch4jBFENkm9zkJQozOvvsn317AVLtOSNcAAAA');">38247</a></td>
                            <td class="center">1</td>
                            <td class="center">17/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38247', 'H4sIAAAAAAAAAx2MUQqAMAxDT6TNqt3mcYqbIOgmisPjW/3JeyQQKkum46zpnrVSLm3VpBepVe03hosYaZAPwQVL8QCch4jBFENkm9zkJQozOvvsn317AVLtOSNcAAAA', 'H4sIAAAAAAAAAytMTMlLS3UoSq1MSc3RS87PtU5KzCspzUs1RBIDAIAvr7YlAAAA');">REYDEL AUTOMOTIV BRAZIL IND E COM DE SISTEMAS AUTO LTDA</a></td>
                            <td class="right" width="10%">R$ 458,00</td>
                            <td class="right" width="10%">R$ 458,00</td>
                            <td class="right">27,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MUQqAMAxDT6TNqt3mcYqbIOgmisPjW/3JeyQQKkum46zpnrVSLm3VpBepVe03hosYaZAPwQVL8QCch4jBFENkm9zkJQozOvvsn317AVLtOSNcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgRZ8TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03h5QwgOcPkaItCyKSILPBFH1yIRFNwomdl8E+x2ffXihpfvxcAAAA');">38248</a></td>
                            <td class="center">1</td>
                            <td class="center">17/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38248', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgRZ8TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03h5QwgOcPkaItCyKSILPBFH1yIRFNwomdl8E+x2ffXihpfvxcAAAA', 'H4sIAAAAAAAAAytMTMlLS3UoSq1MSc3RS87PtU5KzCspzUs1RBIDAIAvr7YlAAAA');">REYDEL AUTOMOTIV BRAZIL IND E COM DE SISTEMAS AUTO LTDA</a></td>
                            <td class="right" width="10%">R$ 235,56</td>
                            <td class="right" width="10%"> </td>
                            <td class="right"></td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgRZ8TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03h5QwgOcPkaItCyKSILPBFH1yIRFNwomdl8E+x2ffXihpfvxcAAAA');">DEVOLUCAO DE EMBALAGENS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MSw6AIAwFT6RtgfI5TiOYmCgYjcTjW9y8mcziQV0LnFfLzyINSu2bZLlBNPXfDFJEB5YHAgVd9ohIHpkVqmijcYkoeY5sHE36Ob/H/gHAnyGtXAAAAA==');">38249</a></td>
                            <td class="center">1</td>
                            <td class="center">17/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38249', 'H4sIAAAAAAAAAx2MSw6AIAwFT6RtgfI5TiOYmCgYjcTjW9y8mcziQV0LnFfLzyINSu2bZLlBNPXfDFJEB5YHAgVd9ohIHpkVqmijcYkoeY5sHE36Ob/H/gHAnyGtXAAAAA==', 'H4sIAAAAAAAAA0vLzEvMS07NLMo3dEjOzy/ITS1KTk1JtU7Ozy0oSixGFivWAwrqJQEAtuDndjIAAAA=');">COOPER MERCEDES IMEC COOPER DE TRAB DE PROD DE EQUIP MED HOS</a></td>
                            <td class="right" width="10%">R$ 517,50</td>
                            <td class="right" width="10%">R$ 517,50</td>
                            <td class="right">30,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MSw6AIAwFT6RtgfI5TiOYmCgYjcTjW9y8mcziQV0LnFfLzyINSu2bZLlBNPXfDFJEB5YHAgVd9ohIHpkVqmijcYkoeY5sHE36Ob/H/gHAnyGtXAAAAA==');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQqAMAwEX6TZVNPW5wRbQdBWFIvPN3rZGeawVJZMx1nTPWulXNqqSS9SS+03B44YaZAPgYOteADsIWIwxRCdgHnyEsWss8/+2bcXJka87lwAAAA=');">38250</a></td>
                            <td class="center">1</td>
                            <td class="center">17/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38250', 'H4sIAAAAAAAAAx2MQQqAMAwEX6TZVNPW5wRbQdBWFIvPN3rZGeawVJZMx1nTPWulXNqqSS9SS+03B44YaZAPgYOteADsIWIwxRCdgHnyEsWss8/+2bcXJka87lwAAAA=', 'H4sIAAAAAAAAA6vIzdHLS0t1SMwryUwtLkksyUzOL9ZLzs/VSyoCAL3VLu4cAAAA');">ESD ANTIESTATICOS COMERCIAL E INDUSTRIAL LTDA</a></td>
                            <td class="right" width="10%">R$ 2.588,81</td>
                            <td class="right" width="10%">R$ 2.588,81</td>
                            <td class="right">164,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQqAMAwEX6TZVNPW5wRbQdBWFIvPN3rZGeawVJZMx1nTPWulXNqqSS9SS+03B44YaZAPgYOteADsIWIwxRCdgHnyEsWss8/+2bcXJka87lwAAAA=');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwRZ8TiOYmCgYjcTnW7nsTOawUNYM51XTs2iFXNqmSW9QS62bQ4o4gecfgYItCyKSILPBFH10TESzcGQnMtjn+B77B/cEc6FcAAAA');">38251</a></td>
                            <td class="center">1</td>
                            <td class="center">17/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38251', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwRZ8TiOYmCgYjcTnW7nsTOawUNYM51XTs2iFXNqmSW9QS62bQ4o4gecfgYItCyKSILPBFH10TESzcGQnMtjn+B77B/cEc6FcAAAA', 'H4sIAAAAAAAAA8vLL0ksTsssTk7MLHbITS1JTMnM0UvOz9VLKgIA+8WFcxsAAAA=');">METADIL INDUSTRIA E COMERCIO METALURGICA LTDA</a></td>
                            <td class="right" width="10%">R$ 3.036,00</td>
                            <td class="right" width="10%">R$ 3.036,00</td>
                            <td class="right">168,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwRZ8TiOYmCgYjcTnW7nsTOawUNYM51XTs2iFXNqmSW9QS62bQ4o4gecfgYItCyKSILPBFH10TESzcGQnMtjn+B77B/cEc6FcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MSw6AIAwFT6T9YAGP0wgmJgpGI/H4VjZvJrN4UNYM51XTs2iFXNqmSW9QS60bI0WcwMmPQMFWPCKSRxGDKbrIwkSzlygcaLDP8T32D6mEholcAAAA');">38252</a></td>
                            <td class="center">1</td>
                            <td class="center">17/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38252', 'H4sIAAAAAAAAAx2MSw6AIAwFT6T9YAGP0wgmJgpGI/H4VjZvJrN4UNYM51XTs2iFXNqmSW9QS60bI0WcwMmPQMFWPCKSRxGDKbrIwkSzlygcaLDP8T32D6mEholcAAAA', 'H4sIAAAAAAAAAytKTU5NysxNzSvJd0hOTMovSc4vKtBLzs+1zktLLU4tKstMRpUAAOisU6oxAAAA');">CABOT BRASIL INDUSTRIA E COMERCIO LTDA</a></td>
                            <td class="right" width="10%">R$ 8.538,75</td>
                            <td class="right" width="10%">R$ 8.538,75</td>
                            <td class="right">462,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MSw6AIAwFT6T9YAGP0wgmJgpGI/H4VjZvJrN4UNYM51XTs2iFXNqmSW9QS60bI0WcwMmPQMFWPCKSRxGDKbrIwkSzlygcaLDP8T32D6mEholcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwUJ9TiOYmCgYjcTnW7nsTOawUNYM51XTs2iFXNqmSW9QS62bQxKcwPOPSNGWAyJSQGaDKXpx7InmwMJO4mCf43vsH/YmddxcAAAA');">38253</a></td>
                            <td class="center">1</td>
                            <td class="center">17/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38253', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwUJ9TiOYmCgYjcTnW7nsTOawUNYM51XTs2iFXNqmSW9QS62bQxKcwPOPSNGWAyJSQGaDKXpx7InmwMJO4mCf43vsH/YmddxcAAAA', 'H4sIAAAAAAAAA8tLS3VITkwpyEksLtFLzs/VSyqyzirNyUzMwxAHAKcgBDkrAAAA');">CADPLAST IND E COM DE PLASTICOS LTDA</a></td>
                            <td class="right" width="10%">R$ 5.813,88</td>
                            <td class="right" width="10%">R$ 1.030,80</td>
                            <td class="right">859,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwUJ9TiOYmCgYjcTnW7nsTOawUNYM51XTs2iFXNqmSW9QS62bQxKcwPOPSNGWAyJSQGaDKXpx7InmwMJO4mCf43vsH/YmddxcAAAA');">BENEF/RET IND</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MSQqAMBAEX6SzmMnynMFEEDQRxeDzHb10FXVoqEuB42z5nrVBqX3VrBeopf4bI0V0MMmHQMFWPCKSRxGDKU6RxRElL1E48WCf47NvL8yDHjNcAAAA');">38254</a></td>
                            <td class="center">1</td>
                            <td class="center">18/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38254', 'H4sIAAAAAAAAAx2MSQqAMBAEX6SzmMnynMFEEDQRxeDzHb10FXVoqEuB42z5nrVBqX3VrBeopf4bI0V0MMmHQMFWPCKSRxGDKU6RxRElL1E48WCf47NvL8yDHjNcAAAA', 'H4sIAAAAAAAAA8tLS3XISkwuyddLzs/VSyoCAAMB+/UQAAAA');">MAQUINAS AGRICOLAS JACTO S/A</a></td>
                            <td class="right" width="10%">R$ 6.549,12</td>
                            <td class="right" width="10%">R$ 6.549,12</td>
                            <td class="right">542,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MSQqAMBAEX6SzmMnynMFEEDQRxeDzHb10FXVoqEuB42z5nrVBqX3VrBeopf4bI0V0MMmHQMFWPCKSRxGDKU6RxRElL1E48WCf47NvL8yDHjNcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQqAMAwEX6TZtKatzwlaQdBWFIvPN3rZGeawVJZMx1nne9JKubRVZ71ILbXfHDhhIC8fIkdbCQA4QMRgCp+cCPMYJImH7+yzf/btBd3jHM5cAAAA');">38255</a></td>
                            <td class="center">1</td>
                            <td class="center">18/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38255', 'H4sIAAAAAAAAAx2MQQqAMAwEX6TZtKatzwlaQdBWFIvPN3rZGeawVJZMx1nne9JKubRVZ71ILbXfHDhhIC8fIkdbCQA4QMRgCp+cCPMYJImH7+yzf/btBd3jHM5cAAAA', 'H4sIAAAAAAAAAytKTU5NysxNzSvJd0gqKk1JSc3TS87P1UsqAgBsnboHGgAAAA==');">BRUDDEN EQUIPAMENTOS LTDA</a></td>
                            <td class="right" width="10%">R$ 4.648,88</td>
                            <td class="right" width="10%">R$ 4.648,88</td>
                            <td class="right">311,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQqAMAwEX6TZtKatzwlaQdBWFIvPN3rZGeawVJZMx1nne9JKubRVZ71ILbXfHDhhIC8fIkdbCQA4QMRgCp+cCPMYJImH7+yzf/btBd3jHM5cAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hxRxAs8fAgVbFkQkQWaDKfroWIiScGRPabDP8dm3F9SEphdcAAAA');">38256</a></td>
                            <td class="center">1</td>
                            <td class="center">18/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38256', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hxRxAs8fAgVbFkQkQWaDKfroWIiScGRPabDP8dm3F9SEphdcAAAA', 'H4sIAAAAAAAAA0vOz00tSs5MzHFIKyotyUzOz0nMLy3KT8kvS8xJ1UvOz9VLKgIAgbCG0yQAAAA=');">FRUTICOLA OURO DO VALE LTDA</a></td>
                            <td class="right" width="10%">R$ 8.232,00</td>
                            <td class="right" width="10%">R$ 8.232,00</td>
                            <td class="right">346,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hxRxAs8fAgVbFkQkQWaDKfroWIiScGRPabDP8dm3F9SEphdcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MSw6AIAwFT6T9QAGP0wgmJgpGI/H4VjdvJrN4UJcCx9nyPWuDUvuqWS9QS/03RkrowcmHSNFWAiJSQBGDKbrEEommIEkc+8E+x2ffXthYPNpcAAAA');">38257</a></td>
                            <td class="center">1</td>
                            <td class="center">18/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38257', 'H4sIAAAAAAAAAx2MSw6AIAwFT6T9QAGP0wgmJgpGI/H4VjdvJrN4UJcCx9nyPWuDUvuqWS9QS/03RkrowcmHSNFWAiJSQBGDKbrEEommIEkc+8E+x2ffXthYPNpcAAAA', 'H4sIAAAAAAAAA8tLS9XLycxNzSxKdCgpKtdLzs+1Ts7MK8lM1CvILClJzYGLVmXmpZaUZOoBAPM8zCgyAAAA');">TRW AUTOMOTIVE LTDA (41-45-61)</a></td>
                            <td class="right" width="10%">R$ 5.170,00</td>
                            <td class="right" width="10%">R$ 5.170,00</td>
                            <td class="right">207,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MSw6AIAwFT6T9QAGP0wgmJgpGI/H4VjdvJrN4UJcCx9nyPWuDUvuqWS9QS/03RkrowcmHSNFWAiJSQBGDKbrEEommIEkc+8E+x2ffXthYPNpcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQqAMAwEX6RJGtPG5wStIGgrisXnG73sDHNYKEuG46zzPVmFXNpqs11gntpvAUlxAJYPiZKvRESkiCIOV2QNokRjFBVm7Pyzf/btBST0jStcAAAA');">38258</a></td>
                            <td class="center">1</td>
                            <td class="center">18/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38258', 'H4sIAAAAAAAAAx2MQQqAMAwEX6RJGtPG5wStIGgrisXnG73sDHNYKEuG46zzPVmFXNpqs11gntpvAUlxAJYPiZKvRESkiCIOV2QNokRjFBVm7Pyzf/btBST0jStcAAAA', 'H4sIAAAAAAAAAytKTU5NysxNzSvJd0gqqszOSS1ILcks0UvOz9VLKgIAM9VtYR4AAAA=');">BRYK INDUSTRIA DE PANIFICACAO LTDA</a></td>
                            <td class="right" width="10%">R$ 5.199,48</td>
                            <td class="right" width="10%">R$ 5.199,48</td>
                            <td class="right">382,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQqAMAwEX6RJGtPG5wStIGgrisXnG73sDHNYKEuG46zzPVmFXNpqs11gntpvAUlxAJYPiZKvRESkiCIOV2QNokRjFBVm7Pyzf/btBST0jStcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MWw6AIAwET6RtheVxHCKYmCgYjcTjW/3ZmczHUl0KHWfL95waldrXlNNFSVP/bWIJbMnggxevC8fM4hhQqLIJE6JIdAgwFoN+js++vUoqJFRcAAAA');">38259</a></td>
                            <td class="center">1</td>
                            <td class="center">18/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38259', 'H4sIAAAAAAAAAx2MWw6AIAwET6RtheVxHCKYmCgYjcTjW/3ZmczHUl0KHWfL95waldrXlNNFSVP/bWIJbMnggxevC8fM4hhQqLIJE6JIdAgwFoN+js++vUoqJFRcAAAA', 'H4sIAAAAAAAAA0ssSc1LScsvcgDiFL3k/FwAXdEbfBEAAAA=');">FORD MOTOR COMPANY BRASIL LTDA</a></td>
                            <td class="right" width="10%">R$ 1.015,00</td>
                            <td class="right" width="10%">R$ 1.015,00</td>
                            <td class="right">15,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MWw6AIAwET6RtheVxHCKYmCgYjcTjW/3ZmczHUl0KHWfL95waldrXlNNFSVP/bWIJbMnggxevC8fM4hhQqLIJE6JIdAgwFoN+js++vUoqJFRcAAAA');">VENDAS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgRZ8TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03h5QwgOcPkaItCyKSILPBFH1ygkSTcGLPYbDP8dm3FyCFd91cAAAA');">38260</a></td>
                            <td class="center">1</td>
                            <td class="center">18/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38260', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgRZ8TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03h5QwgOcPkaItCyKSILPBFH1ygkSTcGLPYbDP8dm3FyCFd91cAAAA', 'H4sIAAAAAAAAAyvKTM5ILEpxSMxJSyzKzC8szczNTE7US87P1UsqAgCCVIEcHQAAAA==');">SOMAPLAST IND COM DE PLASTICOS LTDA</a></td>
                            <td class="right" width="10%">R$ 15.601,00</td>
                            <td class="right" width="10%">R$ 3.631,00</td>
                            <td class="right">1.197,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgRZ8TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03h5QwgOcPkaItCyKSILPBFH1ygkSTcGLPYbDP8dm3FyCFd91cAAAA');">BENEF/RET IND</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQqAMAwEX6TZtCatzylaQdBWFIvPN3rZGeawVJZMx1nne0qVcmlrmtNFyVL7zYEjBvLyIXCwFQXAChGDKXx0ysyjShSv6Oyzf/btBXfvTrxcAAAA');">38261</a></td>
                            <td class="center">1</td>
                            <td class="center">18/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38261', 'H4sIAAAAAAAAAx2MQQqAMAwEX6TZtCatzylaQdBWFIvPN3rZGeawVJZMx1nne0qVcmlrmtNFyVL7zYEjBvLyIXCwFQXAChGDKXx0ysyjShSv6Oyzf/btBXfvTrxcAAAA', 'H4sIAAAAAAAAA8tLS81NTU4syEksLtFLzSspSkxJdECIJOfn6iUVAQC2U3vmJQAAAA==');">MECAPLAST DO BRASIL IND COM IMPORTACAO E EXPORTACAO LTDA</a></td>
                            <td class="right" width="10%">R$ 1.327,85</td>
                            <td class="right" width="10%">R$ 1.327,85</td>
                            <td class="right">114,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQqAMAwEX6TZtCatzylaQdBWFIvPN3rZGeawVJZMx1nne0qVcmlrmtNFyVL7zYEjBvLyIXCwFQXAChGDKXx0ysyjShSv6Oyzf/btBXfvTrxcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwRZ8TiOYmCgYjcTnW7nsTOawUNYM51XTs2iFXNqmSW9QS62bQ4o4gecfgYItCyKSILPBFH104ohm4cg+8GCf43vsH69HTbpcAAAA');">38262</a></td>
                            <td class="center">1</td>
                            <td class="center">18/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38262', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwRZ8TiOYmCgYjcTnW7nsTOawUNYM51XTs2iFXNqmSW9QS62bQ4o4gecfgYItCyKSILPBFH104ohm4cg+8GCf43vsH69HTbpcAAAA', 'H4sIAAAAAAAAA0vOzy0oSix2SE0rSizK1EvOz9VLKgIAAsKoqxUAAAA=');">EFRARI IND E COM IMP E EXP DE AUTOPECAS LTDA</a></td>
                            <td class="right" width="10%">R$ 4.808,75</td>
                            <td class="right" width="10%">R$ 4.808,75</td>
                            <td class="right">314,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwRZ8TiOYmCgYjcTnW7nsTOawUNYM51XTs2iFXNqmSW9QS62bQ4o4gecfgYItCyKSILPBFH104ohm4cg+8GCf43vsH69HTbpcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQqAMAwEX6RJWpPG5wStIGgrisXnG73sDHNYKEuG46zzPVmFXNpqs11gntpvAUlxgMgfEiVfFkQkQWaHK0YNEolGYeWo2Pln/+zbCzXZM9ZcAAAA');">38263</a></td>
                            <td class="center">1</td>
                            <td class="center">18/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38263', 'H4sIAAAAAAAAAx2MQQqAMAwEX6RJWpPG5wStIGgrisXnG73sDHNYKEuG46zzPVmFXNpqs11gntpvAUlxgMgfEiVfFkQkQWaHK0YNEolGYeWo2Pln/+zbCzXZM9ZcAAAA', 'H4sIAAAAAAAAA0tOzM3MSdRLKc2syixxSEssLUpNzkzUS87PBQC/Fy2YGgAAAA==');">FAURECIA AUTOMOTIVE DO BRASIL LTDA</a></td>
                            <td class="right" width="10%">R$ 2.635,80</td>
                            <td class="right" width="10%">R$ 2.635,80</td>
                            <td class="right">196,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQqAMAwEX6RJWpPG5wStIGgrisXnG73sDHNYKEuG46zzPVmFXNpqs11gntpvAUlxgMgfEiVfFkQkQWaHK0YNEolGYeWo2Pln/+zbCzXZM9ZcAAAA');">VENDA DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RthRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CSmiB8cfAgVbFkQkQWaDKbo4iSdKwpFdksE+x2ffXspA1QBcAAAA');">38264</a></td>
                            <td class="center">1</td>
                            <td class="center">18/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38264', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RthRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CSmiB8cfAgVbFkQkQWaDKbo4iSdKwpFdksE+x2ffXspA1QBcAAAA', 'H4sIAAAAAAAAAytMTMlLS3UoSq1MSc3RS87PtU5KzCspzUs1RBIDAIAvr7YlAAAA');">REYDEL AUTOMOTIV BRAZIL IND E COM DE SISTEMAS AUTO LTDA</a></td>
                            <td class="right" width="10%">R$ 3.634,00</td>
                            <td class="right" width="10%">R$ 3.634,00</td>
                            <td class="right">269,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RthRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CSmiB8cfAgVbFkQkQWaDKbo4iSdKwpFdksE+x2ffXspA1QBcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgRZ8TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03h5QwgOcPkaItCyKSILPBFH1ywkSTcOKAcbDP8dm3F5jqYhVcAAAA');">38265</a></td>
                            <td class="center">1</td>
                            <td class="center">18/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38265', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgRZ8TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03h5QwgOcPkaItCyKSILPBFH1ywkSTcOKAcbDP8dm3F5jqYhVcAAAA', 'H4sIAAAAAAAAAytMTMlLS3UoSq1MSc3RS87PtU5KzCspzUs1RBIDAIAvr7YlAAAA');">REYDEL AUTOMOTIV BRAZIL IND E COM DE SISTEMAS AUTO LTDA</a></td>
                            <td class="right" width="10%">R$ 7.392,42</td>
                            <td class="right" width="10%"> </td>
                            <td class="right"></td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgRZ8TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03h5QwgOcPkaItCyKSILPBFH1ywkSTcOKAcbDP8dm3F5jqYhVcAAAA');">DEVOLUCAO DE EMBALAGENS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgRZ8TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03h5QwgOcPkaItCyKSILPBFH1yIkSTcOJAbrDP8dm3F0BCYRNcAAAA');">38266</a></td>
                            <td class="center">1</td>
                            <td class="center">18/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38266', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgRZ8TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03h5QwgOcPkaItCyKSILPBFH1yIkSTcOJAbrDP8dm3F0BCYRNcAAAA', 'H4sIAAAAAAAAAytMTMlLS3UoSq1MSc3RS87PtU5KzCspzUs1RBIDAIAvr7YlAAAA');">REYDEL AUTOMOTIV BRAZIL IND E COM DE SISTEMAS AUTO LTDA</a></td>
                            <td class="right" width="10%">R$ 86,00</td>
                            <td class="right" width="10%">R$ 86,00</td>
                            <td class="right">12,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgRZ8TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03h5QwgOcPkaItCyKSILPBFH1yIkSTcOJAbrDP8dm3F0BCYRNcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgRZ8TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03h5QwgOcPkaItCyKSILPBFH1yEokm4cTBpcE+x2ffXoXzmrpcAAAA');">38267</a></td>
                            <td class="center">1</td>
                            <td class="center">18/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38267', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgRZ8TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03h5QwgOcPkaItCyKSILPBFH1yEokm4cTBpcE+x2ffXoXzmrpcAAAA', 'H4sIAAAAAAAAA8tLS3UoScxOLEnUS87P1UsqAgDMTkWMEQAAAA==');">TAKATA BRASIL LTDA</a></td>
                            <td class="right" width="10%">R$ 6.827,48</td>
                            <td class="right" width="10%">R$ 6.827,48</td>
                            <td class="right">440,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgRZ8TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03h5QwgOcPkaItCyKSILPBFH1yEokm4cTBpcE+x2ffXoXzmrpcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgRZ8TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03h5QwgOcPkaItCyKSILPBFH1ykogm4cTB+8E+x2ffXqiQkpRcAAAA');">38268</a></td>
                            <td class="center">1</td>
                            <td class="center">19/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38268', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgRZ8TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03h5QwgOcPkaItCyKSILPBFH1ykogm4cTB+8E+x2ffXqiQkpRcAAAA', 'H4sIAAAAAAAAA0tNKU0sSsnXK8nPTaxyyE3MK01LLMkvStRLzs/VSyoCAMJBsKUfAAAA');">CIA MANUFATORA DE TECIDOS DE ALGODAO</a></td>
                            <td class="right" width="10%">R$ 13.225,00</td>
                            <td class="right" width="10%">R$ 13.225,00</td>
                            <td class="right">363,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgRZ8TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03h5QwgOcPkaItCyKSILPBFH1ykogm4cTB+8E+x2ffXqiQkpRcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtkRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hxTRw8QfAgVbFkQkQWaDKU7RSSJKwpG9T4N9js++vReBgjRcAAAA');">38269</a></td>
                            <td class="center">1</td>
                            <td class="center">19/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38269', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RtkRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hxTRw8QfAgVbFkQkQWaDKU7RSSJKwpG9T4N9js++vReBgjRcAAAA', 'H4sIAAAAAAAAA0srSsxLzizOSczMS9VLL03MLEl0SMtJrSgpys/LTC7WS87Ptc5LS9Urzi/KT05MAkoCAPqqvAwyAAAA');">FLEXTRONICS INTERN TECNOLOGIA LTDA</a></td>
                            <td class="right" width="10%">R$ 4.000,00</td>
                            <td class="right" width="10%">R$ 4.000,00</td>
                            <td class="right">324,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtkRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hxTRw8QfAgVbFkQkQWaDKU7RSSJKwpG9T4N9js++vReBgjRcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgUJ9TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hyQYwPOHRMmWIyJSRGaDKXpxCYmmyMKBZbDP8dm3F/FYH3dcAAAA');">38270</a></td>
                            <td class="center">1</td>
                            <td class="center">19/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38270', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgUJ9TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hyQYwPOHRMmWIyJSRGaDKXpxCYmmyMKBZbDP8dm3F/FYH3dcAAAA', 'H4sIAAAAAAAAA0vMK8nPy8zXS0stykvMS0ktdiivTEnUS87P1UsqAgCVfQsoHQAAAA==');">WYDA INDUSTRIA DE EMBALAGENS LTDA</a></td>
                            <td class="right" width="10%">R$ 37.002,29</td>
                            <td class="right" width="10%">R$ 37.002,29</td>
                            <td class="right">1.282,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgUJ9TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hyQYwPOHRMmWIyJSRGaDKXpxCYmmyMKBZbDP8dm3F/FYH3dcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgRZ8TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03h5QwgOcPkaItCyKSILPBFH1ykYgm4cRB/GCf47NvL3f9n8lcAAAA');">38271</a></td>
                            <td class="center">1</td>
                            <td class="center">19/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38271', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgRZ8TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03h5QwgOcPkaItCyKSILPBFH1ykYgm4cRB/GCf47NvL3f9n8lcAAAA', 'H4sIAAAAAAAAA8tJTcxLKcrXS0nNL8rM1y1OzMwpS3QoLE3MySxITNZLKwIAPI55RCEAAAA=');">POCHET DO BRASIL INDUSTRIA E COMERCIO LTDA</a></td>
                            <td class="right" width="10%">R$ 5.278,50</td>
                            <td class="right" width="10%">R$ 5.278,50</td>
                            <td class="right">367,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgRZ8TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03h5QwgOcPkaItCyKSILPBFH1ykYgm4cRB/GCf47NvL3f9n8lcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtkVJ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hxTRw8QfhMSWAyJSQGaDKU7RiSNKgSN7SYN9js++vX6aJRBcAAAA');">38272</a></td>
                            <td class="center">1</td>
                            <td class="center">19/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38272', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RtkVJ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hxTRw8QfhMSWAyJSQGaDKU7RiSNKgSN7SYN9js++vX6aJRBcAAAA', 'H4sIAAAAAAAAA8tNLE3Uy0tLdUhKzc0s1kvOzwUAl4ISGRIAAAA=');">BEMIS DO BRASIL INDUSTRIA ECOMERCIO DE EMBALAGENS LTDA</a></td>
                            <td class="right" width="10%">R$ 9.644,62</td>
                            <td class="right" width="10%">R$ 9.644,62</td>
                            <td class="right">762,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtkVJ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hxTRw8QfhMSWAyJSQGaDKU7RiSNKgSN7SYN9js++vX6aJRBcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="cancel">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgUJ9TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hyQYwPOHRMmWIyJSRGaDKXpxyRNNkYWDhME+x2ffXvymg8dcAAAA');">38273</a></td>
                            <td class="center">1</td>
                            <td class="center">19/04/2018</td>
                            <td class="left email"><a href="#" onClick="alert('Nota Cancelada - o email não pode ser enviado!');">POCHET DO BRASIL INDUSTRIA E COMERCIO LTDA</a></td>
                            <td class="right" width="10%">R$ 4.098,72</td>
                            <td class="right" width="10%">R$ 4.098,72</td>
                            <td class="right"></td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgUJ9TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hyQYwPOHRMmWIyJSRGaDKXpxyRNNkYWDhME+x2ffXvymg8dcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MWw6AIAwET6TdIuVxHCKYmCgYjcTjW/3ZmczHUl0KHWfL95waldrXlNNFSVP/zYADLE3ywbPXFQeAHUQUqpiC8ZY5OgliIwb9HJ99ewGFF5M/XAAAAA==');">38274</a></td>
                            <td class="center">1</td>
                            <td class="center">19/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38274', 'H4sIAAAAAAAAAx2MWw6AIAwET6TdIuVxHCKYmCgYjcTjW/3ZmczHUl0KHWfL95waldrXlNNFSVP/zYADLE3ywbPXFQeAHUQUqpiC8ZY5OgliIwb9HJ99ewGFF5M/XAAAAA==', 'H4sIAAAAAAAAA8tJTcxLKcrXS0nNL8rM1y1OzMwpS3QoLE3MySxITNZLKwIAPI55RCEAAAA=');">POCHET DO BRASIL INDUSTRIA E COMERCIO LTDA</a></td>
                            <td class="right" width="10%">R$ 710,13</td>
                            <td class="right" width="10%">R$ 710,13</td>
                            <td class="right">49,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MWw6AIAwET6TdIuVxHCKYmCgYjcTjW/3ZmczHUl0KHWfL95waldrXlNNFSVP/zYADLE3ywbPXFQeAHUQUqpiC8ZY5OgliIwb9HJ99ewGFF5M/XAAAAA==');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwRZ8TiOYmCgYjcTnW7zsTOawUNYM51XTs2iFXNqmSW9QS+03hxRxAs8dgYItCyKSILPBFH10gYlm4djbYJ/je+wf12Pq1VwAAAA=');">38275</a></td>
                            <td class="center">1</td>
                            <td class="center">19/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38275', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwRZ8TiOYmCgYjcTnW7zsTOawUNYM51XTs2iFXNqmSW9QS+03hxRxAs8dgYItCyKSILPBFH10gYlm4djbYJ/je+wf12Pq1VwAAAA=', 'H4sIAAAAAAAAA6tKzEvOz8nJL3KogrH0kvNz9ZKKdIBUalFyZmIOqhQAEeg4oDIAAAA=');">ZAN COLLOR IND. E COM. DE PIGMENTOS LTDA</a></td>
                            <td class="right" width="10%">R$ 172,50</td>
                            <td class="right" width="10%"> </td>
                            <td class="right"></td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwRZ8TiOYmCgYjcTnW7zsTOawUNYM51XTs2iFXNqmSW9QS+03hxRxAs8dgYItCyKSILPBFH10gYlm4djbYJ/je+wf12Pq1VwAAAA=');">OUTRAS SAIDAS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwRZ8TiOYmCgYjcTnW7nsTOawUNYM51XTs2iFXNqmSW9QS62bQ4o4gecfgYItCyKSILPBFH10QYhm4chMMtjn+B77B8r3ZOpcAAAA');">38276</a></td>
                            <td class="center">1</td>
                            <td class="center">19/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38276', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwRZ8TiOYmCgYjcTnW7nsTOawUNYM51XTs2iFXNqmSW9QS62bQ4o4gecfgYItCyKSILPBFH10QYhm4chMMtjn+B77B8r3ZOpcAAAA', 'H4sIAAAAAAAAA8tJTcxLKcrXS0nNL8rM1y1OzMwpS3QoLE3MySxITNZLKwIAPI55RCEAAAA=');">POCHET DO BRASIL INDUSTRIA E COMERCIO LTDA</a></td>
                            <td class="right" width="10%">R$ 2.530,00</td>
                            <td class="right" width="10%">R$ 2.530,00</td>
                            <td class="right">130,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwRZ8TiOYmCgYjcTnW7nsTOawUNYM51XTs2iFXNqmSW9QS62bQ4o4gecfgYItCyKSILPBFH10QYhm4chMMtjn+B77B8r3ZOpcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwVJ8TiOYmCgYjcTnW7nsTOawUNYM51XTs2iFXNqmSW9QS62bQ4o4gecfQmLLAREpILPBFH10IkRz4MjsaLDP8T32D1ih0LJcAAAA');">38277</a></td>
                            <td class="center">1</td>
                            <td class="center">19/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38277', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwVJ8TiOYmCgYjcTnW7nsTOawUNYM51XTs2iFXNqmSW9QS62bQ4o4gecfQmLLAREpILPBFH10IkRz4MjsaLDP8T32D1ih0LJcAAAA', 'H4sIAAAAAAAAAyvKT08tysx3yEgvSq0oKSotzi9KLNZLzs/VSyoCADIkPMQcAAAA');">HGR IND E COM DE MAQUINAS LTDA</a></td>
                            <td class="right" width="10%">R$ 10.000,00</td>
                            <td class="right" width="10%"> </td>
                            <td class="right"></td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwVJ8TiOYmCgYjcTnW7nsTOawUNYM51XTs2iFXNqmSW9QS62bQ4o4gecfQmLLAREpILPBFH10IkRz4MjsaLDP8T32D1ih0LJcAAAA');">REMESSA PARA MANUTENCAO</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQqAMAwEX6RJWtPE5wStIGgrisXnG73sDHNYKEuG46zzPVmFXNpqs11gntpvAUlxgMgfhMSXEyJSQmaHK0YNokRjYmWO0vln/+zbCyIll21cAAAA');">38278</a></td>
                            <td class="center">1</td>
                            <td class="center">19/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38278', 'H4sIAAAAAAAAAx2MQQqAMAwEX6RJWtPE5wStIGgrisXnG73sDHNYKEuG46zzPVmFXNpqs11gntpvAUlxgMgfhMSXEyJSQmaHK0YNokRjYmWO0vln/+zbCyIll21cAAAA', 'H4sIAAAAAAAAAytMTMlLS3UoSq1MSc3RS87PtU5KzCspzUs1RBIDAIAvr7YlAAAA');">REYDEL AUTOMOTIV BRAZIL IND E COM DE SISTEMAS AUTO LTDA</a></td>
                            <td class="right" width="10%">R$ 2.981,50</td>
                            <td class="right" width="10%">R$ 2.981,50</td>
                            <td class="right">236,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQqAMAwEX6RJWtPE5wStIGgrisXnG73sDHNYKEuG46zzPVmFXNpqs11gntpvAUlxgMgfhMSXEyJSQmaHK0YNokRjYmWO0vln/+zbCyIll21cAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MSw6AIAwFT6RtgfI5TiOYmCgYjcTjW9y8mcziQV0LnFfLzyINSu2bZLlBNPXfDFJEB5YHAgVd9ohIHpkVqmijCYkoeY7Mzkz6Ob/H/gFM+z4SXAAAAA==');">38279</a></td>
                            <td class="center">1</td>
                            <td class="center">19/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38279', 'H4sIAAAAAAAAAx2MSw6AIAwFT6RtgfI5TiOYmCgYjcTjW9y8mcziQV0LnFfLzyINSu2bZLlBNPXfDFJEB5YHAgVd9ohIHpkVqmijCYkoeY7Mzkz6Ob/H/gFM+z4SXAAAAA==', 'H4sIAAAAAAAAAytMTMlLS3UoSq1MSc3RS87PtU5KzCspzUs1RBIDAIAvr7YlAAAA');">REYDEL AUTOMOTIV BRAZIL IND E COM DE SISTEMAS AUTO LTDA</a></td>
                            <td class="right" width="10%">R$ 4.898,72</td>
                            <td class="right" width="10%"> </td>
                            <td class="right"></td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MSw6AIAwFT6RtgfI5TiOYmCgYjcTjW9y8mcziQV0LnFfLzyINSu2bZLlBNPXfDFJEB5YHAgVd9ohIHpkVqmijCYkoeY7Mzkz6Ob/H/gFM+z4SXAAAAA==');">DEVOLUCAO DE EMBALAGENS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQqAMAwEX6TZVNPW5wRbQdBWFIvPN3rZGeawVJZMx1nTPWulXNqqSS9SS+03B44YaZAPgYOteADsIWIwxRBdBPPkJYoId/bZP/v2AktBrWZcAAAA');">38280</a></td>
                            <td class="center">1</td>
                            <td class="center">19/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38280', 'H4sIAAAAAAAAAx2MQQqAMAwEX6TZVNPW5wRbQdBWFIvPN3rZGeawVJZMx1nTPWulXNqqSS9SS+03B44YaZAPgYOteADsIWIwxRBdBPPkJYoId/bZP/v2AktBrWZcAAAA', 'H4sIAAAAAAAAAytMTMlLS3UoSq1MSc3RS87PtU5KzCspzUs1RBIDAIAvr7YlAAAA');">REYDEL AUTOMOTIV BRAZIL IND E COM DE SISTEMAS AUTO LTDA</a></td>
                            <td class="right" width="10%">R$ 260,00</td>
                            <td class="right" width="10%">R$ 260,00</td>
                            <td class="right">17,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQqAMAwEX6TZVNPW5wRbQdBWFIvPN3rZGeawVJZMx1nTPWulXNqqSS9SS+03B44YaZAPgYOteADsIWIwxRBdBPPkJYoId/bZP/v2AktBrWZcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQqAMAwEX6RJqknjc4KtIGgrisXnG73sDHNYKEuG46zpnq1CLm21ZBeYp/ZbQFIcYeAPkaIvCyKSILPDFQcNSkSTsDJL7Pyzf/btBZoDYilcAAAA');">38281</a></td>
                            <td class="center">1</td>
                            <td class="center">19/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38281', 'H4sIAAAAAAAAAx2MQQqAMAwEX6RJqknjc4KtIGgrisXnG73sDHNYKEuG46zpnq1CLm21ZBeYp/ZbQFIcYeAPkaIvCyKSILPDFQcNSkSTsDJL7Pyzf/btBZoDYilcAAAA', 'H4sIAAAAAAAAAytMTMlLS3UoSq1MSc3RS87PtU5KzCspzUs1RBIDAIAvr7YlAAAA');">REYDEL AUTOMOTIV BRAZIL IND E COM DE SISTEMAS AUTO LTDA</a></td>
                            <td class="right" width="10%">R$ 78,52</td>
                            <td class="right" width="10%"> </td>
                            <td class="right"></td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQqAMAwEX6RJqknjc4KtIGgrisXnG73sDHNYKEuG46zpnq1CLm21ZBeYp/ZbQFIcYeAPkaIvCyKSILPDFQcNSkSTsDJL7Pyzf/btBZoDYilcAAAA');">DEVOLUCAO DE EMBALAGENS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MSwqAMAwFT6T5aNp4nGArCNqKYvH4Rjdvhlk8KEuG46zpnq1CLm21ZBeYp/YbIymOMMiHSNFXAiJSQBGHKw7KykRTEBWJ3Pln/+zbC0KrYS9cAAAA');">38282</a></td>
                            <td class="center">1</td>
                            <td class="center">19/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38282', 'H4sIAAAAAAAAAx2MSwqAMAwFT6T5aNp4nGArCNqKYvH4Rjdvhlk8KEuG46zpnq1CLm21ZBeYp/YbIymOMMiHSNFXAiJSQBGHKw7KykRTEBWJ3Pln/+zbC0KrYS9cAAAA', 'H4sIAAAAAAAAA8tJTcxLKcrXS0nNL8rM1y1OzMwpS3QoLE3MySxITNZLKwIAPI55RCEAAAA=');">POCHET DO BRASIL INDUSTRIA E COMERCIO LTDA</a></td>
                            <td class="right" width="10%">R$ 4.098,72</td>
                            <td class="right" width="10%">R$ 4.098,72</td>
                            <td class="right">246,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MSwqAMAwFT6T5aNp4nGArCNqKYvH4Rjdvhlk8KEuG46zpnq1CLm21ZBeYp/YbIymOMMiHSNFXAiJSQBGHKw7KykRTEBWJ3Pln/+zbC0KrYS9cAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwUJ9TiOYmCgYjcTnW7nsTOawUNYM51XTs2iFXNqmSW9QS62bQxKcwPOPSNGWAyJSQGaDKXpx4onmwMIsMtjn+B77Bwn6ppxcAAAA');">38283</a></td>
                            <td class="center">1</td>
                            <td class="center">19/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38283', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwUJ9TiOYmCgYjcTnW7nsTOawUNYM51XTs2iFXNqmSW9QS62bQxKcwPOPSNGWAyJSQGaDKXpx4onmwMIsMtjn+B77Bwn6ppxcAAAA', 'H4sIAAAAAAAAAyvISSwuyUlMdihJLSpK1EvOz9VLKgIA3S/oGxUAAAA=');">PLAST LAC COMERCIO DE PLASTICOS LTDA.</a></td>
                            <td class="right" width="10%">R$ 1.910,00</td>
                            <td class="right" width="10%"> </td>
                            <td class="right"></td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwUJ9TiOYmCgYjcTnW7nsTOawUNYM51XTs2iFXNqmSW9QS62bQxKcwPOPSNGWAyJSQGaDKXpx4onmwMIsMtjn+B77Bwn6ppxcAAAA');">REMESSA P/INDL.</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RthUJ5TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CUnQg+MPkaItB0SkgMwGU3QyiSdKgYU5ucE+x2ffXqGED7tcAAAA');">38284</a></td>
                            <td class="center">1</td>
                            <td class="center">19/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38284', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RthUJ5TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CUnQg+MPkaItB0SkgMwGU3QyiSdKgYU5ucE+x2ffXqGED7tcAAAA', 'H4sIAAAAAAAAAyvKz8vUS0stKkrNLEp0yC/JTE4sTk4sys/RS87P1UsqAgAtUMWaIAAAAA==');">GLOBAL LUX DO BRASIL DISTR IMP RELOGIO AC PROD.OPTICOS LTDA</a></td>
                            <td class="right" width="10%">R$ 4.427,50</td>
                            <td class="right" width="10%">R$ 4.427,50</td>
                            <td class="right">28,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RthUJ5TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CUnQg+MPkaItB0SkgMwGU3QyiSdKgYU5ucE+x2ffXqGED7tcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MUQqAMAxDT6Rtt3WrxylugqCbKA6Pb/Un75FAoC4FjrPle9YGpfZVs16gVvXfHJJgAM8fEiVLjohIEZkNpujFCRNNkcW2MNjn+OzbC/ske21cAAAA');">38285</a></td>
                            <td class="center">1</td>
                            <td class="center">19/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38285', 'H4sIAAAAAAAAAx2MUQqAMAxDT6Rtt3WrxylugqCbKA6Pb/Un75FAoC4FjrPle9YGpfZVs16gVvXfHJJgAM8fEiVLjohIEZkNpujFCRNNkcW2MNjn+OzbC/ske21cAAAA', 'H4sIAAAAAAAAA0tLLC1KTc5M1MtLS3UoTizPKa3KSy3RS87P1Usqsi5KTEtMzdHLTUzOSEzJd0hLLAUA4PAfLzAAAAA=');">FAURECIA AUTOMOTIVE DO BRASIL LTDA.</a></td>
                            <td class="right" width="10%">R$ 2.293,60</td>
                            <td class="right" width="10%">R$ 2.293,60</td>
                            <td class="right">102,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MUQqAMAxDT6Rtt3WrxylugqCbKA6Pb/Un75FAoC4FjrPle9YGpfZVs16gVvXfHJJgAM8fEiVLjohIEZkNpujFCRNNkcW2MNjn+OzbC/ske21cAAAA');">VENDA DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQqAMAwEX6RJqknjc4KtIGgrisXnG73sDHNYKEuG46zpnq1CLm21ZBeYp/ZbQFIcYeAPkaIvCyKSILPDFQcNKkSTsLIQdv7ZP/v2AmCYA3xcAAAA');">38286</a></td>
                            <td class="center">1</td>
                            <td class="center">20/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38286', 'H4sIAAAAAAAAAx2MQQqAMAwEX6RJqknjc4KtIGgrisXnG73sDHNYKEuG46zpnq1CLm21ZBeYp/ZbQFIcYeAPkaIvCyKSILPDFQcNKkSTsLIQdv7ZP/v2AmCYA3xcAAAA', 'H4sIAAAAAAAAA8tLS3Uoys/JScsv0kvOz9VLKgIAjK1SOBIAAAA=');">ROLL FOR ARTEFATOS METALICOS LTDA</a></td>
                            <td class="right" width="10%">R$ 5.179,66</td>
                            <td class="right" width="10%">R$ 5.179,66</td>
                            <td class="right">394,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQqAMAwEX6RJqknjc4KtIGgrisXnG73sDHNYKEuG46zpnq1CLm21ZBeYp/ZbQFIcYeAPkaIvCyKSILPDFQcNKkSTsLIQdv7ZP/v2AmCYA3xcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQqAMAwEX6RJqknjc4KtIGgrisXnG73sDHNYKEuG46zpnq1CLm21ZBeYp/ZbQFIcYeAPkaIvCyKSILPDFQcNGokmYWUJ3Pln/+zbC3TmQQpcAAAA');">38287</a></td>
                            <td class="center">1</td>
                            <td class="center">20/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38287', 'H4sIAAAAAAAAAx2MQQqAMAwEX6RJqknjc4KtIGgrisXnG73sDHNYKEuG46zpnq1CLm21ZBeYp/ZbQFIcYeAPkaIvCyKSILPDFQcNGokmYWUJ3Pln/+zbC3TmQQpcAAAA', 'H4sIAAAAAAAAA8tLS3VIKkrTTSrSS87PtU7PLE7NydRLScxNKsovRpIBAKlMBZkoAAAA');">BRF S/A</a></td>
                            <td class="right" width="10%">R$ 899,30</td>
                            <td class="right" width="10%">R$ 899,30</td>
                            <td class="right">30,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQqAMAwEX6RJqknjc4KtIGgrisXnG73sDHNYKEuG46zpnq1CLm21ZBeYp/ZbQFIcYeAPkaIvCyKSILPDFQcNGokmYWUJ3Pln/+zbC3TmQQpcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQqAMAwEX6RJWpPG5wStIGgrisXnG73sDHNYKEuG46zzPVmFXNpqs11gntpvAUlxgMgfEiVfFkQkQWaHK0YNqkSjsLJE7Pyzf/btBctei+xcAAAA');">38288</a></td>
                            <td class="center">1</td>
                            <td class="center">20/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38288', 'H4sIAAAAAAAAAx2MQQqAMAwEX6RJWpPG5wStIGgrisXnG73sDHNYKEuG46zzPVmFXNpqs11gntpvAUlxgMgfEiVfFkQkQWaHK0YNqkSjsLJE7Pyzf/btBctei+xcAAAA', 'H4sIAAAAAAAAAyvISSwuyUlMdihJLSpK1EvOz9VLKgIA3S/oGxUAAAA=');">PLAST LAC COMERCIO DE PLASTICOS LTDA.</a></td>
                            <td class="right" width="10%">R$ 2.330,00</td>
                            <td class="right" width="10%"> </td>
                            <td class="right"></td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQqAMAwEX6RJWpPG5wStIGgrisXnG73sDHNYKEuG46zzPVmFXNpqs11gntpvAUlxgMgfEiVfFkQkQWaHK0YNqkSjsLJE7Pyzf/btBctei+xcAAAA');">REMESSA P/INDL.</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RthRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CSmiB8cfAgVbFkQkQWaDKbo4xUSUhCOLl8E+x2ffXmC8r6pcAAAA');">38289</a></td>
                            <td class="center">1</td>
                            <td class="center">20/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38289', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RthRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CSmiB8cfAgVbFkQkQWaDKbo4xUSUhCOLl8E+x2ffXmC8r6pcAAAA', 'H4sIAAAAAAAAA8tLS9XLzEtxyEjNKS5JzdNLzs/VSyoCAFKog9oWAAAA');">HELSTEN IND.COM. DE FACAS E FERRAMENTAS LTDA</a></td>
                            <td class="right" width="10%">R$ 2.785,55</td>
                            <td class="right" width="10%">R$ 2.785,55</td>
                            <td class="right">214,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RthRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CSmiB8cfAgVbFkQkQWaDKbo4xUSUhCOLl8E+x2ffXmC8r6pcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hxRxAs8fAgVbFkQkQWaDKfroEhIl4cjCPNjn+OzbCwBNxMdcAAAA');">38290</a></td>
                            <td class="center">1</td>
                            <td class="center">20/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38290', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hxRxAs8fAgVbFkQkQWaDKfroEhIl4cjCPNjn+OzbCwBNxMdcAAAA', 'H4sIAAAAAAAAA8vLzMt3yAMSaYlF+ZnFesn5uXpJRQDKoVWuFgAAAA==');">ASF INDUSTRIA DE AUTOPECAS LTDA EPP</a></td>
                            <td class="right" width="10%">R$ 5.175,00</td>
                            <td class="right" width="10%">R$ 5.175,00</td>
                            <td class="right">330,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hxRxAs8fAgVbFkQkQWaDKfroEhIl4cjCPNjn+OzbCwBNxMdcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hxRxAs8fAgVbFkQkQWaDKfroEhEl4cgiONjn+OzbCxQzhrFcAAAA');">38291</a></td>
                            <td class="center">1</td>
                            <td class="center">20/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38291', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hxRxAs8fAgVbFkQkQWaDKfroEhEl4cgiONjn+OzbCxQzhrFcAAAA', 'H4sIAAAAAAAAA8vNSSwtSk3Mc0gsLcnPTS1JzNFLzs/VSyoCAA2ip9wZAAAA');">AUTOMETAL S/A.</a></td>
                            <td class="right" width="10%">R$ 18.258,32</td>
                            <td class="right" width="10%">R$ 18.258,32</td>
                            <td class="right">1.318,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hxRxAs8fAgVbFkQkQWaDKfroEhEl4cgiONjn+OzbCxQzhrFcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hxRxAs8fAgVbFkQkQWaDKfrokiNKwpElyGCf47NvLwmnCI5cAAAA');">38292</a></td>
                            <td class="center">1</td>
                            <td class="center">20/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38292', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hxRxAs8fAgVbFkQkQWaDKfrokiNKwpElyGCf47NvLwmnCI5cAAAA', 'H4sIAAAAAAAAA0vOSSxNyUzUS04sKEjNyUksyncoSS0qAgrk5+olFQEA6/XWiR8AAAA=');">CAPPELLARO E CAPPELLARO COMERCIO DE FRUTAS LTDA</a></td>
                            <td class="right" width="10%">R$ 7.218,00</td>
                            <td class="right" width="10%">R$ 7.218,00</td>
                            <td class="right">494,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hxRxAs8fAgVbFkQkQWaDKfrokiNKwpElyGCf47NvLwmnCI5cAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hxRxAs8fAgVbFkQkQWaDKfrokidKwpEl0mCf47NvLxURgMxcAAAA');">38293</a></td>
                            <td class="center">1</td>
                            <td class="center">20/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38293', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hxRxAs8fAgVbFkQkQWaDKfrokidKwpEl0mCf47NvLxURgMxcAAAA', 'H4sIAAAAAAAAA0vLzEvMS07NLMovSqzMLc1LyU9OLChIzclJLMp3yC8tycnPz9ZLzs8FAKdBIRQoAAAA');">RAYMUNDO CAPPELLARO</a></td>
                            <td class="right" width="10%">R$ 3.345,35</td>
                            <td class="right" width="10%">R$ 3.345,35</td>
                            <td class="right">117,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hxRxAs8fAgVbFkQkQWaDKfrokidKwpEl0mCf47NvLxURgMxcAAAA');">venda de producao estabelec destinada a nao contribuinte</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtkRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hxTRw8QfAgVbFkQkQWaDKU7RJU+UhCNLCoN9js++veqIZhpcAAAA');">38294</a></td>
                            <td class="center">1</td>
                            <td class="center">20/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38294', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RtkRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hxTRw8QfAgVbFkQkQWaDKU7RJU+UhCNLCoN9js++veqIZhpcAAAA', 'H4sIAAAAAAAAA0vOz00tSs5MzHFIKyotyUzOz0nMLy3KT8kvS8xJ1UvOz9VLKgIAgbCG0yQAAAA=');">FRUTICOLA OURO DO VALE LTDA</a></td>
                            <td class="right" width="10%">R$ 1.176,00</td>
                            <td class="right" width="10%">R$ 1.176,00</td>
                            <td class="right">47,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtkRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hxTRw8QfAgVbFkQkQWaDKU7RJU+UhCNLCoN9js++veqIZhpcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwUJ5TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hyQ4gecPkaItB0SkgMwGU/TiEhOlwMIRZbDP8dm3F2kzpi9cAAAA');">38295</a></td>
                            <td class="center">1</td>
                            <td class="center">20/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38295', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwUJ5TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hyQ4gecPkaItB0SkgMwGU/TiEhOlwMIRZbDP8dm3F2kzpi9cAAAA', 'H4sIAAAAAAAAAytMTMlLS3UoSq1MSc3RS87PtU5KzCspzUs1RBIDAIAvr7YlAAAA');">REYDEL AUTOMOTIV BRAZIL IND E COM DE SISTEMAS AUTO LTDA</a></td>
                            <td class="right" width="10%">R$ 7.558,00</td>
                            <td class="right" width="10%">R$ 7.558,00</td>
                            <td class="right">600,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwUJ5TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hyQ4gecPkaItB0SkgMwGU/TiEhOlwMIRZbDP8dm3F2kzpi9cAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hxRxAs8fAgVbFkQkQWaDKfrokhAl4ciB/GCf47NvLyNAZ+FcAAAA');">38296</a></td>
                            <td class="center">1</td>
                            <td class="center">20/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38296', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hxRxAs8fAgVbFkQkQWaDKfrokhAl4ciB/GCf47NvLyNAZ+FcAAAA', 'H4sIAAAAAAAAAytMTMlLS3UoSq1MSc3RS87PtU5KzCspzUs1RBIDAIAvr7YlAAAA');">REYDEL AUTOMOTIV BRAZIL IND E COM DE SISTEMAS AUTO LTDA</a></td>
                            <td class="right" width="10%">R$ 18.702,06</td>
                            <td class="right" width="10%"> </td>
                            <td class="right"></td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hxRxAs8fAgVbFkQkQWaDKfrokhAl4ciB/GCf47NvLyNAZ+FcAAAA');">DEVOLUCAO DE EMBALAGENS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwVJ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hxRxAs8fhMSWAyJSQGaDKfrokhClwJHFpcE+x2ffXubxnEhcAAAA');">38297</a></td>
                            <td class="center">1</td>
                            <td class="center">20/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38297', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwVJ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hxRxAs8fhMSWAyJSQGaDKfrokhClwJHFpcE+x2ffXubxnEhcAAAA', 'H4sIAAAAAAAAA0tOLMqpSs0sLtbLLanSq8jNcSjLLM7Mz9ODCCbn5wIAtdSRnCIAAAA=');">CARL ZEISS VISION BRASIL INDUSTRIA OPTICA LTDA</a></td>
                            <td class="right" width="10%">R$ 3.795,00</td>
                            <td class="right" width="10%">R$ 3.795,00</td>
                            <td class="right">66,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwVJ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hxRxAs8fhMSWAyJSQGaDKfrokhClwJHFpcE+x2ffXubxnEhcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RthUJ5TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CUnQg+MPkaItB0SkgMwGU3QyJSFKgYWj84N9js++vUHrjhVcAAAA');">38298</a></td>
                            <td class="center">1</td>
                            <td class="center">20/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38298', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RthUJ5TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CUnQg+MPkaItB0SkgMwGU3QyJSFKgYWj84N9js++vUHrjhVcAAAA', 'H4sIAAAAAAAAA0vLLE5OzDFyyMnMyy7ISSzWS87P1UsqAgCQJhnvFwAAAA==');">LINKPLAS INDUSTRIA DE PLASTICOS LTDA</a></td>
                            <td class="right" width="10%">R$ 11.190,16</td>
                            <td class="right" width="10%">R$ 11.190,16</td>
                            <td class="right">933,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RthUJ5TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CUnQg+MPkaItB0SkgMwGU3QyJSFKgYWj84N9js++vUHrjhVcAAAA');">VENDA DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MWw6AIAwET6TdIuVxHCKYmCgYjcTjW/3ZmczHUl0KHWfL95waldrXlNNFSVP/zYADLE3ywbPXFQeAHUQUqpiCiZE5OgniLQb9HJ99ewFsIVx9XAAAAA==');">38299</a></td>
                            <td class="center">1</td>
                            <td class="center">20/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38299', 'H4sIAAAAAAAAAx2MWw6AIAwET6TdIuVxHCKYmCgYjcTjW/3ZmczHUl0KHWfL95waldrXlNNFSVP/zYADLE3ywbPXFQeAHUQUqpiCiZE5OgniLQb9HJ99ewFsIVx9XAAAAA==', 'H4sIAAAAAAAAA0vOzytJLNYrSExPLHJIyi9Kzs/RS87P1Usqsi7KTyrOz0tOzC3IL0aSAgCvBM2RMgAAAA==');">BORCOL INDUSTRIA DE BORRACHA LTDA</a></td>
                            <td class="right" width="10%">R$ 3.105,00</td>
                            <td class="right" width="10%">R$ 3.105,00</td>
                            <td class="right">190,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MWw6AIAwET6TdIuVxHCKYmCgYjcTjW/3ZmczHUl0KHWfL95waldrXlNNFSVP/zYADLE3ywbPXFQeAHUQUqpiCiZE5OgniLQb9HJ99ewFsIVx9XAAAAA==');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQqAMAwEX6TZWNPW5wRbQdBWFIvPN3rZGeawVJZMx1nTPWulXNqqSS9SS+23ARwxkpMPgYOteADsIWIwhYvOjCcvUYKgs8/+2bcX5bm7K1wAAAA=');">38300</a></td>
                            <td class="center">1</td>
                            <td class="center">20/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38300', 'H4sIAAAAAAAAAx2MQQqAMAwEX6TZWNPW5wRbQdBWFIvPN3rZGeawVJZMx1nTPWulXNqqSS9SS+23ARwxkpMPgYOteADsIWIwhYvOjCcvUYKgs8/+2bcX5bm7K1wAAAA=', 'H4sIAAAAAAAAA8tLS81NTU4syEksLtFLzSspSkxJdECIJOfn6iUVAQC2U3vmJQAAAA==');">MECAPLAST DO BRASIL IND COM IMPORTACAO E EXPORTACAO LTDA</a></td>
                            <td class="right" width="10%">R$ 411,00</td>
                            <td class="right" width="10%">R$ 411,00</td>
                            <td class="right">38,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQqAMAwEX6TZWNPW5wRbQdBWFIvPN3rZGeawVJZMx1nTPWulXNqqSS9SS+23ARwxkpMPgYOteADsIWIwhYvOjCcvUYKgs8/+2bcX5bm7K1wAAAA=');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQqAMAwEX6TZWJPW5xRbQdBWFIvPN3rZGeawVJZMx1nTPcdKubQ1pnhRtNR+G8ABIzn54NnbigJghYjBFC44MPOkEsSrdvbZP/v2AjT7dGRcAAAA');">38301</a></td>
                            <td class="center">1</td>
                            <td class="center">23/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38301', 'H4sIAAAAAAAAAx2MQQqAMAwEX6TZWJPW5xRbQdBWFIvPN3rZGeawVJZMx1nTPcdKubQ1pnhRtNR+G8ABIzn54NnbigJghYjBFC44MPOkEsSrdvbZP/v2AjT7dGRcAAAA', 'H4sIAAAAAAAAA8tLS3VISc0rztdLzs/VSyoCAOZHjD0QAAAA');">DENSO DO BRASIL LTDA</a></td>
                            <td class="right" width="10%">R$ 200,00</td>
                            <td class="right" width="10%">R$ 200,00</td>
                            <td class="right">14,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQqAMAwEX6TZWJPW5xRbQdBWFIvPN3rZGeawVJZMx1nTPcdKubQ1pnhRtNR+G8ABIzn54NnbigJghYjBFC44MPOkEsSrdvbZP/v2AjT7dGRcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQqAMAwEX6TZtKapzylaQdBWFIvPN3rZGeawVJZMx1nne0qVcmlrmtNFyVL7zYEjBvLyQVltJQDgABGDKXz0cMxjkCiq3Nln/+zbC2p7gUxcAAAA');">38302</a></td>
                            <td class="center">1</td>
                            <td class="center">23/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38302', 'H4sIAAAAAAAAAx2MQQqAMAwEX6TZtKapzylaQdBWFIvPN3rZGeawVJZMx1nne0qVcmlrmtNFyVL7zYEjBvLyQVltJQDgABGDKXz0cMxjkCiq3Nln/+zbC2p7gUxcAAAA', 'H4sIAAAAAAAAA8tLS81NLSnKd8hNTM9N1MvMS9FLKtJJzs8tKEosRhEEAPzc2qsqAAAA');">MAGMA INDUSTRIA COMERCIO IMPORTACAO DE PRODUTOS TEXTEIS LTDA</a></td>
                            <td class="right" width="10%">R$ 2.733,84</td>
                            <td class="right" width="10%">R$ 2.733,84</td>
                            <td class="right">257,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQqAMAwEX6TZtKapzylaQdBWFIvPN3rZGeawVJZMx1nne0qVcmlrmtNFyVL7zYEjBvLyQVltJQDgABGDKXz0cMxjkCiq3Nln/+zbC2p7gUxcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQqAMAwEX6RJjGnqc4KtIGgrisXnG73sDHNYKEuG46zpnq1CLm21ZBeYp/bbgBRxBJYPSuorAREpoIjDFTkyMtEUJIpG7fyzf/btBTXZchlcAAAA');">38303</a></td>
                            <td class="center">1</td>
                            <td class="center">23/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38303', 'H4sIAAAAAAAAAx2MQQqAMAwEX6RJjGnqc4KtIGgrisXnG73sDHNYKEuG46zpnq1CLm21ZBeYp/bbgBRxBJYPSuorAREpoIjDFTkyMtEUJIpG7fyzf/btBTXZchlcAAAA', 'H4sIAAAAAAAAA8tLS3VITkwpyEksLtFLzs/VSyqyzirNyUzMwxAHAKcgBDkrAAAA');">CADPLAST IND E COM DE PLASTICOS LTDA</a></td>
                            <td class="right" width="10%">R$ 4.620,00</td>
                            <td class="right" width="10%">R$ 2.160,00</td>
                            <td class="right">240,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQqAMAwEX6RJjGnqc4KtIGgrisXnG73sDHNYKEuG46zpnq1CLm21ZBeYp/bbgBRxBJYPSuorAREpoIjDFTkyMtEUJIpG7fyzf/btBTXZchlcAAAA');">BENEF/RET IND</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MWw6AIAwET6TdCuVxHCKYmCgYjcTjW/3ZmczHUl0KHWfL95waldrXlNNFSVP/bQIHWDLywbPXFQeAHUQUqjDBwDJHJ0F8nAb9HJ99ewEPfBn2XAAAAA==');">38304</a></td>
                            <td class="center">1</td>
                            <td class="center">23/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38304', 'H4sIAAAAAAAAAx2MWw6AIAwET6TdCuVxHCKYmCgYjcTjW/3ZmczHUl0KHWfL95waldrXlNNFSVP/bQIHWDLywbPXFQeAHUQUqjDBwDJHJ0F8nAb9HJ99ewEPfBn2XAAAAA==', 'H4sIAAAAAAAAA0vNKylKTEksdsjLz0kpyM/JLElNztBLzs/VSyoCAJfaE8YcAAAA');">NOLD POLITECH FILMES E EMBALAGENS LTDA</a></td>
                            <td class="right" width="10%">R$ 138,00</td>
                            <td class="right" width="10%">R$ 138,00</td>
                            <td class="right">5,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MWw6AIAwET6TdCuVxHCKYmCgYjcTjW/3ZmczHUl0KHWfL95waldrXlNNFSVP/bQIHWDLywbPXFQeAHUQUqjDBwDJHJ0F8nAb9HJ99ewEPfBn2XAAAAA==');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQqAMAwEX6TZWNPW5wRbQdBWFIvPN3rZGeawVJZMx1nTPWulXNqqSS9SS+23ARwxkpMPgYOteADsIWIwhYsOwjx5iRLhOvvsn317ARg3bVlcAAAA');">38305</a></td>
                            <td class="center">1</td>
                            <td class="center">23/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38305', 'H4sIAAAAAAAAAx2MQQqAMAwEX6TZWNPW5wRbQdBWFIvPN3rZGeawVJZMx1nTPWulXNqqSS9SS+23ARwxkpMPgYOteADsIWIwhYsOwjx5iRLhOvvsn317ARg3bVlcAAAA', 'H4sIAAAAAAAAA0vNKylKTEksdsjLz0kpyM/JLElNztBLzs/VSyoCAJfaE8YcAAAA');">NOLD POLITECH FILMES E EMBALAGENS LTDA</a></td>
                            <td class="right" width="10%">R$ 11.461,28</td>
                            <td class="right" width="10%">R$ 3.571,60</td>
                            <td class="right">1.786,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQqAMAwEX6TZWNPW5wRbQdBWFIvPN3rZGeawVJZMx1nTPWulXNqqSS9SS+23ARwxkpMPgYOteADsIWIwhYsOwjx5iRLhOvvsn317ARg3bVlcAAAA');">BENEF/RET IND</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQqAMAwEX6RJrEnT5wStIGgrisXnG73sDHNYKEuG46zzPVmFXNpqs11gntpvA5LiCIE/RIq+LIhIgswOVwwaUIiSsLJS6vyzf/btBRFQ14BcAAAA');">38306</a></td>
                            <td class="center">1</td>
                            <td class="center">23/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38306', 'H4sIAAAAAAAAAx2MQQqAMAwEX6RJrEnT5wStIGgrisXnG73sDHNYKEuG46zzPVmFXNpqs11gntpvA5LiCIE/RIq+LIhIgswOVwwaUIiSsLJS6vyzf/btBRFQ14BcAAAA', 'H4sIAAAAAAAAAwMAAAAAAAAAAAA=');">BR GOODS CONFECCAO LTDA ME</a></td>
                            <td class="right" width="10%">R$ 17.554,00</td>
                            <td class="right" width="10%">R$ 17.554,00</td>
                            <td class="right">685,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQqAMAwEX6RJrEnT5wStIGgrisXnG73sDHNYKEuG46zzPVmFXNpqs11gntpvA5LiCIE/RIq+LIhIgswOVwwaUIiSsLJS6vyzf/btBRFQ14BcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgUJ9TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hyQYwPOHRMmWIyJSRGaDKXrxmIimyMLiwmCf47NvLx2MTU1cAAAA');">38307</a></td>
                            <td class="center">1</td>
                            <td class="center">23/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38307', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgUJ9TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hyQYwPOHRMmWIyJSRGaDKXrxmIimyMLiwmCf47NvLx2MTU1cAAAA', 'H4sIAAAAAAAAA8tLS3UoyEkszs0vyddLzs/VSyqyhvEdSvNzoGIAeig+8ycAAAA=');">FIOROTTI E FIOROTTI COMERCIO DE MOTOPECAS LTDA</a></td>
                            <td class="right" width="10%">R$ 6.841,35</td>
                            <td class="right" width="10%">R$ 6.841,35</td>
                            <td class="right">372,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtgUJ9TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hyQYwPOHRMmWIyJSRGaDKXrxmIimyMLiwmCf47NvLx2MTU1cAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQqAMAwEX6TZWNPW5wRbQdBWFIvPN3rZGeawVJZMx1nTPWulXNqqSS9SS+23ARwxkpMPgYOteADsIWIwhYsOkXnyEsW0s8/+2bcX4SD8vFwAAAA=');">38308</a></td>
                            <td class="center">1</td>
                            <td class="center">23/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38308', 'H4sIAAAAAAAAAx2MQQqAMAwEX6TZWNPW5wRbQdBWFIvPN3rZGeawVJZMx1nTPWulXNqqSS9SS+23ARwxkpMPgYOteADsIWIwhYsOkXnyEsW0s8/+2bcX4SD8vFwAAAA=', 'H4sIAAAAAAAAA0tOzSspSszJS0t1KMvPyS4uT0xPzdNLzs/VSyoCAIe1BX4cAAAA');">VOLKSWAGEN DO BRASIL IND DE VEICULOS AUTOMOTORES LTDA</a></td>
                            <td class="right" width="10%">R$ 17.467,35</td>
                            <td class="right" width="10%">R$ 17.467,35</td>
                            <td class="right">1.192,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQqAMAwEX6TZWNPW5wRbQdBWFIvPN3rZGeawVJZMx1nTPWulXNqqSS9SS+23ARwxkpMPgYOteADsIWIwhYsOkXnyEsW0s8/+2bcX4SD8vFwAAAA=');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RthUJ5TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CUnQg+MPkaItB0SkgMwGU3TiMBGlwMLiebDP8dm3F4/+VcNcAAAA');">38309</a></td>
                            <td class="center">1</td>
                            <td class="center">23/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38309', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RthUJ5TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CUnQg+MPkaItB0SkgMwGU3TiMBGlwMLiebDP8dm3F4/+VcNcAAAA', 'H4sIAAAAAAAAAytMTMlLS3UoSq1MSc3RS87PtU5KzCspzUs1RBIDAIAvr7YlAAAA');">REYDEL AUTOMOTIV BRAZIL IND E COM DE SISTEMAS AUTO LTDA</a></td>
                            <td class="right" width="10%">R$ 990,00</td>
                            <td class="right" width="10%">R$ 990,00</td>
                            <td class="right">63,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RthUJ5TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CUnQg+MPkaItB0SkgMwGU3TiMBGlwMLiebDP8dm3F4/+VcNcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MUQqAMAxDT6RN3brN4xSdIOgmisPjWyWQ98hHqCyZjrPO96SVcmmrznqR2tR+G8AJnpx8iBytJQDgABGDKVxyDOYxSLL4zj77Z99eaSfIgFwAAAA=');">38310</a></td>
                            <td class="center">1</td>
                            <td class="center">23/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38310', 'H4sIAAAAAAAAAx2MUQqAMAxDT6RN3brN4xSdIOgmisPjWyWQ98hHqCyZjrPO96SVcmmrznqR2tR+G8AJnpx8iBytJQDgABGDKVxyDOYxSLL4zj77Z99eaSfIgFwAAAA=', 'H4sIAAAAAAAAA0tNKU0sSsnXK8nPTaxyyE3MK01LLMkvStRLzs/VSyoCAMJBsKUfAAAA');">CIA MANUFATORA DE TECIDOS DE ALGODAO</a></td>
                            <td class="right" width="10%">R$ 10.686,38</td>
                            <td class="right" width="10%">R$ 10.686,38</td>
                            <td class="right">235,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MUQqAMAxDT6RN3brN4xSdIOgmisPjWyWQ98hHqCyZjrPO96SVcmmrznqR2tR+G8AJnpx8iBytJQDgABGDKVxyDOYxSLL4zj77Z99eaSfIgFwAAAA=');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQqAMAwEX6RJrEnjc4KtIGgrisXnG93DzrCHhbJkOM6a7tkq5NJWS3aB+dR+G5AURwj8IVL0ZkFEEmR2uGLQQJ5JWFkFO//sn317AT5N8eFcAAAA');">38311</a></td>
                            <td class="center">1</td>
                            <td class="center">23/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38311', 'H4sIAAAAAAAAAx2MQQqAMAwEX6RJrEnjc4KtIGgrisXnG93DzrCHhbJkOM6a7tkq5NJWS3aB+dR+G5AURwj8IVL0ZkFEEmR2uGLQQJ5JWFkFO//sn317AT5N8eFcAAAA', 'H4sIAAAAAAAAAytMTMlLS3UoSq1MSc3RS87PtU5KzCspzUs1RBIDAIAvr7YlAAAA');">REYDEL AUTOMOTIV BRAZIL IND E COM DE SISTEMAS AUTO LTDA</a></td>
                            <td class="right" width="10%">R$ 3.872,50</td>
                            <td class="right" width="10%">R$ 3.872,50</td>
                            <td class="right">212,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQqAMAwEX6RJrEnjc4KtIGgrisXnG93DzrCHhbJkOM6a7tkq5NJWS3aB+dR+G5AURwj8IVL0ZkFEEmR2uGLQQJ5JWFkFO//sn317AT5N8eFcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwUJ9TiOYmCgYjcTnW7nsTOawUNYM51XTs2iFXNqmSW9QS62bQxKcwPOPSNGWAyJSQGaDKXrx5IjmwMISebDP8T32D+bl8udcAAAA');">38312</a></td>
                            <td class="center">1</td>
                            <td class="center">23/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38312', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwUJ9TiOYmCgYjcTnW7nsTOawUNYM51XTs2iFXNqmSW9QS62bQxKcwPOPSNGWAyJSQGaDKXrx5IjmwMISebDP8T32D+bl8udcAAAA', 'H4sIAAAAAAAAAytMTMlLS3UoSq1MSc3RS87PtU5KzCspzUs1RBIDAIAvr7YlAAAA');">REYDEL AUTOMOTIV BRAZIL IND E COM DE SISTEMAS AUTO LTDA</a></td>
                            <td class="right" width="10%">R$ 12.811,68</td>
                            <td class="right" width="10%"> </td>
                            <td class="right"></td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwUJ9TiOYmCgYjcTnW7nsTOawUNYM51XTs2iFXNqmSW9QS62bQxKcwPOPSNGWAyJSQGaDKXrx5IjmwMISebDP8T32D+bl8udcAAAA');">DEVOLUCAO DE EMBALAGENS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQqAMAwEX6RJjGnjc4KtIGgrisXnG73sDHNYKEuG46zpnq1CLm21ZBeYp/bbgKQ4AsuHSNFXAiJSQBGHK7IyMdEUREUVO//sn317AXx7jItcAAAA');">38313</a></td>
                            <td class="center">1</td>
                            <td class="center">23/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38313', 'H4sIAAAAAAAAAx2MQQqAMAwEX6RJjGnjc4KtIGgrisXnG73sDHNYKEuG46zpnq1CLm21ZBeYp/bbgKQ4AsuHSNFXAiJSQBGHK7IyMdEUREUVO//sn317AXx7jItcAAAA', 'H4sIAAAAAAAAA8tLS3UoScxOLEnUS87P1UsqAgDMTkWMEQAAAA==');">TAKATA BRASIL LTDA</a></td>
                            <td class="right" width="10%">R$ 10.871,80</td>
                            <td class="right" width="10%">R$ 10.871,80</td>
                            <td class="right">675,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQqAMAwEX6RJjGnjc4KtIGgrisXnG73sDHNYKEuG46zpnq1CLm21ZBeYp/bbgKQ4AsuHSNFXAiJSQBGHK7IyMdEUREUVO//sn317AXx7jItcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RthRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CSmiB8cfAgVbFkQkQWaDKbroyBMl4cgxyWCf47NvL4Pial1cAAAA');">38314</a></td>
                            <td class="center">1</td>
                            <td class="center">24/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38314', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RthRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CSmiB8cfAgVbFkQkQWaDKbroyBMl4cgxyWCf47NvL4Pial1cAAAA', 'H4sIAAAAAAAAA9MwN9RUsLQ0MjDVNTU3NFLILEvMS81MSQUA7l6WrRgAAAA=');">FAURECIA AUTOMOTIVE DO BRASIL LTDA.</a></td>
                            <td class="right" width="10%">R$ 231,00</td>
                            <td class="right" width="10%">R$ 231,00</td>
                            <td class="right">16,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RthRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/23CSmiB8cfAgVbFkQkQWaDKbroyBMl4cgxyWCf47NvL4Pial1cAAAA');">VENDA DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MWwqAMAwET6TZWNPHcYJWELQVxeLxjf7sDPOxVJZMx1nne9JKubRVZ71ILbXfBnDESE4+BA624gGwh4jBFC46FubkJUpC6Oyzf/btBZKCaKBcAAAA');">38315</a></td>
                            <td class="center">1</td>
                            <td class="center">24/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38315', 'H4sIAAAAAAAAAx2MWwqAMAwET6TZWNPHcYJWELQVxeLxjf7sDPOxVJZMx1nne9JKubRVZ71ILbXfBnDESE4+BA624gGwh4jBFC46FubkJUpC6Oyzf/btBZKCaKBcAAAA', 'H4sIAAAAAAAAA8tLS3VIz81PyizWS87PBQBPMTSfDgAAAA==');">MOBIS BRASIL FABRICACAO DE AUTO PECAS LTDA</a></td>
                            <td class="right" width="10%">R$ 25.964,38</td>
                            <td class="right" width="10%">R$ 25.964,38</td>
                            <td class="right">1.229,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MWwqAMAwET6TZWNPHcYJWELQVxeLxjf7sDPOxVJZMx1nne9JKubRVZ71ILbXfBnDESE4+BA624gGwh4jBFC46FubkJUpC6Oyzf/btBZKCaKBcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hxRxAs8fAgVbFkQkQWaDKfroSYiScOREbrDP8dm3F0oqa6ZcAAAA');">38316</a></td>
                            <td class="center">1</td>
                            <td class="center">24/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38316', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hxRxAs8fAgVbFkQkQWaDKfroSYiScOREbrDP8dm3F0oqa6ZcAAAA', 'H4sIAAAAAAAAA0tLLC1KTc5M1MtLS3UoTizPKa3KSy3RS87P1UsqUtCoyM3RBABMkmsLIwAAAA==');">FAURECIA AUTOMOTIVE DO BRASIL LTDA</a></td>
                            <td class="right" width="10%">R$ 7.887,60</td>
                            <td class="right" width="10%">R$ 7.887,60</td>
                            <td class="right">527,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwRZ4TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hxRxAs8fAgVbFkQkQWaDKfroSYiScOREbrDP8dm3F0oqa6ZcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwUJ5TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hyQ4gecPkaItB0SkgMwGU/TiKRKlwMLJyWCf47NvL4+bkA9cAAAA');">38317</a></td>
                            <td class="center">1</td>
                            <td class="center">24/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38317', 'H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwUJ5TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hyQ4gecPkaItB0SkgMwGU/TiKRKlwMLJyWCf47NvL4+bkA9cAAAA', 'H4sIAAAAAAAAA0vOzy0oSix2SE0rSizK1EvOz9VLKgIAAsKoqxUAAAA=');">EFRARI IND E COM IMP E EXP DE AUTOPECAS LTDA</a></td>
                            <td class="right" width="10%">R$ 3.089,59</td>
                            <td class="right" width="10%">R$ 3.089,59</td>
                            <td class="right">202,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQ6AIAwEX6RtwUJ5TiOYmCgYjcTnW73sTOawUJcCx9nyPWuDUvuqWS9QS/03hyQ4gecPkaItB0SkgMwGU/TiKRKlwMLJyWCf47NvL4+bkA9cAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                        <tr class="dados">
                            <td class="center"><a href="#" onClick="printDanfe('H4sIAAAAAAAAAx2MQQqAMAwEX6RJjGnT5wStIGgrisXnG73sDHNYKEuG46zzPVmFXNpqs11gntpvA5LiCCwfIkVfCYhIAUUcrsjKpEQpiEpi7vyzf/btBaL4mCFcAAAA');">38318</a></td>
                            <td class="center">1</td>
                            <td class="center">24/04/2018</td>
                            <td class="left email"><a href="#" onClick="mailDanfe('38318', 'H4sIAAAAAAAAAx2MQQqAMAwEX6RJjGnT5wStIGgrisXnG73sDHNYKEuG46zzPVmFXNpqs11gntpvA5LiCCwfIkVfCYhIAUUcrsjKpEQpiEpi7vyzf/btBaL4mCFcAAAA', 'H4sIAAAAAAAAA0vOzy0oSix2SE0rSizK1EvOz9VLKgIAAsKoqxUAAAA=');">EFRARI IND E COM IMP E EXP DE AUTOPECAS LTDA</a></td>
                            <td class="right" width="10%">R$ 4.716,98</td>
                            <td class="right" width="10%">R$ 4.716,98</td>
                            <td class="right">308,0</td>   
                            <td class="left"><a href="#" onClick="openXml('H4sIAAAAAAAAAx2MQQqAMAwEX6RJjGnT5wStIGgrisXnG73sDHNYKEuG46zzPVmFXNpqs11gntpvA5LiCCwfIkVfCYhIAUUcrsjKpEQpiEpi7vyzf/btBaL4mCFcAAAA');">VENDAS DE PRODUTOS</a></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Número</th>
                            <th>Série</th>
                            <th>Data</th>
                            <th>Destinatário/Emitente</th>
                            <th>Valor NF</th>
                            <th>Valor Fat</th>
                            <th>Peso</th>
                            <th>Natureza da Operação</th>
                        </tr>
                    </tfoot>
                </table>
            </small>    
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#example').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
            }
        });
    });
</script>
@endsection
