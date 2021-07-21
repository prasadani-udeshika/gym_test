<?php


class PAllocate_model extends CI_Model
{

    function isExistReview( $cus,$pay){
        $this->db->select('tbl_payment_allocate.*, tbl_payment_type.payment_name,tbl_customer.customer_name');
        $this->db->from('tbl_payment_allocate,tbl_customer,tbl_payment_type');
        $this->db->join("tbl_payment_type",'tbl_payment_type.payment_id=tbl_payment_allocate.payment_id','tbl_customer.customer_id=tbl_payment_allocate.customer_id');
        //  $this->db->where('customer_id', $cus);
        //  $this->db->where('payment_id', $pay);

        $result = $this->db->get()->result();

        if($result == null){
            return true;
        }else{
            return false;
        }
    }

    function addPAllocate($data){
        $result = $this->db->insert('tbl_payment_allocate', $data);

        if($result){
            return true;
        }else{
            return false;
        }
    }

    function getPAllocates($param){
        $filter = $param['search'];

        $this->db->select('*');
        $this->db->from('tbl_payment_allocate');
        $this->db->join("tbl_payment_type",'tbl_payment_type.payment_id=tbl_payment_allocate.payment_id','tbl_customer.customer_id=tbl_payment_allocate.customer_id');
        $this->db->where("(`tbl_payment_allocate.customer_id` LIKE '%$filter%'");
        $this->db->or_where("`tbl_payment_allocate.payment_id` LIKE '%$filter%'");
        $this->db->or_where("`tbl_payment_allocate.id` LIKE '%$filter%')");
        $this->db->limit($param['length'],$param['start']);
        $query = $this->db->get();
        $result = $query->result();

        $returnData['data'] =  $result;
        $returnData['recordsTotal'] = $this->getRowCountOfPAllocate();
        $returnData['draw'] = $param['draw'];

        if($filter == null)
            $returnData['recordsFiltered'] = $this->getRowCountOfPAllocate();
        else
            $returnData['recordsFiltered'] = $query->num_rows();

        return $returnData;
    }

    function getRowCountOfPAllocate(){

        $this->db->select('*');
        $this->db->from('tbl_payment_allocate');
        $query = $this->db->get();

        return $query->num_rows();
    }

    function getPAllocate($id){
        $this->db->select('*');
        $this->db->from('tbl_payment_allocate');
        $this->db->where('id', $id);

        return $this->db->get()->result();
    }

    function deletePAllocate($id){
        $this->db->where('id', $id);
        $this->db->delete('tbl_payment_allocate');

        return $this->db->affected_rows();
    }

    function updatePAllocate($id, $cus, $pay){
        $this->db->set('customer_id',$cus);
        $this->db->set('payment_id',$pay);
        $this->db->where('id',$id);
        $this->db->update('tbl_payment_allocate');

        $result = $this->db->affected_rows();

        return $result;
    }

    function getAllPAllocate(){
        $this->db->select('*');
        $this->db->from('tbl_payment_allocate');
        $this->db->order_by("created_time", "desc");

        $result = $this->db->get()->result();

        if($result != null){
            return $result;
        }else{
            return null;
        }
    }

}