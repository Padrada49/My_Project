<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

interface BaseRepositoryInterface
{
      /**
       * ฟังก์ชันสำหรับค้นหาข้อมูลทั้งหมด
       */
       public function all();
 
     /**
      * ฟังก์ชันสำหรับค้นหาข้อมูลโมเดล By ID
      * @return Model|null โมเดล หรือ null
      */
     public function find($id):?Model;

     /**
      * ฟังก์ชันสำหรับสร้างโมเดลใหม่
      * @param array $data ข้อมูลสำหรับสร้างโมเดล
      * @return Model โมเดลที่สร้างใหม่
      */
     public function create(array $data):Model;
 
     /**
      * ฟังก์ชันสำหรับอัปเดตข้อมูลโมเดล
      * @param array $data ข้อมูลสำหรับอัปเดตโมเดล
      * @return Model โมเดลที่อัปเดตแล้ว
      */
     public function update($id, array $data): Model;
 
     /**
      * ฟังก์ชันสำหรับลบโมเดล
      * @param int $id รหัสของโมเดล
      * @return void
      */
     public function delete($id);
}
