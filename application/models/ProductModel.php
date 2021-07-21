<?php


class ProductModel extends CI_Model
{

    function isExistSProduct($name){
        $this->db->select('*');
        $this->db->from('tbl_seasonal_products');
        $this->db->where('sp_name', $name);

        $result = $this->db->get()->result();

        if($result == null){
            return true;
        }else{
            return false;
        }
    }

    function isExistFlavour($name){
        $this->db->select('*');
        $this->db->from('tbl_customer');
        $this->db->where('customer_name', $name);

        $result = $this->db->get()->result();

        if($result == null){
            return true;
        }else{
            return false;
        }
    }

    function addSProduct($data){
        $result = $this->db->insert('tbl_seasonal_products', $data);

        if($result){
            return true;
        }else{
            return false;
        }
    }

    function addUser($data){
        $result = $this->db->insert('tbl_customer', $data);

        if($result){
            return true;
        }else{
            return false;
        }
    }

    function getSProducts($param){
        $filter = $param['search'];

        $this->db->select('*');
        $this->db->from('tbl_seasonal_products');
        $this->db->where("(`tbl_seasonal_products.sp_name` LIKE '%$filter%'");
        $this->db->or_where("`tbl_seasonal_products.sp_description` LIKE '%$filter%'");
        $this->db->or_where("`tbl_seasonal_products.sp_id` LIKE '%$filter%'");
        $this->db->or_where("`tbl_seasonal_products.sp_price` LIKE '%$filter%')");
        $this->db->limit($param['length'],$param['start']);
        $query = $this->db->get();
        $result = $query->result();

        $returnData['data'] =  $result;
        $returnData['recordsTotal'] = $this->getRowCountOfgetSProducts();
        $returnData['draw'] = $param['draw'];

        if($filter == null)
            $returnData['recordsFiltered'] = $this->getRowCountOfgetSProducts();
        else
            $returnData['recordsFiltered'] = $query->num_rows();

        return $returnData;
    }

    function getRowCountOfgetSProducts(){

        $this->db->select('*');
        $this->db->from('tbl_seasonal_products');
        $query = $this->db->get();

        return $query->num_rows();
    }

    function getUsers($param){
        $filter = $param['search'];

        $this->db->select('*');
        $this->db->from('tbl_customer');
        $this->db->where("(`tbl_customer.customer_name` LIKE '%$filter%'");
        $this->db->or_where("`tbl_customer.customer_birthday` LIKE '%$filter%'");
        $this->db->or_where("`tbl_customer.customer_gender` LIKE '%$filter%'");
        $this->db->or_where("`tbl_customer.customer_nic` LIKE '%$filter%'");
        $this->db->or_where("`tbl_customer.customer_address` LIKE '%$filter%'");
        $this->db->or_where("`tbl_customer.customer_email` LIKE '%$filter%'");
        $this->db->or_where("`tbl_customer.customer_phone` LIKE '%$filter%'");
        $this->db->or_where("`tbl_customer.customer_height` LIKE '%$filter%'");
        $this->db->or_where("`tbl_customer.customer_weight` LIKE '%$filter%'");
        $this->db->or_where("`tbl_customer.customer_description` LIKE '%$filter%'");
        $this->db->or_where("`tbl_customer.customer_id` LIKE '%$filter%')");
        $this->db->limit($param['length'],$param['start']);
        $query = $this->db->get();
        $result = $query->result();

        $returnData['data'] =  $result;
        $returnData['recordsTotal'] = $this->getRowCountOfGetUsers();
        $returnData['draw'] = $param['draw'];

        if($filter == null)
            $returnData['recordsFiltered'] = $this->getRowCountOfGetUsers();
        else
            $returnData['recordsFiltered'] = $query->num_rows();

        return $returnData;
    }

    function getRowCountOfGetUsers(){

        $this->db->select('*');
        $this->db->from('tbl_customer');
        $query = $this->db->get();

        return $query->num_rows();
    }
     function select_customer()
    {
        $query=$this->db->get('tbl_customer');
        if($query->num_rows()>0)
        {
            $result=$query->result_array();
            return $result;
        }
    }

    function getSProduct($id){
        $this->db->select('*');
        $this->db->from('tbl_seasonal_products');
        $this->db->where('sp_id', $id);

        return $this->db->get()->result();
    }

    function deleteSProduct($id){
        $this->db->where('sp_id', $id);
        $this->db->delete('tbl_seasonal_products');

        return $this->db->affected_rows();
    }

    function getFlavour($id){
        $this->db->select('*');
        $this->db->from('tbl_customer');
        $this->db->where('customer_id', $id);

        return $this->db->get()->result();
    }

    function deleteUser($id){
        $this->db->where('customer_id', $id);
        $this->db->delete('tbl_customer');

        return $this->db->affected_rows();
    }

    function updateSProduct($id, $name, $des, $price, $visibility){
        $this->db->set('sp_name',$name);
        $this->db->set('sp_description',$des);
        $this->db->set('sp_price',$price);
        $this->db->set('sp_active_status',$visibility);
        $this->db->where('sp_id',$id);
        $this->db->update('tbl_seasonal_products');

        $result = $this->db->affected_rows();

        return $result;
    }

    function updateUser($id, $name,$gender,$nic,$address,$email,$phone,$height,$weight, $des, $visibility){
        $this->db->set('customer_name',$name);
        $this->db->set('customer_birthday',$des);
        $this->db->set('customer_gender',$gender);
        $this->db->set('customer_nic',$nic);
        $this->db->set('customer_address',$address);
        $this->db->set('customer_email',$email);
        $this->db->set('customer_phone',$phone);
        $this->db->set('customer_height',$height);
        $this->db->set('customer_weight',$weight);
        $this->db->set('customer_description',$des);
        $this->db->set('customer_status',$visibility);
        $this->db->where('customer_id',$id);
        $this->db->update('tbl_customer');

        $result = $this->db->affected_rows();

        return $result;
    }

    function getAllSeasonal(){
        $this->db->select('*');
        $this->db->from('tbl_seasonal_products');
        $this->db->where('sp_active_status', 1);
        $this->db->order_by("created_time", "desc");

        $result = $this->db->get()->result();

        if($result != null){
            return $result;
        }else{
            return null;
        }
    }

    function getAllUsers(){
        $this->db->select('*');
        $this->db->from('tbl_customer');
        $this->db->where('customer_status', 1);
        $this->db->order_by("created_time", "desc");

        $result = $this->db->get()->result();

        if($result != null){
            return $result;
        }else{
            return null;
        }
    }

}