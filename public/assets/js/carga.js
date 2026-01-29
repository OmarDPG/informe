
$(document).ready(function () {
    $('#altaPeriodo').on('submit', function (e) {
        e.preventDefault();
        /* console.log(($("#fecha_ini").val()));
        console.log(($("#fecha_fin").val())); */
        if($("#tem").val()==2){
            e.currentTarget.submit();
        }else{
            if($("#fecha_ini").val()>=$("#fecha_fin").val()){
                Swal.fire({
                    title: 'Error!',
                    text: 'La fecha de inicio debe de ser menor a la fecha de finalización',
                    icon: 'warning',
                    confirmButtonText: 'Ok'
                })
            }else{
                //$('#altaPeriodo').submit();
                e.currentTarget.submit();
            }
        }
        
    });
});
function ayaya() {
    var x = document.getElementById("year").value;
    if(x!=""){
        document.getElementById("tema").style.display = "block";
    }else{
        document.getElementById("tema").style.display = "none";
        document.getElementById("tem").value="";
        clear();
    }
}
function themeayaya() {
    var q = document.getElementById("tem").value;
    if(q!=""){
        switch(q){
            case '0':
                //var y = document.getElementById("perio");
                clear();
                document.getElementById('lbfact_acc').innerHTML = 'Acción de mejora';
                document.getElementById('lbmed_req').innerHTML = 'Medio de verificación';
                document.getElementById("fact").style.display = "block";
                document.getElementById("fi").style.display = "block";
                document.getElementById("ff").style.display = "block";
                document.getElementById("uni").style.display = "block";
                document.getElementById("unidades").style.display = "block";
                document.getElementById("med").style.display = "block";
            break;
            case '1':
                clear();
                document.getElementById('lbfact_acc').innerHTML = 'Factores de riesgo';
                document.getElementById('lbmed_req').innerHTML = 'Medio de verificación';
                document.getElementById("descrip").placeholder = "Descripción de la acción de control";
                document.getElementById("fact").style.display = "block";
                document.getElementById("fi").style.display = "block";
                document.getElementById("ff").style.display = "block";
                document.getElementById("uni").style.display = "block";
                document.getElementById("unidades").style.display = "block";
                document.getElementById("med").style.display = "block";
                document.getElementById("descr").style.display = "block";
            break;
            case '2':
                clear();
                document.getElementById('lbfact_acc').innerHTML = 'Punto de orden del día';
                document.getElementById('lbmed_req').innerHTML = 'Requerimiento';
                document.getElementById("descrip").placeholder = "Descripción del requerimiento";
                document.getElementById("fact").style.display = "block";
                document.getElementById("uni").style.display = "block";
                document.getElementById("unidadesB").style.display = "block";
                document.getElementById("med").style.display = "block";
                document.getElementById("descr").style.display = "block";
            break;
            default:
        }
    }else{
        clear();
    }
}
function clear(){
    document.getElementById("fact").style.display = "none";
    document.getElementById("fact_acc").value="";
    document.getElementById("fi").style.display = "none";
    document.getElementById("fecha_ini").value="";
    document.getElementById("ff").style.display = "none";
    document.getElementById("fecha_fin").value="";
    document.getElementById("uni").style.display = "none";
    document.getElementById("unidades").style.display = "none";
    document.getElementById("unidadesB").style.display = "none";
    document.getElementById("unidades").value="";
    document.getElementById("unidadesB").value="";
    document.getElementById("med").style.display = "none";
    document.getElementById("med_req").value="";
    document.getElementById("descr").style.display = "none";
    document.getElementById("descrip").value="";
}

//Para edición de cargas
function ayayaA() {
    var x = document.getElementById("year").value;
    if(x!=""){
        document.getElementById("tema").style.display = "block";
    }else{
        document.getElementById("tema").style.display = "none";
        document.getElementById("tem").value="";
        clear();
    }
}
function themeayayaA() {
    var q = document.getElementById("tem").value;
    if(q!=""){
        switch(q){
            case '0':
                //var y = document.getElementById("perio");
                //clear();
                document.getElementById('lbfact_acc').innerHTML = 'Acción de mejora';
                document.getElementById('lbmed_req').innerHTML = 'Medio de verificación';
                document.getElementById("fact").style.display = "block";
                document.getElementById("fi").style.display = "block";
                document.getElementById("ff").style.display = "block";
                document.getElementById("uni").style.display = "block";
                document.getElementById("unidades").style.display = "block";
                document.getElementById("unidadesB").style.display = "none";
                document.getElementById("med").style.display = "block";
                document.getElementById("descr").style.display = "none";
            break;
            case '1':
                //clear();
                document.getElementById('lbfact_acc').innerHTML = 'Factores de riesgo';
                document.getElementById('lbmed_req').innerHTML = 'Medio de verificación';
                document.getElementById("descrip").placeholder = "Descripción de la acción de control";
                document.getElementById("fact").style.display = "block";
                document.getElementById("fi").style.display = "block";
                document.getElementById("ff").style.display = "block";
                document.getElementById("uni").style.display = "block";
                document.getElementById("unidades").style.display = "block";
                document.getElementById("unidadesB").style.display = "none";
                document.getElementById("med").style.display = "block";
                document.getElementById("descr").style.display = "block";
            break;
            case '2':
                //clear();
                document.getElementById('lbfact_acc').innerHTML = 'Punto de orden del día';
                document.getElementById('lbmed_req').innerHTML = 'Requerimiento';
                document.getElementById("descrip").placeholder = "Descripción del requerimiento";
                document.getElementById("fi").style.display = "none";
                document.getElementById("ff").style.display = "none";
                document.getElementById("fact").style.display = "block";
                document.getElementById("uni").style.display = "block";
                document.getElementById("unidades").style.display = "none";
                document.getElementById("unidadesB").style.display = "block";
                document.getElementById("med").style.display = "block";
                document.getElementById("descr").style.display = "block";
            break;
            default:
        }
    }else{
        clear();
    }
}