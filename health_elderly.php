<br /><h4 style="text-align:center">บันทึกข้อมูลสุขภาพผู้สูงอายุ</h4>
<div class="" style="padding-left:10px;"><br>

<h4>ข้อมูลด้านสังคม</h4><br>

<form class="" action="index.html" method="post">
<div class="row">
  <div class="col-6">
  <style="text-align:center">&nbsp &nbsp &nbsp การเป็นสมาชิก กลุ่ม/ชมรม</style>
</div>
   <div class="col-6">
     <select class="custom-select" style="width:200px;margin-top: -5px;" required>
       <option value="">ระบุ</option>
       <option value="1">ชมรมผู้สูงอายุ</option>
       <option value="2">กลุ่มแม่บ้าน</option>
       <option value="3">กลุ่มสหกรณ์ฝออมทรัพย์</option>
       <option value="4">กลุ่มณาปนกิจ</option>
     </select>
   </div>

</div>
<br>
<div class="row">
  <div class="col-6">
  <style="text-align:center">&nbsp &nbsp &nbsp การเข้าร่วมกิจกรรมชมรมผู้สูงอายุ</style>
  </div>
  <div class="col-6">
    <select class="custom-select" style="width:200px;margin-top: -5px;" required>
      <option value="">ระบุ</option>
      <option value="1">สม่ำเสมอ</option>
      <option value="2">ไม่สม่ำเสมอ</option>
      <option value="3">ไม่เคยเข้าร่วม</option>
    </select>
  </div>
</div><br>

&nbsp &nbsp &nbsp ภูมิปัญญา / ความสามารถพิเศษ <br><br>
<center>
<div class="custom-control custom-checkbox custom-control-inline">
  <input type="checkbox" class="custom-control-input" id="customCheck1">
  <label class="custom-control-label" for="customCheck1">หมอชาวบ้าน</label>
  </div>
  <div class="custom-control custom-checkbox custom-control-inline">
  <input type="checkbox" class="custom-control-input" id="customCheck2">
  <label class="custom-control-label" for="customCheck2">ปราชญ์ชาวบ้าน</label>
</div>
<div class="custom-control custom-checkbox custom-control-inline">
<input type="checkbox" class="custom-control-input" id="customCheck3">
<label class="custom-control-label" for="customCheck3">หัตถกรรม</label>
</div>

<div class="custom-control custom-checkbox custom-control-inline">
<input type="checkbox" class="custom-control-input" id="customCheck4">
<label class="custom-control-label" for="customCheck4">ดนตรี</label>
</div>

<div class="custom-control custom-checkbox custom-control-inline">
<input type="checkbox" class="custom-control-input" id="customCheck5">
<label class="custom-control-label" for="customCheck5">ศิลปวัฒนธรรมท้องถิ่น</label>
</div>
</center>

<hr width="800px">

<!-- ข้อมูลด้านสุขภาพและพฤติกรรมเสี่ยง -->

<h4>ข้อมูลด้านสุขภาพและพฤติกรรมเสี่ยง</h4><br>
<div class="row">
  <div class="col-4">
    &nbsp &nbsp   &nbsp   &nbsp   &nbsp   &nbsp   &nbsp   น้ำหนัก (กก.)
  </div>
  <div class="col-8">
      <div class="form-group" style="display:inline-flex">
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  style="width:300px" required maxlength="13">
      </div>
  </div>
</div>

<div class="row">
  <div class="col-4">
    &nbsp &nbsp   &nbsp   &nbsp   &nbsp   &nbsp   &nbsp   ส่วนสูง (ซ.ม.)
  </div>
  <div class="col-8">
    <div class="form-group" style="display:inline-flex">
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  style="width:300px" required maxlength="13">
    </div>
  </div>
</div>

<div class="row">
  <div class="col-4">
    &nbsp &nbsp   &nbsp   &nbsp   &nbsp   &nbsp   &nbsp   รอบเอว (ซ.ม.)
  </div>
  <div class="col-8">
    <div class="form-group" style="display:inline-flex">
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  style="width:300px" required maxlength="13">
    </div>
  </div>
</div>

<div class="row">
  <div class="col-4">
    &nbsp &nbsp   &nbsp   &nbsp   &nbsp   &nbsp   &nbsp   ระดับน้ำตาล (mg.%)
  </div>
  <div class="col-8">
    <div class="form-group" style="display:inline-flex">
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  style="width:300px" required maxlength="13">
    </div>
  </div>
</div>

<div class="row">
  <div class="col-4">
    &nbsp &nbsp   &nbsp   &nbsp   &nbsp   &nbsp   &nbsp   ชีพจร (ครั้ง/นาที)
  </div>
  <div class="col-8">
    <div class="form-group" style="display:inline-flex">
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  style="width:300px" required maxlength="13">
    </div>
  </div>
</div>

<!-- สิ้นสุดข้อมูลด้านสุขภาพและพฤติกรรมเสี่ยง -->

<div class="row">
  <div class="col">
  &nbsp &nbsp &nbsp  โรคและการเจ็บป่วยจากการวินิจฉัยจากแพทย์
  </div>
  <div class="col">
    <div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline1">มี</label>
  </div>
  <div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline2">ไม่มี</label>
  </div>
  </div>
</div><br>

<table cellpadding="6px">
  <tr>
    <td>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input type="checkbox" class="custom-control-input" id="customCheck6">
        <label class="custom-control-label" for="customCheck6">เบาหวาน</label>
        </div>
    </td>
    <td>
      <div class="custom-control custom-checkbox custom-control-inline">
      <input type="checkbox" class="custom-control-input" id="customCheck7">
      <label class="custom-control-label" for="customCheck7">ความดันโลหิตสูง</label>
    </div>
    </td>
    <td>
      <div class="custom-control custom-checkbox custom-control-inline">
      <input type="checkbox" class="custom-control-input" id="customCheck8">
      <label class="custom-control-label" for="customCheck8">โรคหัวใจ</label>
      </div>
    </td>
    <td>
      <div class="custom-control custom-checkbox custom-control-inline">
      <input type="checkbox" class="custom-control-input" id="customCheck9">
      <label class="custom-control-label" for="customCheck9">กลั้นปัสสาวะ/อุจจาระไม่ได้</label>
      </div>
    </td>
  </tr>
  <tr>
    <td>

      <div class="custom-control custom-checkbox custom-control-inline">
      <input type="checkbox" class="custom-control-input" id="customCheck10">
      <label class="custom-control-label" for="customCheck10">โรควัณโรค</label>
      </div>
    </td>
    <td>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input type="checkbox" class="custom-control-input" id="customCheck11">
        <label class="custom-control-label" for="customCheck11">โรคมะเร็งทุกระบบ</label>
        </div>
    </td>
    <td>
      <div class="custom-control custom-checkbox custom-control-inline">
      <input type="checkbox" class="custom-control-input" id="customCheck12">
      <label class="custom-control-label" for="customCheck12">โรคต่อมลูกหมาก</label>
    </div>
    </td>
    <td>
      <div class="custom-control custom-checkbox custom-control-inline">
      <input type="checkbox" class="custom-control-input" id="customCheck13">
      <label class="custom-control-label" for="customCheck13">อัมพาต/โรคหลอดเลือดสมอง</label>
      </div>
    </td>
  </tr>
  <tr>
    <td>
      <div class="custom-control custom-checkbox custom-control-inline">
      <input type="checkbox" class="custom-control-input" id="customCheck14">
      <label class="custom-control-label" for="customCheck14">โรคไต</label>
      </div>
    </td>
    <td>
      <div class="custom-control custom-checkbox custom-control-inline">
      <input type="checkbox" class="custom-control-input" id="customCheck15">
      <label class="custom-control-label" for="customCheck15">ต้อหิน/ต้อกระจก</label>
      </div>
    </td>
    <td>

      <div class="custom-control custom-checkbox custom-control-inline">
        <input type="checkbox" class="custom-control-input" id="customCheck16">
        <label class="custom-control-label" for="customCheck16">โรคกระเพราะอาหาร</label>
        </div>
    </td>
    <td>
      <div class="custom-control custom-checkbox custom-control-inline">
      <input type="checkbox" class="custom-control-input" id="customCheck17">
      <label class="custom-control-label" for="customCheck17">โรคต่อมไทรอยด์</label>
      </div>
    </td>
  </tr>
  <tr>
     <td>
       <div class="custom-control custom-checkbox custom-control-inline">
       <input type="checkbox" class="custom-control-input" id="customCheck18">
       <label class="custom-control-label" for="customCheck18">โรคความจำเสี่อม/สมองเสี่อม</label>
       </div>
     </td>
     <td>

       <div class="custom-control custom-checkbox custom-control-inline">
       <input type="checkbox" class="custom-control-input" id="customCheck19">
       <label class="custom-control-label" for="customCheck19">โรคตับ</label>
       </div>
     </td>

    <td>
      <div class="custom-control custom-checkbox custom-control-inline">
      <input type="checkbox" class="custom-control-input" id="customCheck20">
      <label class="custom-control-label" for="customCheck20">หูตึง/โรคหูอื่นๆ</label>
      </div>
    </td>
    <td>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input type="checkbox" class="custom-control-input" id="customCheck21">
        <label class="custom-control-label" for="customCheck21">COPD( ถุงลมโป่งพอง )</label>
        </div>
    </td>
  </tr>
  <tr>

    <td>
      <div class="custom-control custom-checkbox custom-control-inline">
      <input type="checkbox" class="custom-control-input" id="customCheck22">
      <label class="custom-control-label" for="customCheck22">มือสั่นตัวสั่น/( โรคพาร์กินสัน )</label>
    </div>
    </td>

     <td>
       <div class="custom-control custom-checkbox custom-control-inline">
       <input type="checkbox" class="custom-control-input" id="customCheck23">
       <label class="custom-control-label" for="customCheck23">ท้องอืดประจำ</label>
       </div>
     </td>
     <td>
       <div class="custom-control custom-checkbox custom-control-inline">
       <input type="checkbox" class="custom-control-input" id="customCheck24">
       <label class="custom-control-label" for="customCheck24">โรคซึมเศร้า</label>
       </div>
     </td>
      <td>

        <div class="custom-control custom-checkbox custom-control-inline">
        <input type="checkbox" class="custom-control-input" id="customCheck25">
        <label class="custom-control-label" for="customCheck25">โรคเกาต์/ข้อเข่าเสี่อม</label>
        </div>
      </td>
    </tr>
</table>

<br>

<div class="row">
  <div class="col-4">
    &nbsp &nbsp   &nbsp   &nbsp   &nbsp   &nbsp   &nbspยาที่ได้รับ
  </div>
  <div class="col-8">
    <div class="form-group" style="display:inline-flex">
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  style="width:300px" required maxlength="13">
    </div>
  </div>
</div>

<div class="row">
  <div class="col-4">
    &nbsp &nbsp   &nbsp   &nbsp   &nbsp   &nbsp การได้รับบริการสุขภาพ
  </div>
  <div class="col-8">
    <div class="form-group" style="display:inline-flex">
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  style="width:300px" required maxlength="13">
    </div>
  </div>
</div>

<div class="row">
  <div class="col-4">
  &nbsp &nbsp   &nbsp   &nbsp   &nbsp   &nbsp  การสูบบุหรี่ / ใบจาก
  </div>
  <div class="col-8">
    <div class="form-group" style="display:inline-flex">
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  style="width:300px" required maxlength="13">
    </div>
  </div>
</div>

<div class="row">
  <div class="col-4">
  &nbsp &nbsp   &nbsp   &nbsp   &nbsp   &nbsp  การออกกำลังกาย
  </div>
  <div class="col-8">
    <div class="form-group" style="display:inline-flex">
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  style="width:300px" required maxlength="13">
    </div>
  </div>
</div><br><br>
<!-- ปุ่ม -->
<center>
  <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
  <button type="button" class="btn btn-primary">แก้ไขข้อมูล</button>
</center><br><br><br>

<!-- สิ้นสุดปุ่ม -->


</form>
  </div>
