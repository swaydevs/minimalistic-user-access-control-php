<?php

class AccessControl {
  // Set of all possible roles
  private $roles = array('admin', 'moderator', 'user');

  // Set of actions that each role is allowed to perform
  private $rolePermissions = array(
    'admin' => array('create', 'read', 'update', 'delete'),
    'moderator' => array('read', 'update'),
    'user' => array('read')
  );

  // Check if a given role is allowed to perform a given action
  public function checkPermission($role, $action) {
    if (!in_array($role, $this->roles)) {
      throw new Exception("Invalid role");
    }

    if (!in_array($action, $this->rolePermissions[$role])) {
      throw new Exception("Role not allowed to perform action");
    }

    return true;
  }
}

?>
