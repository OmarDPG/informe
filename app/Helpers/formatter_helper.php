<?php
if (! function_exists('periodo'))
{
	function periodo(string $value, array $row): string
	{
		$opt=['Enero-Marzo','Abril-Junio','Julio-Septiembre','Octubre-Diciembre'];
		return $opt[$value];
	}
}
if (! function_exists('dater'))
{
	function dater(string $value, array $row): string
	{
		return date('d-m-Y H:i:s', strtotime($value));
	}
}
if (! function_exists('action_links_respuesta'))
{
	function action_links_respuesta(string $value, array $row): string
	{
			$activo=$row['activo']==0?"":"checked";
		$act='<label class="relative z-0 inline-flex items-center cursor-pointer">
				<input type="checkbox" '.$activo.' onchange="actUni(this.value)" value="'.$row['id_usuario'].'" id="check'.$row['id_usuario'].'" class="sr-only peer">
				<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-emerald-300 dark:peer-focus:ring-emerald-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white  after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-emerald-600"></div>
			</label>';
		$edit='<a href="'.base_url().'/administrador/altaUsuario/'.$row['id_usuario'].'" class="text-gray-500 transition-colors duration-200 hover:text-emerald-500 focus:outline-none">
				<svg width="24" stroke-width="1.5" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M20 12V5.74853C20 5.5894 19.9368 5.43679 19.8243 5.32426L16.6757 2.17574C16.5632 2.06321 16.4106 2 16.2515 2H4.6C4.26863 2 4 2.26863 4 2.6V21.4C4 21.7314 4.26863 22 4.6 22H11" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/> <path d="M8 10H16M8 6H12M8 14H11" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/> <path d="M16 5.4V2.35355C16 2.15829 16.1583 2 16.3536 2C16.4473 2 16.5372 2.03725 16.6036 2.10355L19.8964 5.39645C19.9628 5.46275 20 5.55268 20 5.64645C20 5.84171 19.8417 6 19.6464 6H16.6C16.2686 6 16 5.73137 16 5.4Z" fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/> <path d="M17.9541 16.9394L18.9541 15.9394C19.392 15.5015 20.102 15.5015 20.5399 15.9394V15.9394C20.9778 16.3773 20.9778 17.0873 20.5399 17.5252L19.5399 18.5252M17.9541 16.9394L14.963 19.9305C14.8131 20.0804 14.7147 20.2741 14.6821 20.4835L14.4394 22.0399L15.9957 21.7973C16.2052 21.7646 16.3988 21.6662 16.5487 21.5163L19.5399 18.5252M17.9541 16.9394L19.5399 18.5252" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/> </svg>
			</a>';
	  return '<div class="flex items-center space-x-4 text-sm">'.$act.$edit.'</div>';
	}
}
if (! function_exists('admin'))
{
	function admin(string $value, array $row): string
	{
		switch($value){
			case '0':
				return '<td class="px-4 py-3 text-xs">
					<span class="px-2 py-1 font-semibold leading-tight text-gray-700 bg-gray-100 rounded-full">
						Normal
					</span>
				</td>';
			break;
			case '1':
				return '<td class="px-4 py-3 text-xs">
					<span class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full">
					Administrador
					</span>
				</td>';
			break;
			default:
				return $value;
		}
	}
}
if (! function_exists('activo'))
{
	function activo(string $value, array $row): string
	{
		switch($value){
			case '0':
				return '<div id="td'.$row['id_usuario'].'"">
					<span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full">
					Inactivo
					</span>
				</div>';
			break;
			case '1':
				return '<div id="td'.$row['id_usuario'].'"">
					<span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full">
					Activo
					</span>
				</div>';
			break;
			default:
				return $value;
		}
	}
}
if (! function_exists('activoP'))
{
	function activoP(string $value, array $row): string
	{
		$activo=$row['activo']==0?"":"checked";
		$edit='<a href="'.base_url().'/administrador/altaPeriodo/'.$row['id_periodo'].'" class="text-gray-500 transition-colors duration-200 hover:text-emerald-500 focus:outline-none">
				<svg width="24" stroke-width="1.5" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M20 12V5.74853C20 5.5894 19.9368 5.43679 19.8243 5.32426L16.6757 2.17574C16.5632 2.06321 16.4106 2 16.2515 2H4.6C4.26863 2 4 2.26863 4 2.6V21.4C4 21.7314 4.26863 22 4.6 22H11" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/> <path d="M8 10H16M8 6H12M8 14H11" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/> <path d="M16 5.4V2.35355C16 2.15829 16.1583 2 16.3536 2C16.4473 2 16.5372 2.03725 16.6036 2.10355L19.8964 5.39645C19.9628 5.46275 20 5.55268 20 5.64645C20 5.84171 19.8417 6 19.6464 6H16.6C16.2686 6 16 5.73137 16 5.4Z" fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/> <path d="M17.9541 16.9394L18.9541 15.9394C19.392 15.5015 20.102 15.5015 20.5399 15.9394V15.9394C20.9778 16.3773 20.9778 17.0873 20.5399 17.5252L19.5399 18.5252M17.9541 16.9394L14.963 19.9305C14.8131 20.0804 14.7147 20.2741 14.6821 20.4835L14.4394 22.0399L15.9957 21.7973C16.2052 21.7646 16.3988 21.6662 16.5487 21.5163L19.5399 18.5252M17.9541 16.9394L19.5399 18.5252" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/> </svg>
			</a>';
	  return '<div class="flex items-center space-x-4 text-sm">'.$edit.'</div>';
	}
}
if (! function_exists('respuesta_form'))
{
	function respuesta_form(string $value, array $row): string
	{
		if($value)
			return '<td class="px-4 py-3 text-sm">'.$value.'</td>';
		else
			return '<td class="px-4 py-3 text-sm"></td>';
	}
}
if (! function_exists('permisos'))
{
	function permisos(string $value, array $row): string
	{
		switch($value){
			case '0':
				return '<td class="px-4 py-3 text-xs">
					<span class="px-2 py-1 font-semibold leading-tight text-teal-700 bg-teal-100 rounded-full">
						Básico
					</span>
				</td>';
			break;
			case '1':
				return '<td class="px-4 py-3 text-xs">
					<span class="px-2 py-1 font-semibold leading-tight text-yellow-700 bg-yellow-100 rounded-full">
						Carga
					</span>
				</td>';
			break;
			default:
				return $value;
		}
	}
}
if (! function_exists('t_carga'))
{
	function t_carga(string $value, array $row): string
	{
		switch($value){
			case '0':
				return '<td class="px-4 py-3 text-xs">
					<span class="px-2 py-1 font-semibold leading-tight text-purple-700 bg-purple-300 rounded-full">
						PTCI
					</span>
				</td>';
			break;
			case '1':
				return '<td class="px-4 py-3 text-xs">
					<span class="px-2 py-1 font-semibold leading-tight text-rose-700 bg-rose-100 rounded-full">
						PTAR
					</span>
				</td>';
			break;
			case '2':
				return '<td class="px-4 py-3 text-xs">
					<span class="px-2 py-1 font-semibold leading-tight text-yellow-700 bg-yellow-100 rounded-full">
						Carpeta electrónica
					</span>
				</td>';
			break;
			default:
				return $value;
		}
	}
}
if (! function_exists('nombre'))
{
	function nombre(string $value, array $row): string
	{
		
		return $value.' '.$row['apellido_p'].' '.$row['apellido_m'];
	}
}
if (! function_exists('unidad'))
{
	function unidad(string $value, array $row): string
	{
		
		return $row['descripcion'];
	}
}
if (! function_exists('opcionesCarga'))
{
	function opcionesCarga(string $value, array $row): string
	{
		$act='<a href="'.base_url().'/administrador/detalleEvidencia/'.$row['id_carga'].'" class="group text-gray-500 transition-colors duration-200 hover:text-emerald-500 focus:outline-none">
				<span class="group-hover:opacity-100 transition-opacity bg-gray-800 px-1 text-sm text-gray-100 rounded-md left-1/2 -translate-x-1/2  text-white opacity-0 m-4 mx-auto" style="transform: translateY(-3rem) transform: translateX(-3rem);">Ver</span>
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16"> <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/> <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/> </svg>
				</a>';
		$del='<a href="'.base_url().'/administrador/delEvidencia/'.$row['id_carga'].'" class="group text-gray-500 transition-colors duration-200 hover:text-emerald-500 focus:outline-none">
				<span class="group-hover:opacity-100 transition-opacity bg-gray-800 px-1 text-sm text-gray-100 rounded-md left-1/2 -translate-x-1/2  text-white opacity-0 m-4 mx-auto" style="transform: translateY(-3rem) transform: translateX(-3rem);">Desactivar</span>
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 576 512"><path d="M0 64C0 28.65 28.65 0 64 0H224V128C224 145.7 238.3 160 256 160H384V198.6C310.1 219.5 256 287.4 256 368C256 427.1 285.1 479.3 329.7 511.3C326.6 511.7 323.3 512 320 512H64C28.65 512 0 483.3 0 448V64zM256 128V0L384 128H256zM288 368C288 288.5 352.5 224 432 224C511.5 224 576 288.5 576 368C576 447.5 511.5 512 432 512C352.5 512 288 447.5 288 368zM491.3 331.3C497.6 325.1 497.6 314.9 491.3 308.7C485.1 302.4 474.9 302.4 468.7 308.7L432 345.4L395.3 308.7C389.1 302.4 378.9 302.4 372.7 308.7C366.4 314.9 366.4 325.1 372.7 331.3L409.4 368L372.7 404.7C366.4 410.9 366.4 421.1 372.7 427.3C378.9 433.6 389.1 433.6 395.3 427.3L432 390.6L468.7 427.3C474.9 433.6 485.1 433.6 491.3 427.3C497.6 421.1 497.6 410.9 491.3 404.7L454.6 368L491.3 331.3z"/></svg>
				</a>';
		$ex='<div class="flex items-center space-x-4 text-sm">';
		$ex.=$act;
		$ex.=$del;
		$ex.='</div>';
	  return $ex;
	}
}
if (! function_exists('accion_link'))
{
	function accion_link(string $value, array $row): string
	{
		$act='<a href="'.base_url().'/scii/cumplimiento/'.$row['id_carga'].'" class="underline text-rose-700 transition-colors duration-200 hover:text-rose-500 focus:outline-none">
				'.$value.'
			</a>';
	  return $act;
	}
}
if (! function_exists('accion_link1'))
{
	function accion_link1(string $value, array $row): string
	{
		$act='<a href="'.base_url().'/administrador/detalleEvidencia/'.$row['id_carga'].'" class="underline text-rose-700 transition-colors duration-200 hover:text-rose-500 focus:outline-none">
				'.$value.'
			</a>';
	  return $act;
	}
}
if (! function_exists('status'))
{
	function status(string $value, array $row): string
	{
		switch($value){
			case '0':
				return '<td class="px-4 py-3 text-xs">
					<i class="fa-solid fa-paper-plane text-xl text-rose-900"></i>
				</td>';
			break;
			case '1':
				return '<td class="px-4 py-3 text-xs">
					<i class="fa-regular fa-hourglass-half fa-spin text-xl text-blue-500"></i>
				</td>';
			break;
			case '2':
				return '<td class="px-4 py-3 text-xs">
					<i class="fa-solid fa-thumbs-up text-2xl text-green-600"></i>
				</td>';
			break;
			case '3':
				return '<td class="px-4 py-3 text-xs">
					<i class="fa-solid fa-triangle-exclamation text-2xl text-yellow-300"></i>
				</td>';
			break;
			case '4':
				return '<td class="px-4 py-3 text-xs">
					<i class="fa-solid fa-flag-checkered text-2xl text-[#c19e74]"></i>
				</td>';
			break;
			default:
				return $value;
		}
	}
}
if (! function_exists('observaciones'))
{
	function observaciones(string $value=null, array $row): string
	{
		$act=($value==null)?'-':'<svg width="24" height="24" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" id="IconChangeColor"><rect width="48" height="48" fill="white" fill-opacity="0.01"></rect><path fill-rule="evenodd" clip-rule="evenodd" d="M24 5.00018L2 43.0002H46L24 5.00018Z" fill="yellow" stroke="#333" stroke-width="1" stroke-linejoin="round" id="mainIconPathAttribute"></path><path d="M24 35.0002V36.0002" stroke="#333" stroke-width="1" stroke-linecap="round" id="mainIconPathAttribute" fill="yellow"></path><path d="M24 19.0007L24.0083 29.0002" stroke="#333" stroke-width="1" stroke-linecap="round" id="mainIconPathAttribute" fill="yellow"></path></svg>';
	  return $act;
	}
}
?>