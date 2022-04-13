@for($i=1;$i<=4;$i++)



    <tr>
        <th>
            <input class=" column_name " id="field_name_{{$i}}" name="columns[{{$i}}][field_name]" type="text"
                   placeholder="Column Name*" />
        </th>

        <th>
            <select name="columns[{{$i}}][field_type]" id="field_type_[{{$i}}]">
                <option value="VARCHAR">VARCHAR</option>
                <option value="TEXT">TEXT</option>
                <option value="INT">INT</option>
                <option value="DATE">DATE</option>
            </select>


        </th>


        <th>
            <input class=" column_length " id="field_length_{{$i}}" name="columns[{{$i}}][field_length]" type="text"
                   placeholder="Column Length*" />
        </th>
        <th>

            <select name="columns[{{$i}}][field_default_type]" id="field_default_type_{{$i}}">
                <option value="NOT NULL">NOT</option>
                <option value="NULL">NULL</option>
            </select>


        </th>

        <th>

            <select name="columns[{{$i}}][field_collation]" id="field_collation_{{$i}}">
                <optgroup label="utf8" >
                <option value="utf8-utf8_bin">utf8_bin</option>
                <option value="utf8-utf8_croatian_ci">utf8_croatian_ci</option>
                </optgroup>
                <optgroup label="utf32">
                <option value="utf32-utf32_bin">utf32_bin</option>
                <option value="utf32-utf32_croatian_ci">utf32_croatian_ci</option>
                </optgroup>
            </select>

        </th>


        <th>

            {{--<select name="columns[{{$i}}][field_index]" id="field_index_{{$i}}">--}}
            {{--<option value="">--</option>--}}
            {{--<option value="UNIQUE">UNIQUE</option>--}}
            {{--<option value="PRIMARY">PRIMARY</option>--}}
            {{--<option value="INDEX">INDEX</option>--}}
            {{--</select>--}}

        </th>
        <th>
                <button type="button" style="color:red" class="btn  " id="delete_col">
                    delete
                </button>


        </th>
    </tr>

@endfor