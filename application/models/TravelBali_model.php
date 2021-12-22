<?php

class TravelBali_model extends CI_Model
{
    public function getTravelBali($nama = null)
    {
        if ($nama === null) {
            return $this->db->get('pantai_bali')->result_array();
        } else {
            return $this->db->get_where('pantai_bali', ['nama' => $nama])->result_array();
        }
    }

    public function deleteTravelBali($nama)
    {
        $this->db->delete('pantai_bali', ['nama' => $nama]);
        return $this->db->affected_rows();
    }

    public function createTravelBali($data)
    {
        $this->db->insert('pantai_bali', $data);
        return $this->db->affected_rows();
    }

    public function updateTravelBali($data, $nama)
    {
        $this->db->update('pantai_bali', $data, ['nama' => $nama]);
        return $this->db->affected_rows();
    }
}
