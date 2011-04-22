<?php
// Copyright (C) 2010 Combodo SARL
//
//   This program is free software; you can redistribute it and/or modify
//   it under the terms of the GNU General Public License as published by
//   the Free Software Foundation; version 3 of the License.
//
//   This program is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU General Public License for more details.
//
//   You should have received a copy of the GNU General Public License
//   along with this program; if not, write to the Free Software
//   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

/**
 * Localized data
 *
 * @author      Erwan Taloc <erwan.taloc@combodo.com>
 * @author      Romain Quetiez <romain.quetiez@combodo.com>
 * @author      Denis Flaven <denis.flaven@combodo.com>
 * @license     http://www.opensource.org/licenses/gpl-3.0.html LGPL
 */

// Dictionnay conventions
// Class:<class_name>
// Class:<class_name>+
// Class:<class_name>/Attribute:<attribute_code>
// Class:<class_name>/Attribute:<attribute_code>+
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>+
// Class:<class_name>/Stimulus:<stimulus_code>
// Class:<class_name>/Stimulus:<stimulus_code>+


//
// Class: Ticket
//

//
// Class: Ticket
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:Ticket' => 'Ticket',
	'Class:Ticket+' => '',
	'Class:Ticket/Attribute:ref' => 'Ref',
	'Class:Ticket/Attribute:ref+' => '',
	'Class:Ticket/Attribute:title' => 'Titolo',
	'Class:Ticket/Attribute:title+' => '',
	'Class:Ticket/Attribute:description' => 'Descrizione',
	'Class:Ticket/Attribute:description+' => '',
	'Class:Ticket/Attribute:ticket_log' => 'Log',
	'Class:Ticket/Attribute:ticket_log+' => '',
	'Class:Ticket/Attribute:start_date' => 'Inzio',
	'Class:Ticket/Attribute:start_date+' => '',
	'Class:Ticket/Attribute:document_list' => 'Documenti',
	'Class:Ticket/Attribute:document_list+' => 'Documenti relativi al ticket',
	'Class:Ticket/Attribute:ci_list' => 'CIs',
	'Class:Ticket/Attribute:ci_list+' => 'CIs coivolti dall\'incidente',
	'Class:Ticket/Attribute:contact_list' => 'Contatti',
	'Class:Ticket/Attribute:contact_list+' => 'Team e persone coinvolte',
	'Class:Ticket/Attribute:incident_list' => 'Incidenti Correlati',
	'Class:Ticket/Attribute:incident_list+' => '',
	'Class:Ticket/Attribute:finalclass' => 'Tipo',
	'Class:Ticket/Attribute:finalclass+' => '',
));


//
// Class: lnkTicketToDoc
//

Dict::Add('IT IT', 'Italian', 'Italian', array(
	'Class:lnkTicketToDoc' => 'Ticket/Documento',
	'Class:lnkTicketToDoc+' => '',
	'Class:lnkTicketToDoc/Attribute:ticket_id' => 'Ticket',
	'Class:lnkTicketToDoc/Attribute:ticket_id+' => '',
	'Class:lnkTicketToDoc/Attribute:ticket_ref' => 'Ticket #',
	'Class:lnkTicketToDoc/Attribute:ticket_ref+' => '',
	'Class:lnkTicketToDoc/Attribute:document_id' => 'Documento',
	'Class:lnkTicketToDoc/Attribute:document_id+' => '',
	'Class:lnkTicketToDoc/Attribute:document_name' => 'Documento',
	'Class:lnkTicketToDoc/Attribute:document_name+' => '',
));

//
// Class: lnkTicketToContact
//

Dict::Add('IT IT', 'Italian', 'Italian', array(
	'Class:lnkTicketToContact' => 'Ticket/Contatto',
	'Class:lnkTicketToContact+' => '',
	'Class:lnkTicketToContact/Attribute:ticket_id' => 'Ticket',
	'Class:lnkTicketToContact/Attribute:ticket_id+' => '',
	'Class:lnkTicketToContact/Attribute:ticket_ref' => 'Ticket #',
	'Class:lnkTicketToContact/Attribute:ticket_ref+' => '',
	'Class:lnkTicketToContact/Attribute:contact_id' => 'Contatto',
	'Class:lnkTicketToContact/Attribute:contact_id+' => '',
	'Class:lnkTicketToContact/Attribute:contact_name' => 'Contatto',
	'Class:lnkTicketToContact/Attribute:contact_name+' => '',
	'Class:lnkTicketToContact/Attribute:contact_email' => 'Email',
	'Class:lnkTicketToContact/Attribute:contact_email+' => '',
	'Class:lnkTicketToContact/Attribute:role' => 'Ruolo',
	'Class:lnkTicketToContact/Attribute:role+' => '',
));

//
// Class: lnkTicketToCI
//

Dict::Add('IT IT', 'Italian', 'Italian', array(
	'Class:lnkTicketToCI' => 'Ticket/CI',
	'Class:lnkTicketToCI+' => '',
	'Class:lnkTicketToCI/Attribute:ticket_id' => 'Ticket',
	'Class:lnkTicketToCI/Attribute:ticket_id+' => '',
	'Class:lnkTicketToCI/Attribute:ticket_ref' => 'Ticket #',
	'Class:lnkTicketToCI/Attribute:ticket_ref+' => '',
	'Class:lnkTicketToCI/Attribute:ci_id' => 'CI',
	'Class:lnkTicketToCI/Attribute:ci_id+' => '',
	'Class:lnkTicketToCI/Attribute:ci_name' => 'CI',
	'Class:lnkTicketToCI/Attribute:ci_name+' => '',
	'Class:lnkTicketToCI/Attribute:ci_status' => 'CI stato',
	'Class:lnkTicketToCI/Attribute:ci_status+' => '',
	'Class:lnkTicketToCI/Attribute:impact' => 'Impatto',
	'Class:lnkTicketToCI/Attribute:impact+' => '',
));


//
// Class: ResponseTicket
//

Dict::Add('IT IT', 'Italian', 'Italian', array(
	'Class:ResponseTicket' => 'Ticket di risposta',
	'Class:ResponseTicket+' => '',
	'Class:ResponseTicket/Attribute:status' => 'Stato',
	'Class:ResponseTicket/Attribute:status+' => '',
	'Class:ResponseTicket/Attribute:status/Value:new' => 'Nuovo',
	'Class:ResponseTicket/Attribute:status/Value:new+' => 'Recentemente aperto',
	'Class:ResponseTicket/Attribute:status/Value:escalated_tto' => 'Escalation/TTO',
	'Class:ResponseTicket/Attribute:status/Value:escalated_tto+' => '',
	'Class:ResponseTicket/Attribute:status/Value:assigned' => 'Assegnato',
	'Class:ResponseTicket/Attribute:status/Value:assigned+' => '',
	'Class:ResponseTicket/Attribute:status/Value:escalated_ttr' => 'Escalation/TTR',
	'Class:ResponseTicket/Attribute:status/Value:escalated_ttr+' => '',
	'Class:ResponseTicket/Attribute:status/Value:frozen' => 'In attesa',
	'Class:ResponseTicket/Attribute:status/Value:frozen+' => '',
	'Class:ResponseTicket/Attribute:status/Value:resolved' => 'Risolto',
	'Class:ResponseTicket/Attribute:status/Value:resolved+' => '',
	'Class:ResponseTicket/Attribute:status/Value:closed' => 'Chiuso',
	'Class:ResponseTicket/Attribute:status/Value:closed+' => '',
	'Class:ResponseTicket/Attribute:caller_id' => 'Visitatore',
	'Class:ResponseTicket/Attribute:caller_id+' => '',
	'Class:ResponseTicket/Attribute:caller_email' => 'Email',
	'Class:ResponseTicket/Attribute:caller_email+' => '',
	'Class:ResponseTicket/Attribute:org_id' => 'Cliente',
	'Class:ResponseTicket/Attribute:org_id+' => '',
	'Class:ResponseTicket/Attribute:org_name' => 'Cliente',
	'Class:ResponseTicket/Attribute:org_name+' => '',
	'Class:ResponseTicket/Attribute:service_id' => 'Servizio',
	'Class:ResponseTicket/Attribute:service_id+' => '',
	'Class:ResponseTicket/Attribute:service_name' => 'Nome',
	'Class:ResponseTicket/Attribute:service_name+' => '',
	'Class:ResponseTicket/Attribute:servicesubcategory_id' => 'Elemento di servizio',
	'Class:ResponseTicket/Attribute:servicesubcategory_id+' => '',
	'Class:ResponseTicket/Attribute:servicesubcategory_name' => 'Name',
	'Class:ResponseTicket/Attribute:servicesubcategory_name+' => '',
	'Class:ResponseTicket/Attribute:product' => 'Prodotto',
	'Class:ResponseTicket/Attribute:product+' => '',
	'Class:ResponseTicket/Attribute:impact' => 'Impatto',
	'Class:ResponseTicket/Attribute:impact+' => '',
	'Class:ResponseTicket/Attribute:impact/Value:1' => 'Un dipartimento',
	'Class:ResponseTicket/Attribute:impact/Value:1+' => '',
	'Class:ResponseTicket/Attribute:impact/Value:2' => 'Un servizio',
	'Class:ResponseTicket/Attribute:impact/Value:2+' => '',
	'Class:ResponseTicket/Attribute:impact/Value:3' => 'Una persona',
	'Class:ResponseTicket/Attribute:impact/Value:3+' => '',
	'Class:ResponseTicket/Attribute:urgency' => 'Urgenza',
	'Class:ResponseTicket/Attribute:urgency+' => '',
	'Class:ResponseTicket/Attribute:urgency/Value:1' => 'Alta',
	'Class:ResponseTicket/Attribute:urgency/Value:1+' => '',
	'Class:ResponseTicket/Attribute:urgency/Value:2' => 'Media',
	'Class:ResponseTicket/Attribute:urgency/Value:2+' => '',
	'Class:ResponseTicket/Attribute:urgency/Value:3' => 'Bassa',
	'Class:ResponseTicket/Attribute:urgency/Value:3+' => '',
	'Class:ResponseTicket/Attribute:priority' => 'Priorità',
	'Class:ResponseTicket/Attribute:priority+' => '',
	'Class:ResponseTicket/Attribute:priority/Value:1' => 'Alta',
	'Class:ResponseTicket/Attribute:priority/Value:1+' => '',
	'Class:ResponseTicket/Attribute:priority/Value:2' => 'Media',
	'Class:ResponseTicket/Attribute:priority/Value:2+' => '',
	'Class:ResponseTicket/Attribute:priority/Value:3' => 'Bassa',
	'Class:ResponseTicket/Attribute:priority/Value:3+' => '',
	'Class:ResponseTicket/Attribute:workgroup_id' => 'Gruppo di lavoro',
	'Class:ResponseTicket/Attribute:workgroup_id+' => '',
	'Class:ResponseTicket/Attribute:workgroup_name' => 'Workgroup',
	'Class:ResponseTicket/Attribute:workgroup_name+' => '',
	'Class:ResponseTicket/Attribute:agent_id' => 'Agente',
	'Class:ResponseTicket/Attribute:agent_id+' => '',
	'Class:ResponseTicket/Attribute:agent_name' => 'Agente',
	'Class:ResponseTicket/Attribute:agent_name+' => '',
	'Class:ResponseTicket/Attribute:agent_email' => 'Email dell\'agente',
	'Class:ResponseTicket/Attribute:agent_email+' => '',
	'Class:ResponseTicket/Attribute:related_problem_id' => 'Problemi correlati',
	'Class:ResponseTicket/Attribute:related_problem_id+' => '',
	'Class:ResponseTicket/Attribute:related_problem_ref' => 'Ref',
	'Class:ResponseTicket/Attribute:related_problem_ref+' => '',
	'Class:ResponseTicket/Attribute:related_change_id' => 'Cambi correlati',
	'Class:ResponseTicket/Attribute:related_change_id+' => '',
	'Class:ResponseTicket/Attribute:related_change_ref' => 'Cambi correlati',
	'Class:ResponseTicket/Attribute:related_change_ref+' => '',
	'Class:ResponseTicket/Attribute:close_date' => 'Chiuso',
	'Class:ResponseTicket/Attribute:close_date+' => '',
	'Class:ResponseTicket/Attribute:last_update' => 'Ultimo aggiornamento',
	'Class:ResponseTicket/Attribute:last_update+' => '',
	'Class:ResponseTicket/Attribute:assignment_date' => 'Data di Assegnazione ',
	'Class:ResponseTicket/Attribute:assignment_date+' => '',
	'Class:ResponseTicket/Attribute:resolution_date' => 'Data di risoluzione',
	'Class:ResponseTicket/Attribute:resolution_date+' => '',
	'Class:ResponseTicket/Attribute:tto_escalation_deadline' => 'TTO Scadenza di Escalation',
	'Class:ResponseTicket/Attribute:tto_escalation_deadline+' => '',
	'Class:ResponseTicket/Attribute:ttr_escalation_deadline' => 'TTR Scadenza di Escalation',
	'Class:ResponseTicket/Attribute:ttr_escalation_deadline+' => '',
	'Class:ResponseTicket/Attribute:closure_deadline' => 'Termine di chiusura',
	'Class:ResponseTicket/Attribute:closure_deadline+' => '',
	'Class:ResponseTicket/Attribute:resolution_code' => 'Codice di risoluzione',
	'Class:ResponseTicket/Attribute:resolution_code+' => '',
	'Class:ResponseTicket/Attribute:resolution_code/Value:couldnotreproduce' => 'Non puo\' essere riprodotto',
	'Class:ResponseTicket/Attribute:resolution_code/Value:couldnotreproduce+' => '',
	'Class:ResponseTicket/Attribute:resolution_code/Value:duplicate' => 'Ticket duplicato',
	'Class:ResponseTicket/Attribute:resolution_code/Value:duplicate+' => '',
	'Class:ResponseTicket/Attribute:resolution_code/Value:fixed' => 'Fissato',
	'Class:ResponseTicket/Attribute:resolution_code/Value:fixed+' => '',
	'Class:ResponseTicket/Attribute:resolution_code/Value:irrelevant' => 'Irrilevante',
	'Class:ResponseTicket/Attribute:resolution_code/Value:irrelevant+' => '',
	'Class:ResponseTicket/Attribute:solution' => 'Soluzione',
	'Class:ResponseTicket/Attribute:solution+' => '',
	'Class:ResponseTicket/Attribute:user_satisfaction' => 'Soddisfazione dell\'utente',
	'Class:ResponseTicket/Attribute:user_satisfaction+' => '',
	'Class:ResponseTicket/Attribute:user_satisfaction/Value:1' => 'Molto soddisfatto',
	'Class:ResponseTicket/Attribute:user_satisfaction/Value:1+' => 'Molto soddisfatto',
	'Class:ResponseTicket/Attribute:user_satisfaction/Value:2' => 'Abbastanza soddisfatto',
	'Class:ResponseTicket/Attribute:user_satisfaction/Value:2+' => 'Abbastanza soddisfatto',
	'Class:ResponseTicket/Attribute:user_satisfaction/Value:3' => 'Piuttosto insoddisfatto',
	'Class:ResponseTicket/Attribute:user_satisfaction/Value:3+' => 'Piuttosto insoddisfatto',
	'Class:ResponseTicket/Attribute:user_satisfaction/Value:4' => 'Molto insoddisfatto',
	'Class:ResponseTicket/Attribute:user_satisfaction/Value:4+' => 'Molto insoddisfatto',
	'Class:ResponseTicket/Attribute:user_commment' => 'Commento dell\'utente',
	'Class:ResponseTicket/Attribute:user_commment+' => '',
	'Class:ResponseTicket/Stimulus:ev_assign' => 'Assegna',
	'Class:ResponseTicket/Stimulus:ev_assign+' => '',
	'Class:ResponseTicket/Stimulus:ev_reassign' => 'Riassegna',
	'Class:ResponseTicket/Stimulus:ev_reassign+' => '',
	'Class:ResponseTicket/Stimulus:ev_timeout' => 'Escalation',
	'Class:ResponseTicket/Stimulus:ev_timeout+' => '',
	'Class:ResponseTicket/Stimulus:ev_resolve' => 'Segna come risolto',
	'Class:ResponseTicket/Stimulus:ev_resolve+' => '',
	'Class:ResponseTicket/Stimulus:ev_close' => 'Chiudi',
	'Class:ResponseTicket/Stimulus:ev_close+' => '',
));




?>
