<?php
if(isset($_POST['submit']))
{
	$waist=$_POST['waist'];
    $bust=$_POST['bust'];
    $shoulder=$_POST['shoulder'];
    $sleevelength=$_POST['sleevelength'];
    $aarmhole=$_POST['aarmhole'];
    $aarm=$_POST['aarm'];
    $length=$_POST['length'];
    $cide=$_POST['cide'];
    $ksstyle=$_POST['ksstyle'];
    $kfnstyle=$_POST['kfnstyle'];
    $instruction=$_POST['instruction'];
    $con=mysqli_connect('localhost','root','','tailor');
    $query="INSERT INTO kurta                      (waist,bust,shoulder,sleevelength,aarmhole,aarm,fneck,bneck,length,cide,ksstyle,kfnstyle,kbnstyle,instruction)VALUES($waist,$bust,$shoulder,$sleevelength,$aarmhole,$aarm,$fneck,$bnek,$length,'$cide','$ksstyle','$kfntyle','$kbnstyle','$instruction')";
     mysqli_query($con,$query);
     mysqli_close($con);
    }

?>


<html>
<head>
<title></title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
button
{
margin-top:25px;
margin-left:15px;

}
h1
{
text-align:center;
margin-right:100px;
text-decoration:none;
color:white;
font-family:ALEGERIAN;
font-size:40px;
background-color:#23415c;
 
}
.container
{
background-color:#080808e0;
background:cover;
margin-right:100px;
margin-top:50px;
border-style:inset;

}
body{
background-image:url('images/AdminLogin.jpg');
    background-attachment: fixed;
    background-size: cover;
    background-repeat: no-repeat;
}
form{
margin-left:100px;

}
.a
{
text-decoration:none;
color:white;
    font-size: 25px;

    }
    .ae{
       text-decoration:none;
       color:white;
       font-size:25px;
 
    }
    .btn-primary{
        float: left;
        margin-left: 30px;
        margin-top:30px;
    }
</style>
</head>
<body>


<div class="container">
<form  class="form-horizonttal" action="kurtimea.php" method="POST" >
<h1 class="heading">MEASUREMENT FORM FOR KURTA</h1>
<div class="form-group col-lg-5">
<label  class="a"for="name" name="waist" id="waist" value="waist">Waist:</label>
<select class="form-control input-lg" name="waist">
    <option value="select">Select</option>
    <option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
    <option>30</option>
    <option>31</option>
    <option>32</option>
    <option>33</option>
    <option>34</option>
    <option>35</option>
    <option>36</option>
    <option>37</option>
    <option>38</option>
    <option>39</option>
    <option>40</option>
    <option>41</option>
    <option>42</option>
    <option>43</option>
    <option>44</option>
    <option>45</option>
    <option>46</option>
    <option>47</option>
    <option>48</option>
    <option>49</option>
    <option>50</option>
    <option>51</option>
    <option>52</option>
    <option>53</option>
    <option>54</option>
    <option>55</option>
    <option>56</option>
     <option>57</option>
    <option>58</option>
     <option>59</option>
     <option>60</option>
     <option>61</option>
     <option>62</option>
     <option>63</option>
    <option>64</option>
     <option>65</option>
</select>
</div>
<div class="form-group col-lg-5">
<label  class="a"for="name">Bust:</label>
<select class="form-control input-lg" name="bust">
    <option value="select">Select</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
    <option>30</option>
    <option>31</option>
    <option>32</option>
    <option>33</option>
    <option>34</option>
    <option>35</option>
    <option>36</option>
    <option>37</option>
    <option>38</option>
    <option>39</option>
    <option>40</option>
    <option>41</option>
    <option>42</option>
    <option>43</option>
    <option>44</option>
    <option>45</option>
    <option>46</option>
    <option>47</option>
    <option>48</option>
    <option>49</option>
    <option>50</option>
    <option>51</option>
    <option>52</option>
    <option>53</option>
    <option>54</option>
    <option>55</option>
    <option>56</option>
     <option>57</option>
    <option>58</option>
     <option>59</option>
     <option>60</option>
     <option>61</option>
     <option>62</option>
     <option>63</option>
    <option>64</option>
     <option>65</option>
       <option>66</option>
       <option>67</option>
       <option>68</option>
       <option>69</option>
    
</select>
</div>
<div class="form-group col-lg-5">
<label  class="a"for="name">Shoulder:</label>
<select class="form-control input-lg" name="shoulder">
    <option >Select</option>
    <option >13</option>
<option >14</option>
<option >15</option>
<option >16</option>
<option >17</option>
    <option >18</option>
    <option >19</option>
    <option >20</option>
    <option >21</option>
    <option >22</option>
    <option >23</option>
    <option >24</option>
    <option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
    <option>30</option>
    <option>31</option>
    <option>32</option>
    <option>33</option>
    <option>34</option>
    <option>35</option>
    <option>36</option>
    <option>37</option>
    <option>38</option>
    <option>39</option>
    <option>40</option>
    <option>41</option>
    <option>42</option>
    <option>43</option>
    <option>44</option>
    <option>45</option>
    <option>46</option>
    <option>47</option>
    <option>48</option>
    <option>49</option>

    </select>
    </div>
    <div class="form-group col-lg-5">
    <label  class="a"for="name">Sleeve Length</label>
     <select class="form-control input-lg" name="sleevelength">
    <option >Select</option>
    <option >1</option>
    <option >2</option>
    <option >3</option>
    <option >4</option>
    <option >5</option>
    <option>6</option>
    <option value="xxl">7</option>
    <option value="xxl">8</option>
    <option value="xxl">9</option>
    <option value="xxl">10</option>
    <option value="xxl">11</option>
    <option value="xxl">12</option>
    <option value="xxl">13</option>
    <option value="xxl">14</option>
    <option value="xxl">15</option>
    <option value="xxl">16</option>
    <option value="xxl">17</option>
    <option value="xxl">18</option>
    <option value="xxl">19</option>
    <option value="xxl">20</option>
    <option value="xxl">21</option>
    <option value="xxl">22</option>

    </select>
    </div>
         <div class="form-group col-lg-5">
<label  class="a"for="name">Around Arm Hole:</label>
<select class="form-control input-lg" name="aarmhole">
    <option value="select">Select</option>
<option value="xxl">5</option>
    <option value="xxl">6</option>
    <option value="xxl">7</option>
    <option value="xxl">8</option>
    <option value="xxl">9</option>
    <option value="xxl">10</option>
    <option value="xxl">11</option>
    <option value="xxl">12</option>
    <option value="xxl">13</option>
    <option value="xxl">14</option>
    <option value="xxl">15</option>
    <option value="xxl">16</option>
    <option value="xxl">17</option>
    <option value="xxl">18</option>
    <option value="xxl">19</option>
    <option value="xxl">20</option>
    <option value="xxl">21</option>
    <option value="xxl">22</option>
     <option value="xxl">23</option>
     <option value="xxl">24</option>
     <option value="xxl">25</option>
    </select>
        </div>
     <div class="form-group col-lg-5">
<label  class="a"for="name">Around Arm:</label>
<select class="form-control input-lg" name="aarm">
    <option value="select">Select</option>
    <option value="xxl">5</option>
    <option value="xxl">6</option>
    <option value="xxl">7</option>
    <option value="xxl">8</option>
    <option value="xxl">9</option>
    <option value="xxl">10</option>
    <option value="xxl">11</option>
    <option value="xxl">12</option>
    <option value="xxl">13</option>
    <option value="xxl">14</option>
    <option value="xxl">15</option>
    <option value="xxl">16</option>
    <option value="xxl">17</option>
    <option value="xxl">18</option>
    <option value="xxl">19</option>
    <option value="xxl">20</option>
    <option value="xxl">21</option>
    <option value="xxl">22</option>
     <option value="xxl">23</option>
     <option value="xxl">24</option>
     <option value="xxl">25</option>

    </select>
             </div>
     <div class="form-group col-lg-5">
<label  class="a"for="name">Length:</label>
<select class="form-control input-lg" name="length">
    <option value="select">Select</option>
    <option>30</option>
    <option>31</option>
    <option>32</option>
    <option>33</option>
    <option>34</option>
    <option>35</option>
    <option>36</option>
    <option>37</option>
    <option>38</option>
    <option>39</option>
    <option>40</option>
    <option>41</option>
    <option>42</option>
    <option>43</option>
    <option>44</option>
    <option>45</option>
    <option>46</option>
    <option>47</option>
    <option>48</option>
    <option>49</option>
     <option>50</option>
    </select>
         </div>
 <div class="form-group col-lg-5">
<label  class="a"for="name">Closing Side:</label>
<select class="form-control input-lg" name="cide">
    <option value="select">Select</option>
<option value="Small">Back</option>
<option value="Mid">Side</option>
     </select>
    </div>
    <div class="form-group col-lg-5">
<label  class="a"for="name">Kurta Sleeve Style:</label>
<select class="form-control input-lg" name="ksstyle">
    <option value="select">Select</option>
<option value="Small">Angle Sleeve</option>
<option value="Small">Half</option>
    <option value="Small">laces</option>
    <option value="Small">Puff</option>
    <option value="Small">Rollup</option>
<option value="Mid">Sleeveless</option>
     </select>
        <a href="#" class="ae">click here to view sleeve style**</a>
    </div>
  <div class="form-group col-lg-5">
<label  class="a"for="name">Kurta Front Neck Style:</label>
<select class="form-control input-lg" name="kfnstyle">
    <option value="select">Select</option>
<option value="Small">U-neck</option>
<option value="Small">V-neck</option>
    <option value="Small">Sweet-heart</option>
    <option value="Small">Key-hole</option>
    <option value="Small">Design-O</option>
<option value="Mid">Design-P</option>
     </select>
        <a href="#" class="ae">click here to view front neck style**</a>
    </div>
 
    <div class="form-group col-lg-5">
<label  class="a"for="name">Instructions(if any)</label><br />
        <textarea id="txtArea" rows="8" cols="60" name="instruction"></textarea>
    </div>
    <button type = "submit" class = "col-xs-2 input-lg" id="submit" value="submit" name="submit">Submit</button>
    
 <a href="helpforsg.php" class="btn btn-primary" role="button" id="help" name="help" value="help">Help</a><br />    
    <a href="helpforsg.php" class="btn btn-primary" role="button" id="video" name="video" value="help">Help By Video</a><br />    
       
</form>
    </div>
</body>
</html>