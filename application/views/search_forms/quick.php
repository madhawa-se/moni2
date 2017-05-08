<form id="quick-search" class="form-inline ng-pristine ng-valid" role="form" method="post" action="<?php echo site_url('Search/quick_search_submit')?>">
    <div class="form-group">
        <label for="name">Looking For</label><br>
        <div class="radio radio-info radio-inline">
            <input size="12" id="inlineRadio1" value="1" name="gender" checked="" type="radio">
            <label for="inlineRadio1"> Groom </label>
        </div>
        <div class="radio radio-inline">
            <input id="inlineRadio2" value="2" name="gender" type="radio">
            <label for="inlineRadio2"> Bride </label>
        </div>
    </div>&nbsp;&nbsp;&nbsp;&nbsp;

    <div class="form-group">
        <label for="name">Age</label><br>
        <select name="from" class="form-control">
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
            <option value="32">32</option>
            <option value="33">33</option>
            <option value="34">34</option>
            <option value="35">35</option>
            <option value="36">36</option>
            <option value="37">37</option>
            <option value="38">38</option>
            <option value="39">39</option>
            <option value="40">40</option>
            <option value="41">41</option>
            <option value="42">42</option>
            <option value="43">43</option>
            <option value="44">44</option>
            <option value="45">45</option>
            <option value="46">46</option>
            <option value="47">47</option>
            <option value="48">48</option>
            <option value="49">49</option>
        </select>

    </div>

    <div class="form-group">
        <label for="name"></label><br>to

        <select name="to" class="form-control" width="100px">
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
            <option value="32">32</option>
            <option value="33">33</option>
            <option value="34">34</option>
            <option value="35">35</option>
            <option value="36">36</option>
            <option value="37">37</option>
            <option value="38">38</option>
            <option value="39">39</option>
            <option value="40">40</option>
            <option value="41">41</option>
            <option value="42">42</option>
            <option value="43">43</option>
            <option value="44">44</option>
            <option value="45">45</option>
            <option value="46">46</option>
            <option value="47">47</option>
            <option value="48">48</option>
            <option value="49">49</option>
            <option value="50">50</option>
        </select>  &nbsp;&nbsp;&nbsp;&nbsp;
    </div>



    <div class="form-group">
        <label for="name">Religion</label><br>
        <select id="religion" name="religion" class="form-control">
            <option value="">  &nbsp; &nbsp;&nbsp;&nbsp; --Select-- &nbsp; &nbsp;&nbsp;&nbsp; </option>
            <option value="1">Buddhisum</option>
            <option value="2">Cristian</option>
            <option value="3">Muslim</option>
            <option value="4">Hindu</option>
        </select>
    </div>

    <div class="form-group">

        <label for="email">Mother Tongue</label><br>
        <select id="mothertongue" name="mothertongue" class="form-control">
            <option value="">  &nbsp; &nbsp;&nbsp;&nbsp; --Select-- &nbsp; &nbsp;&nbsp;&nbsp; </option>
            <option value="1">Sinhala</option>
            <option value="2">Tamil</option>
            <option value="1">English</option>
            <option value="2">Others</option>
        </select>
    </div>
    <div class="form-group">

        <label for="pwd">Country Living In</label><br>
        <select id="livein" name="livein" class="form-control">
            <option value="">  &nbsp; &nbsp;&nbsp;&nbsp; --Select-- &nbsp; &nbsp;&nbsp;&nbsp; </option>
            <option value="1">Srilanka</option>
            <option value="2">India</option>
            <option value="3">Colombo</option>
            <option value="4">Jaffna</option>
        </select>
    </div>
    &nbsp;&nbsp;&nbsp;


    <style>
        .button4 {
            color: #FFF;
            background-color: #7140bc;
            width:100px;
            height:40px;

        }

        .button4:hover {
            background-color: #dd3175;
            color: white;
        }

    </style>


    <br>
    <button type="submit" class="button4">Search</button>
</form>

