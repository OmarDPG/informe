<?php

namespace App\Libraries;

use Config\Services;

class DataTable
{
    public function process($modelClass, $columns, $where = [])
    {
        helper('formatter');

        $modelClass = '\\App\\Models\\' . $modelClass;
        $model = new $modelClass;

        foreach ($columns as $column) {
            $fields[] = $column['name'];
        }

        $select = implode(', ', $fields);

        $model->select($select);

        if (empty($where) === false) {
            $model->where($where);
        }

        $request = Services::request();
        $get = $request->getGet();
        $getColumns = $get['columns'];

        foreach ($get['order'] as $order) {
            if ($getColumns[$order['column']]['orderable'] === 'true') {
                //$model->orderBy($columns[$order['column']]['name'], 'RANDOM');
                $model->orderBy($columns[$order['column']]['name'], strtoupper($order['dir']));
            }
        }

        $recordsTotal = $model->countAllResults(false);
        $match = $get['search']['value'];

        if (empty($match) === false) {
            $count = 0;
            foreach ($getColumns as $getColumn) {
                if ($getColumn['searchable'] === 'true') {
                    $count += 1;
                    $field = $columns[$getColumn['data']]['name'];

                    if ($count === 1) {
                        $model->like($field, $match);
                    } else {
                        $model->orLike($field, $match);
                    }
                }
            }
        }

        $recordsFiltered = $model->countAllResults(false);

        $model->limit($get['length'], $get['start']);

        $rows = $model->find();
        $data = [];

        foreach ($rows as $row) {
            $i = 0;
            $d = [];

            foreach ($row as $value) {
                $column = $columns[$i];

                if (array_key_exists('formatter', $column) === true) {
                    $value = call_user_func($column['formatter'], $value, $row);
                }

                $d[] = $value;
                $i += 1;
            }

            $data[] = $d;
        }

        $response = [
            'draw' => intval($get['draw']),
            'recordsTotal' => $recordsTotal,
            'recordsFiltered' => $recordsFiltered,
            'data' => $data
        ];

        return $response;
    }
    public function process2($modelClass, $modelClass2, $columns, $where = [])
    {
        helper('formatter');

        $modelClass = '\\App\\Models\\' . $modelClass;
        $model = new $modelClass;
        $modelClass2 = '\\App\\Models\\' . $modelClass2;
        $model2 = new $modelClass2;
        // $modelClass3 = '\\App\\Models\\'.$modelClass3;
        // $model3 = new $modelClass3;

        foreach ($columns as $column) {
            $fields[] = $column['name'];
        }

        $select = implode(', ', $fields);

        $model->select($select);
        $model->join('unidades', 'usuarios.id_unidad=unidades.id_unidad');
        $model->join('categorias', 'usuarios.id_categoria=categorias.id_categoria');
        // $model3->select($select);
        // $model3->join('categorias', 'usuarios.id_categoria=categorias.id_categoria');
        $model->where('usuarios.activo', 1);
        if (empty($where) === false) {
            $model->where($where);
        }

        $request = Services::request();
        $get = $request->getGet();
        $getColumns = $get['columns'];

        foreach ($get['order'] as $order) {
            if ($getColumns[$order['column']]['orderable'] === 'true') {
                $model->orderBy($columns[$order['column']]['name'], strtoupper($order['dir']));
            }
        }

        $recordsTotal = $model->countAllResults(false);

        $match = $get['search']['value'];

        if (empty($match) === false) {
            $count = 0;

            foreach ($getColumns as $getColumn) {
                if ($getColumn['searchable'] === 'true') {
                    $count += 1;
                    $field = $columns[$getColumn['data']]['name'];

                    if ($count === 1) {
                        $model->like($field, $match);
                    } else {
                        $model->orLike($field, $match);
                    }
                }
            }
        }

        $recordsFiltered = $model->countAllResults(false);


        $model->limit($get['length'], $get['start']);


        $rows = $model->find();

        $data = [];

        foreach ($rows as $row) {
            $i = 0;
            $d = [];

            foreach ($row as $value) {
                $column = $columns[$i];

                if (array_key_exists('formatter', $column) === true) {
                    $value = call_user_func($column['formatter'], $value, $row);
                }

                $d[] = $value;
                $i += 1;
            }

            $data[] = $d;
        }

        $response = [
            'draw' => intval($get['draw']),
            'recordsTotal' => $recordsTotal,
            'recordsFiltered' => $recordsFiltered,
            'data' => $data
        ];

        return $response;
    }
    public function process3($modelClass, $modelClass2, $columns, $where = [])
    {
        helper('formatter');

        $modelClass = '\\App\\Models\\' . $modelClass;
        $model = new $modelClass;
        $modelClass2 = '\\App\\Models\\' . $modelClass2;
        $model2 = new $modelClass2;

        foreach ($columns as $column) {
            $fields[] = $column['name'];
        }

        $select = implode(', ', $fields);

        $model->select($select);
        $model->join('unidades', 'cargas.id_unidad=unidades.id_unidad');

        if (empty($where) === false) {
            $model->where($where);
        }

        $request = Services::request();
        $get = $request->getGet();
        $getColumns = $get['columns'];

        foreach ($get['order'] as $order) {
            if ($getColumns[$order['column']]['orderable'] === 'true') {
                $model->orderBy($columns[$order['column']]['name'], strtoupper($order['dir']));
            }
        }

        $recordsTotal = $model->countAllResults(false);
        $match = $get['search']['value'];

        if (empty($match) === false) {
            $count = 0;

            foreach ($getColumns as $getColumn) {
                if ($getColumn['searchable'] === 'true') {
                    $count += 1;
                    $field = $columns[$getColumn['data']]['name'];

                    if ($count === 1) {
                        $model->like($field, $match);
                    } else {
                        $model->orLike($field, $match);
                    }
                }
            }
        }

        $recordsFiltered = $model->countAllResults(false);

        $model->limit($get['length'], $get['start']);

        $rows = $model->find();
        $data = [];

        foreach ($rows as $row) {
            $i = 0;
            $d = [];

            foreach ($row as $value) {
                $column = $columns[$i];

                if (array_key_exists('formatter', $column) === true) {
                    $value = call_user_func($column['formatter'], $value, $row);
                }

                $d[] = $value;
                $i += 1;
            }

            $data[] = $d;
        }

        $response = [
            'draw' => intval($get['draw']),
            'recordsTotal' => $recordsTotal,
            'recordsFiltered' => $recordsFiltered,
            'data' => $data
        ];

        return $response;
    }

    // public function process5($modelClass, $modelClass2, $modelClass3, $modelClass4, $columns, $where = [])
    // {
    //     helper('formatter');

    //     // Inicialización de los modelos
    //     $modelClass = '\\App\\Models\\' . $modelClass;
    //     $model = new $modelClass;

    //     $modelClass2 = '\\App\\Models\\' . $modelClass2;
    //     $model2 = new $modelClass2;

    //     $modelClass3 = '\\App\\Models\\' . $modelClass3;
    //     $model3 = new $modelClass3;

    //     $modelClass4 = '\\App\\Models\\' . $modelClass4;
    //     $model4 = new $modelClass4;

    //     // Construcción de la lista de columnas
    //     $fields = [];
    //     foreach ($columns as $column) {
    //         $fields[] = $column['name'];
    //     }

    //     $select = implode(', ', $fields);

    //     // Selección de columnas y unión de tablas
    //     $model->select($select);
    //     $model->join('unidades', 'usuarios.id_unidad = unidades.id_unidad', 'left');
    //     $model->join('categorias', 'usuarios.id_categoria = categorias.id_categoria', 'left');
    //     $model->join('respuestas', 'usuarios.id_usuario = respuestas.id_usuario', 'left');
    //     $model->join('periodos', 'respuestas.id_periodo = periodos.id_periodo', 'left');

    //     // Aplicar condiciones WHERE si las hay
    //     if (!empty($where)) {
    //         $model->where($where);
    //     }

    //     // Obtener la solicitud HTTP
    //     $request = Services::request();
    //     $get = $request->getGet();
    //     $getColumns = $get['columns'];

    //     // Aplicar ordenación a la consulta
    //     foreach ($get['order'] as $order) {
    //         if ($getColumns[$order['column']]['orderable'] === 'true') {
    //             $model->orderBy($columns[$order['column']]['name'], strtoupper($order['dir']));
    //         }
    //     }

    //     // Obtener el número total de registros antes de la búsqueda y filtros
    //     $recordsTotal = $model->countAllResults(false);

    //     // Aplicar búsqueda global si se proporciona un término de búsqueda
    //     $match = $get['search']['value'];
    //     if (!empty($match)) {
    //         $count = 0;
    //         foreach ($getColumns as $getColumn) {
    //             if ($getColumn['searchable'] === 'true') {
    //                 $count++;
    //                 $field = $columns[$getColumn['data']]['name'];
    //                 if ($count === 1) {
    //                     $model->like($field, $match);
    //                 } else {
    //                     $model->orLike($field, $match);
    //                 }
    //             }
    //         }
    //     }

    //     // Obtener el número de registros filtrados después de la búsqueda y filtros
    //     $recordsFiltered = $model->countAllResults(false);

    //     // Aplicar límites de paginación
    //     $model->limit($get['length'], $get['start']);

    //     // Obtener los resultados finales
    //     $rows = $model->find();

    //     // Procesar los datos para formatearlos si es necesario
    //     $data = [];
    //     foreach ($rows as $row) {
    //         $i = 0;
    //         $d = [];
    //         foreach ($row as $value) {
    //             $column = $columns[$i];
    //             if (isset($column['formatter'])) {
    //                 $value = call_user_func($column['formatter'], $value, $row);
    //             }
    //             $d[] = $value;
    //             $i++;
    //         }
    //         $data[] = $d;
    //     }

    //     // Construir la respuesta JSON
    //     $response = [
    //         'draw' => intval($get['draw']),
    //         'recordsTotal' => $recordsTotal,
    //         'recordsFiltered' => $recordsFiltered,
    //         'data' => $data
    //     ];

    //     return $response;
    // }

    // public function process6($columns, $where = [], $ultimoPeriodoId = 2, $id_unidad = 1, $activo = 1)
    // {
    //     helper('formatter');

    //     $db = \Config\Database::connect();

    //     // Construcción del builder de la tabla usuarios
    //     $builder = $db->table('usuarios');
    //     $builder->select('usuarios.*, usuarios.id_unidad AS numeroUnidad, respuestas.id_respuesta, respuestas.id_unidad, respuestas.id_periodo, respuestas.id_evaluacion, respuestas.fecha_respuesta, evaluaciones.id_usuario AS registro_realizado');
    //     $builder->join('evaluaciones', 'usuarios.id_usuario = evaluaciones.id_usuario AND evaluaciones.id_periodo = ' . $db->escape($ultimoPeriodoId), 'left');
    //     $builder->join('respuestas', 'usuarios.id_usuario = respuestas.id_usuario AND respuestas.id_periodo = ' . $db->escape($ultimoPeriodoId) . ' AND respuestas.id_unidad = ' . $db->escape($id_unidad), 'left');
    //     $builder->where('usuarios.id_categoria', $activo);
    //     $builder->where('usuarios.id_unidad', $id_unidad);

    //     // Aplicar condiciones WHERE adicionales si las hay
    //     if (!empty($where)) {
    //         $builder->where($where);
    //     }

    //     // Obtener la solicitud HTTP
    //     $request = Services::request();
    //     $get = $request->getGet();
    //     $getColumns = $get['columns'];

    //     // Aplicar ordenación a la consulta
    //     foreach ($get['order'] as $order) {
    //         if ($getColumns[$order['column']]['orderable'] === 'true') {
    //             $builder->orderBy($columns[$order['column']]['name'], strtoupper($order['dir']));
    //         }
    //     }

    //     // Obtener el número total de registros antes de la búsqueda y filtros
    //     $recordsTotal = $builder->countAllResults(false);

    //     // Aplicar búsqueda global si se proporciona un término de búsqueda
    //     $match = $get['search']['value'];
    //     if (!empty($match)) {
    //         $count = 0;
    //         foreach ($getColumns as $getColumn) {
    //             if ($getColumn['searchable'] === 'true') {
    //                 $count++;
    //                 $field = $columns[$getColumn['data']]['name'];
    //                 if ($count === 1) {
    //                     $builder->like($field, $match);
    //                 } else {
    //                     $builder->orLike($field, $match);
    //                 }
    //             }
    //         }
    //     }

    //     // Obtener el número de registros filtrados después de la búsqueda y filtros
    //     $recordsFiltered = $builder->countAllResults(false);

    //     // Aplicar límites de paginación
    //     $builder->limit($get['length'], $get['start']);

    //     // Obtener los resultados finales
    //     $rows = $builder->get()->getResultArray();

    //     // Procesar los datos para formatearlos si es necesario
    //     $data = [];
    //     foreach ($rows as $row) {
    //         $i = 0;
    //         $d = [];
    //         foreach ($row as $value) {
    //             $column = $columns[$i];
    //             if (isset($column['formatter'])) {
    //                 $value = call_user_func($column['formatter'], $value, $row);
    //             }
    //             $d[] = $value;
    //             $i++;
    //         }
    //         $data[] = $d;
    //     }

    //     // Construir la respuesta JSON
    //     $response = [
    //         'draw' => intval($get['draw']),
    //         'recordsTotal' => $recordsTotal,
    //         'recordsFiltered' => $recordsFiltered,
    //         'data' => $data
    //     ];

    //     return $response;
    // }
    public function process7($modelClass, $modelClass2, $columns, $where = [])
    {
        helper('formatter');

        $modelClass = '\\App\\Models\\' . $modelClass;
        $model = new $modelClass;
        $modelClass2 = '\\App\\Models\\' . $modelClass2;
        $model2 = new $modelClass2;


        foreach ($columns as $column) {
            $fields[] = $column['name'];
        }

        $select = implode(', ', $fields);

        $model->select($select);
        $model->join('unidades', 'usuarios.id_unidad=unidades.id_unidad');
        $model->join('categorias', 'usuarios.id_categoria=categorias.id_categoria');

        $model->where('usuarios.activo', 0);
        if (empty($where) === false) {
            $model->where($where);
        }

        $request = Services::request();
        $get = $request->getGet();
        $getColumns = $get['columns'];

        foreach ($get['order'] as $order) {
            if ($getColumns[$order['column']]['orderable'] === 'true') {
                $model->orderBy($columns[$order['column']]['name'], strtoupper($order['dir']));
            }
        }

        $recordsTotal = $model->countAllResults(false);

        $match = $get['search']['value'];

        if (empty($match) === false) {
            $count = 0;

            foreach ($getColumns as $getColumn) {
                if ($getColumn['searchable'] === 'true') {
                    $count += 1;
                    $field = $columns[$getColumn['data']]['name'];

                    if ($count === 1) {
                        $model->like($field, $match);
                    } else {
                        $model->orLike($field, $match);
                    }
                }
            }
        }

        $recordsFiltered = $model->countAllResults(false);


        $model->limit($get['length'], $get['start']);


        $rows = $model->find();

        $data = [];

        foreach ($rows as $row) {
            $i = 0;
            $d = [];

            foreach ($row as $value) {
                $column = $columns[$i];

                if (array_key_exists('formatter', $column) === true) {
                    $value = call_user_func($column['formatter'], $value, $row);
                }

                $d[] = $value;
                $i += 1;
            }

            $data[] = $d;
        }

        $response = [
            'draw' => intval($get['draw']),
            'recordsTotal' => $recordsTotal,
            'recordsFiltered' => $recordsFiltered,
            'data' => $data
        ];

        return $response;
    }

    //--------------------------------------------------------------------
}
