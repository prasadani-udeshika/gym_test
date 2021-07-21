<?php


class payment_model extends CI_Model
{

    function isExistReview( $name,$amount){
        $this->db->select('*');
        $this->db->from('tbl_payment_type');
        $this->db->where('payment_name', $name);
        $this->db->where('payment_amount', $amount);

        $result = $this->db->get()->result();

        if($result == null){
            return true;
        }else{
            return false;
        }
    }

    function addPayment($data){
        $result = $this->db->insert('tbl_payment_type', $data);

        if($result){
            return true;
        }else{
            return false;
        }
    }

    function getPayments($param){
        $filter = $param['search'];

        $this->db->select('*');
        $this->db->from('tbl_payment_type');
        $this->db->where("(`tbl_payment_type.payment_name` LIKE '%$filter%'");
        $this->db->or_where("`tbl_payment_type.payment_amount` LIKE '%$filter%'");
        $this->db->or_where("`tbl_payment_type.payement_duration` LIKE '%$filter%'");
        $this->db->or_where("`tbl_payment_type.payment_id` LIKE '%$filter%')");
        $this->db->limit($param['length'],$param['start']);
        $query = $this->db->get();
        $result = $query->result();

        $returnData['data'] =  $result;
        $returnData['recordsTotal'] = $this->getRowCountOfReviews();
        $returnData['draw'] = $param['draw'];

        if($filter == null)
            $returnData['recordsFiltered'] = $this->getRowCountOfReviews();
        else
            $returnData['recordsFiltered'] = $query->num_rows();

        return $returnData;
    }
    
    function select_payment()
    {
        $query=$this->db->get('tbl_payment_type');
        if($query->num_rows()>0)
        {
            $result=$query->result_array();
            return $result;
        }
    }

    function getRowCountOfReviews(){

        $this->db->select('*');
        $this->db->from('tbl_payment_type');
        $query = $this->db->get();

        return $query->num_rows();
    }

    function getPayment($id){
        $this->db->select('*');
        $this->db->from('tbl_payment_type');
        $this->db->where('payment_id', $id);

        return $this->db->get()->result();
    }

    function deletePayment($id){
        $this->db->where('payment_id', $id);
        $this->db->delete('tbl_payment_type');

        return $this->db->affected_rows();
    }

    function updatePayment($id, $name, $amount, $duration, $status){
        $this->db->set('payment_name',$name);
        $this->db->set('payment_amount',$amount);
        $this->db->set('payement_duration',$duration);
        $this->db->set('payment_status',$status);
        $this->db->where('payment_id',$id);
        $this->db->update('tbl_payment_type');

        $result = $this->db->affected_rows();

        return $result;
    }

    function getAllPayments(){
        $this->db->select('*');
        $this->db->from('tbl_payment_type');
        $this->db->where('payment_status', 1);
        $this->db->order_by("created_time", "desc");

        $result = $this->db->get()->result();

        if($result != null){
            return $result;
        }else{
            return null;
        }
    }

}