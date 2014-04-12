HibernateTopup
==============

Plugin ด้านการเติมเงินของ HibernateUCP<br>

การติดตั้ง
==============
[[[บนเว็บไซต์]]]<br>
1.สร้างโฟเดอร์ชื่อ hbn_topup ใน โฟเดอร์ plugins ของ HibernateUCP<br>
2.นำไฟล์ทั้งหมดไปวางในโฟเดอร์<br>
3.เปิดหน้า admin แล้วเพิ่มปลั๊กอินชื่อ hbn_topup ลงไป<br>
4.ถ้าไม่มี error ก็เสร็จสมบูรณ์ ถ้ามีก็โพสไว้ใน issue ครับ
[[[เชื่อมให้เติมเข้าอัตโนมัติ]]]<br>
1.หลังจากลงระบบในเว็บเสร็จแล้ว ตั้งค่าอัตราการเติมเงินให้พร้อมในหน้า admin และ Uid<br>
2.เข้าเว็บไซต์ tmtopup ไปที่เมนู ตั้งค่าการเติมเงิน แล้วกำหนด API PASSKEY ใส่เป็นรหัสอะไรก็ได้ที่จำยากๆ<br>
3.กลับไปที่โฟเดอร์ hbn_topup ไปที่โฟเดอร์ extends เปิดไฟล์ tmtopup_api.php ด้วย notepad++ หรือ ide ตัวไหนก็ได้<br>
4.ตั้งค่า database ในช่วงแรกให้พร้อม จากนั้นลงมาถึงบรรทัดที่ 30 แก้ point ตามที่ต้องการ โดยอ่านจาก comment และแก้ Api passkey ในบรรทัดที่ 42<br>
5.บันทึกไฟล์ อัพไฟล์ในโฟเดอร์ extends ขึ้น Host จากนั้นเข้าไปที่หน้าเว็บ tmtopup<br>
6.เข้าไปในส่วน api ของ tmtopup เมนูตั้งค่าการเติมเงิน ดูในส่วน api url ให้ใส่เป็นที่อยู่ของ url api ของเรา เช่น <br>
www.yousite.com/ucp/plugins/hbn_topup/extends/tmtopup_api.php<br>
กดบันทึกการตั้งค่า เสร็จสมบูรณ์<br>
โดยในส่วนการเชื่อมให้เติมเข้าอัตโนมัตินี้ถ้าไม่เข้าใจ ลองหาคลิปใน youtube ก็ได้ครับ หรือถามผมในเฟสก็ได้<br>
Fanpage : https://www.facebook.com/pages/Twiceworld-PHP-Thailand-%E0%B8%9A%E0%B8%A3%E0%B8%B4%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%A3%E0%B8%B1%E0%B8%9A%E0%B9%80%E0%B8%82%E0%B8%B5%E0%B8%A2%E0%B8%99-php-%E0%B9%81%E0%B8%A5%E0%B8%B0%E0%B9%80%E0%B8%A7%E0%B9%87%E0%B8%9A%E0%B9%84%E0%B8%8B%E0%B8%95%E0%B9%8C/573397832751167?fref=ts