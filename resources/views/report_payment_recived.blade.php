   <table class="table table-bordered" >
            <thead>
              <tr>
                <th style="background: #3377ec !important;">Receipt No</th>
              <th style="background: #3377ec !important;">Name</th>
              <th style="background: #3377ec !important;">Course</th>
              <th style="background: #3377ec !important;">Amount</th>
              <th style="background: #3377ec !important;">Payment Mode</th>
              <th style="background: #3377ec !important;">Date</th>
              </tr>
             <tr>
                <td style="background: white !important;"><input type="text" class="form-control myInput hidden-print" placeholder="Search" name=""></td>
                <td  style="background: white !important; "><input type="text" class="form-control myInput hidden-print" placeholder="Search"   name=""></td>
                <td style="background: white !important;">
                  <select class="form-control myInput">
                   <option selected disabled hidden>Select Course</option>

                    @foreach($courses as $e)
                      <option value="{{$e->name}}">{{$e->name}}</option>
                    @endforeach
                  </select>
                </td>
                <td style="background: white !important;"><input type="text" class="form-control myInput hidden-print " name="" placeholder="Search" ></td>
                <td style="background: white !important;"><select class="form-control myInput">
                   <option selected disabled hidden>Select Mode</option>
                    @foreach($pm as $e)
                      <option value="{{$e->payment_mode}}">{{$e->payment_mode}}</option>
                    @endforeach
                  </select></td>
                <td style="background: white !important;"><input type="text" class="form-control myInput hidden-print" name="" placeholder="Search" ></td>
              </tr>
            </thead>
            <tbody id='myTable'>
              
        @foreach($rep as $e)
              <tr >
                <td>{{'US'.$e->recipt_no }}</td>
                <td>{{ $e->student->student_name }} </td>
                <td>{{ $e->course->name }}</td>
                <td>{{ $e->amount }}</td>
                <td>{{ $e->payment_mode }}</td>
                <td>{{ $e->fee_date }}</td>
              </tr>
        @endforeach
            </tbody>
          </table>
       