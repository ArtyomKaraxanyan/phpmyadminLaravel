<div class="card-header">
    <form  data-action="{{route('create_database')}}">
        @csrf
        <input class=" databas_name " id="db_name" name="db_name" type="text" placeholder="Database Name*" required/>
        <button type="button" class="btn" id="create_database_btn">
            Create Database
        </button>
    </form>
</div>