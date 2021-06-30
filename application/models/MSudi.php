<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MSudi extends CI_Model
{
    function AddData($tabel, $data=array())
    {
        $this->db->insert($tabel,$data);
    }

    function UpdateData($tabel,$fieldid,$fieldvalue,$data=array())
    {
        $this->db->where($fieldid,$fieldvalue)->update($tabel,$data);
    }

    function DeleteData($tabel,$fieldid,$fieldvalue)
    {
        $this->db->where($fieldid,$fieldvalue)->delete($tabel);
    }

    function GetData($tabel)
    {
        $query= $this->db->get($tabel);
        return $query->result();
    }

    function GetDataRelation2bjrange($range1,$range2)
    {
        $this->db->select('tbl_barang.kd_barang,tbl_jnsbarang.nama as jenis,tbl_barang.nama,tbl_barang.harga,tbl_barang.jumlah,tbl_barang.tgl_masuk');    
        $this->db->from('tbl_barang');
        $this->db->join('tbl_jnsbarang', 'tbl_barang.kd_jns = tbl_jnsbarang.kd_jns');
        $this->db->where('tbl_barang.tgl_masuk >=', $range1);
        $this->db->where('tbl_barang.tgl_masuk <=', $range2);
        $query = $this->db->get();
        return $query->result();
    }

    function GetDataRelation2bj()
    {
        $this->db->select('tbl_barang.kd_barang,tbl_jnsbarang.nama as jenis,tbl_barang.nama,tbl_barang.harga,tbl_barang.jumlah,tbl_barang.tgl_masuk');    
        $this->db->from('tbl_barang');
        $this->db->join('tbl_jnsbarang', 'tbl_barang.kd_jns = tbl_jnsbarang.kd_jns');
        $query = $this->db->get();
        return $query->result();
    }

    function GetDataRelation2pbrange($range1,$range2)
    {
        $this->db->select('tbl_pembelian.kd_pembelian,tbl_pembelian.struk,tbl_barang.nama,tbl_pembelian.jml_beli,tbl_pembelian.tgl_beli');
        $this->db->from('tbl_barang');
        $this->db->join('tbl_pembelian', 'tbl_barang.kd_barang = tbl_pembelian.kd_barang');
        $this->db->where('tbl_pembelian.tgl_beli >=', $range1);
        $this->db->where('tbl_pembelian.tgl_beli <=', $range2);
        $query = $this->db->get();
        return $query->result();
    }

    function GetDataRelation2pb()
    {
        $this->db->select('tbl_pembelian.kd_pembelian,tbl_pembelian.struk,tbl_barang.nama,tbl_pembelian.jml_beli,tbl_pembelian.tgl_beli');
        $this->db->from('tbl_barang');
        $this->db->join('tbl_pembelian', 'tbl_barang.kd_barang = tbl_pembelian.kd_barang');
        $query = $this->db->get();
        return $query->result();
    }

    function GetDataWhere($tabel,$id,$nilai)
    {
        $this->db->where($id,$nilai);
        $query= $this->db->get($tabel);
        return $query;
    }

    // function GetDataWhereBook($title)
    // {
    //     $this->db->like('title', $title);
    //     $query = $this->db->get('tbl_buku')->result();
    //     return $query;
    // }

}