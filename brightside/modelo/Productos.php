<?php
require_once 'Conexion.php';

class Productos extends Conexion {
    
    public function __construct() {
        parent::__construct();
    }

    public function getAll(int $desde, int $filas): array {
        $query = "SELECT * FROM producto ORDER BY marca LIMIT {$desde},{$filas}";
        return $this->ConsultaSimple($query);
    }

    public function getSearch(string $termino): array {
        $where = "WHERE nombre LIKE :nombre || marca LIKE :marca || precio LIKE :precio || descripcion LIKE :descripcion  ORDER BY marca ASC";
        $array = array(':nombre' => '%' . $termino . '%', ':marca' => '%' . $termino . '%', ':precio' => '%' . $termino . '%', ':descripcion' => '%' . $termino . '%');
        return $this->ConsultaCompleja($where, $array);
    }

    public function getPagination(): array {
        $query = "SELECT COUNT(*) FROM producto;";
        return array(
            'filasTotal'  => intval($this->db->query($query)->fetch(PDO::FETCH_BOTH)[0]),
            'filasPagina' => 14,
        );
    }

    public function showTable(array $array): string {
        $html = '';
        if (count($array)) {
            foreach ($array as $value) {
                $html .= '<div id="cajaEfecto">
                            <div id="cajaProducto">
                              <div id="lineaCaja"><img src="vista/assets/images/linea.png"></div>
                              <a href="index.php?mod=producto&ope=detalles&idProducto=' . $value['idProducto'] . '&tipo=' . $value['tipo'] . '"><div class="nombreProducto">' . $value['nombre'] . '</div></a>
                              <a href="index.php?mod=producto&ope=detalles&idProducto=' . $value['idProducto'] . '&tipo=' . $value['tipo'] . '"><img class="imagenProducto" src="' . $value['imagen'] . '"></a>
                              <div class="precioProducto">' . $value['precio'] . ' €</div>
                              <a href="index.php?mod=producto&ope=detalles&idProducto=' . $value['idProducto'] . '&tipo=' . $value['tipo'] . '"><div id="cajaComprar">Comprar</div></a>
                            </div>
                          </div>';
            }
        } else {
            $html = '<h4 class="text-center">No se encontraron resultados.</h4>';
        }
        return $html;
    }
}
