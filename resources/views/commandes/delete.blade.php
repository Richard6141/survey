<div id="modal4" class="col s1 m12 l4 modal" >
<div class="modal-content"  >
        <form id="deleteForm" action="" method="delete" style="text-align: center;">
            @csrf
            <h5 style="color:green;">AVERTISSEMENT !!!</h5>
            <p>Voulez-vous supprimer cette commande ?</p>
    
            <div class="modal-footer" style="display:flex; justify-content:space-between; padding-left:0%;padding-right:0%;padding-bottom:10%">
            <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat border-round gradient-45deg-purple-deep-orange " style="color:white">NON</a>
            <button form="deleteForm" class="modal-action modal-close waves-effect waves-red btn-flat border-round gradient-45deg-purple-deep-orange " style="color:white">OUI</button>
        </form>
    
</div>
 