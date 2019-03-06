<?php

	/**
	 * summary
	 */
	class TicketModel extends CI_Model{

	    public function __construct()
	    {
	        $this->load->database();
	    }

	    public function getTicketByID(
	    	int $ticketID = -1
	    ) : array
	    {
	    	$rs = $this->db->query("SELECT * FROM tickets WHERE ticketID = ?", array($ticketID));

	    	return $rs->result_array();
	    }
	}
